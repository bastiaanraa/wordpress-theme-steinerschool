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


add_action ( 'manage_pages_custom_column',	'rkv_heirch_columns',	10,	2	);
add_filter ( 'manage_edit-page_columns',	'rkv_page_columns'				);
function rkv_heirch_columns( $column, $post_id ) {
	switch ( $column ) {
	case 'modified':
		$m_orig		= get_post_field( 'post_modified', $post_id, 'raw' );
		$m_stamp	= strtotime( $m_orig );
		$modified	= date('Y/m/d H:i', $m_stamp );
	       	$modr_id	= get_post_meta( $post_id, '_edit_last', true );
	       	$auth_id	= get_post_field( 'post_author', $post_id, 'raw' );
	       	$user_id	= !empty( $modr_id ) ? $modr_id : $auth_id;
	       	$user_info	= get_userdata( $user_id );
	
	       	echo '<p class="mod-date">';
	       	echo '<em>'.$modified.'</em><br />';
	       	echo 'by <strong>'.$user_info->display_name.'<strong>';
	       	echo '</p>';
		break;
	// end all case breaks
	}
}
function rkv_page_columns( $columns ) {
	$columns['modified']	= 'Last Modified';
	return $columns;
}

// Register the column as sortable
function rkv_page_modified_column_register_sortable( $columns ) {
    $columns['modified'] = 'modified';
    return $columns;
}
add_filter( 'manage_edit-page_sortable_columns', 'rkv_page_modified_column_register_sortable' );
?>