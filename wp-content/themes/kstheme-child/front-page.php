<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package kstheme
 */

get_header(); ?>

<p>
  This is the front-page
</p>

<header id="masthead" class="site-header" role="banner">
  <div class="container">
    <div class="row">
      <div class="site-header-inner col-sm-12">

        <?php $header_image = get_header_image();
        if ( ! empty( $header_image ) ) { ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
          </a>
        <?php } // end if ( ! empty( $header_image ) ) ?>


        <div class="site-branding">
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
        </div>

      </div>
    </div>
  </div><!-- .container -->
</header><!-- #masthead -->

	<?php while ( have_posts() ) : the_post(); ?>


	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
