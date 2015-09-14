<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Settings for CyberSource Secure Acceptance SOP Gateway
 */
return array(
	'enabled' => array(
		'title'       => __( 'Enable', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'label'       => __( 'Enable CyberSource Secure Acceptance SOP', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'checkbox',
		'description' => '',
		'default'     => 'no',
		'desc_tip'      => true,
	),
	'title' => array(
		'title'       => __( 'Title', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'text',
		'description' => __( 'Payment method is the title that the customer will see on your website.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => __( 'Credit/Debit Card', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'desc_tip'      => true,
	),
	'description' => array(
		'title'       => __( 'Description', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'textarea',
		'description' => __( 'Payment method description that the customer will see on your website when they select this Gateway to make a payment.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => __( 'Pay Securely with your Credit or Debit Card by using CyberSource provided by Barclays Bank PLC.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'desc_tip'      => true,
	),
	'checkout_processing' => array(
		'title'       => __( 'Description on Checkout', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'textarea',
		'description' => __( 'This is the message the customer sees when the payment is processing as the page is automatically submitted.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => __( 'Thank you for your order.  Please DO NOT refresh your browser or click "BACK" while we are processing your payment otherwise you may be charged twice.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'desc_tip'      => true,
	),
	'testmode' => array(
		'title'       => __( 'Test Mode', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'label'       => __( 'Enable Test Mode', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'checkbox',
		'description' => __( 'Place the payment gateway in test mode to work with developer/sandbox accounts.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => 'yes',
		'desc_tip'      => true,
	),
	'debug' => array(
		'title'       => __( 'Debug Mode', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'label'       => __( 'Enable Debug Mode', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'checkbox',
		'description' => __( 'Output the response from CyberSource on the payment page for debugging purposes.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => 'no',
		'desc_tip'      => true,
	),
	'log' => array(
		'title'       => __( 'Communication Log', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'label'       => __( 'Enable the communication log', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'checkbox',
		'description' => __( 'Log all CyberSource gateway communication to woocommerce/logs/cybersource_secure_acceptance_sop.txt', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => 'no',
		'desc_tip'      => true,
	),
	'device_finger_print' => array(
		'title'       => __( 'Device Finger Print', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'label'       => __( 'Enable Device Finger Print', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'checkbox',
		'description' => __( 'Device Finger Prints are unique identifiers that are used to detect device behaviours such as identity morphing.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => 'no',
		'desc_tip'      => true,
	),			
	'transaction_type' => array(
		'title'       => __( 'Transaction Type', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'select',
		'description' => __( 'Select which Transaction Type to use. Authorize Only will authorize the customers card for the purchase amount and place the amount ON-HOLD.  Authorize &amp; Capture will authorize the customer\'s card and collect funds.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'options'     => array( 'authorization' => __( 'Authorize Only', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ), 'sale' => __( 'Authorize &amp; Capture', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ) ),
		'default'     => 'authorization',
		'desc_tip'      => true,
	),
	'card_type'	=> array(
		'title'       => __( 'Accepted Cards', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'multiselect',
		'description' => __( 'Select which card types to accept.  Ensure these are enabled in your CyberSource Business Center Account by going to Tools &amp; Settings &gt; Profiles &gt; Profile Name &gt; Payment Settings', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => '',
		'options'     => $this->card_type_options,
		'desc_tip'      => true,
	),
	'sslseal' => array(
		'title'       => __( 'Display SSL Seal', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'label'       => __( 'Display the "Digital Security Logo" seal image on the Pay page.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'checkbox',
		'description' => __( 'This is purely for customer information purposes and does not provide any additional security to the gateway.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => 'no',
		'desc_tip'      => true,
	),
	'banklogo' => array(
		'title'       => __( 'Display Bank Logo', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'label'       => __( 'Display the "Bank Logo" image on the Pay page.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'checkbox',
		'description' => __( 'This gives comfort to the customer that it is a system provided by a well established bank.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => 'no',
		'desc_tip'      => true,
	),
	'locale' => array(
		'title'       => __( 'Locale', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'select',
		'description' => __( 'Indicates the language to use for customer facing content.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'options'     => array( 'ar-XN' => __( 'Arabic', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'km-KH' => __( 'Cambodia', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'zh-HK' => __( 'Chinese', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'cz-CZ' => __( 'Czech', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'nl-nl' => __( 'Dutch', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'en-GB' => __( 'English', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ), 
								'fr-FR' => __( 'French', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ), 
								'de-DE' => __( 'German', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'hu-HU' => __( 'Hungary', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'it-IT' => __( 'Italian', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'ja-JP' => __( 'Japanese', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'ko-KR' => __( 'Korean', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'pl-PL' => __( 'Polish', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'ru-RU' => __( 'Russian', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'es-ES' => __( 'Spanish', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN )),
		'default'     => 'en',
		'desc_tip'      => true,
	),
	'currency' => array(
		'title'       => __( 'Payment Currency Processing', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'select',
		'description' => __( 'Currency used for the Order Payment. The Currency configured here should correspond with the currency that has been used with WooCommerce Products. Otherwise the payment will be processed with the currency that is associated with the Gateway e.g. if the Product is priced in USD then select USD here.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'options'     => array( 'EUR' => __( 'Euro', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'GBP' => __( 'GB Pound Sterling', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'USD' => __( 'US Dollar', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'ZAR' => __( 'South African Rand', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
								'ZMW' => __( 'Zambian Kwacha', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN )),
		'default'     => 'ZMW',
		'desc_tip'      => true,
	),
	'profile_id' => array(
		'title'       => __( 'Profile ID', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'text',
		'description' => __('Your CyberSource Profile Id.  This is what you create in the <strong style="color: #00FF00">LIVE</strong> CyberSource Business Center by going to Tools &amp; Settings &gt; Profiles.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => '',
		'desc_tip'      => true,
	),
	'profile_id_test' => array(
		'title'       => __( 'TEST Profile ID', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'text',
		'description' => __('Your CyberSource Profile Id.  This is what you create in the <strong style="color: #FF0000">TEST</strong> CyberSource Business Center by going to Tools &amp; Settings &gt; Profiles.', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => '',
		'desc_tip'      => true,
	),
	'secret_key' => array(
		'title'       => __( 'Secret Key', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'password',
		'description' => __("The Secret Key for your test account. Find this by logging into your <strong style='color: #00FF00'>LIVE</strong> CyberSource Business Center and go to Tools &amp; Settings &gt; Profiles &gt; &#40; Select &#41; Profile Name &gt; Security &gt; Create New Key &gt; Generate Key, if you have not already done so.", WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => '',
		'desc_tip'      => true,
	),
	'secret_key_test' => array(
		'title'       => __( 'TEST Secret Key', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'password',
		'description' => __("The Secret Key for your test account. Find this by logging into your <strong style='color: #FF0000'>TEST</strong> CyberSource Business Center and go to Tools &amp; Settings &gt; Profiles &gt; &#40; Select &#41; Profile Name &gt; Security &gt; Create New Key &gt; Generate Key, if you have not already done so.", WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => '',
		'desc_tip'      => true,
	),
	'access_key' => array(
		'title'       => __( 'Access Key', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'text',
		'description' => __("The Access Key for your test account. Find this by logging into your <strong style='color: #00FF00'>LIVE</strong> CyberSource Business Center and go to Tools &amp; Settings &gt; Profiles &gt; &#40; Select &#41; Profile Name &gt; Security &gt; Create New Key &gt; Generate Key, if you have not already done so.", WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => '',
		'desc_tip'      => true,
	),
	'access_key_test' => array(
		'title'       => __( 'TEST Access Key', WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'type'        => 'text',
		'description' => __("The Access Key for your test account. Find this by logging into your <strong style='color: #FF0000'>TEST</strong> CyberSource Business Center account and go to Tools &amp; Settings &gt; Profiles &gt; &#40; Select &#41; Profile Name &gt; Security &gt; Create New Key &gt; Generate Key, if you have not already done so.", WC_Cybersource_Secure_Acceptance_SOP::TEXT_DOMAIN ),
		'default'     => '',
		'desc_tip'      => true,
	),
);