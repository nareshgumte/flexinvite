<?php
/* @var $this SpGroupMembersController */
/* @var $data SpGroupMembers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_id')); ?>:</b>
	<?php echo CHtml::encode($data->group_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_member_id')); ?>:</b>
	<?php echo CHtml::encode($data->group_member_id); ?>
	<br />


</div>