<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
);
?>
<?php if (Yii::app()->user->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'htmlOptions' => array('class' => 'form-horizontal well')
        ));
?>
<fieldset>
    <legend>Please fill out the following form with your login credentials</legend>
    <p class="note">
        Fields with <span class="required">*</span> are required.
    </p>
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

    <div class="form-actions">
        <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary')); ?>
        <?php echo CHtml::link('Register Here', $this->createUrl('users/create'), array('class' => '')); ?>
    </div>
</fieldset>
<?php $this->endWidget(); ?>

<!-- form -->
