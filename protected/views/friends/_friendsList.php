<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
   
        <tr>
            <td><?php echo $data->id; ?></td>
            <td><?php echo $data->firstname; ?></td>
            <td><?php echo $data->lastname; ?></td>
            <td><?php echo $data->email; ?></td>
            <td><?php echo $data->phone; ?></td>
            <td><?php echo $data->whois; ?></td>
            <td>
                <a href="<?php echo $this->createUrl('friends/view', array("id" => $data->id)); ?>">
                    <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/view.png', 'View', array('width' => 20)); ?>
                </a>
                <a href="<?php echo $this->createUrl('friends/update', array("id" => $data->id)); ?>">   
                    <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/edit.png', 'Edit', array('width' => 20)); ?>
                </a> 
                <a href="<?php echo $this->createUrl('friends/delete' ,array("id" => $data->id)); ?>" onclick="return confirm('Are you sure you want to delete?');">   
                    <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/delete.png', 'Delete', array('width' => 20)); ?>
                </a> 
            </td>
        </tr>
    