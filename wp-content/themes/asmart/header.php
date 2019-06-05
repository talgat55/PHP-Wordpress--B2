<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php
        if (is_home()) {
            bloginfo('name');
        } else {
            wp_title('');
        }
        ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="yandex-verification" content="b19eaf226c9b90c0" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Ресторан современной авторской кухни — совершенно новый гастрономический эксперимент в Сибири. Сезонные, фермерские и локальные продукты в сочетании с элементами молекулярной техники превращаются в изысканные блюда разных кухонь мира. Полный цикл ресторанного производства, позволяет внедрять тему «плавающего» меню, в котором каждый найдёт что-то на свой вкус.">
    <meta name="keywords" content="Батлер, Батлер омск, mr Batler, Рестораны в омске, Рестораны в сибире, Ресторан современной авторской кухни, ресторан">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('favicon.png?v=1.1') ?>"  type="image/x-icon"/>

    <?php wp_head(); ?>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var myajax = {"url":"<?=admin_url('admin-ajax.php'); ?>"};
        /* ]]> */
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141499059-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-141499059-1');
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(53941918, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/53941918" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>


<body <?php body_class(); ?>>
<?php if (is_home()) {  ?>
<div id="hola">
    <div id="preloader">
        <div class="preloader-logo">
            <img  src="<?php echo get_theme_file_uri('/assets/images/Logo.png') ?>" alt="логотип">
        </div>
        <div class="preloader-bar">
            <span></span>
            <span></span>
        </div>
        <a href="#" class="close-preloader">
            <?php  _e('Закрыть прелоадер', 'light'); ?>
        </a>
    </div>
</div>
<?php  } ?>
<div id="page" class="site  <?=get_locale(); ?>">

    <header id="masthead" class="site-header clearfix">

        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                        <div class="row">
                            <ul class="switcher-lang">
                                <?php
                                if (get_locale() == 'en_US') {
                                    $classEng = 'class="active"';
                                    $classRu = '';
                                } else {
                                    $classRu = 'class="active"';
                                    $classEng = '';
                                }

                                ?>
                                <li>
                                    <a href="#"  <?=$classRu;?>  data-type="ru" >
                                        рус
                                    </a>
                                </li>
                                /
                                 <li>
                                    <a href="#"  <?=$classEng;?> data-type="en" >
                                        eng
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                     <div class="col-sm-6 col-xs-6">
                        <div class="row text-right">

                             <a href="<?=home_url(ChangeUrl()); ?>" class="mobile-logo" style="display: none;" title="Главная страница">
                                    <img  src="<?php echo get_theme_file_uri('/assets/images/logo-mobile.png') ?>" alt="логотип">
                             </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <a href="#" class="menu-link">
            <i class="fas fa-th-large"></i>
            <i class="fas fa-times"></i>
        </a>

    </header><!-- #masthead -->
    <div class="menu-bar">
        <a href="<?= home_url(ChangeUrl()); ?>" class="logo">
            <img  src="<?php echo get_theme_file_uri('/assets/images/Logo.png') ?>" alt="логотип">
        </a>
        <nav>
            <?php wp_nav_menu('menu_id=menu-main&menu_class=top-main-container clearfix&theme_location=top_menu'); ?>
        </nav>
        <a href="<?=ChangeUrlForPages('booking');?>" class="link-rezerv">
            <?php  _e('Зарезервировать', 'light'); ?>
        </a>
    </div>

    <div class="site-content-contain">
        <div id="content" class="site-content">
