<?php
/* @var $this FriendsController */
/* @var $model SpFriends */

$this->breadcrumbs=array(
	'friends'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SpFriends', 'url'=>array('index')),
	array('label'=>'Create SpFriends', 'url'=>array('create')),
	array('label'=>'Update SpFriends', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SpFriends', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpFriends', 'url'=>array('admin')),
);
?>

<h1>View Friends #<?php echo $model->id; ?></h1>

<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'firstname',
		'lastname',
		'email',
		'phone',
		'whois',
	),
)); */
?>

<section id="tables">
    <!--<div class="page-header">
        <h1>Tables</h1>
    </div>
    -->

    <table class="table table-bordered table-striped table-hover" style="width: 500px;">
        <tbody>
            <tr>
                <td>First Name</td>
                <td><?php echo $model->firstname; ?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?php echo $model->lastname; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $model->email; ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo $model->phone; ?></td>
            </tr>
            <tr>
                <td>Who is</td>
                <td><?php echo $model->whois; ?></td>
            </tr>
            
        </tbody>
    </table>
</section>    
