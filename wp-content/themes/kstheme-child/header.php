<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package kstheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<nav class="site-navigation">
		<div class="row">
				<div class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="container">
						<a href="index.html"><img src="<?php bloginfo('template_directory'); ?>-child/assets/images/k.png"></a>
					<div class="navbar-header col-md-2 pull-right">
					<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
									<!-- The WordPress Menu goes here -->
								<?php wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
										'menu_class' => 'nav right-nav',
										'after' => '//',
										'fallback_cb' => '',
										'menu_id' => 'main-menu',
									)
								); ?>
								<ul class="social-media pull-right">
								<li><a href="https://twitter.com/kathrynrefined" target="_blank"><img src="<?php bloginfo('template_directory'); ?>-child/assets/images/social-twitter.png"></a></li>
								<li><a href="https://github.com/kathrynstoddard" target="_blank"><img src="<?php bloginfo('template_directory'); ?>-child/assets/images/social-github.png"></a></li>
								<li><a href="http://www.linkedin.com/in/kathrynpdx/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>-child/assets/images/social-linkedin.png"></a></li>
						</ul>
					</div>
				</div>
				</div><!-- .navbar -->
		</div><!-- .row -->
</nav><!-- .site-navigation -->
