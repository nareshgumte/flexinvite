<?php
/* @var $this GroupMembersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Group Members',
);

$this->menu = array(
    array('label' => 'List Of GroupMembers', 'url' => array('groupMembers/index')),
    array('label' => 'Add Members to Group', 'url' => array('groupMembers/create')),
    array('label' => 'Manage GroupMembers', 'url' => array('groupMembers/admin')),
);
?>
<?php if (Yii::app()->user->hasFlash('error')): ?>
    <div class="alert alert-error">
        <?php echo Yii::app()->user->getFlash('error'); ?>
    </div>
<?php endif; ?>
<?php if (Yii::app()->user->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>
<h1>Group Members</h1>
<?php
echo CHtml::beginForm('', 'POST');
$listData = CHtml::listData($groups, 'group_id', 'group_name');
if (isset($_POST['group_id'])) {
    $selected = $_POST['group_id'];
} else {
    $selected = null;
}
echo CHtml::dropDownList("group_id", $selected, $listData, array('prompt' => 'Select Group'));
echo CHtml::hiddenField('selectGroup', 'selectGroup');
echo CHtml::submitButton('Get Members', array('class' => 'btn', 'style' => 'margin-left:20px;padding:5px 10px;'));
echo CHtml::endForm();
?>
<section id="tables">
    <!--<div class="page-header">
        <h1>Tables</h1>
    </div>
    -->

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Group Member Name</th>
                <th>Remove From Group</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $dataProvider,
                'itemView' => '_view',
            ));
            ?>

        </tbody>

    </table>
</section>
