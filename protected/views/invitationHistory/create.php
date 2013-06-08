<?php
/* @var $this InvitationHistoryController */
/* @var $model InvitationHistory */

$this->breadcrumbs=array(
	'Invitation Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InvitationHistory', 'url'=>array('index')),
	array('label'=>'Manage InvitationHistory', 'url'=>array('admin')),
);
?>

<h1>Create InvitationHistory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>