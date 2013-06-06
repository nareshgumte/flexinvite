<?php
/* @var $this UsersController */
/* @var $model SpUsers */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'sp-users-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
        'clientOptions' => array(
                'validateOnSubmit' => true
            ),
        
    ));
    ?>

    <p class="note">
        Fields with <span class="required">*</span> are required.
    </p>

    <?php //echo $form->errorSummary($model);  ?>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'username', array('class' => 'control-label')); ?>
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
        <?php echo $form->labelEx($model, 'firstname', array('class' => 'control-label')); ?>
       <div class="controls">
        <?php echo $form->textField($model, 'firstname', array('class' => 'input-xlarge')); ?>
        <?php echo $form->error($model, 'firstname'); ?>
       </div>    
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'lastname', array('class' => 'control-label')); ?>
        <div class="controls">
        <?php echo $form->textField($model, 'lastname', array('class' => 'input-xlarge')); ?>
        <?php echo $form->error($model, 'lastname'); ?>
        </div>    
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'email', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'email', array('class' => 'input-xlarge')); ?>
        <?php echo $form->error($model, 'email'); ?>
        </div>    
    </div>

     <div class="control-group">
        <?php echo $form->labelEx($model, 'phone', array('class' => 'control-label')); ?>
         <div class="controls">
        <?php
        $this->widget('CMaskedTextField', array(
            'model' => $model,
            'attribute' => 'phone',
            'name' => 'phone',
            'id' => 'phone',
            'mask' => '+99-999-999-9999',
            'htmlOptions'=>array('class'=>'input-xlarge')
        ));
        ?>


        <?php echo $form->error($model, 'phone'); ?>
        </div> 
    </div>
    <div class="hint">Ex:+91-XXX-XXX-XXXX</div>
     <div class="control-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>
<!-- form -->
