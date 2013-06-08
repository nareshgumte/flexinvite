<?php
/* @var $this EventsController */
/* @var $model SpEvents */

$this->breadcrumbs = array(
    'Events' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List of Events', 'url' => array('events/index')),
    array('label' => 'Create Event', 'url' => array('events/create')),
    array('label' => 'Manage Events', 'url' => array('events/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sp-events-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Events</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'sp-events-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'event_id',
        'user_id',
        'event_name',
        'event_desc',
        'event_shortdesc',
        'event_venue',
        'event_date_time',
        /*
          'event_image',
          'event_status',
         */
        array(
            'class' => 'CButtonColumn',
        ),
        
    ),
));
?>
