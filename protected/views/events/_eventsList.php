<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<tr>
    <td><?php echo $data->event_id; ?></td>
    <td><?php echo $data->event_name; ?></td>
    <td><?php echo $data->event_desc; ?></td>
    <td><?php echo $data->event_shortdesc; ?></td>
    <td><?php echo $data->event_venue; ?></td>
    <td>
        <img src="<?php echo Yii::app()->request->baseUrl . '/images/eventImages/' . $data->event_image; ?>" 
             width="50" height="50" />
    </td>
    <td>
        <a href="<?php echo $this->createUrl('events/view',array("id" => $data->event_id)); ?>">
            <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/view.png', 'View', array('width' => 20)) ?>
        </a>
        <a href="<?php echo $this->createUrl('events/update/',array("id" => $data->event_id)); ?>">   
             <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/edit.png', 'Edit', array('width' => 20)) ?>
        </a> 
        <a href="<?php echo $this->createUrl('events/delete/', array("id" => $data->event_id)); ?>" onclick="return confirm('Are you sure you want to delete this event?');">   
             <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/delete.png', 'Delete', array('width' => 20)) ?>
        </a> 
    </td>
    <td>
        <a href="<?php echo $this->createUrl('events/inviteFriends/',array("id"=> $data->event_id)); ?>">
            Invite Friends
        </a>
    </td>
</tr>
