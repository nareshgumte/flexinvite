<?php
/* @var $this FriendsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Friends List',
);

$this->menu = array(
    array('label' => 'Create SpFriends', 'url' => array('create')),
    array('label' => 'Manage SpFriends', 'url' => array('admin')),
);
?>

<h1>Friends List</h1>
<?php if (Yii::app()->user->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>
<div style="float:left;">
    <?php echo CHtml::link("Add Friend", $this->createUrl('friends/create'), array("class" => 'btn btn-info', 'style' => 'margin-bottom:10px;')) ?>
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
                'template' => "{items}\n{pager}", //this remove: Displaying #... of ... result
            ));
            ?>
        </tbody>
    </table>
</section>
