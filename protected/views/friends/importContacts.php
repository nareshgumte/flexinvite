<?php
/* @var $this FriendsController */
/* @var $model SpFriends */
/* @var $form CActiveForm */
?>
<?php if(Yii::app()->user->hasFlash('error')):?>
<div class="info">
	<?php echo Yii::app()->user->getFlash('error'); ?>
</div>
<?php endif; ?>


<div class="form">
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
    <div class="row">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email'); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password'); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>    
    <div class="row buttons">
        <?php echo CHtml::submitButton('Import Contacts'); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>