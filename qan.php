<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/TurtleOnni
 * @since             1.0.0
 * @package           Qan
 *
 * @wordpress-plugin
 * Plugin Name:       Question&Answer
 * Plugin URI:        https://debugni.ru/plugins/qan
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Turtle_Onni
 * Author URI:        https://github.com/TurtleOnni
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       qan
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'QAN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-qan-activator.php
 */
function activate_qan() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-qan-activator.php';
	Qan_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-qan-deactivator.php
 */
function deactivate_qan() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-qan-deactivator.php';
	Qan_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_qan' );
register_deactivation_hook( __FILE__, 'deactivate_qan' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-qan.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_qan() {

	$plugin = new Qan();
	$plugin->run();

}
run_qan();
