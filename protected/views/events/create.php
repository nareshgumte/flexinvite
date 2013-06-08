<?php
/* @var $this EventsController */
/* @var $model SpEvents */

$this->breadcrumbs = array(
    'Create',
);

$this->menu = array(
    array('label' => 'List of Events', 'url' => array('events/index')),
    array('label' => 'Create Event', 'url' => array('events/create')),
    array('label' => 'Manage Events', 'url' => array('events/admin')),
);
?>

<h1>Create An Event</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>