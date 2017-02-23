<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://rnaby.github.io/
 * @since      1.0.0
 *
 * @package    Wp_Create_Post_From_Frontend
 * @subpackage Wp_Create_Post_From_Frontend/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Create_Post_From_Frontend
 * @subpackage Wp_Create_Post_From_Frontend/includes
 * @author     Khan M Rashedun-Naby <naby88@gmail.com>
 */
class Wp_Create_Post_From_Frontend_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-create-post-from-frontend',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
