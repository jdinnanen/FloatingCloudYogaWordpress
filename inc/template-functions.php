<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package FloatingCloudYoga
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function floatingcloudyoga_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	return $classes;
}
add_filter( 'body_class', 'floatingcloudyoga_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function floatingcloudyoga_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'floatingcloudyoga_pingback_header' );



/**
* Content Embed Max Size
*/
function floatingcloudyoga_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'floatingcloudyoga_content_width', 640 );
}
add_action( 'after_setup_theme', 'floatingcloudyoga_content_width', 0 );



//REMOVES PHP ERROR NOTICE FOR OB FLUSH
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

// Custom Excerpt
function custom_wp_trim_excerpt($text) {
  $raw_excerpt = $text;
  if ( '' == $text ) {
    $text = get_the_content(''); // Original Content
    $text = strip_shortcodes($text); // Minus Shortcodes
    $text = apply_filters('the_content', $text); // Filters
    $text = str_replace(']]>', ']]&gt;', $text); // Replace
    
    $excerpt_length = apply_filters('excerpt_length', 55); // Length
    $excerpt_more = apply_filters('excerpt_more', ' ' . '<a class="readmore" href="'. get_permalink() .'">Read more...</a>');
    $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    
    // Use First Video as Excerpt
    $postcustom = get_post_custom_keys();
    if ($postcustom){
      $i = 1;
      foreach ($postcustom as $key){
        if (strpos($key,'oembed')){
          foreach (get_post_custom_values($key) as $video){
            if ($i == 1){
              $text = $video.$text;
            }
          $i++;
          }
        }  
      }
    }
  }
  return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');



// Disable support for comments and trackbacks in post types

function df_disable_comments_post_types_support() {

  $post_types = get_post_types();

  foreach ($post_types as $post_type) {

    if(post_type_supports($post_type, 'comments')) {

      remove_post_type_support($post_type, 'comments');

      remove_post_type_support($post_type, 'trackbacks');

    }

  }

}

add_action('admin_init', 'df_disable_comments_post_types_support');



// Close comments on the front-end

function df_disable_comments_status() {

  return false;

}

add_filter('comments_open', 'df_disable_comments_status', 20, 2);

add_filter('pings_open', 'df_disable_comments_status', 20, 2);



// Hide existing comments

function df_disable_comments_hide_existing_comments($comments) {

  $comments = array();

  return $comments;

}

add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);



// Remove comments page in menu

function df_disable_comments_admin_menu() {

  remove_menu_page('edit-comments.php');

}

add_action('admin_menu', 'df_disable_comments_admin_menu');



// Redirect any user trying to access comments page

function df_disable_comments_admin_menu_redirect() {

  global $pagenow;

  if ($pagenow === 'edit-comments.php') {

    wp_redirect(admin_url()); exit;

  }

}

add_action('admin_init', 'df_disable_comments_admin_menu_redirect');



// Remove comments metabox from dashboard

function df_disable_comments_dashboard() {

  remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

}

add_action('admin_init', 'df_disable_comments_dashboard');



// Remove comments links from admin bar

function df_disable_comments_admin_bar() {

  if (is_admin_bar_showing()) {

    remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);

  }

}

add_action('init', 'df_disable_comments_admin_bar');