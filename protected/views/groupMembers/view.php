<?php
/* @var $this SpGroupMembersController */
/* @var $model SpGroupMembers */

$this->breadcrumbs=array(
	'Group Members'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GroupMembers', 'url'=>array('index')),
	array('label'=>'Create GroupMembers', 'url'=>array('create')),
	array('label'=>'Update GroupMembers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GroupMembers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GroupMembers', 'url'=>array('admin')),
);
?>

<h1>View GroupMembers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'group_id',
		'group_member_id',
	),
)); ?>
