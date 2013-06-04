<?php
/* @var $this FriendsController */
/* @var $model SpFriends */

$this->breadcrumbs=array(
	'Sp Friends'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SpFriends', 'url'=>array('index')),
	array('label'=>'Create SpFriends', 'url'=>array('create')),
	array('label'=>'View SpFriends', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SpFriends', 'url'=>array('admin')),
);
?>

<h1>Update SpFriends <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>