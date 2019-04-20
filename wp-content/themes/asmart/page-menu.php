<?php
/*
 * Template Name: Страница меню
 */

get_header();
if(!empty($_REQUEST['menu'])){
    $req = $_REQUEST['menu'];
}else{
    $req = '';
}

?>

    <div id="primary" class="content-area  ">
        <div class="row  relative  ">
            <div class="bg-menu-wrapper">
                <div class="col-sm-7 col-xs-12">

                </div>
                <div class="col-sm-5 col-xs-12  hidden-xs">
                    <div class="row"  style="    height: 870px;">
                        <?php

                        $gallery_cook = get_field('gallery_cook', 'option');
                        $gallery_bar = get_field('gallery_bar', 'option');

                        if ($req == 'cook') {
                            $redy_gallery = $gallery_cook;
                        } else {
                            $redy_gallery = $gallery_bar;
                        }
                        $i = 1;
                        foreach ($redy_gallery as $value) {
                            if ($i == 1) {
                                $col = '12';
                            } elseif ($i == 2) {
                                $col = '7';
                            } elseif ($i == 3) {
                                $col = '5';
                            } elseif ($i == 4) {
                                $col = '5';
                            } elseif ($i == 5) {
                                $col = '7';
                            }
                            echo '
                                                        <div class="item  col-sm-' . $col . '"> 
                                                            <div class="bg-img" style="background-image: url(' . $value["url"] . ');"></div>
                                                        </div>
                                                    
                                                    ';


                            $i++;
                        }

                        ?>

                    </div>

                </div>
            </div>

            <div class="cont-menu">
                <div class="container">
                    <div class="row" >
                        <div class="col-sm-7 col-xs-12">
                                <h1 class="page-title">
                                    <?php

                                    if ($req == 'cook') {

                                        echo 'Кухня';

                                    } else {

                                        echo 'Бар';

                                    }

                                    ?>
                                </h1>
                                <div class="slider-menu">
                                    <?php
                                    $args = array(
                                        'posts_per_page' => '-1',
                                        'post_type' => 'menus',
                                        'meta_query'	=> array(
                                            'relation'		=> 'AND',
                                            array(
                                                'key'	 	=> 'kinds_menu',
                                                'value'	  	=> $req,
                                                'compare' 	=> '=',
                                            ),
                                        ),
                                    );

                                    $the_query = new WP_Query($args);

                                    if ($the_query->have_posts()) :
                                        while ($the_query->have_posts()) :
                                            $the_query->the_post();
                                            $post_id = $the_query->post->ID;
                                            $menu_arrray = get_field('menu_arrray', $post_id);
                                            echo '<div class="item"> ';
                                                    echo '<h2>'.get_the_title(). '</h2>';
                                                    echo '<ul class="list-menu">';
                                                    foreach ($menu_arrray as $menu_value){
                                                        echo '<li class="row">';
                                                            echo '<div class="col-sm-8 col-xs-8 text-left">'.$menu_value["name_manu"].'</div>';

                                                            echo '<div class="col-sm-4 col-xs-4 text-right">';
                                                                if(!empty($menu_value["price_manu"])){
                                                                    echo $menu_value["price_manu"].'р.';
                                                                }
                                                            echo '</div>';

                                                        echo '</li>';
                                                    }
                                                    echo '</ul>';

                                            echo '</div>  ';


                                        endwhile;
                                    endif;


                                    ?>


                                </div>
                                <div class="arrow-menu">
                                    <a href="#" class="prev">
                                        <img  class="inactive"  src="<?php echo get_theme_file_uri('/assets/images/arr-menu.jpg') ?>" alt="иконка">
                                        <img  class="active" src="<?php echo get_theme_file_uri('/assets/images/arr-menu-y.jpg') ?>" alt="иконка">
                                    </a>
                                    <a href="#" class="next">
                                        <img  class="inactive"  src="<?php echo get_theme_file_uri('/assets/images/arr-menu.jpg') ?>" alt="иконка">
                                        <img  class="active" src="<?php echo get_theme_file_uri('/assets/images/arr-menu-y.jpg') ?>" alt="иконка">
                                    </a>

                                </div>


                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

<?php get_footer();
