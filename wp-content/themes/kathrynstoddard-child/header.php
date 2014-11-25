<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package kathrynstoddard
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<!-- jQuery  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'kathrynstoddard' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <div class="site-branding">
      <a href="#"><img src="images/k.png" alt="Homepage Icon Link"></a>
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <h2><?php bloginfo( 'description' ); ?></h2>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation" role="navigation">
      <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'kathrynstoddard' ); ?></button>
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

  	<!-- Fixed navbar -->
    <div class="nav navbar-default navbar-fixed-top">
      <div class="container">
        <ul class="pull-left">
          <li><a href="index.html"><img src="images/k.png"></a></li>
        </ul>
        <ul class="pull-right right-nav">
        	  <li><a href="index.html">Home</a></li>
            <li>&nbsp;//&nbsp;</li>
          	<li><a href="work.html">Work</a></li>
            <li>&nbsp;//&nbsp;</li>
          	<li><a href="contact.html">Contact</a></li>
            <li>&nbsp;//&nbsp;</li>
          	<li><a href="resume.pdf">Resume</a></li>
          	<li class="social-media"><a href="https://twitter.com/kathrynrefined" target="_blank"><img src="images/social-twitter.png"></a></li>
          	<li><a href="https://github.com/kathrynstoddard" target="_blank"><img src="images/social-github.png"></a></li>
          	<li><a href="http://www.linkedin.com/in/kathrynpdx/" target="_blank"><img src="images/social-linkedin.png"></a></li>
        </ul>
      </div> <!-- End container -->
    </div> <!-- End nav -->

  <div id="content" class="site-content">
