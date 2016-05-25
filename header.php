<!DOCTYPE HTML>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-overrides.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/steinerschool.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
</head>

<body>
	<header class="container masthead" role="banner">
		<div class="row">
			<img src="<?php echo get_template_directory_uri(); ?>/images/naamschool.gif" alt="" border="0" />
		</div>
		<div class="row">
			<a class="nohover" href="http://www.steinerschoolgent.be/"><img src="<?php header_image(); ?>" alt="header image" border="0" /></a>
		</div>
	</header>
	<div id="wrap" class='container'>
	<nav class="navbar navbar-static-top" id="nav" role="navigation">
		<div class="container">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
	</nav>
	<!-- <div id="rs_breadcrumbs"></div> !-->
	
