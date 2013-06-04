<?php
/* @var $this UsersController */
/* @var $model SpUsers */

$this->breadcrumbs=array(
	'Sp Users'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List SpUsers', 'url'=>array('index')),
	array('label'=>'Create SpUsers', 'url'=>array('create')),
	array('label'=>'Update SpUsers', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete SpUsers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpUsers', 'url'=>array('admin')),
);
?>

<h1>View SpUsers #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'username',
		'password',
		'firstname',
		'lastname',
		'email',
		'phone',
		'cdate',
		'status',
	),
)); ?>
