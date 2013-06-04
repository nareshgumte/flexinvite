<?php
/* @var $this CredentialsController */
/* @var $model SpCredentials */

$this->breadcrumbs=array(
	'Sp Credentials'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SpCredentials', 'url'=>array('index')),
	array('label'=>'Create SpCredentials', 'url'=>array('create')),
	array('label'=>'View SpCredentials', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SpCredentials', 'url'=>array('admin')),
);
?>

<h1>Update SpCredentials <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>