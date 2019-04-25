<?php
/*
 * Template Name: Страница контактов
 */

get_header(); ?>

    <div id="primary" class="content-area  ">
        <div class="row relative">
            <div class="col-sm-6 col-xs-12">

            </div>
            <div class="col-sm-6 col-xs-12">
                <div id="map"></div>
            </div>
            <div class="first-wrap">
                <div class="vertical-align">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <h1 class="page-title">
                                    <?= get_the_title(); ?>
                                </h1>

                                <ul class="list-contact-informaion">
                                    <li>
                                        <a href="">
                                            <div class="img">
                                                <img src="<?php echo get_theme_file_uri('/assets/images/geo.png') ?>"   alt="иконка">
                                            </div>

                                            <p>
                                                пр. Карла Маркса, 16/1 - 3 этаж
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:488-998">
                                            <div class="img">
                                                <img src="<?php echo get_theme_file_uri('/assets/images/phone.png') ?>"
                                                 alt="иконка">
                                            </div>
                                            <p>
                                                488-998
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:barbatler@yandex.ru">
                                            <div class="img">
                                            <img src="<?php echo get_theme_file_uri('/assets/images/email.png') ?>"
                                                 alt="иконка">
                                            </div>
                                            <p>
                                                barbatler@yandex.ru
                                            </p>
                                        </a>
                                    </li>


                                </ul>



                                <a href="#" class="link feedback">
                                    Написать нам
                                </a>

                            </div>
                            <div class="col-sm-6 col-xs-12">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<div class="custom-modal">
    <h3>
        Написать нам
    </h3>
    <i class="fas fa-times"></i>
    <?= do_shortcode('[contact-form-7 id="225" title="Написать нам"   html_class="form contact-form-about"]'); ?>
</div>

<?php get_footer();
