<?php
/* @var $this FriendsController */
/* @var $model SpFriends */

$this->breadcrumbs=array(
	'friends'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SpFriends', 'url'=>array('index')),
	array('label'=>'Create SpFriends', 'url'=>array('create')),
	array('label'=>'Update SpFriends', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SpFriends', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpFriends', 'url'=>array('admin')),
);
?>

<h1>View SpFriends #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'firstname',
		'lastname',
		'email',
		'phone',
		'whois',
	),
)); ?>
