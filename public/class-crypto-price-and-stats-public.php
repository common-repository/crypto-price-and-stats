<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://awplife.com/
 * @since      1.0.0
 *
 * @package    Crypto_Price_And_Stats
 * @subpackage Crypto_Price_And_Stats/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Crypto_Price_And_Stats
 * @subpackage Crypto_Price_And_Stats/public
 * @author     A WP Life <awordpresslife@gmail.com>
 */
class Crypto_Price_And_Stats_Public {

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
	 * @param      string $plugin_name       The name of the plugin.
	 * @param      string $version    The version of this plugin.
	 */

	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

	}

	public function register_shortcodes() {

		add_shortcode( 'CPS-Widget', 'cps_shortcode' );
		function cps_shortcode( $atts ) {

			ob_start();

			if ( isset( $atts['choose_widget_style'] ) ) {
				$choose_widget_style = $atts['choose_widget_style'];
			} else {
				$choose_widget_style = '';
			}
			if ( isset( $atts['cps_widget_ticker_coin_id'] ) ) {
				$cps_widget_ticker_coin_id = $atts['cps_widget_ticker_coin_id'];
			} else {
				$cps_widget_ticker_coin_id = 'bitcoin';
			}
			if ( isset( $atts['cps_list_select_coin'] ) ) {
				$cps_list_select_coin = $atts['cps_list_select_coin'];
			} else {
				$cps_list_select_coin = '';
			}
			if ( isset( $atts['cps_select_coin_type'] ) ) {
				$cps_select_coin_type = $atts['cps_select_coin_type'];
			} else {
				$cps_select_coin_type = '';
			}
			if ( isset( $atts['cps_select_currency'] ) ) {
				$cps_select_currency = $atts['cps_select_currency'];
			} else {
				$cps_select_currency = 'USD';
			}
			if ( isset( $atts['cps_widget_ticker_width'] ) ) {
				$cps_widget_ticker_width = $atts['cps_widget_ticker_width'];
			} else {
				$cps_widget_ticker_width = '';
			}
			if ( isset( $atts['cps_widget_ticker_height'] ) ) {
				$cps_widget_ticker_height = $atts['cps_widget_ticker_height'];
			} else {
				$cps_widget_ticker_height = '';
			}
			if ( isset( $atts['cps_widget_ticker_color'] ) ) {
				$cps_widget_ticker_color = $atts['cps_widget_ticker_color'];
			} else {
				$cps_widget_ticker_color = '#fff';
			}
			if ( isset( $atts['cps_widget_converter_color'] ) ) {
				$cps_widget_converter_color = $atts['cps_widget_converter_color'];
			} else {
				$cps_widget_converter_color = '#4c4c4c';
			}
			if ( isset( $atts['cps_widget_ticker_language'] ) ) {
				$cps_widget_ticker_language = $atts['cps_widget_ticker_language'];
			} else {
				$cps_widget_ticker_language = 'en';
			}

			if ( isset( $atts['cps_widget_heatmap_top'] ) ) {
				$cps_widget_heatmap_top = $atts['cps_widget_heatmap_top'];
			} else {
				$cps_widget_heatmap_top = '100';
			}

			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/crypto-price-and-stats-public-display.php';

			return ob_get_clean();

		}
	}

}
