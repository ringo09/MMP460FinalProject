<?php get_header(); ?>

<!-- Row for main content area -->
<div class="row">
	<div class="small-12 large-8 columns" id="content" role="main">
		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
		<?php comments_template(); ?>
		<?php endwhile; // End the loop ?>
	</div>
	<?php get_sidebar(); ?>
</div>
		
<?php get_footer(); ?>