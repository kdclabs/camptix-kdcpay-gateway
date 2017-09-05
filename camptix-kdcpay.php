<?php
/**
 * Plugin Name: CampTix KDCpay Payment Gateway
 * Plugin URI: http://www.kdclabs.com/tag/camptix-kdcpay/
 * Description: KDCpay Payment Gateway for CampTix
 * Author: _KDC-Labs
 * Author URI: http://www.kdclabs.com/
 * Version: 1.5.0
 * License: GPLv2 or later
 * Text Domain: camptix-kdcpay
 * Domain Path: /languages
 * GitHub Plugin URI: https://github.com/kdclabs/camptix-kdcpay-gateway
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.

// Load Plugin Text Domain.
add_action( 'init', 'camptix_kdcpay_load_textdomain' );
function camptix_kdcpay_load_textdomain() {
	load_plugin_textdomain( 'camptix-kdcpay', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

// Add INR currency.
add_filter( 'camptix_currencies', 'camptix_kdcpay_add_inr_currency' );
function camptix_kdcpay_add_inr_currency( $currencies ) {
	if ( ! array_key_exists( 'INR',$currencies ) ) {
		$currencies['INR'] = array(
			'label' => __( 'Indian Rupees', 'camptix-kdcpay' ),
			'format' => '₹ %s',
		);
	}
	if ( ! array_key_exists( 'LKR',$currencies ) ) {
		$currencies['LKR'] = array(
			'label' => __( 'Sri Lankan Rupees', 'camptix-kdcpay' ),
			'format' => 'රු %s',
		);
	}
	return $currencies;
}

// Load the KDCpay Payment Method
add_action( 'camptix_load_addons', 'camptix_kdcpay_load_payment_method' );
function camptix_kdcpay_load_payment_method() {
	if ( ! class_exists( 'CampTix_Payment_Method_KDCpay' ) )
		require_once plugin_dir_path( __FILE__ ) . 'classes/class-camptix-payment-method-kdcpay.php';
	camptix_register_addon( 'CampTix_Payment_Method_KDCpay' );
}
