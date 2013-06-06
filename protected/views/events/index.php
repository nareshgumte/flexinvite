<?php
/* @var $this EventsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Events List',
);

$this->menu = array(
    array('label' => 'Create SpEvents', 'url' => array('create')),
    array('label' => 'Manage SpEvents', 'url' => array('admin')),
);
?>

<h1>Events List</h1>
<?php if (Yii::app()->user->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>
<div style="float:left;">
    <?php echo CHtml::link("Create Event", $this->createUrl('events/create'), array("class" => 'btn btn-info', 'style' => 'margin-bottom:10px;')) ?>
</div>
<div style="float: right;">
    <?php
    $id = Yii::app()->controller->id;
    $action = Yii::app()->controller->action->id;

    echo CHtml::beginForm(CHtml::normalizeUrl(array($id . "/" . $action)), 'get', array('id' => 'filter-form', 'class' => 'form-search'));
    echo CHtml::textField('q', (isset($_GET['q'])) ? $_GET['q'] : '', array(
        'id' => 'q',
        'class' => 'topsearch',
        'placeholder' => 'Search..',
    ));
    echo "&nbsp;";
    echo CHtml::submitButton('Search', array('name' => 'Search', 'class' => 'btn'));
    echo CHtml::endForm();
    ?>
</div>
<section id="tables">
    <!--<div class="page-header">
        <h1>Tables</h1>
    </div>
    -->
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Event Name</th>
                <th>Event Desc</th>
                <th>Event Shortdesc</th>
                <th>Event Venue</th>
                <th>Event Image</th>
                <th>Actions</th>


            </tr>
        </thead>
        <tbody>
            <?php
            $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $dataProvider,
                'itemView' => '_eventsList',
                'pager' => array(
                    /*'maxButtonCount' => 5,*/
                    "header" => "", //this will remove Go to page
                // 'summaryText' => 'kjjkhkhk',//'{count} records(s) found.',
                ),
                'enableSorting' => true,
                'template' => "{items}\{pager}", //this remove: Displaying #... of ... result
            ));
            ?>
        </tbody>
    </table>
</section>