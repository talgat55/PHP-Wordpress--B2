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
                <?php
                $banner = get_field('banner_image_booking', 'option');

                ?>
                <div class="col-sm-5 col-xs-12  hidden-xs  booking-img " style="background: url(<?=$banner; ?>);">


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
                                <?= ChangeContactFrom('booking'); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
<?php get_footer();
