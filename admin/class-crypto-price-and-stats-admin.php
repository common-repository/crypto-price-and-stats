<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://awplife.com/
 * @since      1.0.0
 *
 * @package    Crypto_Price_And_Stats
 * @subpackage Crypto_Price_And_Stats/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Crypto_Price_And_Stats
 * @subpackage Crypto_Price_And_Stats/admin
 * @author     A WP Life <awordpresslife@gmail.com>
 */
class Crypto_Price_And_Stats_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of this plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function register_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Crypto_Price_And_Stats_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Crypto_Price_And_Stats_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_register_style( 'crypto-price-and-stats-admin-css', plugin_dir_url( __FILE__ ) . 'css/crypto-price-and-stats-admin.css', array(), $this->version, 'all' );
		wp_register_style( 'crypto-multi-select-css', plugin_dir_url( __FILE__ ) . 'css/multi-select.css', array(), $this->version, 'all' );
		wp_register_style( 'crypto-bootstrap-min-css', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );
		wp_register_style( 'select2-min-css', plugin_dir_url( __FILE__ ) . 'css/select2.min.css', array(), $this->version, 'all' );
	}
	// Enqueue own scripts

	/*
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	*/

	public function register_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Crypto_Price_And_Stats_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Crypto_Price_And_Stats_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( 'jquery' );
		wp_register_script( 'jquery-validate-min-js', plugin_dir_url( __FILE__ ) . 'js/jquery.validate.min.js', array( 'jquery' ), null, true );
		wp_register_script( 'jquery-steps-js', plugin_dir_url( __FILE__ ) . 'js/jquery.steps.js', array( 'jquery' ), null, true );
		wp_register_script( 'jquery-multi-select-js', plugin_dir_url( __FILE__ ) . 'js/multi-select.js', array( 'jquery' ), null, true );
		wp_register_script( 'select2-min-js', plugin_dir_url( __FILE__ ) . 'js/select2.min.js', array( 'jquery' ), null, true );
		wp_register_script( 'main-js', plugin_dir_url( __FILE__ ) . 'js/main.js', array( 'jquery' ), null, true );

	}

	public function load_textdomain() {
		load_plugin_textdomain( 'crypto-price-and-stats', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}

	/* Add menu pages */
	public function cps_menu() {
		add_menu_page( 'Crypto Stats', 'Crypto Stats', 'manage_options', 'cps-menus', array( $this, 'crypto_stats_page' ), 'dashicons-chart-bar', 30 );
	}

	/* Main page create crypto ststs */
	public function crypto_stats_page() {
		// enqueue style
		wp_enqueue_style( 'crypto-price-and-stats-admin-css' );
		wp_enqueue_style( 'crypto-multi-select-css' );
		wp_enqueue_style( 'select2-min-css' );

		// enqueue script

		wp_enqueue_script( 'wp-color-picker' );
		wp_enqueue_script( 'jquery-multi-select-js' );
		wp_enqueue_script( 'jquery-validate-min-js' );
		wp_enqueue_script( 'jquery-steps-js' );
		wp_enqueue_script( 'main-js' );
		wp_enqueue_script( 'select2-min-js' );

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/crypto-price-and-stats-admin-display.php';
	}

	public function crypto_settings_page() {
	}

}
