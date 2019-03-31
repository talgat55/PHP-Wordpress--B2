<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 04.02.19
 * Time: 2:18
 */
$i = get_query_var( id );
$video = get_field('video');

?>
    <div  class="media-walp media-video-<?=$i; ?>  col-lg-4 col-md-4 col-sm-12 col-xs-12">
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

