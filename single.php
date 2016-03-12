
<?php get_header(); ?>

<div class="content">
	
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    
	<div class="article">
		
		<h1 class="article-title"><?php the_title(); ?></h1>
		<div class="post-infos">
				<?php the_category(); ?>
				<h3 class="h3 post-infos-h3"><?php echo get_the_date(); ?></h3>
			</div>
		
		<div class="article-content">
			
			<?php the_content(); ?>
			
		</div>
		
		
	</div>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php get_footer(); ?>