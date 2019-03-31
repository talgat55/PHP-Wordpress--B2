<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <div id="primary" class="content-area  ">
        <div class="bredscrumb">
            <h1 class="page-title-main">
                404
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="start-content">
                        <h2 class="spec-title-h2"><?php _e( 'Страница не найдена', 'light' ); ?></h2>
                        <p class="error-page-text">
                            Добро пожаловать на страницу 404! Вы находитесь здесь, потому что ввели адрес страницы, которая уже не существует или была перемещена по другому адресу
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php get_footer();
