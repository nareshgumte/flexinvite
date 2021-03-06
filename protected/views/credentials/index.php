<?php
/* @var $this CredentialsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'List Of Credentials',
);

$this->menu = array(
    array('label' => 'List Of Credentials', 'url' => array('credentials/index')),
    array('label' => 'Create Credentials', 'url' => array('credentials/create')),
    array('label' => 'Manage Credentials', 'url' => array('credentials/admin')),
);
?>

<h1>Credentials</h1>
<section id="tables">
    <!--<div class="page-header">
        <h1>Tables</h1>
    </div>
    -->
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Password</th>
                <th>Source</th>
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