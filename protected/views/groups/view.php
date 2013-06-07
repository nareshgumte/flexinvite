<?php
/* @var $this SpGroupsController */
/* @var $model SpGroups */

$this->breadcrumbs=array(
	'Sp Groups'=>array('index'),
	$model->group_id,
);

$this->menu=array(
	array('label'=>'List SpGroups', 'url'=>array('index')),
	array('label'=>'Create SpGroups', 'url'=>array('create')),
	array('label'=>'Update SpGroups', 'url'=>array('update', 'id'=>$model->group_id)),
	array('label'=>'Delete SpGroups', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->group_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpGroups', 'url'=>array('admin')),
);
?>

<h1>View SpGroups #<?php echo $model->group_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'group_id',
		'user_id',
		'group_name',
	),
)); ?>
