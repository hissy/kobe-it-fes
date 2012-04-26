<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
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
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Mobile Viewport Fix -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="<?php echo $site_description; ?>">
<meta name="author" content="Kobe IT Festival">
<meta name="Copyright" content="Copyright Kobe IT Festival 2012. All Rights Reserved.">

<!-- CSS: screen, mobile & print are all in the same file -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">

<!-- fav and touch icons -->
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/apple-touch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/apple-touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/apple-touch-icon-iphone4.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/apple-touch-icon-ipad3.png">

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- all our JS is at the bottom of the page, except for Modernizr. -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/modernizr.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="page" class="container">

	<header id="masthead" class="page-header" role="banner">
		<h1 class="logo"><a href="<?php echo home_url( '/' ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="Kobe IT Festival" width="100" height="100" /></a></h1>
		<h2 class="site-name"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/title.png" alt="Kobe IT Festival 2012" width="360" height="33" /></h2>
		<p class="event-date"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/event-date.png" alt="2012.10.05(fri)-06(sat)" width="247" height="28" /></p>
		<div class="event-detail">
			<h3>第2回 神戸ITフェスティバル</h3>
			<p>2012年10月5日（金）、6日（土） 入場無料　会場：神戸市産業振興センター <a href="http://www.kobe-ipc.or.jp/access/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon_map.gif" alt="MAP" width="40" height="15" /></a></p>
		</div>
		<nav id="primary-nav" role="navigation">
			<?php
			$args = array( 'container' => false, 'menu_class' => 'nav nav-pills', 'walker' => new Bootstrap_Walker_Nav_Menu, 'depth' => 2, 'theme_location' => 'primary' );
			wp_nav_menu( $args );
			?>
		</nav>
	</header><!-- #masthead -->