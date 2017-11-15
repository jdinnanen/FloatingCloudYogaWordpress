<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FloatingCloudYoga
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eee' ); ?></a>
	<header>
  	<div class="logo">
      <div class="logo-image">
        <img src="<?php echo get_bloginfo('template_url') ?>/img/rainbow.png"/>
      </div>
      <div class="site-title">
        <h1><a href="">Floating Cloud Yoga</a></h1>
      </div>
      <!-- SOCIAL MEDIA -->
      <div class="social-top">
        <?php get_template_part( 'social-media' );?>
      </div>
    </div>
    <!-- NAV BAR -->
    <nav class="header-nav" id="header-nav" role="navigation">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_class'     => 'nav',
        ) );
      ?>
    </nav> 

  </header>

  <div id="content" class="site-content">
