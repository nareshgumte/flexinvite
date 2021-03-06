<?php

class EventsController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/main';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'create', 'update', 'admin', 'delete', 'invitefriends'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id)
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new SpEvents;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['SpEvents'])) {
            $model->attributes = $_POST['SpEvents'];
            $model->user_id = Yii::app()->user->user_id;
            $model->event_status = 1;
            if (isset($_POST['SpEvents']['event_image'])) {
                $file = CUploadedFile::getInstance($model, 'event_image');
                if ($file) {
                    $fileName = Yii::app()->user->id . mt_rand(1, 9999) . ".jpg"; // random number + file name
                    $file->saveAs(Yii::app()->basePath . '/../images/eventImages/' . $fileName);
                    $model->event_image = $fileName;
                }
            }
            if ($model->save()) {
                //$this->redirect(array('view','id'=>$model->event_id));
                //$this->redirect(array('admin', 'id' => $model->event_id));
                Yii::app()->user->setFlash('success', 'Successfully created event');
                $this->redirect(array('events/'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['SpEvents'])) {
            $model->attributes = $_POST['SpEvents'];

            $model->event_status = 1;

            $file = CUploadedFile::getInstance($model, 'event_image');
            if ($file) {
                $fileName = Yii::app()->user->id . mt_rand(1, 9999) . ".jpg"; // random number + file name
                $file->saveAs(Yii::app()->basePath . '/../images/eventImages/' . $fileName);
                $model->event_image = $fileName;
            }

            if ($model->save()) {
                //$this->redirect(array('view', 'id' => $model->event_id));
                Yii::app()->user->setFlash('success', 'Successfully updated event');
                $this->redirect(array('events/'));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax'])) {
            //$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('events/'));
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {

        $criteria = new CDbCriteria();
        //get the events



        if (isset($_GET['q'])) {
            $q = $_GET['q'];
            $criteria->addSearchCondition('event_name', $q, true);
        }
        if (!Yii::app()->user->isAdmin) {
            $user_id = Yii::app()->user->user_id;
            $criteria->addSearchCondition('user_id', $user_id, true);
        }
        $criteria->order = "event_date_time ASC";
        //$model = IpLogin::model()->findAll($criteria);
        $dataProvider = new CActiveDataProvider('SpEvents', array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 5,
            ),
        ));

        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new SpEvents('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['SpEvents']))
            $model->attributes = $_GET['SpEvents'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return SpEvents the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = SpEvents::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param SpEvents $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'sp-events-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * Invite Friendss for an event 
     * @param integer $id Event id
     * @throws CHttpException
     */
    public function actioninviteFriends($id) {
        $flag = false;
        $user_id = Yii::app()->user->user_id;
        //get Event Details
        $criteria4 = new CDbCriteria();
        $criteria4->compare('event_id', $id);
        $eventDetails = SpEvents::model()->findAll($criteria4);
        if (is_null($eventDetails)) {
            throw new CHttpException(401);
        }
        $friends = new SpFriends();
        $criteria = new CDbCriteria;
        $criteria->compare('user_id', $user_id);
        if (isset($_GET['q'])) {
            $q = $_GET['q'];
            $criteria->addSearchCondition('firstname', $q, true);
            $criteria->addSearchCondition('lastname', $q, true, 'OR');
            $criteria->addSearchCondition('email', $q, true, 'OR');
            $criteria->addSearchCondition('phone', $q, true, 'OR');
        }

        $criteria2 = new CDbCriteria();
        $criteria2->compare('user_id', $user_id);
        $groups = SpGroups::model()->findAll($criteria2);
        if (isset($_POST['sendInvite']) && $_POST['sendInvite'] = "sendInvite") {
            $group_id = $_POST['group_id'];
            //get the group members
            $criteria3 = new CDbCriteria();
            $criteria3->compare('group_id', $group_id);
            $groupMembers = SpGroupMembers::model()->findAll($criteria3);
            $sms = new Way2Sms();
            $username = Commons::getCredentials('username', 1);
            $password = Commons::getCredentials('password', 1);
            $result = $sms->login($username, $password);
            foreach ($groupMembers as $key => $value) {
                if (isset($_POST['send_sms'])) {
                    //send messages to those friends who have mobiles 
                    $phone = $friends->getInfo($value->group_member_id, 'phone');
                    $message = $eventDetails[0]->event_shortdesc;
                    $receiver = Commons::parseName($phone, true);
                    if ($result) {
                        $smsStatus = $sms->send($receiver, $message);
                        if ($smsStatus) {
                            $flag = true;
                        } else {
                            $flag = false;
                        }
                    } else {
                        Yii::app()->user->setFlash('error', 'Invali Credentials');
                    }
                    // $send = Commons::sendSms($phone, $message);
//                    if ($send) {
//                        $flag = true;
//                    }
                }
                if (isset($_POST['send_email'])) {
                    //send mail along with attachment
                    $to = $friends->getInfo($value->group_member_id, 'email');
                    $subject = "You have Invited to " . $eventDetails[0]->event_name;
                    $body = $eventDetails[0]->event_desc;
                    $from = Yii::app()->params['adminEmail'];
                    //$attachment=  array(Yii::app()->basePath."/../images/eventImages/admin4691.jpg");
                    if (Commons::sendMail($to, $subject, $body, $from)) {
                        $flag = true;
                    }
                }
            }
            $sms->logout();
            if ($flag) {
                $invitationHistory = new InvitationHistory();
                $invitationHistory->event_id = $id;
                $invitationHistory->group_id = $group_id;
                $invitationHistory->user_id = Yii::app()->user->user_id;
                $invitationHistory->save(false);
                Yii::app()->user->setFlash('success', 'Successfully Invited');
            }
        }

        $this->render("friends_list", array('select' => $groups));
    }

}
