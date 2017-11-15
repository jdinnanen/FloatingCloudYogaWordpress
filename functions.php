<?php
/**
 * FloatingCloudYoga functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FloatingCloudYoga
 */

/**
 * Implement the After Theme Setup feature.
 */
require get_template_directory() . '/inc/after-setup.php';

/**
 * Implement the Custom Post Types.
 */
require get_template_directory() . '/inc/custom-posts.php';

/**
 * Implement the Widgets.
 */
//require get_template_directory() . '/inc/widgets.php';

/**
 * Implement the Google Map.
 */
require get_template_directory() . '/inc/google-map.php';

/**
 * Implement the Custom Enques.
 */
require get_template_directory() . '/inc/enques.php';

/**
 * Implement the Social Media.
 */
require get_template_directory() . '/inc/social-media.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}