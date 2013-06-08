<?php
/* @var $this FriendsController */
/* @var $model SpFriends */

$this->breadcrumbs = array(
    'Friends' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Of Friends', 'url' => array('friends/index')),
    array('label' => 'Create Friends', 'url' => array('friends/create')),
    array('label' => 'Manage Friends', 'url' => array('friends/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sp-friends-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php if (Yii::app()->user->hasFlash('success')): ?>
    <div class="info">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

<h1>Manage Sp Friends</h1>

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
    'id' => 'sp-friends-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
//		'id',
//		'user_id',
        'firstname',
        'lastname',
        'email',
        'phone',
        /*
          'whois',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
