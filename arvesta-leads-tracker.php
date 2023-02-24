<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://agrivirtual.eu
 * @since             1.0.0
 * @package           Arvesta_Leads_Tracker
 *
 * @wordpress-plugin
 * Plugin Name:       Arvesta Leads Tracker
 * Plugin URI:        https://agrivirtual.eu
 * Description:       NEED ARVESTA CORE TO WORK - Assign a unique key to a user in order to identify him through session and action 
 * Version:           1.0.0
 * Author:            Remy Chauveau
 * Author URI:        https://agrivirtual.eu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       arvesta-leads-tracker
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
define( 'ARVESTA_LEADS_TRACKER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-arvesta-leads-tracker-activator.php
 */
function activate_arvesta_leads_tracker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-arvesta-leads-tracker-activator.php';
	Arvesta_Leads_Tracker_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-arvesta-leads-tracker-deactivator.php
 */
function deactivate_arvesta_leads_tracker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-arvesta-leads-tracker-deactivator.php';
	Arvesta_Leads_Tracker_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_arvesta_leads_tracker' );
register_deactivation_hook( __FILE__, 'deactivate_arvesta_leads_tracker' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-arvesta-leads-tracker.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_arvesta_leads_tracker() {

	$plugin = new Arvesta_Leads_Tracker();
	$plugin->run();

}
run_arvesta_leads_tracker();
