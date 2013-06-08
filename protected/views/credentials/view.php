<?php
/* @var $this CredentialsController */
/* @var $model SpCredentials */

$this->breadcrumbs = array(
    'Sp Credentials' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List SpCredentials', 'url' => array('index')),
    array('label' => 'Create SpCredentials', 'url' => array('create')),
    array('label' => 'Update SpCredentials', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete SpCredentials', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage SpCredentials', 'url' => array('admin')),
);
?>

<h1>View SpCredentials #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'username',
        array('label' => 'Type', 'value' => ($model->type == 1) ? 'Gmail' : 'Way2sms'),
        array('label' => 'Password', 'value' => $model->maskString('*'))
    ),
));
?>
