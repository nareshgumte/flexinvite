<?php
/* @var $this SpGroupMembersController */
/* @var $model SpGroupMembers */

$this->breadcrumbs=array(
	'Sp Group Members'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SpGroupMembers', 'url'=>array('index')),
	array('label'=>'Create SpGroupMembers', 'url'=>array('create')),
	array('label'=>'Update SpGroupMembers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SpGroupMembers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpGroupMembers', 'url'=>array('admin')),
);
?>

<h1>View SpGroupMembers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'group_id',
		'group_member_id',
	),
)); ?>
