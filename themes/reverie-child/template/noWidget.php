<?php
/*
Template Name: No Widget
*/
?>
<?php get_header(); ?>
	<!-- Row for main content area -->
	<div class="row">
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; // End the loop ?>
	</div>
<?php get_footer(); ?>