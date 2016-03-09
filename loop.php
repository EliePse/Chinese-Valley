<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		
		<div class="post">
			
			<h1 class="h1 red_txt"><?php the_title(); ?></h1>
			<div class="infos">
				<?php the_category(); ?>
				<h3><?php the_date(); ?></h3>
			</div>
			<div class="preview">
				<?php the_post_thumbnail(); ?>
				<div class="description">
					<?php the_excerpt(); ?>
					<h3><a href="<?php the_permalink(); ?>">Lire la suite</a></h3>
				</div>
			</div>
			
		</div>
		
	<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>