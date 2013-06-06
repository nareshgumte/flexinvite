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
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
                    <div class="nav-collapse collapse" id="main-menu">
                        <ul class="nav" id="main-menu-left">

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
                                    <?php echo CHtml::link("Logout(" . Yii::app()->user->name . ")", $this->createUrl('site/logout')) ?>
                                </li>
                            <?php } else { ?>
                                <li>
                                    <?php echo CHtml::link("Login", $this->createUrl('site/login')); ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="page">

            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                    'htmlOptions' => array("class" => 'breadcrumb'),
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>
            </br></hr>
            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by Naresh.<br/>
                All Rights Reserved.<br/>
            </div>
        </div><!-- page -->
     

    </body>
</html>
