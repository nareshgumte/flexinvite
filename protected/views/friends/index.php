<?php
/* @var $this FriendsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Friends List',
);

$this->menu = array(
    array('label' => 'List Of Friends', 'url' => array('friends/index')),
    array('label' => 'Create Friends', 'url' => array('friends/create')),
    array('label' => 'Manage Friends', 'url' => array('friends/admin')),
);
?>

<h1>Friends List</h1>
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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Who is</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $dataProvider,
                'itemView' => '_friendsList',
                'pager' => array(
                    /*'maxButtonCount' => 5,*/
                    "header" => "", //this will remove Go to page
                // 'summaryText' => 'kjjkhkhk',//'{count} records(s) found.',
                ),
                'enableSorting' => true,
//                'template'=> '{items}{pager}',
                
            ));
            ?>
        </tbody>
    </table>
</section>
