<?php
	// Setup our default assets to load.
	Assets::add_js( array(
		base_url() .'assets/js/bootstrap.js',
		base_url() .'assets/js/bootstrap-dropdown.js'
	));

	Assets::add_css( array ( base_url() .'assets/css/bootstrap.css' ));

	$inline = '$(".dropdown-toggle").dropdown();';
	$inline .= '$(".tooltips").tooltip();';

	Assets::add_js( $inline, 'inline' );

	Template::block('header', 'parts/head');

	$uid = (int) $this->session->userdata('user_id');
	if ( $uid > 0 )
	{

	}

	echo theme_view('parts/_header');
?>
 <div class="container-fluid"> <!-- Start of Main Container -->

<?php

	echo Template::message();
	echo isset($content) ? $content : Template::yield();

	echo theme_view('parts/_footer');
?>
