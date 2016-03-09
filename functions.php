<?php
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' , array(
		'width'         => 88,
		'height'        => 108,
		'default-image' => get_template_directory_uri() . '/src/images/header_logo.png',
		'uploads'       => true
	));