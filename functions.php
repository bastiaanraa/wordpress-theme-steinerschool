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

// Custom Functions to add SORT BY MODIFIED to post and page editor.
// POSTS
// Register the column
function post_modified_column_register( $columns ) {
    $columns['post_modified'] = __( 'Modified', 'mytextdomain' );
    return $columns;
}
add_filter( 'manage_edit-post_columns', 'post_modified_column_register' );

// Display the column content
function post_modified_column_display( $column_name, $post_id ) {
    if ( 'post_modified' != $column_name ){
        return;
    }
    $post_modified = get_post_field('post_modified', $post_id);
    if ( !$post_modified ){
        $post_modified = '' . __( 'undefined', 'mytextdomain' ) . '';
    }
    echo $post_modified;
}
add_action( 'manage_posts_custom_column', 'post_modified_column_display', 10, 2 );

// Register the column as sortable
function post_modified_column_register_sortable( $columns ) {
    $columns['post_modified'] = 'post_modified';
    return $columns;
}
add_filter( 'manage_edit-post_sortable_columns', 'post_modified_column_register_sortable' );
//PAGES
// Register the column
function page_modified_column_register( $columns ) {
    $columns['page_modified'] = __( 'Modified', 'mytextdomain' );
    return $columns;
}
add_filter( 'manage_edit-page_columns', 'page_modified_column_register' );

// Display the column content
function page_modified_column_display( $column_name, $page_id ) {
    if ( 'page_modified' != $column_name ){
        return;
    }
    $page_modified = get_post_field('post_modified', $page_id);
    if ( !$page_modified ){
        $page_modified = '' . __( 'undefined', 'mytextdomain' ) . '';
    }
    echo $page_modified;
}
add_action( 'manage_pages_custom_column', 'page_modified_column_display', 10, 2 );

// Register the column as sortable
function page_modified_column_register_sortable( $columns ) {
    $columns['page_modified'] = 'page_modified';
    return $columns;
}
add_filter( 'manage_edit-page_sortable_columns', 'page_modified_column_register_sortable' );

// end SORT BY MODIFIED

?>