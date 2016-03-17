<!DOCTYPE html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php echo get_bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
		<?php wp_head(); ?>
	</head>
	<body>
		
		<nav class="red_txt">
		
			<a href="<?php bloginfo('url'); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="logotype" /></a>
			
			<div class="menu">
			
				<?php
				$menu_name = 'lang-menu';
				$locations = get_nav_menu_locations();
				$menu_id   = $locations[ $menu_name ] ;
				// print_r( wp_get_nav_menu_items( $menu_id ) );
				wp_nav_menu(array(
					'theme_location' => 'lang-menu',
					'menu_class' => 'language-menu',
					'container' => ''
				));
				
				?>
				
				<?php
				wp_nav_menu(array(
					'theme_location' => 'head-menu',
					'menu_class' => '',
					'container' => ''
				));
				?>
				
				<hr/>
				
				<?php
				wp_nav_menu(array(
					'theme_location' => 'category-menu',
					'menu_class' => '',
					'container' => ''
				));
				/*wp_list_categories(array(
					
					'orderby' => 'ID',
					'title_li' => '',
					'child_of' => 3,
					'hide_empty' => 0
					
				));*/
				?>
				<hr/>
				<?php 
				wp_nav_menu(array(
					'theme_location' => 'links-menu',
					'menu_class' => '',
					'container' => ''
				));
				?>
			</div>
		</nav>