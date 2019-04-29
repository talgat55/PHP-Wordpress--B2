<?php
/**
 * Template Name: Login Page
 *
*/

get_header();
global $post; ?>



<div class="login-content w100">
	<div class="container">
		<div class="flex w100">
			<div class="asmart-login f50">
				<div class="asmart-login-logo">
					<img src="<?php echo get_theme_file_uri('/assets/images/asmart-logo.png') ?>" alt="Asmart logo">
				</div>
				<div class="asmart-login-form">
					<?php  
						$args = array(  
							'redirect' => home_url(),   
							'id_username' => 'user',  
							'id_password' => 'pass',  
						)   
					; ?>  
					<?php wp_login_form( $args ); ?>
				</div>
				<div class="asmart-login-back-to-site w100">
					<a href="/" class="flex">Вернуться на сайт</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
