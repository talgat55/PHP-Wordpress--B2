<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 04.02.19
 * Time: 2:18
 */
$i = get_query_var( col );
$gallery = get_field('gallery');
$class = $i ? 'col-lg-4 col-md-4' : 'col-lg-3 col-md-3';

echo '<div class="'.$class.' col-sm-12 col-xs-12   ">
                                                <a href="'.  get_the_permalink().'" title="'.__('ссылка на медиа', 'light').'"  style="background: url('. $gallery[0]['url'].') no-repeat!important;">
                                                <div class="event-image-overlay"></div>
                                                <div class="media-conten-gallery">
                                                <h3 class="media-block-title">
                                                     '.get_the_title().'
                                                </h3>
                                                    <div class="media-block-link">
                                                    '.__('открыть альбом', 'light').'
                                                    </div>
                                               
                                                </div>
                                                 </a> 
                                            </div>';
?>


