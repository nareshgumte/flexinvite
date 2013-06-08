<?php
/* @var $this SpGroupsController */
/* @var $model SpGroups */

$this->breadcrumbs = array(
    'Sp Groups' => array('index'),
    $model->group_id => array('view', 'id' => $model->group_id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Groups', 'url' => array('groups/index')),
    array('label' => 'Create Groups', 'url' => array('groups/create')),
    array('label' => 'View Groups', 'url' => array('groups/view', 'id' => $model->group_id)),
    array('label' => 'Manage Groups', 'url' => array('groups/admin')),
);
?>

<h1>Update Group #<?php echo $model->group_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>