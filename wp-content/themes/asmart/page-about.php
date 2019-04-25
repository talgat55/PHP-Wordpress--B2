<?php
/*
 * Template Name: Страница о ресторане
 */

get_header(); ?>

    <div id="primary" class="content-area  ">
        <div class="row relative">
            <div class="image-block-bg">
                <div class="col-sm-7 col-xs-12">

                </div>
                <?php
                $banner_about   = get_field('banner_image_about', 'option');
                $banner_booking = get_field('banner_image_booking', 'option');
                $img_about      = get_field('description_img_about', get_the_ID());
                $image_chief    = get_field('cook_image_about', get_the_ID());
                $url = isset($_REQUEST['type']) ? $_REQUEST['type'] : '';

                if($url == 'chief'){
                    $tab['1'] = 'active';
                    $tab['0'] = '';
                    $img_redy = $image_chief;
                }else{
                    $tab['0'] = 'active';
                    $tab['1'] = '';
                    $img_redy = $img_about;
                }


                $redy_url = $img_redy ? $img_redy : $banner_booking;
                ?>
                <div class="col-sm-5 col-xs-12  hidden-xs  booking-img " style="background: url(<?=$redy_url; ?>);">


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

                                <div class="about-content">
                                   <ul class="navigation-tabs">
                                        <li>
                                           <a href="#"   data-url="about"   class="item-tab about <?=$tab['0']; ?>">
                                               О ресторане
                                           </a>
                                        </li>
                                        <li>
                                           <a href="#"  data-url="chief" class="item-tab shef <?=$tab['1']; ?>">
                                               шеф повар
                                           </a>
                                        </li>



                                   </ul>
                                    <div class="content-tabs">
                                        <ul class="list">
                                            <?php
                                            while (have_posts()) : the_post();
                                            $field_about    = get_field('description_text_about', get_the_ID());
                                            $field_chief    = get_field('cook_text_about', get_the_ID());


                                            ?>
                                            <li class="about <?=$tab['0']; ?>"   data-url="<?=$img_about; ?>">
                                                    <?= $field_about; ?>
                                            </li>
                                            <li class="chief <?=$tab['1']; ?>"  data-url="<?=$image_chief; ?>">
                                                    <?= $field_chief; ?>
                                            </li>



                                            <?php   endwhile;  ?>
                                        </ul>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

<?php get_footer();
