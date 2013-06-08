<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'List Of Users',
);

$this->menu = array(
    array('label' => 'List Of Users', 'url' => array('users/index')),
    array('label' => 'Create Users', 'url' => array('users/create')),
    array('label' => 'Manage Users', 'url' => array('users/admin')),
);
?>

<h1>List Of Users</h1>

<section id="tables">
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>User Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
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