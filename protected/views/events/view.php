<?php
/* @var $this EventsController */
/* @var $model SpEvents */

$this->breadcrumbs = array(
    'Sp Events' => array('index'),
    $model->event_id,
);

$this->menu = array(
    array('label' => 'List SpEvents', 'url' => array('index')),
    array('label' => 'Create SpEvents', 'url' => array('create')),
    array('label' => 'Update SpEvents', 'url' => array('update', 'id' => $model->event_id)),
    array('label' => 'Delete SpEvents', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->event_id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage SpEvents', 'url' => array('admin')),
);
?>

<h1>View Event #<?php echo $model->event_id; ?></h1>

<?php /* $this->widget('zii.widgets.CDetailView', array(
  'data'=>$model,
  'attributes'=>array(
  'event_id',
  'user_id',
  'event_name',
  'event_desc',
  'event_shortdesc',
  'event_venue',
  'event_image',
  'event_status',
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
                <td>Event Name</td>
                <td><?php echo $model->event_name; ?></td>
            </tr>
            <tr>
                <td>Event Desc</td>
                <td><?php echo $model->event_desc; ?></td>
            </tr>
            <tr>
                <td>Event Shortdesc</td>
                <td><?php echo $model->event_shortdesc; ?></td>
            </tr>
            <tr>
                <td>Event Venue</td>
                <td><?php echo $model->event_venue; ?></td>
            </tr>
            <tr>
                <td>Event Image</td>
                <td>
                    <?php
                    if (isset($model->event_image)) {
                        echo CHtml::image(Yii::app()->request->baseUrl . '/images/eventImages/' . $model->event_image, '', array('height' => '50', 'width' => '50'));
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

</section>    
