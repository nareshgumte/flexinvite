<?php
/* @var $this GroupMembersController */
/* @var $model GroupMembers */

$this->breadcrumbs=array(
	' Group Members'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GroupMembers', 'url'=>array('index')),
	array('label'=>'Create GroupMembers', 'url'=>array('create')),
	array('label'=>'View GroupMembers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GroupMembers', 'url'=>array('admin')),
);
?>

<h1>Update GroupMembers <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>