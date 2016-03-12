<?php
	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 365, 200, array( 'center', 'center')  );
	
	add_theme_support( 'custom-header' , array(
		'width'         => 88,
		'height'        => 108,
		'default-image' => get_template_directory_uri() . '/src/images/header_logo.png',
		'uploads'       => true
	));
	
	
	function image_tag($html, $id, $alt, $title) {
		return '<div class="article-content-asideImg">'. $html .'</div>';
	}
	add_filter('get_image_tag', 'image_tag', 0, 4);