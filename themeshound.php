<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://themeshound.com
 * @since             1.0.0
 * @package           Themeshound
 *
 * @wordpress-plugin
 * Plugin Name:       ThemesHound
 * Plugin URI:        https://wordpress.org/plugins/themeshound/
 * Description:       Search engine for WordPress themes and templates.
 * Version:           1.0.0
 * Author:            Themes Hound
 * Author URI:        https://themeshound.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       themeshound
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-themeshound-activator.php
 */
function activate_themeshound() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-themeshound-activator.php';
	Themeshound_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-themeshound-deactivator.php
 */
function deactivate_themeshound() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-themeshound-deactivator.php';
	Themeshound_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_themeshound' );
register_deactivation_hook( __FILE__, 'deactivate_themeshound' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-themeshound.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_themeshound() {

	$plugin = new Themeshound();
	$plugin->run();

}
run_themeshound();
