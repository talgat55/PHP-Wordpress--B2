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
                    $post_id = $the_query->post->ID;

                    $title_one  = get_field('title_one');
                    $text_one   = get_field('text_one');
                    $title_two  = get_field('title_two');
                    $text_two   = get_field('text_two');
                    $video_mp4  = get_field('slider_video_mp4');
                    $video_webm = get_field('slider_video_webm');

                    if(empty($video_mp4)){

                        $back = 'style="background: url('.wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0].') no-repeat!important;"';

                    }else{

                        $back = '';

                    }

                    ?>
                    <div class="item" <?=$back; ?>>
                        <?php
                    if(!empty($video_mp4)) { ?>
                        <div class="video-wrapper">
                            <video autoplay loop controls="controls" poster="<?=wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0];?>"  preload="none" muted>
                                <source src="<?=$video_mp4; ?>" type='video/mp4'>
                                <source src="<?=$video_webm;?>" type='video/webm'>
                            </video>
                        </div>
                    <?php } ?>

                        <div class="container  relative-slider">
                            <div class="row">
                                <div class="content-slider">

                                    <div class="row">
                                        <div class="first-block">
                                            <h3>
                                                <?=$title_one; ?>
                                            </h3>
                                            <div class="text">
                                                <?=$text_one; ?>
                                            </div>
                                        </div>
                                         <div class="second-block">
                                             <h3>
                                                 <?=$title_two; ?>
                                             </h3>
                                             <div class="text">
                                                 <?=$text_two; ?>
                                             </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
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
             <a href="/atmosfera" class="one-type-link"  >
                 Атмосфера заведения
             </a>
        </div>
        <div class="section" id="section3">
            <div class="bg-block col-sm-6 col-xs-12">
                <div class="third-blocks">
                    <div>
                        <h2 class="center-flex">
                            Меню
                        </h2>
                        <a href="http://batler.lightxdesign.ru/wp-content/uploads/2019/04/Menyu_mr_Batler.pdf" class="two-type-link">
                            посмотреть
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-block col-sm-6 col-xs-12">
                <div class="third-blocks">
                    <div>
                        <h2 class="center-flex">
                            Барная
                            карта
                        </h2>
                        <a href="#" class="two-type-link">
                            посмотреть
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- #primary -->

<?php get_footer();
