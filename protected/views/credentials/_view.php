<?php
/* @var $this CredentialsController */
/* @var $data SpCredentials */
?>
<tr>
    <td><?php echo CHtml::link(CHtml::encode($data->username), array('view', 'id' => $data->id)); ?></td>
    <td><?php echo $data->maskString('*'); ?></td>
    <td>
        <?php
        if ($data->type == 1)
            echo "Gmail";
        else
            echo "Way 2 Sms";
        ?>
    </td>

</tr>
<?php
?>