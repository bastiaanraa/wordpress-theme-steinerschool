<?php 

function custom_theme_setup() {
	$args = array(
		'width'         => 960,
		'height'        => 200,
		'default-image' => get_template_directory_uri() . '/images/header/voorjaar_3.jpg',
		'uploads'       => true,
	);
	add_theme_support( 'custom-header', $args );

	/*
	 * Default custom headers packaged with the theme.
	 * %s is a placeholder for the theme template directory URI.
	 */
	register_default_headers( array(
		'header1' => array(
			'url' => '%s/images/header/header1.jpg',
			'thumbnail_url' => '%s/images/header/header1.jpg',
			'description'   => _x( 'Circle', 'header image description', 'twentythirteen' )	
		),
	) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function register_my_menu() {
	register_nav_menus(
    array(
      'header-menu' => 'Header Menu',
      //'side-menu' => 'Side Menu',
      'footer-menu' => 'Footer Menu'
     )
   );
}
add_action( 'init', 'register_my_menu' );

?>