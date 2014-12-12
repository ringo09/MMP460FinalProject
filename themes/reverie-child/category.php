<?php get_header(); ?>
<!--category-->

<div class="row">
	<div class="large-12 columns">
		<h2 class="entry-title themeH category"><?php single_cat_title(); ?></h2>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
		<?php if ( have_posts() ) : ?>
				<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
				<?php /* Start the Loop */ ?>
				<?php while(have_posts()) : the_post(); ?>
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
</div>
		
<?php get_footer(); ?>