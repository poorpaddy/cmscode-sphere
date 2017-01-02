<!doctype html>
<!--[if lt IE 7]><html class="no-js ie ie6 oldie" lang="en"><![endif]--><!--[if IE 7]><html class="no-js ie ie7 oldie" lang="en"><![endif]--><!--[if IE 8]><html class="no-js ie ie8 oldie" lang="en"><![endif]--><!--[if IE 9]><html class="no-js ie ie9 oldie" lang="en"><![endif]--><!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
		<meta name="viewport" content="width=device-width">
		<link href="<?php echo get_bloginfo('template_directory'); ?>/css/mini.php?files=normalize,main" rel="stylesheet" type="text/css">	

        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/modernizr-2.6.2.min.js"></script>
		<?php wp_head(); ?>
	</head>
	<body style="position: relative; min-height: 100%; top: 0px;">

		<div id="top">
			<div id="header">
				<div id="topLogo">
					<a id="top"></a>
					<a href="<?php bloginfo('wpurl'); ?>/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" alt="W3Schools.com" style="border:0;margin-top:5px;" height="69" width="336"></a>
				</div>
			</div>
			<div id="topnav">
				<div id="topnavTut">
					<a class="topnav" href="<?php bloginfo('wpurl'); ?>/">HOME </a>
				</div>
			</div>
			<div id="page">
				<div id="leftcolumn">
					<h2 class="left"><span class="left_h2">Sphere</span> CMS</h2>
					<?php wp_nav_menu( array( 'theme_location' => 'cms-menu' ) ); ?>
					<h2 class="left"><span class="left_h2">WP Sphere</span> Plugin</h2>
					<?php wp_nav_menu( array( 'theme_location' => 'plugin-menu' ) ); ?>
					<br>
				</div>
				<div id="main">
