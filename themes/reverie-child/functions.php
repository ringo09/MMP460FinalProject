<?php
    //add nav
    register_nav_menu('nav01', 'nav01');
    register_nav_menu('nav02', 'nav02');
    register_nav_menu('donation', 'donation');

    register_nav_menu('footer01', 'footer01');
    register_nav_menu('footer02', 'footer02');

    add_theme_support('post-thumbnails'); 
    add_image_size('symbol', 1400, 800,true);

    function add_my_sidebar() {
		register_sidebar( array(
			'name'          => 'test sidebar',
			'id'            => 'test-sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>',
		));
	}
	add_action( 'widgets_init', 'add_my_sidebar' );
?>
