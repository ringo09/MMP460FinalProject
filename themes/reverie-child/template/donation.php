<?php
/*
Template Name: donation
*/
?>
<?php get_header(); ?>
	<!-- Row for main content area -->
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; // End the loop ?>
<?php get_footer(); ?>