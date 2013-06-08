<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<tr>
    <td><?php echo CHtml::checkBox("cbox[]", false, array("id" => "cbox" . $data->id, "class" => "case", 'value' => $data->id)); ?></td>
    <td><?php echo $data->firstname; ?></td>
    <td><?php echo $data->lastname; ?></td>
    <td><?php echo $data->email; ?></td>
    <td><?php echo $data->phone; ?></td>
</tr>