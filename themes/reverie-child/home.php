<?php get_header(); ?>
<!-- Row for main content area -->
<div class="row">
	<div class="small-12 large-8 columns" id="content" role="main">
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
				<?php while ( have_posts() ) : the_post(); ?>
					<li>
						<?php get_template_part( 'content', get_post_format() ); ?>
					</li>
				<?php endwhile; ?>
			</ul>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; // end have_posts() check ?>
		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
			</nav>
		<?php } ?>
	</div>
	<?php get_sidebar(); ?>
</div>	
<?php get_footer(); ?>