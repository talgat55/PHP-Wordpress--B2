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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('favicon.png?v=1.1') ?>"  type="image/x-icon"/>

    <?php wp_head(); ?>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var myajax = {"url":"<?=admin_url('admin-ajax.php'); ?>"};
        /* ]]> */
    </script>


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
            Закрыть прелоадер
        </a>
    </div>
</div>
<?php  } ?>
<div id="page" class="site">

    <header id="masthead" class="site-header clearfix">

        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="row">
                            <ul class="switcher-lang">
                                <li>
                                    <a href="#" class="active" >
                                        рус
                                    </a>
                                </li>
                                /
                                 <li>
                                    <a href="#" >
                                        eng
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                     <div class="col-sm-6 col-xs-12">
                        <div class="row text-right">
                             <a href="<?=home_url(); ?>" class="mobile-logo" style="display: none;" title="Главная страница">
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
        <a href="<?= home_url(); ?>" class="logo">
            <img  src="<?php echo get_theme_file_uri('/assets/images/Logo.png') ?>" alt="логотип">
        </a>
        <nav>
            <?php wp_nav_menu('menu_id=menu-main&menu_class=top-main-container clearfix&theme_location=top_menu'); ?>
        </nav>
        <a href="/booking/" class="link-rezerv">
            Зарезервировать
        </a>
    </div>

    <div class="site-content-contain">
        <div id="content" class="site-content">
