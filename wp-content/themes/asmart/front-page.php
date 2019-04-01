<?php
/*
 * Template Name: Домашняя страница
 */


get_header(); ?>
    <h1 class="hide-title">Главная страница</h1>
    <div id="pagepiling" class="content-area">
        <div class="section" id="section1">
            <div class="home-slider-walp">
            <div class="home-slider swiper-container">
                <?php
                $args = array(
                    'posts_per_page' => '-1',
                    'post_type' => 'sliders',
                    'post_status' => 'publish'
                );
                $the_query = new WP_Query($args);

                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $post_id = $the_query->post->ID;  ?>
                    <div class="item" style="background: url(<?=wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full')[0]; ?>) no-repeat!important;">

                    </div>



                <?php endwhile;  ?>

            </div>
                <div class="container relative">
                    <div class="row">
                        <ul class="arr-slider">
                            <li>
                                <a href="#"  class="prev" >
                                    <img   src="<?php echo get_theme_file_uri('/assets/images/arr.png') ?>" alt=" стрелка">
                                </a>
                            </li>
                                                        <li>
                                <a href="#"  class="next" >
                                    <img   src="<?php echo get_theme_file_uri('/assets/images/arr.png') ?>" alt=" стрелка">
                                </a>
                            </li>


                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="section2">
            awdawd
        </div>
        <div class="section" id="section3">
            <div class="bg-block col-sm-6 col-xs-12">

            </div>
            <div class="bg-block col-sm-6 col-xs-12">

            </div>


        </div>
    </div><!-- #primary -->

<?php get_footer();
