<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css" rel="stylesheet"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootswatch.css" rel="stylesheet"/>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery_002.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootswatch.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/popup.js"></script>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body class="preview" id="top" data-spy="scroll" data-target=".subnav" data-offset="80">

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container" >
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <?php if (!Yii::app()->user->isGuest) { ?>
                                <li>
                                    <?php //echo CHtml::link("Create Event", $this->createUrl('events/create')) ?>
                                    <?php echo CHtml::link("Events", $this->createUrl('events/')) ?>
                                </li>
                                <li>
                                    <?php //echo CHtml::link("Add Friends", $this->createUrl('friends/create')) ?>
                                    <?php echo CHtml::link("Friends", $this->createUrl('friends/')) ?>
                                </li>
                                <li>
                                    <?php echo CHtml::link("Groups", $this->createUrl('groups/')) ?>
                                </li>
                                <li>
                                    <?php echo CHtml::link("Group Members", $this->createUrl('groupMembers/')) ?>
                                </li>
                                <li>
                                    <?php
                                    if (Yii::app()->user->isAdmin) {
                                        echo CHtml::link("Users", $this->createUrl('users/'));
                                    }
                                    ?>
                                </li>
                            <?php } else { ?>
                                <li>
                                    <?php echo CHtml::link("Login", $this->createUrl('site/login')); ?>
                                </li>
                            <?php } ?>
                        </ul>
                        <?php
                        if (!Yii::app()->user->isGuest) {
                            $id = Yii::app()->controller->id;
                            $action = Yii::app()->controller->action->id;

                            echo CHtml::beginForm(CHtml::normalizeUrl(array($id . "/" . $action)), 'get', array('id' => 'filter-form', 'class' => 'navbar-search pull-left'));
                            echo CHtml::textField('q', (isset($_GET['q'])) ? $_GET['q'] : '', array(
                                'id' => 'q',
                                'class' => 'search-query span2',
                                'placeholder' => 'Search..',
                            ));
                            echo "&nbsp;";
                            echo CHtml::submitButton('Search', array('name' => 'Search', 'class' => 'btn', 'style' => 'margin:0;padding:6px 11px;float:right;'));
                            echo CHtml::endForm();
                            ?>

                            <ul class="nav pull-right">
                                <li class="divider-vertical"></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo Yii::app()->user->name; ?> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <li><a href="#">Change Password</a></li>
                                            <li> 
                                                <?php echo CHtml::link("Change Credentials", $this->createUrl('Credentials/')) ?>
                                            </li>
                                            <li>
                                                <?php echo CHtml::link('Invitaions History', $this->createUrl('InvitationHistory/index')); ?>
                                            </li>
                                            <li>
                                                <?php echo CHtml::link("Logout", $this->createUrl('site/logout')) ?>
                                            </li>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        <?php } ?>
                    </div><!-- /.nav-collapse -->
                </div>
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->
        <div class="container" id="page">
            <div style="float: left; width: 16%;" class="well">
                <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                ));
                $this->widget('zii.widgets.CMenu', array(
                    'items' => $this->menu,
                    'htmlOptions' => array('class' => 'nav nav-list'),
                ));
                $this->endWidget();
//            
                ?>    
            </div>

            <div style="width: 80%;float: right;">
                <?php if (isset($this->breadcrumbs)): ?>
                    <?php
                    $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                        'htmlOptions' => array("class" => 'breadcrumb'),
                    ));
                    ?><!-- breadcrumbs -->
                <?php endif ?>

                <?php echo $content; ?>

            </div>
            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by Naresh.<br/>
                All Rights Reserved.<br/>
            </div>

        </div><!-- page -->
        <div class="clear"></div>

    </body>
</html>

