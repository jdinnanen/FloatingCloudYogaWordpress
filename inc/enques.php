<?php
/**
 * FloatingCloudYoga functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FloatingCloudYoga
 */

/**
 * Enqueue scripts and styles.
 */
function floatingcloudyoga_scripts() {

//DEFAULT ENQUES
    wp_enqueue_style( 'floatingcloudyoga-style', get_stylesheet_uri() );
    wp_enqueue_script( 'floatingcloudyoga-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'floatingcloudyoga-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

// FONTAWESOME CSS 
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' ); 

//jQuery
    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery-2.1.0.min.js', array(), '20160804', true );  

//SLIDER ENQUES
    wp_enqueue_style ( 'slick-css', get_template_directory_uri() . '/js/third-party/slick/slick.css' );
    wp_enqueue_style ( 'slick-css-theme', get_template_directory_uri() . '/js/third-party/slick/slick-theme.css' );
    wp_enqueue_script ( 'slick-js', get_template_directory_uri() . '/js/third-party/slick/slick.min.js', array('jquery' ), '8.17.17', true );
    wp_enqueue_script ( 'front-page', get_template_directory_uri() . '/js/slick-work.js', array( 'slick-js' ), '8.17.17', true );

//GOOGLE MAP API ENQUES FOR CONTACT PAGE ONLY
  if (is_page ( 23 )){
    wp_enqueue_script ( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA3SE2MtfildXhRtlymcUKzjuVP2j6pOSs', array(), '9.22.17', true );
    wp_enqueue_script ( 'google-map', get_template_directory_uri() . '/js/google-map.js', array(), '9.22.17', true );
  }

//GALLERY ENQUES FOR GALLERY PAGE ONLY
	if ( is_page ( 27 ) ) {
    wp_enqueue_style( 'gallery-style', get_template_directory_uri() . '/css/swipebox.min.css' );
    wp_enqueue_script( 'gallery-js' , get_template_directory_uri() . '/js/jquery.swipebox.min.js', array(), '20160804', true );
    wp_enqueue_script( 'gallery-js-function' , get_template_directory_uri() . '/js/swipebox.js', array(), '20160804', true );
  }

//REPLY OPTION?
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
  
}//END FUNCTION - floatingcloudyoga-scripts()

add_action( 'wp_enqueue_scripts', 'floatingcloudyoga_scripts' );