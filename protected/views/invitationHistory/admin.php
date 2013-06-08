<?php
/* @var $this InvitationHistoryController */
/* @var $model InvitationHistory */

$this->breadcrumbs = array(
    'Invitation History' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Of Invitations Sent', 'url' => array('invitationHistory/index')),
    array('label' => 'Manage InvitationHistory', 'url' => array('invitationHistory/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('invitation-history-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Invitation Histories</h1>

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
    'id' => 'invitation-history-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(// display 'create_time' using an expression
            'name' => 'event_id',
            'value' => '$data->event->event_name',
        ),
        array(// display 'create_time' using an expression
            'name' => 'group_id',
            'value' => '$data->group->group_name',
        ),
        array(// display 'create_time' using an expression
            'name' => 'invited_date',
            'value' => '$data->invited_date',
        ),
        array(// display 'create_time' using an expression
            'name' => 'user_id',
            'value' => '$data->user->username',
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{delete}',
        ),
    ),
));
?>
