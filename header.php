<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta name="viewport" content="width=device-width"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="/wp-content/themes/isacommons-wp-theme/assets/css/isaagents.css" type="text/css"/>
	<link rel="stylesheet" href="/wp-content/themes/isacommons-wp-theme/assets/css/font-awesome.min.css"
	      type="text/css"/>
</head>

<body <?php body_class(); ?>>
<header id="masthead" class="site-header" role="banner">
	<div class="commons-logo">
		<a href="/">
			<img src="/wp-content/themes/isacommons-wp-theme/assets/img/isacommons.svg" width="280px"/>
		</a>

		<a href="http://isa-agents.org/publications" class="head-link pull-right" alt="Twitter"> <span class="fa fa-twitter"></span> </a>
		<a href="http://www.facebook.com/isaagents" class="head-link pull-right" alt="Twitter"> <span class="fa fa-facebook"></span> </a>
		<a href="http://isa-agents.org/publications" class="head-link pull-right" alt="Publications"> <span class="fa fa-book"></span> </a>
	</div>



	<div class="commons-description">
		The <strong>ISA Commons</strong> is a growing community that uses the ISA metadata tracking framework to facilitate
		<strong>standards-compliant collection, curation, management</strong>, and <strong>reuse</strong> of datasets in an increasingly diverse set of
		life science domains.
	</div>

	<a href="mailto:isaagents@googlegroups.com?subject=Join the commons">
		<div class="commons-join">
			Join the commons!
		</div>
	</a>



</header>
<div class="tweet-container">
	<div id="twitter_icon" class="pull-left" style="padding-top: 5px; font-size: 1.5em">
		<i class="fa fa-twitter"></i>
	</div>

	<div class="tweet pull-left" id="twitter">
		<div class="spinner">
			<div class="rect1"></div>
			<div class="rect2"></div>
			<div class="rect3"></div>
			<div class="rect4"></div>
			<div class="rect5"></div>
		</div>
	</div>
	<div class="cf"></div>
</div>
<div class="cf"></div>
<br/>
<!-- #masthead -->
<div id="page" class="hfeed site">


	<div id="main" class="wrapper">