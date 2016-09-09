<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="nl"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-overrides.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/steinerschool.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<header class="container masthead" role="banner">
		<div class='fixed sitetitle'>
			<?php bloginfo( 'name' ); ?>
		</div>
		<div id="bigheaderimage" class="hidden-xs hidden-sm">
			<a class="nohover" href="http://www.steinerschoolgent.be/"><img src="<?php header_image(); ?>" alt="header image" border="0" /></a>
		</div>
	</header>
	<div id="wrap" class='container'>
	<nav class="navbar navbar-static-top" id="nav" role="navigation">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
		<div class="container collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php wp_nav_menu( array( 'menu' => 'header-menu', 'depth' => 1 ) ); ?>
		</div>
		
		
	</nav>
	<!-- <div id="rs_breadcrumbs"></div> -->
	
