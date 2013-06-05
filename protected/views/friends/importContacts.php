<?php
/* @var $this FriendsController */
/* @var $model SpFriends */
/* @var $form CActiveForm */
?>
<?php if (Yii::app()->user->hasFlash('error')): ?>
    <div class="info">
        <?php echo Yii::app()->user->getFlash('error'); ?>
    </div>
<?php endif; ?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'sp-importcontacts-form',
    'enableAjaxValidation' => false,
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true
    ),
        ));
?>


<fieldset>
    <legend>To Import contacts Please provide Valid Credentials</legend>
    <p class="note">
        Fields with <span class="required">*</span> are required.
    </p>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'email', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'email', array('class' => 'input-xlarge')); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'password', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->passwordField($model, 'password', array('class' => 'input-xlarge')); ?>
            <?php echo $form->error($model, 'password', array('class' => '')); ?>
        </div>
    </div>

    <div class="form-actions">
        <?php echo CHtml::submitButton('Import Contacts', array('class' => 'btn btn-primary')); ?>
    </div>
</fieldset>

<?php $this->endWidget(); ?>
