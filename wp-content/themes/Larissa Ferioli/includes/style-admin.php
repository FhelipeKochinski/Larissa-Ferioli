<?php

/* Stylo da página de login */

function login_logo() { ?>
	<style type="text/css">
		body.login {
			background: #fff;
		}
		body.login div#login h1 a {
			background-image: url(<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/09/Logo-topo.png);
			background-size: 319px 93px;
			height: 93px;
    		width: 319px;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'login_logo' );
?>