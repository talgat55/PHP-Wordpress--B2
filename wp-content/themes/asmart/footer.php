</div><!-- #content -->

<footer class="site-footer">
    <?php if(!is_home()){  ?>
        <div class="wrap clearfix">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <p>
                            Mr.Batler © 2019
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <p>
                            <a href="<?=ChangeUrlForPages('privacy-policy');?>" class="policy-footer-link" >

                                <?php _e('Политика конфиденциальности', 'light'); ?>
                            </a>
                        </p>
                    </div>
                    <div class="text-right col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <ul class="soc-links">
                            <li>
                                <a target="_blank" href="https://vk.com/batlerbar">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/vk.jpg') ?>"
                                         alt="иконка">
                                </a>
                            </li>
                            <li>
                                <a  target="_blank" href="https://www.instagram.com/batlerbar/">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/inst.png') ?>"
                                         alt="иконка">
                                </a>
                            </li>
                            <li>
                                <a target="_blank"  href="https://web.facebook.com/batlerbar/">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/fb.png') ?>"
                                         alt="иконка">
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="text-right col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                <a target="_blank" class="bootom-copyright" title="Перейти на сайт разработчика"
                                   href="http://asmart-group.ru/"><?php  _e('Сайт разработан IT-company', 'light'); ?> <span>ASMART</span></a>


                    </div>
                </div>
            </div>

        </div>
    <?php }  ?>

</footer>
</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>




<div class="menu-overlay"></div>
<div class="success-modal">
    <div class="content">

        <div class="reserve-text">
            <?php  _e('Вы забронировали столик в ресторане mr.Batler! <br>
                    В ближайшее время наш менеджер свяжется с вами, чтобы подтвердить вашу бронь.  <br>
                    До встречи в mr.Batler!', 'light');
            ?>
        </div>
        <div class="main-text">

            <?php  _e('Спасибо, что написали нам! <br>
                            В ближайшее время наш менеджер свяжется с вами!', 'light');
            ?>
        </div>
        <a href="#" class="close-modal"><?php  _e('Закрыть', 'light'); ?></a>
    </div>
</div>

</body>
</html>
