<?php
/* @var $this UsersController */
/* @var $data SpUsers */
?>
<tr>
    <td><?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?></td>
    <td><?php echo CHtml::encode($data->username); ?></td>
    <td><?php echo CHtml::encode($data->firstname); ?></td>
    <td><?php echo CHtml::encode($data->lastname); ?></td>
    <td><?php echo CHtml::encode($data->email); ?></td>
    <td><?php echo CHtml::encode($data->phone); ?></td>
</tr>
