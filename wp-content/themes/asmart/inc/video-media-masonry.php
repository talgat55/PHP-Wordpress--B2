<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 04.02.19
 * Time: 2:18
 */
$i = get_query_var( id );
$video = get_field('video');
if ($i == 0) {
    //      $class = 'col-lg-8 col-md-8';

    $class = 'col-lg-12 col-sm-12';
    echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><div class="row">';
}elseif ($i == 3    ){
    echo '<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"><div class="row">';
    $class = 'col-lg-6 col-sm-6';
}elseif ($i == 4){
    $class = 'col-lg-6 col-sm-6';
}else{
    $class = 'col-lg-12 col-sm-12';
}
?>
    <div  class="media-walp media-video-<?=$i; ?>  <?= $class; ?>  col-sm-12 col-xs-12">
        <div >
            <a href="<?php the_permalink(); ?>" title="<?= __('ссылка на медиа', 'light'); ?>"  >
                <img src="<?=  parse_youtube($video);?>"   alt="<?= get_the_title(); ?>" />
                <div class="event-image-overlay"></div>
                <h3 class="media-block-title">
                    <?= get_the_title(); ?>
                </h3>
                <div class="media-block-play"></div>
            </a>


        </div>


    </div>
<?php

if ($i == 2 || $i == 9) {
    echo '</div></div>';
}
