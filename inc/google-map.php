<?php
/**
 * FloatingCloudYoga functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FloatingCloudYoga
 */

//GOOGLE MAP API W/ API KEY SETTING
function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyA3SE2MtfildXhRtlymcUKzjuVP2j6pOSs');

}
add_action('acf/init', 'my_acf_init');