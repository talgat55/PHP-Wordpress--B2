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

    if(is_page_template('page-atmosfera.php') || is_home()  || is_page_template('page-menu.php')){

       $slick = true;
    }else{
        $slick = false;
    }

    // Theme stylesheet.
    wp_enqueue_style('bootstrapcdn', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '');
    wp_enqueue_style('th-style', get_stylesheet_uri(), array(), '5');


    wp_enqueue_style('fontawesome-all', get_theme_file_uri('/assets/css/fontawesome-all.css'), array(), '');
    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'), array(), '');

    if(is_home()){
        wp_enqueue_style('jquery.pagepiling', get_theme_file_uri('/assets/css/jquery.pagepiling.css'), array(), '');

    }
    if (  is_page_template('page-booking.php')) {

        wp_enqueue_style('datepicker.min.css', get_theme_file_uri('/assets/css/datepicker.min.css'), array(), '');

    }

    if($slick){
        wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.css'), array(), '');
        wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/css/slick-theme.css'), array(), '');
    }
    wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'), array(), '5');




    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '');




    if(is_home()){
        wp_enqueue_script('velocity', get_theme_file_uri('/assets/js/velocity.min.js'), array(), '');
        wp_enqueue_script('velocity.ui.min', get_theme_file_uri('/assets/js/velocity.ui.min.js'), array(), '');
    }


    if (  is_page_template('page-contacts.php')) {

        wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDkewQZi7iY6eOtlXajXXHFWHECGYWqfMs', array(), '2');


    }

    if (  is_page_template('page-booking.php')) {

        wp_enqueue_script('jquery.inputmask', get_theme_file_uri('/assets/js/jquery.inputmask.js'), array(), '');
        wp_enqueue_script('datepicker.js', get_theme_file_uri('/assets/js/datepicker.min.js'), array(), '');

    }

    if (  is_page_template('page-about.php')) {

        wp_enqueue_script('query-object', get_theme_file_uri('/assets/js/jquery.query-object.js'), array(), '');

    }



    if($slick){
        wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '');
    }
    wp_enqueue_script('jquery.pagepiling.min', get_theme_file_uri('/assets/js/jquery.pagepiling.min.js'), array(), '1');
    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '1');




}

add_action('wp_enqueue_scripts', 'th_scripts');


/*
*  Rgister Post  Slider
*/

add_action('init', 'post_type_docs');

function post_type_docs()
{

    $labels = array(
        'name' => 'Главный слайдер',
        'singular_name' => 'Главный слайдер',
        'all_items' => 'Главный слайдер',
        'menu_name' => 'Главный слайдер' // ссылка в меню в админке
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "sliders",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('sliders', $args);
}



/*
*  Rgister Post Type  atmosfera
*/

add_action('init', 'post_type_atmosfera');

function post_type_atmosfera()
{
    $labels = array(
        'name' => 'Атмосфера',
        'singular_name' => 'Атмосфера',
        'all_items' => 'Атмосфера',
        'menu_name' => 'Атмосфера' // ссылка в меню в админке
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
*  Rgister Post Type  atmosfera
*/

add_action('init', 'post_type_menusc');

function post_type_menusc()
{
    $labels = array(
        'name' => 'Меню',
        'singular_name' => 'Меню',
        'all_items' => 'Меню',
        'menu_name' => 'Меню' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "menus",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'taxonomies'=> array( 'category_menu' )
    );
    register_post_type('menus', $args);
}

add_action('init', 'create_products_taxonomy', 0);
function create_products_taxonomy()
{
// Labels part for the GUI
    $labels = array(
        'name' => _x('Разделы меню', 'light'),
        'singular_name' => _x('Разделы меню', 'light'),
        'search_items' => __('Поиск Разделы меню'),
        'popular_items' => __('Разделы меню'),
        'all_items' => __('Разделы меню'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'menu_name' => __('Разделы меню'),
    );
// Now register the non-hierarchical taxonomy like tag
    register_taxonomy('category_menu', 'menus', array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'category_menu'),
    ));
}

/*
*  Rgister Post Type Settings
*/
if (function_exists('acf_add_options_page')) {

    // Let's add our Options Page
    acf_add_options_page(array(
        'page_title' => 'Настройки Темы',
        'menu_title' => 'Настройки Темы',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts'
    ));


}


add_filter('gettext', 'translate_text');
add_filter('ngettext', 'translate_text');

function translate_text($translated) {
    $translated = str_ireplace('Oops! That page can&rsquo;t be found.', 'К сожалению! Эта страница не может быть найдена.', $translated);
    $translated = str_ireplace('It looks like nothing was found at this location', 'Похоже, что ничего не было найдено по данному запросу', $translated);

    return $translated;

}


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
