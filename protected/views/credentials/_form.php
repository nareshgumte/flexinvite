<?php
/* @var $this CredentialsController */
/* @var $model SpCredentials */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'sp-credentials-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true
        )
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php //echo $form->errorSummary($model); ?>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'username' , array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'username', array('class' => 'input-xlarge')); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>    
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'password', array('class' => 'control-label')); ?>
        <div class="controls">
        <?php echo $form->passwordField($model, 'password', array('class' => 'input-xlarge')); ?>
        <?php echo $form->error($model, 'password'); ?>
        </div>    
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'type', array('class' => 'control-label')); ?>
        <div class="controls">
        <?php echo $form->dropDownList($model, 'type', $item, array('prompt' => 'Select Provider')); ?>
        <?php echo $form->error($model, 'type'); ?>
        </div>    
    </div>

    <div class="control-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=> 'btn')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->