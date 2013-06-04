<?php
/* @var $this CredentialsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sp Credentials',
);

$this->menu=array(
	array('label'=>'Create SpCredentials', 'url'=>array('create')),
	array('label'=>'Manage SpCredentials', 'url'=>array('admin')),
);
?>

<h1>Sp Credentials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
