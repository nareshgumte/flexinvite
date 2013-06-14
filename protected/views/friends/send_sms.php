
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->breadcrumbs = array(
    "Send Message"
);
$this->menu = array(
    array('label' => 'List of Events', 'url' => array('events/index')),
    array('label' => 'Create Event', 'url' => array('events/create')),
    array('label' => 'Manage Events', 'url' => array('events/admin')),
    array('label' => 'Create a Group', 'url' => array('groups/create')),
);
?>
<!--<h1>Send Invites</h1>-->
<h1>Invite Friends to An Event</h1>

<?php if (Yii::app()->user->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

<?php if (Yii::app()->user->hasFlash('error')): ?>
    <div class="alert alert-error">
        <?php echo Yii::app()->user->getFlash('error'); ?>
    </div>
<?php endif; ?>
<div style="display:none" id="errmsg" class="alert alert-error"></div>


<div>
    <?php
    echo CHtml::beginForm('', 'POST', array('name' => 'inviteFriends', 'id' => 'inviteFriends',
        'enctype' => 'multipart/form-data'
    ));
    ?>

    <fieldset style="float: left;margin-right: 64px">

        <div class="control-group">
            <div class="controls">
                <?php $listData = CHtml::listData($friends, 'phone', 'firstname'); ?>
                <?php echo CHtml::dropDownList("phone", null, $listData, array('prompt' => 'Select Contact', 'id' => 'phone')); ?>

            </div>
        </div>
        <div class="control-group">
            <div class="controls">

                <?php echo CHtml::textArea("message", '', array('id' => 'send_sms_message', 'class' => 'case', 'placeHolder' => 'Keep Text')); ?>
            </div>
        </div>
        <?php echo CHtml::hiddenField("sendMessage", 'sendMessage'); ?>
        <div class="control-group">
            <div class="form-actions">
                <?php echo CHtml::submitButton("send invites", array("class" => "btn btn-primary", 'id' => 'send_invite')); ?>
            </div>
        </div>
    </fieldset>
    <?php echo CHtml::endForm(); ?>


    <?php
    echo CHtml::beginForm('', 'POST', array('name' => 'inviteFriends', 'id' => 'inviteFriends',
        'enctype' => 'multipart/form-data'
    ));
    ?>
    <fieldset>

        <div class="control-group">
            <div class="controls">
                <?php $listData = CHtml::listData($groups, 'group_id', 'group_name'); ?>
                <?php echo CHtml::dropDownList("group_id", null, $listData, array('prompt' => 'Select Group')); ?>

            </div>
        </div>
        <div class="control-group">
            <div class="controls">

                <?php echo CHtml::textArea("message", '', array('id' => 'send_sms', 'class' => 'case', 'placeHolder' => 'Group Message')); ?>
            </div>
        </div>
        <?php echo CHtml::hiddenField("sendMessageGroup", 'sendMessageGroup'); ?>
        <div class="control-group">
            <div class="form-actions">
                <?php echo CHtml::submitButton("send group message", array("class" => "btn btn-primary", 'id' => 'send_sms')); ?>
            </div>
        </div>
    </fieldset>

    <?php echo CHtml::endForm(); ?>
</div>
<SCRIPT language="javascript">
    $(function() {



        $("#send_invite").click(function() {
            if ($("#phone").val() == '') {
                $("#errmsg").show();
                $("#errmsg").text("Please Select Group");
                $("#errmsg").focus();
                return false;
            }
            if ($("#send_sms_message").val() == '') {
                $("#errmsg").show();
                $("#errmsg").text("Please Select Group");
                $("#errmsg").focus();
                return false;
            }

        });
        $("#send_sms").click(function() {
            if ($("#group_name").val() == '') {
                $("#errmsg").show();
                $("#errmsg").text("Please Select Group");
                $("#errmsg").focus();
                return false;
            }

        });

    });


</SCRIPT>