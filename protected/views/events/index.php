<?php
/* @var $this EventsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Events List',
);

$this->menu = array(
    array('label' => 'Events List', 'url' => array('events/index')),
    array('label' => 'Create Event', 'url' => array('events/create')),
    array('label' => 'Manage Events', 'url' => array('events/admin')),
);
?>

<h1>Events List</h1>
<?php if (Yii::app()->user->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>


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
                <th>Event Date</th>
                <th>Actions</th>
                <th>Invite</th>
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
//                'template' => "{items}\{pager}", //this remove: Displaying #... of ... result
            ));
            ?>
        </tbody>
    </table>
</section>