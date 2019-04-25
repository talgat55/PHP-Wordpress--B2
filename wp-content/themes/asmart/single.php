<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
    $single_id = get_the_ID();
get_header(); ?>
    <div id="primary" class="content-area  ">
        <div class="row relative">
            <div class="image-block-bg">
                <div class="col-sm-7 col-xs-12">

                </div>
                <?php
                $img_url = wp_get_attachment_url(get_post_thumbnail_id($single_id), 'full');
                $banner_about = get_field('banner_image_about', 'option');
                $banner_booking = get_field('banner_image_booking', 'option');
                $redy_url = $img_url ? $img_url : $banner_booking;
                ?>
                <div class="col-sm-5 col-xs-12  hidden-xs  booking-img " style="background: url(<?= $redy_url; ?>);">


                </div>
            </div>
            <div class="cont-mains">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-xs-12">
                            <div class="row">

                                <div class="news-content">
                                    <ul class="navigation-tabs">
                                        <li>
                                            <a href="#" class="item-tab  new  active">
                                                Актуальные
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/arhiv-novostej" class="item-tab  archive ">
                                                Архив
                                            </a>
                                        </li>


                                    </ul>
                                    <div class="content-news">

                                        <div class="time-line">
                                            <ul class="list">
                                                <?php

                                                $paged = isset($_REQUEST['paged']) ? $_REQUEST['paged'] : "1";


                                                $args = array(
                                                    'posts_per_page' => '10',
                                                    'post_type' => 'post',
                                                    'orderby' => 'date',
                                                    'order' => 'DESC',
                                                    'post_status' => 'publish',
                                                    'paged' =>  $paged
                                                );

                                                $the_query = new WP_Query($args);

                                                if ($the_query->have_posts()) :
                                                    while ($the_query->have_posts()) :
                                                        $the_query->the_post();
                                                        $post_id = $the_query->post->ID;


                                                        if($single_id ==$post_id ){
                                                            $active_class = 'active';
                                                        }else{
                                                            $active_class = '';
                                                        }
                                                        ?>
                                                        <li>
                                                            <a href="<?= get_the_permalink($post_id); ?>"  class="<?=$active_class; ?>">
                                                                <?= get_the_date('d.m.y'); ?>
                                                            </a>
                                                        </li>

                                                    <?php
                                                    endwhile;

                                                endif;
                                                wp_reset_query();
                                                ?>

                                            </ul>
                                            <ul class="nav-page single">
                                                <li>
                                                    <a href="#" class="custom-link  prev"  title="Перейти к предыдущей новости">
                                                        <img  class="main" src="<?php echo get_theme_file_uri('/assets/images/arr-menu.jpg') ?>" alt="стрелка">
                                                        <img  class="active" src="<?php echo get_theme_file_uri('/assets/images/arr-menu-y.jpg') ?>" alt="стрелка">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="custom-link  next" title="Перейти к следующей новости">
                                                        <img   class="main" src="<?php echo get_theme_file_uri('/assets/images/arr-menu.jpg') ?>" alt="стрелка">
                                                        <img class="active"  src="<?php echo get_theme_file_uri('/assets/images/arr-menu-y.jpg') ?>" alt="стрелка">
                                                    </a>
                                                </li>


                                            </ul>

                                        </div>
                                        <div class="content">
                                            <div class="date">
                                                <?= get_the_date('d.m.y',$single_id); ?>

                                            </div>
                                            <h1 class="page-title">
                                                <?php echo get_the_title($single_id); ?>

                                            </h1>

                                            <div class="text">
                                                <?php   the_content(); ?>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


<?php get_footer();
