<?php
/* @var $this SpGroupsController */
/* @var $model SpGroups */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sp-groups-form',
	'enableAjaxValidation'=>false,
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true
        )
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<?php //echo $form->errorSummary($model); ?>

	
	<div class="control-group">
		<?php echo $form->labelEx($model,'group_name',array('class' => 'control-label')); ?>
            <div class="controls">
		<?php echo $form->textField($model,'group_name', array('class' => 'input-xlarge')); ?>
		<?php echo $form->error($model,'group_name'); ?>
            </div>    
	</div>

	<div class="control-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->