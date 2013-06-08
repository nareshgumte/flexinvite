<?php
/* @var $this SpGroupMembersController */
/* @var $data SpGroupMembers */
?>

<tr id="<?php echo $data->id; ?>">
    <td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?></td>
    <td><?php echo CHtml::encode($data->getFriendName()); ?></td>
    <td>
        <?php
        echo CHtml::ajaxLink(
                "Remove", Yii::app()->createUrl('groupMembers/deleteFriend'), array(// ajaxOptions
            'type' => 'GET',
            'beforeSend' => "function( request )
                     {
                       // Set up any pre-sending stuff like initializing progress indicators
                     }",
            'success' => "function( data )
                  {
                  location.reload()=true;
                    // handle return data
                  
                  }",
            'data' => array('id' => $data->id)
                ), array(//htmlOptions
            'href' => 'javascript:void(0)',
            'class' => 'delete-class'
                )
        );
        ?>
    </td>
</tr>
