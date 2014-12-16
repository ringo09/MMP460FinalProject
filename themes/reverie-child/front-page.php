<?php get_header(); ?>
<!-- Row for main content area -->
<div class="row">
	<div class="large-12 columns">
		<ul class="example-orbit" data-orbit 
				  data-options="animation:slide;
								pause_on_hover:true;
								animation_speed:500;
								navigation_arrows:true;
								bullets:false;">
			<?php
				$args = array("category_name" => "home-posts");
				$work = new WP_Query( $args );
			?>
			<?php if(have_posts()) : while($work->have_posts()) : $work->the_post(); ?>
			<li class="featured-item">
				<a href="<?php the_permalink(); ?>">
					<div id="featuredImage">   
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="orbit-caption">
						<?php the_title(); ?>
						<?php the_excerpt(); ?>
					</div>
				</a>
			</li>
			<?php endwhile; else: ?>  
			<?php endif; ?> <!--End of posts -->
		</ul><!-- ends content div -->
	</div>
</div>
<div class="row">
	<div class="large-8 columns news" >
		<h3 class="themeH">Programs</h3>
		<ul class="panelFix">
			<?php
				$args = array(

					"category_name" => "programs",
					'posts_per_page'   => 5

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
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>