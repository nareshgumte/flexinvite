<?php
/* @var $this SpGroupsController */
/* @var $model SpGroups */

$this->breadcrumbs=array(
	'Sp Groups'=>array('index'),
	$model->group_id=>array('view','id'=>$model->group_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SpGroups', 'url'=>array('index')),
	array('label'=>'Create SpGroups', 'url'=>array('create')),
	array('label'=>'View SpGroups', 'url'=>array('view', 'id'=>$model->group_id)),
	array('label'=>'Manage SpGroups', 'url'=>array('admin')),
);
?>

<h1>Update SpGroups <?php echo $model->group_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>