<?php
/* @var $this SpGroupsController */
/* @var $model SpGroups */

$this->breadcrumbs = array(
    'Groups' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'Create Group', 'url' => array('groups/create')),
    array('label' => 'List Groups', 'url' => array('groups/index')),
    array('label' => 'Manage Groups', 'url' => array('groups/admin')),
);
?>

<h1>Create Group</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>