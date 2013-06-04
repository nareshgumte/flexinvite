<?php
/* @var $this FriendsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sp Friends',
);

$this->menu=array(
	array('label'=>'Create SpFriends', 'url'=>array('create')),
	array('label'=>'Manage SpFriends', 'url'=>array('admin')),
);
?>

<h1>Sp Friends</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
