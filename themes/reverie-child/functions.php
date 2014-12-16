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
	/*
	function add_fancybox() {
	    wp_enqueue_script( 'fancybox-js',  get_stylesheet_directory_uri() . '/fancybox/jquery.fancybox.pack.js', array( 'jquery' ), false, true );
	    wp_enqueue_style( 'fancybox-style',  get_stylesheet_directory_uri() . '/fancybox/jquery.fancybox.css' );

	    //this is our code that sets up fancybox to use in WP
	    wp_enqueue_script( 'fancybox-wp-init',  get_stylesheet_directory_uri() . '/fancybox/fancybox-wp-init.js', array( 'fancybox-js' ), false, true );

	    //this lets you see other images as thumbs
	    wp_enqueue_script( 'fancybox-thumbs',  get_stylesheet_directory_uri() . '/fancybox/helpers/jquery.fancybox-thumbs.js', array( 'fancybox-js' ), false, true );
	    wp_enqueue_style( 'fancybox-style-thumbs',  get_stylesheet_directory_uri() . '/fancybox/helpers/jquery.fancybox-thumbs.css', array('fancybox-style') );
	}
	add_action( 'wp_enqueue_scripts', 'add_fancybox' );
	*/

	if ( ! function_exists( 'reverie_entry_meta' ) ) {
    function reverie_entry_meta() {
        echo '<span class="byline author">'. __('Written by ', 'reverie') . get_the_author() .', </span>';
        echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. get_the_time('F jS, Y') .'</time>';
    }
};
?>
