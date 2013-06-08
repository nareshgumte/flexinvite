<?php
/* @var $this InvitationHistoryController */
/* @var $model InvitationHistory */

$this->breadcrumbs = array(
    'Invitation Histories' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List InvitationHistory', 'url' => array('index')),
    array('label' => 'Create InvitationHistory', 'url' => array('create')),
    array('label' => 'Update InvitationHistory', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete InvitationHistory', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage InvitationHistory', 'url' => array('admin')),
);
?>

<h1>View InvitationHistory #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        array('name' => 'Event Name', 'value' => $model->event->event_name),
        array('name' => 'Group Name', 'value' => $model->group->group_name),
        'invited_date',
        array('name' => 'User Name', 'value' => $model->user->username),
    ),
));
?>
