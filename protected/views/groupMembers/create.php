<?php
/* @var $this SpGroupMembersController */
/* @var $model SpGroupMembers */

$this->breadcrumbs=array(
	'Sp Group Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SpGroupMembers', 'url'=>array('index')),
	array('label'=>'Manage SpGroupMembers', 'url'=>array('admin')),
);
?>

<h1>Create SpGroupMembers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>