<?php
/* @var $this SpGroupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sp Groups',
);

$this->menu=array(
	array('label'=>'Create SpGroups', 'url'=>array('create')),
	array('label'=>'Manage SpGroups', 'url'=>array('admin')),
);
?>

<h1>Sp Groups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
