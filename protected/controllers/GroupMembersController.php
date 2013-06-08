<?php

class GroupMembersController extends Controller {

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
//            'postOnly + delete', // we only allow deletion via POST request
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
//				'actions'=>array('index','view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
//				'actions'=>array('create','update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
//				'actions'=>array('admin','delete'),
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
        $user_id = Yii::app()->user->user_id;
        $criteria = new CDbCriteria;
        $criteria->compare('user_id', $user_id);
        if (isset($_GET['q'])) {
            $q = $_GET['q'];
            $criteria->addSearchCondition('firstname', $q, true);
            $criteria->addSearchCondition('lastname', $q, true, 'OR');
            $criteria->addSearchCondition('email', $q, true, 'OR');
            $criteria->addSearchCondition('phone', $q, true, 'OR');
        }
        $dataProvider = new CActiveDataProvider('SpFriends', array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));
        //// get the group names
        $criteria2 = new CDbCriteria();
        $criteria2->compare('user_id', $user_id);
        $groups = SpGroups::model()->findAll($criteria2);


        if (isset($_POST['yt0'])) {
            $model1 = new SpGroups;
            $res = $model1->insertMembers($_POST['cbox'], $_POST['group_name']);
            if ($res) {
                Yii::app()->user->setFlash('success', 'Successfully added to group');
                // $this->redirect(array('admin'));
            }
        }
        $this->render("friends_list", array('dataProvider' => $dataProvider, 'select' => $groups));
       
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

        if (isset($_POST['SpGroupMembers'])) {
            $model->attributes = $_POST['SpGroupMembers'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
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
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionDeleteFriend($id) {


        $criteria = new CDbCriteria();
        $criteria->compare('id', $id);
        $model = SpGroupMembers::model()->find($criteria);
        if ($model->delete()) {
            Yii::app()->user->setFlash('success', 'Removed From Group Successfully');
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $user_id = Yii::app()->user->user_id;
        $criteria2 = new CDbCriteria();
        $criteria2->compare('user_id', $user_id);
        $groups = SpGroups::model()->findAll($criteria2);
        $dataProvider = new CActiveDataProvider('SpGroupMembers');
        if (isset($_POST['selectGroup'])) {
            if (empty($_POST['group_id'])) {
                Yii::app()->user->setFlash('error', 'Please Select Group to Get Members.');
            }
            $criteria = new CDbCriteria();
            $criteria->compare('group_id', $_POST['group_id']);
            $criteria->order = 'id ASC';
            $dataProvider = new CActiveDataProvider('SpGroupMembers', array('criteria' => $criteria));
        }

        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'groups' => $groups
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        
        $model = new SpGroupMembers('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['SpGroupMembers']))
            $model->attributes = $_GET['SpGroupMembers'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = SpGroupMembers::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'sp-group-members-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
