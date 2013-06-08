<?php
/* @var $this SpGroupsController */
/* @var $data SpGroups */
?>

<tr>
    <td><?php echo CHtml::link(CHtml::encode($data->group_id), array('view', 'id' => $data->group_id)); ?></td>
    <td><?php echo CHtml::encode($data->user->username); ?></td>
    <td><?php echo CHtml::encode($data->group_name); ?></td>
</tr>
