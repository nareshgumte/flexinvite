<?php
/* @var $this UsersController */
/* @var $model SpUsers */


if (!Yii::app()->user->isGuest) {
    $labels = "Create User";
    $this->menu = array(
        array('label' => 'List Of Users', 'url' => array('users/index')),
        array('label' => 'Create Users', 'url' => array('users/create')),
        array('label' => 'Manage Users', 'url' => array('users/admin')),
    );
} else {
    $labels = "Registration";
    $this->menu = array(
        array('label' => 'Flex Invite'),
    );
}
$this->breadcrumbs = array(
    $labels,
);
?>
<h1><?php echo $labels; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>