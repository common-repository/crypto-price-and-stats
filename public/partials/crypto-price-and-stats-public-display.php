<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://awplife.com/
 * @since      1.0.0
 *
 * @package    Crypto_Price_And_Stats
 * @subpackage Crypto_Price_And_Stats/public/partials
 */
?>
<?php
if ( $choose_widget_style == 'bank_1' ) {

	wp_enqueue_script( 'coin-ticker-widget-js', plugin_dir_url( __FILE__ ) . 'js/coin-ticker-widget.js' );
	?>
<coingecko-coin-ticker-widget coin-id="<?php echo esc_html( $cps_widget_ticker_coin_id ); ?>" currency="<?php echo esc_html( $cps_select_currency ); ?>" locale="<?php echo esc_html( $cps_widget_ticker_language ); ?>" width="<?php echo esc_html( $cps_widget_ticker_width ); ?>" background-color="<?php echo esc_html( $cps_widget_ticker_color ); ?>"></coingecko-coin-ticker-widget>

	<?php
} if ( $choose_widget_style == 'bank_2' ) {

	wp_enqueue_script( 'coin-ticker-list-widget-js', plugin_dir_url( __FILE__ ) . 'js/ticker-list-widget.js' );
	?>
<coingecko-coin-market-ticker-list-widget coin-id="<?php echo esc_html( $cps_widget_ticker_coin_id ); ?>" currency="<?php echo esc_html( $cps_select_currency ); ?>" locale="<?php echo esc_html( $cps_widget_ticker_language ); ?>" width="<?php echo esc_html( $cps_widget_ticker_width ); ?>" background-color="<?php echo esc_html( $cps_widget_ticker_color ); ?>"></coingecko-coin-market-ticker-list-widget>


	<?php
} if ( $choose_widget_style == 'bank_4' ) {

	wp_enqueue_script( 'coingecko-coin-converter-widget-js', plugin_dir_url( __FILE__ ) . 'js/coingecko-coin-converter-widget.js' );
	?>
<coingecko-coin-converter-widget coin-id="<?php echo esc_html( $cps_widget_ticker_coin_id ); ?>" currency="<?php echo esc_html( $cps_select_currency ); ?>" locale="<?php echo esc_html( $cps_widget_ticker_language ); ?>" width="<?php echo esc_html( $cps_widget_ticker_width ); ?>" font-color="<?php echo esc_html( $cps_widget_ticker_width ); ?>" background-color="<?php echo esc_html( $cps_widget_ticker_color ); ?>"></coingecko-coin-converter-widget>

	<?php
} if ( $choose_widget_style == 'bank_5' ) {

	wp_enqueue_script( 'coingecko-coin-list-widget-js', plugin_dir_url( __FILE__ ) . 'js/coingecko-coin-list-widget.js' );
	?>
<coingecko-coin-list-widget coin-ids="<?php echo esc_html( $cps_list_select_coin ); ?>" currency="<?php echo esc_html( $cps_select_currency ); ?>" locale="<?php echo esc_html( $cps_widget_ticker_language ); ?>" width="<?php echo esc_html( $cps_widget_ticker_width ); ?>"></coingecko-coin-list-widget>

	<?php
} if ( $choose_widget_style == 'bank_6' ) {

	wp_enqueue_script( 'coingecko-coin-price-marquee-widget-js', plugin_dir_url( __FILE__ ) . 'js/coingecko-coin-price-marquee-widget.js' );
	?>
<coingecko-coin-price-marquee-widget coin-ids="<?php echo esc_html( $cps_list_select_coin ); ?>" currency="<?php echo esc_html( $cps_select_currency ); ?>" locale="<?php echo esc_html( $cps_widget_ticker_language ); ?>" background-color="<?php echo esc_html( $cps_widget_ticker_color ); ?>"></coingecko-coin-price-marquee-widget>

	<?php
} if ( $choose_widget_style == 'bank_7' ) {

	wp_enqueue_script( 'coingecko-coin-price-static-headline-widget-js', plugin_dir_url( __FILE__ ) . 'js/coingecko-coin-price-static-headline-widget.js' );
	?>
<coingecko-coin-price-static-headline-widget coin-ids="<?php echo esc_html( $cps_list_select_coin ); ?>" currency="<?php echo esc_html( $cps_select_currency ); ?>" locale="<?php echo esc_html( $cps_widget_ticker_language ); ?>" background-color="<?php echo esc_html( $cps_widget_ticker_color ); ?>"></coingecko-coin-price-static-headline-widget>

	<?php
} if ( $choose_widget_style == 'bank_8' ) {

	wp_enqueue_script( 'coingecko-coin-heatmap-widget-js', plugin_dir_url( __FILE__ ) . 'js/coingecko-coin-heatmap-widget.js' );
	?>
<coingecko-coin-heatmap-widget width="<?php echo esc_html( $cps_widget_ticker_width ); ?>" height="<?php echo esc_html( $cps_widget_ticker_height ); ?>"  locale="<?php echo esc_html( $cps_widget_ticker_language ); ?>" top="<?php echo esc_html( $cps_widget_heatmap_top ); ?>"></coingecko-coin-heatmap-widget>

	<?php
} if ( $choose_widget_style == 'bank_9' ) {

	wp_enqueue_script( 'coingecko-coin-compare-chart-widget-js', plugin_dir_url( __FILE__ ) . 'js/coingecko-coin-compare-chart-widget.js' );
	?>
<coingecko-coin-compare-chart-widget coin-ids="<?php echo esc_html( $cps_list_select_coin ); ?>" currency="<?php echo esc_html( $cps_select_currency ); ?>" locale="<?php echo esc_html( $cps_widget_ticker_language ); ?>" type="<?php echo esc_html( $cps_select_coin_type ); ?>"></coingecko-coin-compare-chart-widget>

<?php } ?>
