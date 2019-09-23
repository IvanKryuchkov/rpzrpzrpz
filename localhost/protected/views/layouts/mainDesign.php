
<!DOCTYPE html>
<html>
    <head>


        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">

        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/new.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/css/default.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/css/template.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/css/magnific-popup.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/css/komento.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/css/kunena.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/css/responsive.css" type="text/css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/css/layout.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/media/com_acymailing/css/module_default.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/css/camera.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/modules/mod_superfish_menu/css/superfish.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/modules/mod_superfish_menu/css/superfish-navbar.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/modules/mod_superfish_menu/css/superfish-vertical.css" type="text/css" />
        <!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/design/media/jui/js/jquery.min.js" type="text/javascript"></script>-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/media/system/js/caption.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/media/jui/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/js/jquery.ba-throttle-debounce.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/js/es5-shim.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/js/jquery.centerIn.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/js/jquery.mousewheel.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/js/jquery.BlackAndWhite.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/js/scripts.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/media/com_acymailing/js/acymailing_module.js@v=441" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/modules/mod_image_swoop/js/camera.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/modules/mod_superfish_menu/js/superfish.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/modules/mod_superfish_menu/js/jquery.mobilemenu.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/modules/mod_superfish_menu/js/hoverIntent.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/modules/mod_superfish_menu/js/supersubs.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/modules/mod_superfish_menu/js/sftouchscreen.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(window).on('load', function () {
                new JCaption('img.caption');
            });

            jQuery(function ($) {
                $('.modal.loginPopup').alwaysCenterIn(window);
            });


            ;
            (function ($, undefined) {
                $.fn.BlackAndWhite_init = function () {
                    var selector = $(this);
                    selector.not('.touchGalleryLink').BlackAndWhite({
                        invertHoverEffect: 1,
                        intensity: 1,
                        responsive: true,
                        speed: {
                            fadeIn: 500,
                            fadeOut: 500
                        }
                    });
                }
            })(jQuery);
            jQuery(window).load(function ($) {
                jQuery('.item_img a').each(function () {
                    jQuery(this).find('img').not('.lazy').parent().BlackAndWhite_init();
                })
            });

            window.setInterval(function () {
                var r;
                try {
                    r = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP")
                } catch (e) {
                }
                if (r) {
                    r.open("GET", "./", true);
                    r.send(null)
                }
            }, 840000);
            jQuery(document).ready(function () {
                jQuery('.hasTooltip').tooltip({"html": true, "container": "body"});
            });
            var acymailing = Array();
            acymailing['NAMECAPTION'] = 'Name';
            acymailing['NAME_MISSING'] = 'Please enter your name';
            acymailing['EMAILCAPTION'] = 'Your Email:';
            acymailing['VALID_EMAIL'] = 'Please enter a valid e-mail address';
            acymailing['ACCEPT_TERMS'] = 'Please check the Terms and Conditions';
            acymailing['CAPTCHA_MISSING'] = 'Please enter the security code displayed in the image';
            acymailing['NO_LIST_SELECTED'] = 'Please select the lists you want to subscribe to';

        </script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/design/plugins/system/tmlazyload/tmlazyload.js"></script>
        <script type="text/javascript">
            jQuery(function ($) {
                $("img.lazy").lazy({
                    threshold: 0,
                    visibleOnly: false,
                    effect: "fadeIn",
                    effectTime: 500,
                    enableThrottle: true,
                    throttle: 500,
                    afterLoad: function (element) {
                        if (typeof $.fn.BlackAndWhite_init == "function") {
                            jQuery(element).parents(".item_img a .lazy_container").BlackAndWhite_init();
                        }
                    }
                });
            });
        </script>

        <!--[if lt IE 8]>
          <div style=' clear: both; text-align:center; position: relative;'>
            <a href="../../windows.microsoft.com/en-US/internet-explorer/products/ie/home@ocid=ie6_countdown_bannercode">
              <span class="lazy_container" style="width: px;"><span class="lazy_preloader" style="padding-top: 0%;"></span><img src="<?php echo Yii::app()->request->baseUrl; ?>/design/plugins/system/tmlazyload/blank.gif" class="lazy" data-src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></span>
            </a>
          </div>
        <![endif]-->
        <!--[if lt IE 9]>
          <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/css/ie.css" />
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/js/html5shiv.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/js/html5shiv-printshiv.js"></script>
        <![endif]-->  





        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body class="com_content view-category task- itemid-101 body__home"> 
        <!-- Body -->
        <div id="wrapper">
            <div class="wrapper-inner">
                <!-- Header -->
                <div id="header-row">
                    <div class="row-container">
                        <div class="container-fluid">
                            <header>
                                <div class="row-fluid">

                                </div>
                            </header>
                        </div>
                    </div>
                </div>
                <!-- Navigation -->
                <div id="navigation-row" role="navigation">
                    <div class="row-container">
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <!-- Logo -->
                                <div id="logo" class="span4">
                                    <a href="<?php echo Yii::app()->createAbsoluteUrl('/site/index') ?>">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/design/images/logo_site.png" alt="SMRAT">
                                        <h1>SMRAT</h1>
                                    </a>
                                </div>
                                <nav class="moduletable navigation  span8"> 
                                    <ul class="sf-menu   sticky" id="module-93">
                                        <li class="item-101"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/index') ?>" >Главная</a></li>

                                        <li class="item-134 deeper dropdown parent"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/page', ['id' => 7]) ?>" >О нас</a>
                                            <ul class="sub-menu">
                                                <li class="item-135"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/page', ['id' => 9]) ?>" >Отзывы</a></li>
                                                <li class="item-138"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/page', ['id' => 8]) ?>" >Часто задаваемые вопросы</a></li>

                                            </ul>
                                        </li>
                                        <li class="item-134 deeper dropdown parent"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/page', ['id' => 10]) ?>" >Курсы</a>
                                            <ul class="sub-menu">
                                                <li class="item-135"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/page', ['id' => 1]) ?>" >6-16</a></li>
                                                <li class="item-138"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/page', ['id' => 2]) ?>" >ЗНО</a></li>
                                                <li class="item-138"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/page', ['id' => 3]) ?>" >Общий разговорный курс</a></li>
                                                <li class="item-138"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/page', ['id' => 4]) ?>" >Бизнес курс</a></li>
                                                <li class="item-138"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/page', ['id' => 5]) ?>" >Международные экзамены</a></li>
                                                <li class="item-138"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/page', ['id' => 6]) ?>" >Прочее</a></li>

                                            </ul>
                                        </li>

                                        <li class="item-101"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/page', ['id' => 11]) ?>" >Новости/Акции</a></li>
                                        <li class="item-101"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/page', ['id' => 12]) ?>" >Другие курсы</a></li>
                                        <li class="item-101"><a href="<?php echo Yii::app()->createAbsoluteUrl('/site/page', ['id' => 13]) ?>" >Это интересно</a></li>
                                        <li class="item-101"><a href="/site/contact" >Контакты</a></li>

                                    </ul>

                                    <script>
                                        // initialise plugins
                                        jQuery(function ($) {
                                            $('#module-93')

                                                    .superfish({
                                                        hoverClass: 'sfHover',
                                                        pathClass: 'overideThisToUse',
                                                        pathLevels: 1,
                                                        delay: 500,
                                                        animation: {opacity: 'show', height: 'show'},
                                                        speed: 'normal',
                                                        speedOut: 'fast',
                                                        autoArrows: false,
                                                        disableHI: false,
                                                        useClick: 0,
                                                        easing: "swing",
                                                        onInit: function () {
                                                        },
                                                        onBeforeShow: function () {
                                                        },
                                                        onShow: function () {
                                                        },
                                                        onHide: function () {
                                                        },
                                                        onIdle: function () {
                                                        }
                                                    })
                                                    .mobileMenu({
                                                        defaultText: "Navigate to...",
                                                        className: "select-menu",
                                                        subMenuClass: "sub-menu"
                                                    });

                                            var ismobile = navigator.userAgent.match(/(iPhone)|(iPod)|(android)|(webOS)/i)
                                            if (ismobile) {
                                                $('#module-93').sftouchscreen();
                                            }
                                            $('.btn-sf-menu').click(function () {
                                                $('#module-93').toggleClass('in')
                                            });
                                            if (typeof $.ScrollToFixed == 'function') {
                                                $('#module-93').parents('[id*="-row"]').scrollToFixed({minWidth: 768});
                                            }
                                        })
                                    </script></nav><div class="moduletable search-block  span4"><div role="search" class="mod-search mod-search__search-block">
                                        <form action=""<?php echo Yii::app()->request->baseUrl; ?>/design/index.php" method="post" class="navbar-form">
                                              <label for="searchword" class="element-invisible">Search...</label> <input id="searchword" name="searchword" maxlength="20"  class="inputbox mod-search_searchword" type="text" size="20" placeholder="Search..." required> <button class="button btn btn-primary" onclick="this.form.searchword.focus();">Search</button>  	<input type="hidden" name="task" value="search">
                                            <input type="hidden" name="option" value="com_search">
                                            <input type="hidden" name="Itemid" value="101">
                                        </form>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php echo $content; ?>
            </div>
        </div>
        <div id="footer-wrapper">
            <div class="footer-wrapper-inner">

                <!-- Copyright -->
                <div id="copyright-row" role="contentinfo">
                    <div class="row-container">
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div id="copyright" class="span12">
                                    <span class="copy">&copy;</span>
                                    <span class="year"><?php echo date('Y'); ?></span> 
                                    All Rights Reserved  &nbsp;
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="back-top">
            <a href="#"><span></span> </a>
        </div>


        <script src="<?php echo Yii::app()->request->baseUrl; ?>/design/templates/theme2022/js/jquery.modernizr.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66648759-1', 'auto');
  ga('send', 'pageview');

</script>

</html>