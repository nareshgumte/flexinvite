<?php
/* @var $this SpGroupsController */
/* @var $model SpGroups */

$this->breadcrumbs=array(
	'Sp Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SpGroups', 'url'=>array('index')),
	array('label'=>'Manage SpGroups', 'url'=>array('admin')),
);
?>

<h1>Create Group</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>