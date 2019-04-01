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
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/assets/images/favicon.png?v=1.1') ?>"  type="image/x-icon"/>

    <?php wp_head(); ?>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var myajax = {"url":"<?=admin_url('admin-ajax.php'); ?>"};
        /* ]]> */
    </script>


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header clearfix">
<!--        <div class="top-header">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                <div class="row-header">-->
<!--                    <div class="logo-block">-->
<!--                        <a href="--><?php //echo home_url(); ?><!--" class="logo">-->
<!--                            <img   class="logo-busines" src="--><?php //echo get_theme_file_uri('/assets/images/logo-busines.png') ?><!--" alt="Логотип мой бизнес "> -->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="navigation-block">-->
<!--                        --><?php //wp_nav_menu('menu_id=menu-main&menu_class=top-main-container clearfix&theme_location=top_menu'); ?>
<!--                    </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
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
                </div>
            </div>

        </div>
        <a href="#" class="menu-link">
            <i class="fas fa-th-large"></i>
        </a>

    </header><!-- #masthead -->


    <div class="site-content-contain">
        <div id="content" class="site-content">
