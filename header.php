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
		
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="logotype" />
			
			<div class="menu">
				<p>FR / 中文</p>
				
				<!-- <ul>
					<li>Accueil</li>
					<li>À Propos</li>
					<li>Contact</li>
				</ul> -->
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