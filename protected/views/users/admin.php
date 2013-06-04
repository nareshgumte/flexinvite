<?php
/* @var $this UsersController */
/* @var $model SpUsers */

$this->breadcrumbs=array(
	'Sp Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SpUsers', 'url'=>array('index')),
	array('label'=>'Create SpUsers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sp-users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Users List</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sp-users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'user_id',
		'username',
		'firstname',
		'lastname',
		'email',
		/*
		'phone',
		'cdate',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>