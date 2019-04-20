<?php
/*
 * Template Name: Страница атмосфера
 */

get_header(); ?>

    <div id="primary" class="content-area  ">
        <div class="row relative">
            <div class="container">
                <div class="row">
                <div class="atmosfera-block">
                    <div class="slider-atm">
                        <?php
                        $args = array(
                            'posts_per_page' => '-1',
                            'post_type' => 'media',
                            'post_status' => 'publish'
                        );

                        $the_query = new WP_Query($args);

                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;

                                ?>

                                <div  class="item">

                                    <img  src="<?php echo get_theme_file_uri('/assets/images/loading2.gif') ?>"    data-lazy="<?=wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full')[0];?>"
                                         alt="слайд"/>
                                </div>


                            <?php
                            endwhile;
                        endif;

                        ?>

                    </div>
                    <div class="atm-controllers">
                        <div class="row">
                            <div class="text-left col-sm-4 col-xs-12">
                                <a href="#" class="controll prev">
                                    <img  src="<?php echo get_theme_file_uri('/assets/images/arr-left.png') ?>" alt="иконка">
                                </a>
                            </div>
                            <div class="text-center col-sm-4 col-xs-12">
                                <a href="#" class="controll center">
                                    <img  src="<?php echo get_theme_file_uri('/assets/images/rotate.png') ?>" alt="иконка">
                                </a>
                            </div>
                            <div class="text-right col-sm-4 col-xs-12">
                                <a href="#" class="controll next">
                                    <img  src="<?php echo get_theme_file_uri('/assets/images/arr-right.png') ?>" alt="иконка">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </div>
    </div>

<?php get_footer();
