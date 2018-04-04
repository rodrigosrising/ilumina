<?php

function theme_scripts() {
	wp_enqueue_style( 'foundation', get_stylesheet_directory_uri() . '/assets/css/foundation.css' );
	wp_enqueue_style( 'mui', get_stylesheet_directory_uri() . '/assets/css/mui.css' );
	wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/assets/slick/slick.css' );
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/assets/slick/slick-theme.css' );
	wp_enqueue_style( 'google-fonts','https://fonts.googleapis.com/css?family=Open+Sans:300,400%7cPlayfair+Display:400i,900' );
	wp_enqueue_style( 'font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'theme_style', get_stylesheet_uri() );

	wp_enqueue_script('jquery');
	wp_enqueue_script('what-input', get_template_directory_uri() . '/assets/js/vendor/what-input.js', array(), 'null', true);
	wp_enqueue_script('foundation', get_template_directory_uri() . '/assets/js/vendor/foundation.js', array(), 'null', true);
	wp_enqueue_script('motion-ui', get_template_directory_uri() . '/assets/js/vendor/motion-ui.js', array(), 'null', true);
	wp_enqueue_script('slickslide', get_template_directory_uri() . '/assets/slick/slick.js', array(), 'null', true);
	wp_enqueue_script('theme_script', get_template_directory_uri() . '/assets/js/app.js', array(), 'null', true);

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function college_features(){
	register_nav_menus(
		array(
			'headerMenu' => __( 'Header Menu' ),
			'footerMenu1' => __( 'Footer Menu 1' )
			)
		);
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'college_features');
