<?php
/* @var $this EventsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sp Events',
);

$this->menu=array(
	array('label'=>'Create SpEvents', 'url'=>array('create')),
	array('label'=>'Manage SpEvents', 'url'=>array('admin')),
);
?>

<h1>Sp Events</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
