<?php
/* @var $this EventsController */
/* @var $data SpEvents */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->event_id), array('view', 'id'=>$data->event_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_name')); ?>:</b>
	<?php echo CHtml::encode($data->event_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_desc')); ?>:</b>
	<?php echo CHtml::encode($data->event_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_shortdesc')); ?>:</b>
	<?php echo CHtml::encode($data->event_shortdesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_venue')); ?>:</b>
	<?php echo CHtml::encode($data->event_venue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_image')); ?>:</b>
	<?php //echo CHtml::encode($data->event_image); ?>
        <?php if($data->event_image!=''){ ?>
    <img src="<?php echo Yii::app()->request->baseUrl.'/images/eventImages/'.$data->event_image; ?>" 
            width="50" height="50" />
     <?php } ?>  
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('event_status')); ?>:</b>
	<?php echo CHtml::encode($data->event_status); ?>
	<br />

	*/ ?>

</div>