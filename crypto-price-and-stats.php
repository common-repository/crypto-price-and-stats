<?php

/**
 * The plugin file
 *
 * @link              http://awplife.com/
 * @since             0.0.6
 * @package           Crypto_Price_And_Stats
 *
 * @wordpress-plugin
 * Plugin Name:       Crypto Price And Stats
 * Plugin URI:
 * Description:       Crypto Price And Stats is a WordPress plugin displays live prices and stats of crypto coins.
 * Version:           0.0.5
 * Author:            A WP Life
 * Author URI:        http://awplife.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       crypto-price-and-stats
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 0.0.5 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CRYPTO_PRICE_AND_STATS_VERSION', '0.0.6' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-crypto-price-and-stats-activator.php
 */
function activate_crypto_price_and_stats() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-crypto-price-and-stats-activator.php';
	Crypto_Price_And_Stats_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-crypto-price-and-stats-deactivator.php
 */
function deactivate_crypto_price_and_stats() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-crypto-price-and-stats-deactivator.php';
	Crypto_Price_And_Stats_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_crypto_price_and_stats' );
register_deactivation_hook( __FILE__, 'deactivate_crypto_price_and_stats' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-crypto-price-and-stats.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.0.5
 */
function run_crypto_price_and_stats() {
	$plugin = new Crypto_Price_And_Stats();
	$plugin->run();
}
run_crypto_price_and_stats();
