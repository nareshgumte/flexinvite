<?php
/* @var $this EventsController */
/* @var $model SpEvents */

$this->breadcrumbs=array(
	'Sp Events'=>array('index'),
	$model->event_id,
);

$this->menu=array(
	array('label'=>'List SpEvents', 'url'=>array('index')),
	array('label'=>'Create SpEvents', 'url'=>array('create')),
	array('label'=>'Update SpEvents', 'url'=>array('update', 'id'=>$model->event_id)),
	array('label'=>'Delete SpEvents', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->event_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpEvents', 'url'=>array('admin')),
);
?>

<h1>View SpEvents #<?php echo $model->event_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'event_id',
		'user_id',
		'event_name',
		'event_desc',
		'event_shortdesc',
		'event_venue',
		'event_image',
		'event_status',
	),
)); ?>
