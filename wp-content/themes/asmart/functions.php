<?php

load_theme_textdomain('light', get_template_directory() . '/languages');


/*
* Add mobile detect
*/
require_once "inc/Mobile_Detect.php";

/*
* Register nav menu
*/
if (function_exists('register_nav_menus')) {

    $menu_arr = array(
        'top_menu' => 'Топ Меню'
    );


    register_nav_menus($menu_arr);


}


/*
* Add Feature Imagee
**/
add_theme_support('post-thumbnails');
add_image_size('product-item', 244, 300, true);
add_image_size('event-image', 370, 310, true);

/**
 * Enqueue scripts and styles.
 */
function th_scripts()
{

    if (is_page_template('page-atmosfera.php') || is_home() || is_page_template('page-menu.php')) {

        $slick = true;
    } else {
        $slick = false;
    }

    // Theme stylesheet.
    wp_enqueue_style('bootstrapcdn', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '');
    wp_enqueue_style('th-style', get_stylesheet_uri(), array(), '6');


    wp_enqueue_style('fontawesome-all', get_theme_file_uri('/assets/css/fontawesome-all.css'), array(), '');
    if (is_page_template('login-page.php')) {
        wp_enqueue_style('login-page', get_theme_file_uri('/assets/css/login-page.css'), array(), '');
    }

    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.min.css'), array(), '');

    if (is_home()) {
        wp_enqueue_style('jquery.pagepiling', get_theme_file_uri('/assets/css/jquery.pagepiling.css'), array(), '');

    }
    if (is_page_template('page-booking.php')) {

        wp_enqueue_style('datepicker.min.css', get_theme_file_uri('/assets/css/datepicker.min.css'), array(), '');

    }

    if ($slick) {

        wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.css'), array(), '1.0');
        wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/css/slick-theme.css'), array(), '');
        wp_enqueue_style('lg-transitions', get_theme_file_uri('/assets/css/lg-transitions.css'), array(), '');
        wp_enqueue_style('lightgallery', get_theme_file_uri('/assets/css/lightgallery.css'), array(), '');

    }

    wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'), array(), '5');


    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '');


    if (is_home()) {
        wp_enqueue_script('velocity', get_theme_file_uri('/assets/js/velocity.min.js'), array(), '');
        wp_enqueue_script('velocity.ui.min', get_theme_file_uri('/assets/js/velocity.ui.min.js'), array(), '');
    }


    if (is_page_template('page-contacts.php')) {
        if (get_locale() == 'en_US') {
            $lang = 'en';
        } else {
            $lang = 'ru';
        }
        wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDkewQZi7iY6eOtlXajXXHFWHECGYWqfMs&language=' . $lang, array(), '2');


    }

    if (is_page_template('page-booking.php') || is_page_template('page-contacts.php')) {

        wp_enqueue_script('jquery.inputmask', get_theme_file_uri('/assets/js/jquery.inputmask.js'), array(), '');
        wp_enqueue_script('datepicker.js', get_theme_file_uri('/assets/js/datepicker.min.js'), array(), '');

    }

    if (is_page_template('page-about.php')) {

        wp_enqueue_script('query-object', get_theme_file_uri('/assets/js/jquery.query-object.js'), array(), '');

    }

    if ($slick) {
        wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '');
        wp_enqueue_script('lightgallery.min', get_theme_file_uri('/assets/js/lightgallery.min.js'), array(), '');
        wp_enqueue_script('lg-fullscreen.min', get_theme_file_uri('/assets/js/lg-fullscreen.min.js'), array(), '');
        wp_enqueue_script('lg-thumbnail.min', get_theme_file_uri('/assets/js/lg-thumbnail.min.js'), array(), '');
    }
    wp_enqueue_script('jquery.pagepiling.min', get_theme_file_uri('/assets/js/jquery.pagepiling.min.js'), array(), '1');
    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '1.2');


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
        'taxonomies' => array('category_menu')
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


function get_latest_post_link()
{
    global $post;
    $current_permalink = get_permalink();
    $placeholder = $post;
    $args = array(
        'numberposts' => 1,
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_status' => 'publish');
    $sorted_posts = get_posts($args);
    $permalink = get_permalink($sorted_posts[0]->ID);
    if ($permalink == $current_permalink)
        return;
    $post = $placeholder;
    $latest_link_html = $permalink;
    return $latest_link_html;
}

function post_pagination()
{
    global $wp_query;
    $pager = 999999999; // need an unlikely integer

    echo paginate_links(array(
        'base' => str_replace($pager, '%#%', esc_url(get_pagenum_link($pager))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}


function wpbeginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 2;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="pagination"><ul>' . "\n";



    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        if($link != '1'){
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
        }

    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="link-next">%s</li>' . "\n", get_next_posts_link('<span> '.__("Далее", "light" ).'  </span>') );

    echo '</ul></div>' . "\n";

}

//
//  Link Last News
//
if (!is_admin()) {
    // Hook in early to modify the menu
    // This is before the CSS "selected" classes are calculated
    add_filter('wp_get_nav_menu_items', 'replace_placeholder_nav_menu_item_with_latest_post', 10, 3);
}

// Replaces a custom URL placeholder with the URL to the latest post
function replace_placeholder_nav_menu_item_with_latest_post($items, $menu, $args)
{

    // Loop through the menu items looking for placeholder(s)
    foreach ($items as $item) {

        // Is this the placeholder we're looking for?
        if ('#latestpost' != $item->url)
            continue;

        // Get the latest post
        $latestpost = get_posts(array(
            'numberposts' => 1,
        ));

        if (empty($latestpost))
            continue;

        // Replace the placeholder with the real URL
        $item->url = get_permalink($latestpost[0]->ID);
    }

    // Return the modified (or maybe unmodified) menu items array
    return $items;
}


function redirect_login_page()
{
    $login_page = home_url('/login-page/'); //Укажите URL страницы входа, которую создали в админке
    $page_viewed = basename($_SERVER['REQUEST_URI']);
    if ($page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
        wp_redirect($login_page);
        exit;
    }
}

add_action('init', 'redirect_login_page');

function login_failed()
{
    $login_page = home_url('/login-page/'); //Укажите URL страницы входа, которую создали в админке
    wp_redirect($login_page . '?login=failed');
    exit;
}

add_action('wp_login_failed', 'login_failed');

function verify_username_password($user, $username, $password)
{
    $login_page = home_url('/login-page/'); //Укажите URL страницы входа, которую создали в админке
    if ($username == "" || $password == "") {
        wp_redirect($login_page . "?login=empty");
        exit;
    }
}

add_filter('authenticate', 'verify_username_password', 1, 3);
function admin_default_page()
{
    return '/wp-admin';
}

add_filter('login_redirect', 'admin_default_page');
function logout_page()
{
    $login_page = home_url('/login-page/'); //Укажите URL страницы входа, которую создали в админке
    wp_redirect($login_page . "?login=false");
    exit;
}

add_action('wp_logout', 'logout_page');


/**
 * Return url
 * @return string
 */
function ChangeUrl()
{
    if (get_locale() == 'en_US') {
        $addpath = '/en';
    } else {
        $addpath = '';
    }
    return $addpath;
}

/**
 * Return url for other pages
 * @return string
 */
function ChangeUrlForPages($type)
{

    if (empty($type)) {
        return;
    }
    if (get_locale() == 'en_US') {
        $locale = true;
    } else {
        $locale = false;
    }

    if ($type == 'news') {

        $addpath = $locale ? '/en/archive-news/page/2/' : '/arhiv-novostej/page/2/';

    } else if ($type == 'booking') {

        $addpath = $locale ? '/en/booking-2/' : '/booking/';

    } else if ($type == 'atmosfera') {

        $addpath = $locale ? '/en/atmosphere' : '/atmosfera';

    } else if ($type == 'privacy-policy') {

        $addpath = $locale ? '/en/privacy-policy-2' : '/privacy-policy';

    }

    return $addpath;
}

/**
 * Return contact form
 * @param $type
 * @return string|void
 */
function ChangeContactFrom($type)
{

    if (empty($type)) {
        return;
    }
    if (get_locale() == 'en_US') {
        $locale = true;
    } else {
        $locale = false;
    }

    if ($type == 'booking') {

        $form = $locale ? do_shortcode('[contact-form-7 id="283" title="Booking En"  html_class="form contact-form-booking"]') : do_shortcode('[contact-form-7 id="76" title="бронирование"  html_class="form contact-form-booking"]');

    } else {

        $form = $locale ? do_shortcode('[contact-form-7 id="284" title="Написать нам En"   html_class="form contact-form-about"]') : do_shortcode('[contact-form-7 id="225" title="Написать нам"   html_class="form contact-form-about"]');

    }

    return $form;
}

/**
 * Return  fields value for slider in home page
 * @param $type
 * @return mixed|void|null
 */

function returnTextLang($type)
{
    if (empty($type)) {
        return;
    }
    if (get_locale() == 'en_US') {
        $locale = true;
    } else {
        $locale = false;
    }

    if ($type == 'title-one') {

        $value = $locale ? get_field('title_one_en') : get_field('title_one');

    } else if ($type == 'text-one') {

        $value = $locale ? get_field('text_one_en') : get_field('text_one');

    }else if ($type == 'title-two') {

        $value = $locale ? get_field('title_two_en') : get_field('title_two');

    }else if ($type == 'text-two') {

        $value = $locale ? get_field('text_two_en') : get_field('text_two');

    }else if ($type == 'link-one') {

        $value = $locale ? get_field('link_one_en') : get_field('link_one');

    }else if ($type == 'link-two') {

        $value = $locale ? get_field('link_two_en') : get_field('link_two');

    }


    return $value;
}

/**
 * Add new user
 * @param $contact_form
 */
add_action("wpcf7_before_send_mail", "add_new_user_function");

function add_new_user_function($cf7)
{
    $submission = WPCF7_Submission::get_instance();
    if($submission) {
            $posted_data = $submission->get_posted_data();
            if($posted_data['accept-subscribe']){
                $name = isset($posted_data['text-name']) ? $posted_data['text-name'] : '';
                $email = isset($posted_data['email-490']) ? $posted_data['email-490'] : '';

                $random_password = wp_generate_password( 12 );
                wp_create_user( $name, $random_password, $email );

            }

    }
}
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}