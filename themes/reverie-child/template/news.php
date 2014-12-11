<?php
/*
Template Name: news
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
	<div class="large-8 columns">
		<div>
			<h3 class="themeH">News</h3>
			<ul class="panelFix">
				<?php
					$args = array(
						"category_name" => "news",
						'posts_per_page'   => 3
					);
					$work = new WP_Query( $args );
				?>
				<?php if(have_posts()) : while($work->have_posts()) : $work->the_post(); ?>
				<li class="panel">
				  <a href="<?php the_permalink(); ?>">
					  <?php the_title(); ?>
				  </a>
				</li>
				<?php endwhile; else: ?>  
				<?php endif; ?> <!--End of posts -->
			</ul>
		</div>
		<div>
			<h3 class="themeH">Events</h3>
			<ul class="panelFix">
				<?php
					$args = array(
						"category_name" => "event",
						'posts_per_page'   => 3
					);
					$work = new WP_Query( $args );
				?>
				<?php if(have_posts()) : while($work->have_posts()) : $work->the_post(); ?>
				<li class="panel">
				  <a href="<?php the_permalink(); ?>">
					  <?php the_title(); ?>
				  </a>
				</li>
				<?php endwhile; else: ?>  
				<?php endif; ?> <!--End of posts -->
			</ul>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>