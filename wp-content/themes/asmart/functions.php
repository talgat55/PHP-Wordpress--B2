<?php

/*
* Register nav menu
*/
if (function_exists('register_nav_menus')) {

    $menu_arr = array(
        'top_menu' => 'Топ Меню',
        'footer_one_menu' => 'Футер  Меню 1',
        'footer_two_menu' => 'Футер Меню 2'
    );


    register_nav_menus($menu_arr);


}


/*
* Add Feature Imagee
**/
add_theme_support('post-thumbnails');
add_image_size( 'product-item', 244, 300, true );

/**
 * Enqueue scripts and styles.
 */
function th_scripts()
{
    // Theme stylesheet.
    wp_enqueue_style('bootstrapcdn', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '');
    wp_enqueue_style('th-style', get_stylesheet_uri(), array(), '5');


    wp_enqueue_style('fontawesome-all', get_theme_file_uri('/assets/css/fontawesome-all.css'), array(), '');
    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'), array(), '');
    wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.css'), array(), '');
//    wp_enqueue_style('lightgallery', get_theme_file_uri('/assets/css/lightgallery.css'), array(), '');
    wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/css/slick-theme.css'), array(), '');
    wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'), array(), '5');




    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '');
    wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '');
//    wp_enqueue_script('js.cookie.min', get_theme_file_uri('/assets/js/js.cookie.min.js'), array(), '');
//    wp_enqueue_script('jquery.matchHeight', get_theme_file_uri('/assets/js/jquery.matchHeight.js'), array(), '');
//
//
//
//    wp_enqueue_script('lightgallery.min', get_theme_file_uri('/assets/js/lightgallery.min.js'), array(), '');
//    wp_enqueue_script('lg-fullscreen.min', get_theme_file_uri('/assets/js/lg-fullscreen.min.js'), array(), '');
//    wp_enqueue_script('lg-hash.min', get_theme_file_uri('/assets/js/lg-hash.min.js'), array(), '');
//    wp_enqueue_script('jquery.inputmask', get_theme_file_uri('/assets/js/jquery.inputmask.js'), array(), '');
//    wp_enqueue_script('lg-thumbnail.min', get_theme_file_uri('/assets/js/lg-thumbnail.min.js'), array(), '');
//    wp_enqueue_script('functions', get_theme_file_uri('/assets/js/functions.js'), array(), '');
    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '4');




}

add_action('wp_enqueue_scripts', 'th_scripts');


function admin_style() {
    echo '
    <style>
    .post-type-docs .preview.button{
        display: none;
    }
    </style>
    ';
}
add_action('admin_enqueue_scripts', 'admin_style');
/*
*  Rgister Post Type  Docs
*/

add_action('init', 'post_type_docs');

function post_type_docs()
{

    $labels = array(
        'name' => 'Документы',
        'singular_name' => 'Документы',
        'all_items' => 'Документы',
        'menu_name' => 'Документы' // ссылка в меню в админке
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "docs",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('docs', $args);
}



/*
*  Rgister Post Type  Qa
*/

add_action('init', 'post_type_media');

function post_type_media()
{
    $labels = array(
        'name' => 'Медиа',
        'singular_name' => 'Медиа',
        'all_items' => 'Медиа',
        'menu_name' => 'Медиа' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "media",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('media', $args);
}



/*
*  Rgister Post Type Settings
*/
//if (function_exists('acf_add_options_page')) {
//
//    // Let's add our Options Page
//    acf_add_options_page(array(
//        'page_title' => 'Настройки Темы',
//        'menu_title' => 'Настройки Темы',
//        'menu_slug' => 'theme-options',
//        'capability' => 'edit_posts'
//    ));
//
//
//}


add_filter('gettext', 'translate_text');
add_filter('ngettext', 'translate_text');

function translate_text($translated) {
    $translated = str_ireplace('Oops! That page can&rsquo;t be found.', 'К сожалению! Эта страница не может быть найдена.', $translated);
    $translated = str_ireplace('It looks like nothing was found at this location', 'Похоже, что ничего не было найдено по данному запросу', $translated);

    return $translated;

}


// REMOVE WP EMOJI
function disable_wp_emojicons() {

    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

    // filter to remove TinyMCE emojis
    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );





/**
 * AJAX
 */
function be_ajax_load_media()
{



    $arg = array(
        'posts_per_page' => '10',
        'post_type' => 'media',
        'status' => 'publish',
        'paged' => ($_POST['count']) ? $_POST['count'] : 1
    );
    if(isset($_POST['term'])  AND   $_POST['term'] !='all'){
        $arg['meta_key'] =  'type';
        $arg['meta_value'] = $_POST['term'];
        $arg['meta_compare'] = '==';
    }


    ob_start();
    $loop = new WP_Query($arg);

    if($_POST['term'] !='all'  ||  $_POST['term'] !='video' ){
        echo '<div class="row"><ul class="media-row-gallery"> ';
    }

    if ($loop->have_posts()): while ($loop->have_posts()): $loop->the_post();
        if($_POST['term'] =='all'){
            $type = get_field('type');

            if($type == 'video') {
                get_template_part('inc/video-media-fitrows');

            }else{
                set_query_var( 'col','4');
                get_template_part('inc/gallery-media-fitrows');

            }
        }elseif($_POST['term'] =='video'){
            get_template_part('inc/video-media-fitrows');
        }else{

            get_template_part('inc/gallery-media-fitrows');

        }



    endwhile; endif;

    if($_POST['term'] !='all'  ||  $_POST['term'] !='video' ){
        echo '</ul></div>';
    }

    wp_reset_postdata();
    $data = ob_get_clean();
    wp_send_json_success($data);
    wp_die();
}
add_action('wp_ajax_be_ajax_load_media', 'be_ajax_load_media');
add_action('wp_ajax_nopriv_be_ajax_load_media', 'be_ajax_load_media');
