<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://rnaby.github.io/
 * @since             1.0.0
 * @package           Wp_Create_Post_From_Frontend
 *
 * @wordpress-plugin
 * Plugin Name:       WP Create Post From Frontend
 * Plugin URI:        https://github.com/rnaby/WP_Create_Post_From_Frontend
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Khan M Rashedun-Naby
 * Author URI:        http://rnaby.github.io/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-create-post-from-frontend
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-create-post-from-frontend-activator.php
 */
function activate_wp_create_post_from_frontend() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-create-post-from-frontend-activator.php';
	Wp_Create_Post_From_Frontend_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-create-post-from-frontend-deactivator.php
 */
function deactivate_wp_create_post_from_frontend() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-create-post-from-frontend-deactivator.php';
	Wp_Create_Post_From_Frontend_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_create_post_from_frontend' );
register_deactivation_hook( __FILE__, 'deactivate_wp_create_post_from_frontend' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-create-post-from-frontend.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_create_post_from_frontend() {

	$plugin = new Wp_Create_Post_From_Frontend();
	$plugin->run();

}
run_wp_create_post_from_frontend();
