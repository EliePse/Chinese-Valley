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
		if(preg_match('/alignleft/', $html))
			$align = 'asideImg-left';
		else if(preg_match('/aligncenter/', $html))
			$align = 'asideImg-center';
		else if(preg_match('/alignright/', $html))
			$align = 'asideImg-right';
		else
			$align = '';
		return '<div class="article-content-asideImg '. $align .'">'. $html .'</div>';
	}
	add_filter('get_image_tag', 'image_tag', 0, 4);
	
	
	function register_my_menus() {
		register_nav_menus(
			array(
				'lang-menu' => __( 'Language Menu' ),
				'head-menu' => __( 'Head Menu' ),
				'category-menu' => __( 'Category Menu' ),
				'links-menu' => __( 'Links Menu' )
			)
		);
	}
	add_action( 'init', 'register_my_menus' );

	
	/*function arphabet_widgets_init() {

		register_sidebar( array(
			'name'          => 'Home right sidebar',
			'id'            => 'home_right_1',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		) );

	}
	add_action( 'widgets_init', 'arphabet_widgets_init' );*/