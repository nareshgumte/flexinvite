<?php
/* @var $this FriendsController */
/* @var $model SpFriends */

$this->breadcrumbs = array(
    'Add A Friend',
);

$this->menu = array(
    array('label' => 'List SpFriends', 'url' => array('index')),
    array('label' => 'Manage SpFriends', 'url' => array('admin')),
);
?>

<h1>Add A Friend</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>