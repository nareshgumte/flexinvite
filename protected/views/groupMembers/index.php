<?php
/* @var $this SpGroupMembersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sp Group Members',
);

$this->menu=array(
	array('label'=>'Create SpGroupMembers', 'url'=>array('create')),
	array('label'=>'Manage SpGroupMembers', 'url'=>array('admin')),
);
?>

<h1>Sp Group Members</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
