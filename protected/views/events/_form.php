<?php
/* @var $this EventsController */
/* @var $model SpEvents */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sp-events-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'event_name'); ?>
		<?php echo $form->textField($model,'event_name',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'event_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'event_desc'); ?>
		<?php echo $form->textArea($model,'event_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'event_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'event_shortdesc'); ?>
		<?php echo $form->textField($model,'event_shortdesc',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'event_shortdesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'event_venue'); ?>
		<?php echo $form->textField($model,'event_venue',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'event_venue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'event_image'); ?>
		<?php echo $form->textField($model,'event_image',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'event_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'event_status'); ?>
		<?php echo $form->textField($model,'event_status'); ?>
		<?php echo $form->error($model,'event_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->