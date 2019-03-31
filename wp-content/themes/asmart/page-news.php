<?php
/*
 * Template Name: Страница новостей
 */

get_header(); ?>

    <div id="primary" class="content-area  ">
        <div class="bredscrumb">
            <h1 class="page-title-main">
                <?php echo get_the_title(); ?>
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">


                    <div class="news-block">
                        <?php

                        $args = array(
                            'posts_per_page' => '10',
                            'post_type' => 'post',
                            'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
                        );

                        $the_query = new WP_Query($args);

                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;


                                //$image   = aq_resize( $img_url, 1200, 800, true ); // Resize & crop img
                                echo '
                                <div class="block-news-wrap">
                                        <a href="' . get_the_permalink() . '" title="' . __('ссылка на новость', 'light') . '">
                                            <div class="event-image-overlay"></div>
                                            <img src="' . wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full')[0] . '"
                                                 alt="' . get_the_title($post_id) . '"/>
                                        </a>
                                        <div class="news-block-content">
                                            <div class="date-block-news">
                                                ' . get_the_date('d/m/Y') . '
                                            </div>
                                            <div class="title-block-news">
                                               <a href="' . get_the_permalink($post_id) . '">  ' . get_the_title($post_id) . ' </a>
                                            </div>
                                            <div class="content-block-news">
                                                ' . my_string_limit_words(get_the_content($post_id), '5') . '
                                            </div>
                                            <a href="' . get_the_permalink($post_id) . '" class="link-news-detail">
                                                <svg   id="Capa_1" x="0px" y="0px" viewBox="0 0 31.494 31.494" style="enable-background:new 0 0 31.494 31.494;" xml:space="preserve" width="512px" height="512px" class=""><g transform="matrix(-1 1.22465e-16 -1.22465e-16 -1 31.494 31.494)"><path d="M10.273,5.009c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571l-8.047,8.047h26.554  c0.619,0,1.127,0.492,1.127,1.111c0,0.619-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587  c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,5.009z" data-original="#1E201D" class="active-path" data-old_color="#019be1" fill="#019be1"/></g> </svg>    
                                            </a>
                                        </div>
                                    
                                    
                                </div>
                                     ';


                            endwhile;
                            $GLOBALS['wp_query'] = $the_query;
                            the_posts_pagination([
                                'show_all' => false,
                                'prev_text' => __('Предыдущая страница', 'light'),
                                'next_text' => __('Следующая страница', 'light'),
                                'end_size' => '2',     // количество страниц на концах
                                'mid_size' => '2',
                                'screen_reader_text' => __(' ', 'light'),
                            ]);
                        endif;
                        ?>


                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <h3 class="recent-title">
                            Последние новости
                        </h3>
                        <div class="title-separate"></div>
                        <div class="news-recent-list">
                        <?php

                        $args = array(
                            'posts_per_page' => '3',
                            'post_type' => 'post',
                            'orderby' => 'date',
                            'order'   => 'DESC'
                        );

                        $the_query = new WP_Query($args);

                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;
                            ?>
                                <div class="recent-blokc-news">

                                    <div class="img">
                                        <a href="<?=get_the_permalink($post_id); ?>"  >
                                        <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full')[0] ; ?>"
                                             alt="<?= get_the_title($post_id) ; ?>"/>
                                        </a>
                                    </div>
                                    <div class="title-recent">
                                        <a href="<?=get_the_permalink($post_id); ?>"  >
                                        <?= get_the_title($post_id) ; ?>
                                        </a>
                                    </div>
                                    <div class="recent-date">
                                        <?= get_the_date('d/m/Y'); ?>
                                    </div>
                                </div>
                            <?php

                            endwhile;
                        endif;
                        ?>
                    </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

<?php get_footer();
