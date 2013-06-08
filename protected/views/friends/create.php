<?php
/* @var $this FriendsController */
/* @var $model SpFriends */

$this->breadcrumbs = array(
    'Add A Friend',
);

$this->menu = array(
    array('label' => 'List Friends', 'url' => array('friends/index')),
    array('label' => 'Create Friends', 'url' => array('friends/create')),
    array('label' => 'Manage Friends', 'url' => array('friends/admin')),
    array('label' => 'Import Contacts', 'url' => array('friends/importContacts')),
    
);
?>
   

<h1>Add A Friend</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>