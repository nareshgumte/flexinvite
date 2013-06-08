<?php
/* @var $this CredentialsController */
/* @var $model SpCredentials */

$this->breadcrumbs = array(
    'Credentials' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Of Credentials', 'url' => array('credentials/index')),
    array('label' => 'Create Credentials', 'url' => array('credentials/create')),
    array('label' => 'Manage Credentials', 'url' => array('credentials/admin')),
);
?>

<h1>Please Provide Credentials ,these will use full in sending an Email and SMS's.</h1>

<?php echo $this->renderPartial('_form', array('model' => $model, 'item' => $item)); ?>