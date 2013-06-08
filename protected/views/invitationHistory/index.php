<?php
/* @var $this InvitationHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Invitation History',
);

$this->menu = array(
    array('label' => 'List Of Invitations Sent', 'url' => array('invitationHistory/index')),
    array('label' => 'Manage InvitationHistory', 'url' => array('invitationHistory/admin')),
);
?>

<h1>Invitation History</h1>
<section id="tables">
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Event Id</th>
                <th>Event Name</th>
                <th>Group Name</th>
                <th>Invited Sent Date</th>
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