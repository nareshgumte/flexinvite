<?php
/* @var $this CredentialsController */
/* @var $model SpCredentials */

$this->breadcrumbs=array(
	'Sp Credentials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SpCredentials', 'url'=>array('index')),
	array('label'=>'Manage SpCredentials', 'url'=>array('admin')),
);
?>

<h1>Create SpCredentials</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>