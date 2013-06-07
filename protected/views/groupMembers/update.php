<?php
/* @var $this SpGroupMembersController */
/* @var $model SpGroupMembers */

$this->breadcrumbs=array(
	'Sp Group Members'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SpGroupMembers', 'url'=>array('index')),
	array('label'=>'Create SpGroupMembers', 'url'=>array('create')),
	array('label'=>'View SpGroupMembers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SpGroupMembers', 'url'=>array('admin')),
);
?>

<h1>Update SpGroupMembers <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>