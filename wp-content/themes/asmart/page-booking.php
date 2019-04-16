<?php
/*
 * Template Name: Страница бронирования
 */

get_header(); ?>
    <div id="primary" class="content-area  ">
        <div class="row relative">
            <div class="image-block-bg">
                <div class="col-sm-7 col-xs-12">

                </div>
                <div class="col-sm-5 col-xs-12  hidden-xs">
                    <div class="row">
                        <?php
                                $banner = get_field('banner_image_booking', 'option');

                        ?>
                        <img class="booking-img" src="<?=$banner; ?>" alt="Картинка" />
                    </div>

                </div>
            </div>
            <div class="cont-mains">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-xs-12">
                            <div class="row">
                                <h1 class="page-title">
                                    <?php echo get_the_title(); ?>
                                </h1>
                                <?= do_shortcode('[contact-form-7 id="76" title="бронирование"  html_class="form contact-form-booking"]'); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
<?php get_footer();
