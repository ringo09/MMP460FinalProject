</div><!-- Container End -->
<footer>
	<div class="row">
		<div class="large-3 columns">
			<a href="<?php bloginfo( 'url' ); ?>">
				<img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/reverie-child/img/logo.png" alt="logo"/>
			</a>
			<div class="social-media">
				<a href="#"><span class="brandico-facebook-rect"></span></a>
				<a href="#"><span class="brandico-tumblr-rect"></span></a>
			</div>
		</div>
		<div class="large-6 columns button-group">
	      <?php
	        $footer01 = array(
	        'theme_location' => 'footer01',
	      );	
	      ?>
	      <?php wp_nav_menu( $footer01 ); ?>
		</div>
		<div class="large-3 columns">
			<?php	
				$footer02 = array(
				'theme_location' => 'footer02',
				);
			?>
			<?php wp_nav_menu( $footer02 ); ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>