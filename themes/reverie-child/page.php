<?php get_header(); ?>

<!-- Row for main content area -->

<div class="row">
	<div class="large-12 columns">
		<?php the_post_thumbnail('symbol'); ?>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<?php if( has_post_thumbnail()):  ?>
		<?php else: ?>
		<h2 class="entry-title themeH"><?php the_title(); ?></h2>
		<?php endif; ?>
	</div>
</div>
<div class="row">
	<div class="small-12 large-8 columns">
	
		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; // End the loop ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>