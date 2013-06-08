<?php
/* @var $this SpGroupsController */
/* @var $model SpGroups */

$this->breadcrumbs = array(
    'Sp Groups' => array('index'),
    $model->group_id,
);

$this->menu = array(
    array('label' => 'View Group', 'url' =>'#'),
    array('label' => 'List Groups', 'url' => array('groups/index')),
    array('label' => 'Create Groups', 'url' => array('groups/create')),
    array('label' => 'Update Groups', 'url' => array('groups/update', 'id' => $model->group_id)),
    array('label' => 'Delete Group', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->group_id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Groups', 'url' => array('groups/admin')),
);
?>

<h1>Group  #<?php echo $model->group_id; ?>  Details</h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'group_id',
        'group_name',
        array(
            'label' => 'User name',
            'value' => $model->user->username,
        ),
    ),
));
?>
