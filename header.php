<!DOCTYPE html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php the_title(); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
		<?php wp_head(); ?>
	</head>
	<body>
		
		<nav class="red_txt">
		
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="logotype" />
			
			<div class="menu">
				<p>FR / 中文</p>
				
				<ul>
					<li>Accueil</li>
					<li>À Propos</li>
					<li>Contact</li>
				</ul>
				<hr/>
				<ul>
					<li>Marketing</li>
					<li>Designers</li>
					<li>Culture&Art</li>
				</ul>
				<hr/>
				<ul>
					<li>Tumblr</li>
				</ul>
			</div>
		</nav>