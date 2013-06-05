<?php
/* @var $this EventsController */
/* @var $model SpEvents */

$this->breadcrumbs=array(
	'Sp Events'=>array('index'),
	/*$model->event_id=>array('view','id'=>$model->event_id),*/
	'Update',
);

$this->menu=array(
	array('label'=>'List SpEvents', 'url'=>array('index')),
	array('label'=>'Create SpEvents', 'url'=>array('create')),
	array('label'=>'View SpEvents', 'url'=>array('view', 'id'=>$model->event_id)),
	array('label'=>'Manage SpEvents', 'url'=>array('admin')),
);
?>

<h1>Update Event <?php echo $model->event_name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>