
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->breadcrumbs = array(
    ' Events' => array('index'),
    "Invite Friends"
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
<div style="display:none" id="errmsg" class="alert alert-error"></div>



<?php
echo CHtml::beginForm('', 'POST', array('name' => 'inviteFriends', 'id' => 'inviteFriends',
    'enctype' => 'multipart/form-data'
));
?>
<fieldset>

    <div class="control-group">
        <div class="controls">
            <?php $listData = CHtml::listData($select, 'group_id', 'group_name'); ?>
            <?php echo CHtml::dropDownList("group_id", null, $listData, array('prompt' => 'Select Group')); ?>

        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <label class="checkbox">
                <?php echo CHtml::checkBox("send_email", false, array('id' => 'send_email', 'class' => 'case')); ?>
                <?php echo CHtml::label("Send Email", "send_email"); ?> 

            </label>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <label class="checkbox">
                <?php echo CHtml::checkBox("send_sms", false, array('id' => 'send_sms', 'class' => 'case')); ?>
                <?php echo CHtml::label("Send SMS", "send_sms"); ?> 
            </label>
        </div>
    </div>
    <?php echo CHtml::hiddenField("sendInvite", 'sendInvite'); ?>
    <div class="form-actions">
        <?php echo CHtml::submitButton("send invites", array("class" => "btn btn-primary", 'id' => 'send_invite')); ?>
    </div>
</fieldset>
<?php echo CHtml::endForm(); ?>

<SCRIPT language="javascript">
    $(function() {

        // add multiple select / deselect functionality
        $("#checkall").click(function() {
            $('.case').attr('checked', this.checked);
        });

        // if all checkbox are selected, check the selectall checkbox
        // and viceversa
        $(".case").click(function() {

            if ($(".case").length == $(".case:checked").length) {
                $("#checkall").attr("checked", "checked");
            } else {
                $("#checkall").removeAttr("checked");
            }

        });

        $("#send_invite").click(function() {
            if ($("#group_name").val() == '') {
                $("#errmsg").show();
                $("#errmsg").text("Please Select Group");
                $("#errmsg").focus();
                return false;
            }

            var fields = $(".case").serializeArray();

            if (fields.length == 0)
            {
                //alert('Please check atleast one checkbox to send invite');\
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                $("#errmsg").show();
                $("#errmsg").text("Please check atleast one checkbox to send invite");
                $("#errmsg").focus();
                // cancel submit
                return false;
            }
            /* if(!$('#send_email').attr('checked') && !$('#send_sms').attr('checked')){
             $('body,html').animate({
             scrollTop: 0
             }, 800);
             $("#errmsg").show();
             $("#errmsg").text("Please select send email or send sms or both");
             $("#send_email").focus();
             return false;
             }*/
        });

    });


</SCRIPT>