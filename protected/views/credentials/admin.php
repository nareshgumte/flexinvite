<?php
/* @var $this CredentialsController */
/* @var $model SpCredentials */

$this->breadcrumbs = array(
    'Credentials' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Of Credentials', 'url' => array('credentials/index')),
    array('label' => 'Create Credentials', 'url' => array('credentials/create')),
    array('label' => 'Manage Credentials', 'url' => array('credentials/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sp-credentials-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Credentials</h1>

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
    'id' => 'sp-credentials-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'username',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
