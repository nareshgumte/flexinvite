<?php
/* @var $this EventsController */
/* @var $model SpEvents */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'sp-events-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true
        ),
        'htmlOptions'=> array(
            'enctype' => 'multipart/form-data'       
        ),
            ));
    ?>

    <p class="note">
        Fields with <span class="required">*</span> are required.
    </p>

    <?php //echo $form->errorSummary($model);  ?>



    <div class="control-group">
        <?php echo $form->labelEx($model, 'event_name', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'event_name', array('class' => 'input-xlarge')); ?>
            <?php echo $form->error($model, 'event_name'); ?>
        </div>    
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'event_desc', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textArea($model, 'event_desc', array('rows' => 4, 'cols' => 19)); ?>
            <?php echo $form->error($model, 'event_desc'); ?>
        </div>    
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'event_shortdesc', array('class' => 'control-label')); ?>
        <div class="controls">
        <?php echo $form->textField($model, 'event_shortdesc', array('class' => 'input-xlarge')); ?>
        <?php echo $form->error($model, 'event_shortdesc'); ?>
        </div>    
    </div>

   <div class="control-group">
        <?php echo $form->labelEx($model, 'event_venue', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'event_venue', array('class' => 'input-xlarge')); ?>
            <?php echo $form->error($model, 'event_venue'); ?>
        </div>    
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'event_image', array('class' => 'control-label')); ?>
         <div class="controls">
            <?php echo $form->fileField($model, 'event_image', array('class' => 'input-xlarge')); ?>
            <?php echo $form->error($model, 'event_image'); ?>
         </div>    
    </div>
    <?php
    if (isset($model->event_image)) {
        echo CHtml::image(Yii::app()->request->baseUrl . '/images/eventImages/' . $model->event_image, '', array('height' => '50', 'width' => '50'));
    }
    ?>
    <!--<div class="row buttons">-->
    <div class=" control-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>
<!-- form -->
