<?php
/* @var $this FriendsController */
/* @var $model SpFriends */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'sp-friends-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true
        ),
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php //echo $form->errorSummary($model);  ?>

 
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
            <?php echo $form->textField($model, 'email',array('class' => 'input-xlarge')); ?>
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
        <?php echo $form->error($model, 'phone',array('class'=>'input-xlarge')); ?>
        </div>     
    </div>
    <div class="hint">Ex:+91-XXX-XXX-XXXX</div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'whois', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'whois',array('class' => 'input-xlarge')); ?>
            <?php echo $form->error($model, 'whois'); ?>
        </div>    
    </div>

    <div class="control-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Add' : 'Save',array('class' => 'btn')); ?>
    </div>

    <div class="control-group">
        <?php echo CHtml::link('Import Contacts', $this->createUrl('friends/importContacts'), array('class' => 'link')) ?>
    </div>    

    <?php $this->endWidget(); ?>

</div><!-- form -->