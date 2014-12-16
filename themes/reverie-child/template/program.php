<?php
/*
Template Name: program
*/
?>
<?php get_header(); ?>
<!-- Row for main content area -->
<div class="row">
	<div class="large-12 columns">
		<?php the_post_thumbnail('symbol'); ?>
	</div>
</div>
<div class="row">
		<?php if( has_post_thumbnail()):  ?>
		<?php else: ?>
		<h2 class="entry-title themeH"><?php the_title(); ?></h2>
		<?php endif; ?>
</div>
<div class="row">
	<div class="large-12 columns">
		<?php
			$args = array(
			"category_name" => "programs",
			);
			$work = new WP_Query( $args );
		?>
		<?php if ( have_posts() ) : ?>
				<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
				<?php /* Start the Loop */ ?>
				<?php while($work->have_posts()) : $work->the_post(); ?>
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