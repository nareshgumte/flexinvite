<?php
/* @var $this SpGroupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Groups List',
);

$this->menu = array(
    array('label' => 'Create Group', 'url' => array('groups/create')),
    array('label' => 'List Groups', 'url' => array('groups/index')),
    array('label' => 'Manage Groups', 'url' => array('admin')),
);
?>



<section id="tables">
    <div class="page-header">
        <h1>Groups List</h1>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Group User Name</th>
                <th>Group Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $this->widget('zii.widgets.CListView', array(
                'dataProvider' => $dataProvider,
                'itemView' => '_view',
            ));
            ?>
        </tbody>
    </table>
</section>


