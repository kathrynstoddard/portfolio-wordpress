<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package kstheme
 */
?>

<header id="masthead" role="banner">
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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="page-header">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>
    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'kstheme' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->
  <?php edit_post_link( __( 'Edit', 'kstheme' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
