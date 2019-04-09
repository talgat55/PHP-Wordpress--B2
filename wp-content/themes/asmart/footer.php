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
                            <a href="/privacy-policy" class="policy-footer-link" >

                                <?php _e('Политика конфиденциальности', 'light'); ?>
                            </a>
                        </p>
                    </div>
                    <div class="text-right col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <ul class="soc-links">
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/vk.jpg') ?>"
                                         alt="иконка">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/inst.png') ?>"
                                         alt="иконка">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/fb.png') ?>"
                                         alt="иконка">
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="text-right col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                <a target="_blank" class="bootom-copyright" title="Перейти на сайт разработчика"
                                   href="http://asmart-group.ru/">Сайт разработан IT company <span>ASMART</span></a>


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
</body>
</html>
