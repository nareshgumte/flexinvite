<?php

class FriendsController extends Controller {

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
            //'postOnly + delete', // we only allow deletion via POST request
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
                'actions' => array('view','delete'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index','create', 'update', 'admin', 'delete', 'importContacts'),
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
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new SpFriends;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['SpFriends'])) {
            $model->attributes = $_POST['SpFriends'];
            $model->user_id = Yii::app()->user->user_id;
            if ($model->save()) {
                /* $this->redirect(array('view','id'=>$model->id)); */
                Yii::app()->user->setFlash('success', 'Successfully added new friend');
                $this->redirect(array('friends/'));
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

        if (isset($_POST['SpFriends'])) {
            $model->attributes = $_POST['SpFriends'];
            if ($model->save()){
                //$this->redirect(array('view', 'id' => $model->id));
                Yii::app()->user->setFlash('success', 'Successfully updated');
                $this->redirect(array('friends/'));
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
        if (!isset($_GET['ajax'])){
            //$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('friends/'));
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
            $criteria->addSearchCondition('firstname', $q, true,'OR');
            //$criteria->addSearchCondition('lastname', $q, true);
            $criteria->addSearchCondition('lastname', $q, true,'OR');
            $criteria->addSearchCondition('whois', $q, true,'OR');
        }
        if(!Yii::app()->user->isAdmin){
            $user_id = Yii::app()->user->user_id;
            $criteria->addSearchCondition('user_id', $user_id, true);
        }    
        $criteria->order = "id ASC";
        
        //$model = IpLogin::model()->findAll($criteria);
        $dataProvider = new CActiveDataProvider('SpFriends', array(
                    'criteria' => $criteria,
                    'pagination' => array(
                        'pageSize' => 10,
                    ),
                ));
        
        
        //$dataProvider = new CActiveDataProvider('SpFriends');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new SpFriends('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['SpFriends']))
            $model->attributes = $_GET['SpFriends'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return SpFriends the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = SpFriends::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param SpFriends $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'sp-friends-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionimportContacts() {
        $model = new OpenInviterForm();
        $ers = array();
        $oks = array();
        $import_ok = false;
        $done = false;
        
        
        if (isset($_POST['OpenInviterForm'])) {
            $inviter = new openinviter();
            $oi_services = $inviter->getPlugins();
 
            $provider = $inviter->getPluginByDomain($_POST['OpenInviterForm']['email']);
            
            if (!empty($provider)) {
                if (isset($oi_services['email'][$provider]))
                    $plugType = 'email';
                elseif (isset($oi_services['social'][$provider]))
                    $plugType = 'social';
                else
                    $plugType = '';
            }
            else
                echo "Email missing !";
            
            
             if (empty($_POST['OpenInviterForm']['password']))
                   echo "Password missing !";
             if (count($ers) == 0) {
                    $inviter->startPlugin($provider);
                    $internal = $inviter->getInternalError();
        
                    $contacts = $inviter->getMyContacts();
                    if ($internal)
                        echo $internal;
                    elseif (!$inviter->login($_POST['OpenInviterForm']['email'], $_POST['OpenInviterForm']['password'])) {
                        $internal = $inviter->getInternalError();
                        $msg = $internal ? $internal : "Login failed. Please check the email and password you have provided and try again later !";
                        Yii::app()->user->setFlash('error', $msg); 
                    } elseif (false === $contacts = $inviter->getMyContacts()){
                        $msg =  "Unable to get contacts !";
                        Yii::app()->user->setFlash('error', $msg); 
                    }
                    else {
                        $import_ok = true;
                        $step = 'send_invites';
                        $_POST['oi_session_id'] = $inviter->plugin->getSessionID();
                        
                    }
              } /// end of count
              
              if (!empty($contacts)) {
                   $model1 = new SpFriends;
                   $res =  $model1->insertFriends($contacts,$provider);
                   if($res){
                       Yii::app()->user->setFlash('success', 'Successfully inserted all contacts'); 
                       $this->redirect(array('admin'));
                   }
              }
        } /// end of post method

        $this->render('importContacts', array(
            'model' => $model,
        ));
        
         
    }

}
