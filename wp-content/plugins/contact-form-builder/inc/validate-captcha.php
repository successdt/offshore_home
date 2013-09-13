<?php 
/**
 * @package WordPress
 * @subpackage Contact Form Builder Plugin
 * @since Contact Form Builder 1.0
 * 
 * Contact Form Shortcode reCAPTCHA Validator
 * Changed by CMSMasters
 * 
 */


require('../../../../wp-load.php');
require_once(CMSMS_FORM_BUILDER_PATH . 'inc/recaptchalib.php');


global $cmsms_option;


$resp = recaptcha_check_answer($cmsms_option[CMSMS_SHORTNAME . '_recaptcha_private_key'], $_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field']);

if (!$resp->is_valid) {
	echo 'error';
} else {
	echo 'success';
}

