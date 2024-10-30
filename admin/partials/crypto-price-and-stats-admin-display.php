<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://awplife.com/
 * @since      1.0.0
 *
 * @package    Crypto_Price_And_Stats
 * @subpackage Crypto_Price_And_Stats/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="main">
	<div class="container">
		<form method="POST" id="signup-form" class="signup-form" action="#">
			<div>
				<!--Step 1 select crypto and stats-->
				<h3><?php esc_html_e( 'Select Crypto Stats Type', 'crypto-price-and-stats' ); ?></h3>
				<fieldset>
					<h2><?php esc_html_e( 'Select Crypto Stats Type', 'crypto-price-and-stats' ); ?></h2>
					<p class="desc"><?php esc_html_e( 'Please select stats type and proceed to next step', 'crypto-price-and-stats' ); ?></p>
					<div class="fieldset-content">
						<div class="choose-bank">
							<div class="form-radio-flex">
								<div class="form-radio-item">
									<input type="radio" name="choose_widget_style" id="bank_1" value="bank_1" checked="checked" />
									<label for="bank_1">
										<img src="<?php echo esc_url(plugin_dir_url( __DIR__ ).'img/coin-ticker.png'); ?>" alt="" height="auto">
									</label>
								</div>
								<div class="form-radio-item">
									<input type="radio" name="choose_widget_style" id="bank_2" value="bank_2">
									<label for="bank_2">
										<img src="<?php echo esc_url(plugin_dir_url( __DIR__ ).'img/coin-ticker-list.png'); ?>" alt="">
									</label>
								</div>
								<div class="form-radio-item">
									<input type="radio" name="choose_widget_style" id="bank_4" value="bank_4">
									<label for="bank_4">
										<img src="<?php echo esc_url(plugin_dir_url( __DIR__ ).'img/coin-converter-widget.png'); ?>" alt="">
									</label>
								</div>
								<div class="form-radio-item">
									<input type="radio" name="choose_widget_style" id="bank_5" value="bank_5">
									<label for="bank_5">
										<img src="<?php echo esc_url(plugin_dir_url( __DIR__ ).'img/coin-list-widget.png'); ?>" alt="">
									</label>
								</div>
								<div class="form-radio-item">
									<input type="radio" name="choose_widget_style" id="bank_6" value="bank_6">
									<label for="bank_6">
										<img src="<?php echo esc_url(plugin_dir_url( __DIR__ ).'img/coin-price-marquee.png'); ?>" alt="">
									</label>
								</div>
								<div class="form-radio-item">
									<input type="radio" name="choose_widget_style" id="bank_7" value="bank_7">
									<label for="bank_7">
										<img src="<?php echo esc_url(plugin_dir_url( __DIR__ ).'img/coin-price-static-headline.png'); ?>" alt="">
									</label>
								</div>
								<div class="form-radio-item">
									<input type="radio" name="choose_widget_style" id="bank_8" value="bank_8">
									<label for="bank_8">
										<img src="<?php echo esc_url(plugin_dir_url( __DIR__ ).'img/coin-heatmap.png'); ?>" alt="">
									</label>
								</div>
								<div class="form-radio-item">
									<input type="radio" name="choose_widget_style" id="bank_9" value="bank_9">
									<label for="bank_9">
										<img src="<?php echo esc_url(plugin_dir_url( __DIR__ ).'img/coin-compare-chart.png'); ?>" alt="">
									</label>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
				<!--Step 2 settings -->
				<h3><?php esc_html_e( 'Crypto Stats Settings', 'crypto-price-and-stats' ); ?></h3>
				<fieldset>
					<h2><?php esc_html_e( 'Crypto Stats Settings', 'crypto-price-and-stats' ); ?></h2>
					<p class="desc"><?php esc_html_e( 'Please enter your infomation and proceed to next step so we can build your account', 'crypto-price-and-stats' ); ?></p>
					<div class="fieldset-content">
						<div class="form-group widget_setting_first">
							<label class="form-label"><?php esc_html_e( 'Coin Id', 'crypto-price-and-stats' ); ?></label>
							<select class="form-select" id="cps_widget_ticker_coin_id" name="cps_widget_ticker_coin_id" aria-label="Default select example">
								<option value=""><?php esc_html_e( '--Please choose an option--', 'crypto-price-and-stats' ); ?></option>
								<?php require 'crypto-currency-file.php'; ?>					
							</select>
						</div>
					
						<div class="form-group widget_setting_eight">
							<label class="form-label"><?php esc_html_e( 'Select Coins', 'crypto-price-and-stats' ); ?></label>
							<select class="form-select" name="cps_list_select_coin[]" multiple id="cps_list_select_coin" aria-label="Default select example">
								<?php require 'crypto-currency-file.php'; ?>					
							</select>
						</div>
						
						<div class="form-group widget_setting_ten">
							<label class="form-label"><?php esc_html_e( 'Type', 'crypto-price-and-stats' ); ?></label>
							<select class="form-select" id="cps_select_coin_type" name="cps_select_coin_type" aria-label="Default select example">
								<option value=""><?php esc_html_e( '--Please choose an option--', 'crypto-price-and-stats' ); ?></option>
								<option value="market_cap">Market Cap</option>
								<option value="price">Price</option>
							</select>
						</div>
						
						<div class="form-group widget_setting_two">
							<label class="form-label"><?php esc_html_e( 'Select Fiat Currency', 'crypto-price-and-stats' ); ?></label>
							<select class="form-select" id="cps_select_currency" name="cps_select_currency" aria-label="Default select example">
								<option value=""><?php esc_html_e( '--Please choose an option--', 'crypto-price-and-stats' ); ?></option>
								<option value="usd">USD</option>
								<option value="gbp">GBP</option>
								<option value="eur">EUR</option>
								<option value="inr">INR</option>
								<option value="jpy">JPY</option>
								<option value="cny">CNY</option>
								<option value="ils">ILS</option>
								<option value="krw">KRW</option>
								<option value="rub">RUB</option>
								<option value="dkk">DKK</option>
								<option value="pln">PLN</option>
								<option value="aud">AUD</option>
								<option value="brl">BRL</option>
								<option value="mxn">MXN</option>
								<option value="sek">SEK</option>
								<option value="cad">CAD</option>
								<option value="hkd">HKD</option>
								<option value="myr">MYR</option>
								<option value="sgd">SGD</option>
								<option value="chf">CHF</option>
								<option value="huf">HUF</option>
								<option value="nok">NOK</option>
								<option value="thb">THB</option>
								<option value="clp">CLP</option>
								<option value="idr">IDR</option>
								<option value="nzd">NZD</option>
								<option value="try">TRY</option>
								<option value="php">PHP</option>
								<option value="twd">TWD</option>
								<option value="czk">CZK</option>
								<option value="pkr">PKR</option>
								<option value="zar">ZAR</option>
							</select>
						</div>
						
						<div class="form-group widget_setting_four">
							<label class="form-label"><?php esc_html_e( 'Height', 'crypto-price-and-stats' ); ?></label>
							<input type="text" class="" id="cps_widget_ticker_height" name="cps_widget_ticker_height" >
						</div>
						
						<div class="form-group widget_setting_three">
							<label class="form-label"><?php esc_html_e( 'Width', 'crypto-price-and-stats' ); ?></label>
							<input type="text" class="" id="cps_widget_ticker_width" name="cps_widget_ticker_width" >
						</div>
						
						<div class="form-group widget_setting_five">
							<label class="form-label"><?php esc_html_e( 'Background Color', 'crypto-price-and-stats' ); ?></label>
							<input type="text" id="cps_widget_ticker_color" name="cps_widget_ticker_color" value="#fff" default-color="#fff">
						</div>
						
						<div class="form-group widget_setting_seven">
							<label class="form-label"><?php esc_html_e( 'Font Color', 'crypto-price-and-stats' ); ?></label>
							<input type="text" id="cps_widget_converter_color" name="cps_widget_converter_color" value="#4c4c4c" default-color="#4c4c4c">
						</div>
						
						<div class="form-group widget_setting_six">
							<label class="form-label"><?php esc_html_e( 'Language', 'crypto-price-and-stats' ); ?></label>
							<select class="form-select" id="cps_widget_ticker_language" name="cps_widget_ticker_language"  aria-label="Default select example">
								<option value="">--Please choose an option--</option>
								<option value="en">English</option>
								<option value="de">Deutsch</option>
								<option value="fr">Français</option>
								<option value="id">Bahasa Indonesia</option>
								<option value="de">Deutsch</option>
								<option value="es">Español</option>
								<option value="it">Italiano</option>
								<option value="pl">język polski</option>
								<option value="ro">Limba română</option>
								<option value="hu">Magyar nyelv</option>
								<option value="nl">Nederlands</option>
								<option value="pt">Português</option>
								<option value="sv">Svenska</option>
								<option value="vi">Tiếng việt</option>
								<option value="tr">Türkçe</option>
								<option value="ru">Русский</option>
							</select>
						</div>
						
						<div class="form-group widget_setting_nine">
							<label class="form-label"><?php esc_html_e( 'Top', 'crypto-price-and-stats' ); ?></label>
							<input type="number" id="cps_widget_heatmap_top" name="cps_widget_heatmap_top" >
						</div>
					</div>
				</fieldset>
				
				<!--Step 1 select crypto and stats-->
				<h3><?php esc_html_e( 'Shortcode', 'crypto-price-and-stats' ); ?></h3>
				<fieldset>
					<h2><?php esc_html_e( 'Crypto Price And Stats', 'crypto-price-and-stats' ); ?></h2>
					<p class="desc"><?php esc_html_e( 'Copy Crypto Price And Stats Shortcode', 'crypto-price-and-stats' ); ?></p>
					<div class="cps-shortcode-div">
						<textarea id="awl-shortcode" readonly rows="13" cols="120" style="width: 468px;">
						</textarea>
						<div>
							<button type="button" class="cps-copy-button" onclick="CopyShortcode()" ><?php esc_html_e( 'Copy Sortcode' ); ?></button>
						</div>
					</div>
				</fieldset>
			</div>
		</form>
	</div>
</div>
<script>

	var choose_widget = jQuery('input[name="choose_widget_style"]:checked').val();
	if(choose_widget == "bank_1"){
		jQuery('.widget_setting_first').show();
		jQuery('.widget_setting_two').show();
		jQuery('.widget_setting_three').show();
		jQuery('.widget_setting_five').show();
		jQuery('.widget_setting_six').show();
		jQuery('.widget_setting_four').hide();
		jQuery('.widget_setting_seven').hide();
		jQuery('.widget_setting_eight').hide();
		jQuery('.widget_setting_nine').hide();
		jQuery('.widget_setting_ten').hide();
	}
	if(choose_widget == "bank_2"){
		jQuery('.widget_setting_first').show();
		jQuery('.widget_setting_two').show();
		jQuery('.widget_setting_three').show();
		jQuery('.widget_setting_five').show();
		jQuery('.widget_setting_six').show();
		jQuery('.widget_setting_four').hide();
		jQuery('.widget_setting_seven').hide();
		jQuery('.widget_setting_eight').hide();
		jQuery('.widget_setting_nine').hide();
		jQuery('.widget_setting_ten').hide();

	}
	if(choose_widget == "bank_4"){
		jQuery('.widget_setting_first').show();
		jQuery('.widget_setting_two').show();
		jQuery('.widget_setting_three').show();
		jQuery('.widget_setting_five').show();
		jQuery('.widget_setting_six').show();
		jQuery('.widget_setting_four').hide();
		jQuery('.widget_setting_seven').show();
		jQuery('.widget_setting_eight').hide();
		jQuery('.widget_setting_nine').hide();
		jQuery('.widget_setting_ten').hide();
	}
	if(choose_widget == "bank_5"){
		jQuery('.widget_setting_first').hide();
		jQuery('.widget_setting_two').show();
		jQuery('.widget_setting_three').show();
		jQuery('.widget_setting_five').hide();
		jQuery('.widget_setting_six').show();
		jQuery('.widget_setting_four').hide();
		jQuery('.widget_setting_nine').hide();
		jQuery('.widget_setting_seven').hide();
		jQuery('.widget_setting_ten').hide();
		jQuery('.widget_setting_eight').show();
	}
	if(choose_widget == "bank_6"){
		jQuery('.widget_setting_first').hide();
		jQuery('.widget_setting_two').show();
		jQuery('.widget_setting_three').show();
		jQuery('.widget_setting_five').show();
		jQuery('.widget_setting_six').show();
		jQuery('.widget_setting_four').hide();
		jQuery('.widget_setting_nine').hide();
		jQuery('.widget_setting_ten').hide();
		jQuery('.widget_setting_seven').show();
		jQuery('.widget_setting_eight').show();
	}
	if(choose_widget == "bank_7"){
		jQuery('.widget_setting_first').hide();
		jQuery('.widget_setting_two').show();
		jQuery('.widget_setting_three').hide();
		jQuery('.widget_setting_five').show();
		jQuery('.widget_setting_six').show();
		jQuery('.widget_setting_four').hide();
		jQuery('.widget_setting_seven').hide();
		jQuery('.widget_setting_nine').hide();
		jQuery('.widget_setting_eight').show();
	}
	if(choose_widget == "bank_8"){
		jQuery('.widget_setting_first').hide();
		jQuery('.widget_setting_two').hide();
		jQuery('.widget_setting_three').show();
		jQuery('.widget_setting_five').hide();
		jQuery('.widget_setting_six').show();
		jQuery('.widget_setting_four').show();
		jQuery('.widget_setting_seven').hide();
		jQuery('.widget_setting_eight').hide();
		jQuery('.widget_setting_ten').hide();
		jQuery('.widget_setting_nine').show();
	}
	if(choose_widget == "bank_9"){
		jQuery('.widget_setting_first').hide();
		jQuery('.widget_setting_two').show();
		jQuery('.widget_setting_three').hide();
		jQuery('.widget_setting_five').hide();
		jQuery('.widget_setting_six').show();
		jQuery('.widget_setting_four').hide();
		jQuery('.widget_setting_seven').hide();
		jQuery('.widget_setting_eight').show();
		jQuery('.widget_setting_nine').hide();
		jQuery('.widget_setting_ten').show();
	}
	
jQuery(document).ready(function(){
	jQuery('input[name="choose_widget_style"]').change(function() {
			var choose_widget = jQuery('input[name="choose_widget_style"]:checked').val();
			if(choose_widget == "bank_1"){
				jQuery('.widget_setting_first').show();
				jQuery('.widget_setting_two').show();
				jQuery('.widget_setting_three').show();
				jQuery('.widget_setting_five').show();
				jQuery('.widget_setting_six').show();
				jQuery('.widget_setting_four').hide();
				jQuery('.widget_setting_seven').hide();
				jQuery('.widget_setting_eight').hide();
				jQuery('.widget_setting_nine').hide();
				jQuery('.widget_setting_ten').hide();
			}
			if(choose_widget == "bank_2"){
				jQuery('.widget_setting_first').show();
				jQuery('.widget_setting_two').show();
				jQuery('.widget_setting_three').show();
				jQuery('.widget_setting_five').show();
				jQuery('.widget_setting_six').show();
				jQuery('.widget_setting_four').hide();
				jQuery('.widget_setting_eight').hide();
				jQuery('.widget_setting_nine').hide();
				jQuery('.widget_setting_ten').hide();
			}
			if(choose_widget == "bank_4"){
				jQuery('.widget_setting_first').show();
				jQuery('.widget_setting_two').show();
				jQuery('.widget_setting_three').show();
				jQuery('.widget_setting_five').show();
				jQuery('.widget_setting_six').show();
				jQuery('.widget_setting_four').hide();
				jQuery('.widget_setting_seven').show();
				jQuery('.widget_setting_eight').hide();
				jQuery('.widget_setting_nine').hide();
				jQuery('.widget_setting_ten').hide();
			}
			if(choose_widget == "bank_5"){
				jQuery('.widget_setting_first').hide();
				jQuery('.widget_setting_two').show();
				jQuery('.widget_setting_three').show();
				jQuery('.widget_setting_five').hide();
				jQuery('.widget_setting_six').show();
				jQuery('.widget_setting_four').hide();
				jQuery('.widget_setting_seven').hide();
				jQuery('.widget_setting_nine').hide();
				jQuery('.widget_setting_ten').hide();
				jQuery('.widget_setting_eight').show();
			}
			if(choose_widget == "bank_6"){
				jQuery('.widget_setting_first').hide();
				jQuery('.widget_setting_two').show();
				jQuery('.widget_setting_three').show();
				jQuery('.widget_setting_five').show();
				jQuery('.widget_setting_six').show();
				jQuery('.widget_setting_four').hide();
				jQuery('.widget_setting_nine').hide();
				jQuery('.widget_setting_seven').show();
				jQuery('.widget_setting_eight').show();
			}
			if(choose_widget == "bank_7"){
				jQuery('.widget_setting_first').hide();
				jQuery('.widget_setting_two').show();
				jQuery('.widget_setting_three').hide();
				jQuery('.widget_setting_five').show();
				jQuery('.widget_setting_six').show();
				jQuery('.widget_setting_four').hide();
				jQuery('.widget_setting_seven').hide();
				jQuery('.widget_setting_ten').hide();
				jQuery('.widget_setting_nine').hide();
				jQuery('.widget_setting_eight').show();
			}
			if(choose_widget == "bank_8"){
				jQuery('.widget_setting_first').hide();
				jQuery('.widget_setting_two').hide();
				jQuery('.widget_setting_three').show();
				jQuery('.widget_setting_five').hide();
				jQuery('.widget_setting_six').show();
				jQuery('.widget_setting_four').show();
				jQuery('.widget_setting_seven').hide();
				jQuery('.widget_setting_ten').hide();
				jQuery('.widget_setting_nine').show();
				jQuery('.widget_setting_eight').hide();
			}
			if(choose_widget == "bank_9"){
				jQuery('.widget_setting_first').hide();
				jQuery('.widget_setting_two').show();
				jQuery('.widget_setting_three').hide();
				jQuery('.widget_setting_five').hide();
				jQuery('.widget_setting_six').show();
				jQuery('.widget_setting_four').hide();
				jQuery('.widget_setting_seven').hide();
				jQuery('.widget_setting_eight').show();
				jQuery('.widget_setting_nine').hide();
				jQuery('.widget_setting_ten').show();
			}
		});
	
	jQuery('#cps_list_select_coin').multiselect({
		search: true,
	});
	
	jQuery("#cps_widget_ticker_coin_id").select2( {
		placeholder: "Select Coin Id",
	} );

});

//short code []
function CPSGetShortcode() {
	var shortcode = '[CPS-Widget';
	
	var choose_widget_style = jQuery('[name=choose_widget_style]:checked').val();
	if(choose_widget_style){
		shortcode = shortcode + ' choose_widget_style="' + choose_widget_style + '"';
	}
	var cps_widget_ticker_coin_id = jQuery("#cps_widget_ticker_coin_id").val();
	if(cps_widget_ticker_coin_id){
		shortcode = shortcode + ' cps_widget_ticker_coin_id="' + cps_widget_ticker_coin_id + '"';
	}
	
	var cps_select_currency = jQuery("#cps_select_currency").val();
	if(cps_select_currency){
		shortcode = shortcode + ' cps_select_currency="' + cps_select_currency + '"';
	}
	
	var cps_widget_ticker_width = jQuery("#cps_widget_ticker_width").val();
	if(cps_widget_ticker_width){
		shortcode = shortcode + ' cps_widget_ticker_width="' + cps_widget_ticker_width + '"';
	}
	
	var cps_widget_ticker_height = jQuery("#cps_widget_ticker_height").val();
	if(cps_widget_ticker_height){
		shortcode = shortcode + ' cps_widget_ticker_height="' + cps_widget_ticker_height + '"';
	}
	
	var cps_widget_ticker_color = jQuery("#cps_widget_ticker_color").val();
	if(cps_widget_ticker_color){
		shortcode = shortcode + ' cps_widget_ticker_color="' + cps_widget_ticker_color + '"';
	}
	
	var cps_widget_converter_color = jQuery("#cps_widget_converter_color").val();
	if(cps_widget_converter_color){
		shortcode = shortcode + ' cps_widget_converter_color="' + cps_widget_converter_color + '"';
	}
	
	var cps_widget_ticker_language = jQuery("#cps_widget_ticker_language").val();
	if(cps_widget_ticker_language){
		shortcode = shortcode + ' cps_widget_ticker_language="' + cps_widget_ticker_language + '"';
	}
	
	var cps_widget_heatmap_top = jQuery("#cps_widget_heatmap_top").val();
	if(cps_widget_heatmap_top){
		shortcode = shortcode + ' cps_widget_heatmap_top="' + cps_widget_heatmap_top + '"';
	}
	
	var cps_list_select_coin = jQuery("#cps_list_select_coin").val();
	if(cps_list_select_coin){
		shortcode = shortcode + ' cps_list_select_coin="' + cps_list_select_coin + '"';
	}
	
	var cps_select_coin_type = jQuery("#cps_select_coin_type").val();
	if(cps_select_coin_type){
		shortcode = shortcode + ' cps_select_coin_type="' + cps_select_coin_type + '"';
	}
	
	shortcode = shortcode + ' ]';
	
	jQuery('#awl-shortcode').text(shortcode);
}

//color-picker.
	(function( jQuery ) {
		jQuery(function() {
			// Add Color Picker to all inputs that have 'color-field' class.
			jQuery('#cps_widget_ticker_color').wpColorPicker();
			jQuery('#cps_widget_converter_color').wpColorPicker();
		});
	})( jQuery );
	jQuery(document).ajaxComplete(function() {
		jQuery('#cps_widget_ticker_color').wpColorPicker();
		jQuery('#cps_widget_converter_color').wpColorPicker();
	});

function CopyShortcode() {
	var copyText = document.getElementById("awl-shortcode");
	copyText.select();
	document.execCommand("copy");
}

</script>
