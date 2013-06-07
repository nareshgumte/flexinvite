<?php
/* @var $this SpGroupsController */
/* @var $data SpGroups */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->group_id), array('view', 'id'=>$data->group_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_name')); ?>:</b>
	<?php echo CHtml::encode($data->group_name); ?>
	<br />


</div>