<?php
/* @var $this UsersController */
/* @var $model SpUsers */

$this->breadcrumbs=array(
	'Sp Users'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SpUsers', 'url'=>array('index')),
	array('label'=>'Create SpUsers', 'url'=>array('create')),
	array('label'=>'View SpUsers', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage SpUsers', 'url'=>array('admin')),
);
?>

<h1>Update SpUsers <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>