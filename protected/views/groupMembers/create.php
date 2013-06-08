<?php
/* @var $this GroupMembersController */
/* @var $model GroupMembers */

$this->breadcrumbs = array(
    'Group Members' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Of GroupMembers', 'url' => array('groupMembers/index')),
    array('label' => 'Create GroupMembers', 'url' => array('groupMembers/create')),
    array('label' => 'Manage GroupMembers', 'url' => array('groupMembers/admin')),
);
?>

<h1>Create GroupMembers</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>