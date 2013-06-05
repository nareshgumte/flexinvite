<?php
/* @var $this EventsController */
/* @var $model SpEvents */

$this->breadcrumbs=array(
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List SpEvents', 'url'=>array('index')),
	array('label'=>'Manage SpEvents', 'url'=>array('admin')),
);*/ 
?>

<h1>Create An Event</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>