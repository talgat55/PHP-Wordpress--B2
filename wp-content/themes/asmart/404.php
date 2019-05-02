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

        <div class="container">
        <div class="row relative">
            <div class="content-custom">
                <h1 class="page-title">
                    404
                </h1>
                <p class="error-page-text">

                    <?php  _e(' Добро пожаловать на страницу 404! Вы находитесь здесь, потому что ввели адрес страницы, которая уже не существует или была перемещена по другому адресу', 'light'); ?>
                </p>

            </div>
        </div>
        </div>
    </div>
<?php get_footer();
