<?php
/* @var $this InvitationHistoryController */
/* @var $data InvitationHistory */
?>
<tr>
    <td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?></td>
    <td><?php echo CHtml::encode($data->event->event_name); ?></td>
    <td><?php echo CHtml::encode($data->group->group_name); ?></td>
    <td><?php echo CHtml::encode($data->invited_date); ?></td>
</tr>
