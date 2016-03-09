<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		
		<div class="post">
			
			<h1 class="h1"><?php the_title(); ?></h1>
			<div class="infos">
				<?php the_category(); ?>
				<h3><?php the_date(); ?></h3>
			</div>
			<div class="preview">
				<div class="sep-1-2">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="sep-1-2">
					<p><?php the_excerpt(); ?></p>
					<h3><a href="<?php the_permalink(); ?>">Lire la suite</a></h3>
				</div>
			</div>
			
		</div>
		
	<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>