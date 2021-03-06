
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div class="container" id="page">

            <div id="header">
                <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->

            <div id="mainmenu">
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array('label' => 'Страницы', 'url' => array('/admin/staticPage/index')),
						array('label' => 'Страницы на русском', 'url' => array('/admin/staticPage_ru/index')),
                        array('label' => 'Блоки', 'url' => array('/admin/templateBlock/index')),
                        array('label' => 'Войти', 'url' => array('/admin/default/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Выйти (Привет Admin)', 'url' => array('/admin/default/logout'), 'visible' => !Yii::app()->user->isGuest),
                    ),
                ));
                ?>
            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
//                $this->widget('zii.widgets.CBreadcrumbs', array(
//                    'links' => $this->breadcrumbs,
//                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>
            <div id="content">


                <?php if (!empty(Yii::app()->session['success'])) { ?>
                    <div class="flash-success">
                        <?php echo Yii::app()->session['success']; ?>
                        <?php unset(Yii::app()->session['success']); ?>
                    </div>
                <?php } ?>
                <?php echo $content; ?>
            </div>
            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
