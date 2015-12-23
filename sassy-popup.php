<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.shinrafenr.com
 * @since             1.0.0
 * @package           Sassy_Popup
 *
 * @wordpress-plugin
 * Plugin Name:       Sassy Popup
 * Plugin URI:        http://plugin.www.shinrafenr.com/sassy-popup
 * Description:       Sassy Popup show popup on your webpage.
 * Version:           1.0.0
 * Author:            Shinra Fenr
 * Author URI:        http://www.shinrafenr.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sassy-popup
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sassy-popup-activator.php
 */
function activate_sassy_popup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sassy-popup-activator.php';
	Sassy_Popup_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sassy-popup-deactivator.php
 */
function deactivate_sassy_popup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sassy-popup-deactivator.php';
	Sassy_Popup_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sassy_popup' );
register_deactivation_hook( __FILE__, 'deactivate_sassy_popup' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sassy-popup.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sassy_popup() {

	$plugin = new Sassy_Popup();
	$plugin->run();

}
run_sassy_popup();
