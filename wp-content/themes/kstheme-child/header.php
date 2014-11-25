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
	<div class="container">
		<div class="row">
			<div class="site-navigation-inner col-sm-12">
				<div class="navbar navbar-default">
					<div class="navbar-header">
					<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>

					<!-- Your site title as branding in the menu -->
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				  </div>

				<!-- The WordPress Menu goes here -->
			<?php wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
					'menu_class' => 'nav navbar-default',
					'fallback_cb' => '',
					'menu_id' => 'main-menu',
					'walker' => new wp_bootstrap_navwalker()
				)
			); ?>

				</div><!-- .navbar -->
			</div>
		</div>
	</div><!-- .container -->
</nav><!-- .site-navigation -->

	<!-- Fixed navbar -->
    <div class="nav navbar-default navbar-fixed-top">
      <div class="container">
        <ul class="pull-left">
          <li><a href="index.html"><img src="<?php bloginfo('template_directory'); ?>-child/assets/images/k.png"></a></li>
        </ul>
        <ul class="pull-right right-nav">
        	  <li><a href="index.html">Home</a></li>
            <li>&nbsp;//&nbsp;</li>
          	<li><a href="work.html">Work</a></li>
            <li>&nbsp;//&nbsp;</li>
          	<li><a href="contact.html">Contact</a></li>
            <li>&nbsp;//&nbsp;</li>
          	<li><a href="resume.pdf">Resume</a></li>
          	<li class="social-media"><a href="https://twitter.com/kathrynrefined" target="_blank"><img src="<?php bloginfo('template_directory'); ?>-child/assets/images/social-twitter.png"></a></li>
          	<li><a href="https://github.com/kathrynstoddard" target="_blank"><img src="<?php bloginfo('template_directory'); ?>-child/assets/images/social-github.png"></a></li>
          	<li><a href="http://www.linkedin.com/in/kathrynpdx/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>-child/assets/images/social-linkedin.png"></a></li>
        </ul>
      </div> <!-- End container -->
    </div> <!-- End nav -->

<div class="main-content">
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-8">
