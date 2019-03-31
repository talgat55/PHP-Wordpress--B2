<?php
/*
 * Template Name: Домашняя страница
 */


get_header(); ?>

    <div id="primary" class="content-area">
        <h1 class="hide-title">Главная страница</h1>

        <section class="slider-home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="content-home-slider">
                                <div class="first-block-slider-text">

                                    <img src="<?php echo get_theme_file_uri('/assets/images/logo-slider.png'); ?>"
                                         alt="Логотип слайдера"/>

                                </div>
                                <div class="second-block-slider-text">
                                    <div class="slogan-slider">
                                        Реализуй <span>свои</span> мечты, а не чужие!
                                    </div>
                                    <a href="#" class="link-to-call slider">
                                        Свяжитесь с нами
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="second-home-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-custom  col-sm-12 col-xs-12">
                        <div class="block-registration">
                            <h3>
                                Федеральная программа<br>
                                «Ты – предприниматель»
                            </h3>
                            <p>
                                Цель программы - популяризация предпринимательства в молодежной среде и
                                образовательно-консультационная помощь начинающим предпринимателям.
                            </p>

                        </div>

                        <a href="/registraciya" class="link-registration">
                            Зарегистрироваться
                        </a>

                    </div>
                </div>
            </div>
        </section>
        <section class="section-last-news-block">
            <div class="container">
                <div class="row">
                    <h2 class="page-title  margin-top-20">
                        Последние новости
                    </h2>
                    <div class="title-separate"></div>
                    <div class="clearfix  ">
                        <div class="row">
                            <?php

                            $args = array(
                                'posts_per_page' => '3',
                                'post_type' => 'post'
                            );

                            $the_query = new WP_Query($args);


                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;

                                $img_url = wp_get_attachment_url(get_post_thumbnail_id($post_id), 'full');
                                echo ' 
                                     
                                    <div class="news-block  col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <a  href="'.get_the_permalink().'"  class="news-block-walp">
                                        <div class="news-img-block"  >
                                            <img src="'.$img_url.'" alt="Картинка" />
                                        </div> 
                                        <div class="news-content"> 
                                  
                                            <h3 class="news-title"><div >  ' . get_the_title($post_id) . '</div></h3>
                                            <div class="news-excerpt">
                                                ' . strip_tags(my_string_limit_words(get_the_content($post_id), '6')) . '
                                            </div>
                                            <div href="' . get_the_permalink($post_id) . '" class="link-news-detail">
                                                <svg   id="Capa_1" x="0px" y="0px" viewBox="0 0 31.494 31.494" style="enable-background:new 0 0 31.494 31.494;" xml:space="preserve" width="512px" height="512px" class=""><g transform="matrix(-1 1.22465e-16 -1.22465e-16 -1 31.494 31.494)"><path d="M10.273,5.009c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571l-8.047,8.047h26.554  c0.619,0,1.127,0.492,1.127,1.111c0,0.619-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587  c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,5.009z" data-original="#1E201D" class="active-path" data-old_color="#019be1" fill="#019be1"/></g> </svg>    
                                            </div>
                                            
                                        </div>
        
                                    </a>
                                    </div>
                                     ';


                            endwhile;
                            ?>

                        </div>
                    </div>
                    <div class="block-over">
                        <a href="/news" class="link-to-all-news">
                            Показать все новости
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-event-block">

            <div class="container">
                <div class="row">
                    <h2 class="page-title  center  margin-top-20">
                        Ближайшие мероприятия
                    </h2>
                    <div class="title-separate center-separate"></div>
                    <div class="clearfix">
                        <div class="row">
                            <?php
                            $args = array(
                                'posts_per_page' => '8',
                                'post_type' => 'events'
                            );

                            $the_query = new WP_Query($args);


                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;


                                ?>
                                <div class="block-event  match-height col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="block-event-walp">
                                    <div class="block-event-img">
                                        <div class="block-event-img-top-border"></div>

                                        <a href="<?= get_the_permalink(); ?>"
                                           title="<?php _e('ссылка на мероприятие', 'light'); ?>">
                                            <div class="event-image-overlay"></div>
                                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full')[0]; ?>"
                                                 alt="<?= get_the_title($post_id); ?>"/>
                                        </a>
                                    </div>
                                    <div class="block-event-text-block">
                                        <h3>
                                            <a href="<?= get_the_permalink(); ?>"  title="<?php _e('ссылка на мероприятие', 'light'); ?>">
                                                <?= get_the_title($post_id); ?>
                                            </a>
                                        </h3>
                                        <div class="text-block">
                                            <?=  strip_tags(my_string_limit_words(get_the_content($post_id), '4')); ?>
                                        </div>

                                    </div>
                                    <div class="block-event-bottom-block">
                                        <div class="row">
                                            <div class=" date col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <?= get_the_date('d/m/Y'); ?>
                                            </div>
                                            <div class=" link col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <a href="<?= get_the_permalink(); ?>"
                                                   title="ссылка на мероприятие"><?php _e('Подробнее', 'light'); ?></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </div>

                            <?php endwhile; ?>


                            <div class="block-over">
                                <a href="/meropriyatiya" class="link-to-all-news"
                                   title="<?php _e('Показать все мероприятия', 'light'); ?>">
                                    <?php _e('Показать все мероприятия', 'light'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-media-block">

            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="row">
                            <h2 class="page-title  margin-top-20">
                                <?php _e('Медиа', 'light'); ?>
                            </h2>
                            <div class="title-separate"></div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <a href="/medias/" class="link-to alt" title="<?php _e('Перейти в медиа', 'light'); ?>">
                            <?php _e('Перейти в медиа', 'light'); ?>
                        </a>
                    </div>

                </div>
            </div>
            <div class="clearfix bg-media-main">
                <div class="row">
                    <div class="media-block-bg  first  col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <img src="<?php echo get_theme_file_uri('/assets/images/bg-media-1.png'); ?>"
                             alt="Картинка  "/>
                    </div>
                    <div class="media-block-bg  second  col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <img src="<?php echo get_theme_file_uri('/assets/images/bg-media-2.png'); ?>"
                             alt="Картинка  "/>
                    </div>
                </div>
                <div class="clearfix  contant-media">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <?php

                                $args = array(
                                    'posts_per_page' => '2',
                                    'post_type' => 'media'
                                );

                                $the_query = new WP_Query($args);

                                while ($the_query->have_posts()) :
                                    $the_query->the_post();
                                    $post_id = $the_query->post->ID;
                                    ?>
                                    <div class="media-block-bg-walp-content  col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <?php
                                        $type = get_field('type');
                                        $gallery = get_field('gallery');
                                        $video = get_field('video');
                                        //                                        echo '<pre>';
                                        //                                        var_dump($gallery);
                                        //                                        echo '</pre>';
                                        if ($type == 'gallery') {
                                            echo '<div class="media-block-item"> <div class="overlay-layer-media-block"></div>';
                                            echo ' <div  class="img-media-back" style=" background: url(' . $gallery[0]['url'] . ');"  ></div>';
                                            echo '<div class="media-block-content">
                                                   
                                                    <h3>' . get_the_title($post_id) . '</h3>
                                                    <a href="' . get_the_permalink() . '" >
                                                    ' . __('открыть альбом', 'light') . '
                                                     </a>
                                                </div>';
                                            echo '</div>';
                                            echo '<span class="media-block-type-name">Фотогалерея</span>';
                                        } else {
                                            echo '<span class="media-block-type-name">Видео</span>';


//                                            preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $query['linkvideo'], $matches);
//                                            $id = $matches[1];
                                            echo '<div class="media-block-content-video">
                                                       '.$video.'</div>';
                                        }
                                        ?>
                                        <!--                                    <div class="">-->
                                        <!--                                        --><?//= the_field('video'); ;
                                        ?>
                                        <!--                                    </div>-->

                                    </div>
                                <?php

                                endwhile;

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </div>

    </div>
    </section>
    <section class="partners-section">
        <div class="container">
            <div class="row">
            <div class="partners-carousel">
                <div class="partners-row margin-top-40 margin-bottom-40  ">

                    <img src="<?php echo get_theme_file_uri('/assets/images/parther4.jpg') ?>" alt="Логотип партнера"/>

                </div>
                <div class="partners-row margin-top-40 margin-bottom-40   ">
                    <img src="<?php echo get_theme_file_uri('/assets/images/parther3.jpg') ?>" alt="Логотип партнера"/>
                </div>
                <div class="partners-row margin-top-40 margin-bottom-40  ">
                    <img src="<?php echo get_theme_file_uri('/assets/images/parther2.jpg') ?>" alt="Логотип партнера"/>
                </div>
                <div class="partners-row margin-top-40 margin-bottom-40    ">

                    <img src="<?php echo get_theme_file_uri('/assets/images/parther.jpg') ?>" alt="Логотип партнера"/>

                </div>

            </div>
            </div>
        </div>
    </section>
    <section class="contact-section   ">
        <div class="row">
            <div class="contact-first-row col-contact-first-row   col-sm-6 col-xs-12"></div>
            <div class="contact-second-row col-contact-second-row   col-sm-6 col-xs-12">

                <div id="map"></div>
            </div>
            <div class="text-row-contact">
                <div class="clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <h2 class="page-title  margin-top-20">
                                    <?php _e('Контакты', 'light'); ?>
                                </h2>
                                <div class="title-separate"></div>


                            </div>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="list-contact margin-top-10">
                                <div>
                                    <img src="<?php echo get_theme_file_uri('/assets/images/geo.png') ?>"
                                         alt=" Иконка  "/>

                                    <div class="contact-text">

                                        <?php _e('ул. Красногвардейская, 42, офис 315', 'light'); ?>
                                    </div>
                                </div>
                                <div>
                                    <img src="<?php echo get_theme_file_uri('/assets/images/phone.png') ?>"
                                         alt=" Иконка  "/>

                                    <a href="tel:+73812238132" class="contact-text">
                                        (3812) <span>23-81-32</span>
                                    </a>
                                </div>
                                <div>
                                    <img src="<?php echo get_theme_file_uri('/assets/images/mail.png') ?>"
                                         alt=" Иконка  "/>

                                    <a href="mailto:mdms@omskportal.ru" class="contact-text">
                                        <span>mdms</span>@omskportal.ru
                                    </a>
                                </div>
                                <div class="block-soc">
                                    <div class="block-soc--element">
                                        <a href="https://www.facebook.com/groups/uprmolpol/?ref=bookmarks" target="_blank">
                                            <img src="<?php echo get_theme_file_uri('/assets/images/fb.png') ?>"
                                                 alt=" Иконка  "/>
                                            <p>

                                                <?php _e('Мы в Facebook', 'light'); ?>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="block-soc--element">
                                        <a href="https://vk.com/club132272548" target="_blank">
                                            <img src="<?php echo get_theme_file_uri('/assets/images/vk.png') ?>"
                                                 alt=" Иконка  "/>
                                            <p>
                                                <?php _e('Мы в Вконтакте', 'light'); ?>
                                            </p>
                                        </a>
                                    </div>

                                    <div class="block-soc--element">
                                        <a href="https://www.instagram.com/tipredprinimatel_omsk/?utm_source=ig_profile_share&igshid=gwdh7i2t74dn" target="_blank">
                                            <img src="<?php echo get_theme_file_uri('/assets/images/instagram.png') ?>"
                                                 alt=" Иконка  "/>
                                            <p>
                                                <?php _e('Мы в Instagram', 'light'); ?>
                                            </p>
                                        </a>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


    </div><!-- #primary -->

<?php get_footer();
