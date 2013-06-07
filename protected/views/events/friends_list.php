
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->breadcrumbs = array(
    'Sp Events' => array('index'),
);
?>
<!--<h1>Send Invites</h1>-->
<h1>Add Members to Group</h1>

<?php if (Yii::app()->user->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>
<div style="display:none" id="errmsg" class="alert alert-error"></div>

<!--<div style="float:left;">
<?php echo CHtml::link("Add Friend", $this->createUrl('friends/create'), array("class" => 'btn btn-info', 'style' => 'margin-bottom:10px;')) ?>
</div>
-->
<div style="float: right;">
    <?php
    $id = Yii::app()->controller->id;
    $action = Yii::app()->controller->action->id;

    echo CHtml::beginForm(CHtml::normalizeUrl(array($id . "/" . $action, 'id' => $_GET['id'])), 'get', array('id' => 'filter-form', 'class' => 'form-search'));
    echo CHtml::textField('q', (isset($_GET['q'])) ? $_GET['q'] : '', array(
        'id' => 'q',
        'class' => 'topsearch',
        'placeholder' => 'Search..',
    ));
    echo "&nbsp;";
    echo CHtml::submitButton('Search', array('name' => 'Search', 'class' => 'btn'));
    echo CHtml::endForm();
    ?>
</div>

<section id="tables">
    <!--<div class="page-header">
        <h1>Tables</h1>
    </div>
    -->
    <?php
    echo CHtml::beginForm('', 'POST', array('name' => 'inviteFriends', 'id' => 'inviteFriends',
        'enctype' => 'multipart/form-data'
    ));
    ?>
    <?php $listData = CHtml::listData($select, 'group_id', 'group_name'); ?>
    <?php echo CHtml::dropDownList("group_name",null,$listData,array('prompt'=>'Select Group'));?>
    <?php echo CHtml::submitButton("Add Members to Group",array("style"=>'margin-left:5px;',"id"=>"send_invite")); ?>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th><?php echo CHtml::checkBox('checkall',false,array("id"=>'checkall')); ?></th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <!--<th>Phone No</th>-->
            </tr>
        </thead>
        <tbody>
            <?php
            $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $dataProvider,
                'itemView' => '_friends_list',
                'ajaxUpdate' => true,
                'pager' => array(
                    /* 'maxButtonCount' => 5, */
                    "header" => "", //this will remove Go to page
                // 'summaryText' => 'kjjkhkhk',//'{count} records(s) found.',
                ),
                'enableSorting' => true,
//                'template' => "{items}\{pager}", //this remove: Displaying #... of ... result
            ));
            ?>
            <!--
            <tr>
                <td colspan="2" style="text-align: center !important;">

                </td>
                <td colspan="2" style="text-align: left !important;">
                    <?php echo CHtml::checkBox("send_email", false, array("style" => 'float:left;','id'=>'send_email')); ?>
                    <?php echo CHtml::label("Send Email", "send_email", array("style" => 'float:left;margin-left:5px;')); ?> 

                    <?php echo CHtml::checkBox("send_sms", false, array("style" => 'float:left;margin-left:10px;','id'=>'send_sms')); ?>
                    <?php echo CHtml::label("Send SMS", "send_sms", array("style" => 'float:left;margin-left:5px;')); ?> 
                    <?php echo CHtml::submitButton("send invites", array("class" => "btn", "style" => "margin-left:10px;")); ?>
                </td>
            </tr>
            -->    
        </tbody>

    </table>
    <?php echo CHtml::endForm(); ?>
</section>


<SCRIPT language="javascript">
    $(function(){
 
        // add multiple select / deselect functionality
        $("#checkall").click(function () {
            $('.case').attr('checked', this.checked);
        });
 
        // if all checkbox are selected, check the selectall checkbox
        // and viceversa
        $(".case").click(function(){
 
            if($(".case").length == $(".case:checked").length) {
                $("#checkall").attr("checked", "checked");
            } else {
                $("#checkall").removeAttr("checked");
            }
 
        });
        
        $("#send_invite").click(function(){
            if($("#group_name").val()==''){
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