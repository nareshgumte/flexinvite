<?php
/* @var $this InvitationHistoryController */
/* @var $model InvitationHistory */

$this->breadcrumbs=array(
	'Invitation Histories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InvitationHistory', 'url'=>array('index')),
	array('label'=>'Create InvitationHistory', 'url'=>array('create')),
	array('label'=>'View InvitationHistory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InvitationHistory', 'url'=>array('admin')),
);
?>

<h1>Update InvitationHistory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>