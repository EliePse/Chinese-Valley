
<?php get_header(); ?>

<div class="content">
	
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    
	<div class="article-title"><h1 class="h1 red_txt"><?php the_title(); ?></h1></div>
	<div class="article">
		
		<div class="article-content">
			
			<div class="article-infos grey_txt">
				<?php the_category(); ?>
				<h3 class="article-infos-h3 h3"><?php echo get_the_date(); ?></h3>
			</div>
		
			<?php the_content(); ?>
			
		</div>
		
		
	</div>
	
	<?php endwhile; ?>
	<?php endif; ?>
	
</div>

<?php get_footer(); ?>