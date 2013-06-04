<?php
/* @var $this UsersController */
/* @var $model SpUsers */

$this->breadcrumbs=array(
	'Registration',
);
if(!Yii::app()->user->isGuest){
	$this->menu=array(
		array('label'=>'List SpUsers', 'url'=>array('index')),
		array('label'=>'Manage SpUsers', 'url'=>array('admin')),
	);
}
?>

<h1>Registration</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>