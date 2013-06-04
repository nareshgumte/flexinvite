<?php
/* @var $this FriendsController */
/* @var $model SpFriends */

$this->breadcrumbs=array(
	'Sp Friends'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SpFriends', 'url'=>array('index')),
	array('label'=>'Manage SpFriends', 'url'=>array('admin')),
);
?>

<h1>Create SpFriends</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>