<?php
/**
 * @package WordPress
 * @subpackage Contact Form Builder Plugin
 * @since Contact Form Builder 1.0.1
 * 
 * Contact Form Shortcode Function
 * Created by CMSMasters
 * 
 */


function custom_contact_form_sc($atts, $content = null) {
	extract(shortcode_atts(array( 
		'formname' => '', 
		'email' => '' 
	), $atts));
	
	
	wp_enqueue_style('cmsms_contact_form_style');
	
	if (is_rtl()) {
		wp_enqueue_style('cmsms_contact_form_style_rtl');
	}
	
	wp_enqueue_script('validator');
	wp_enqueue_script('validatorLanguage');
	
	
	$out = cmsmasters_contact_form($formname, $email);
	
	return $out;
}

add_shortcode('contactform', 'custom_contact_form_sc');


function cmsmasters_contact_form($formname, $email) {
	global $wpdb;
	
	
	$encodedEmail = base64_encode($formname . '|' . $email . '|' . $formname);
	
	if ($wpdb->get_var("SELECT id FROM " . $wpdb->prefix . "cmsms_forms WHERE type = 'form' AND parent_slug = '" . $formname . "'") != '') {
		$results = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "cmsms_forms WHERE parent_slug='" . $formname . "' ORDER BY number ASC");
		
		foreach ($results as $form_result) {
			$form_descr = str_replace("\n", '<br />', unserialize($form_result->description));
			
			if ($form_result->type == 'form') {
				$out = '<div class="cmsms-form-builder">' . "\n" . 
					'<aside class="box success_box" style="display:none;">' . "\n" . 
						'<div>' . "\n" . 
							'<div></div>' . "\n" . 
							'<div>' . "\n" . 
								'<p>' . $form_descr[1] . '</p>' . "\n" . 
							'</div>' . "\n" . 
						'</div>' . "\n" . 
					'</aside>' . "\n" . 
					'<script type="text/javascript"> ' . "\n" . 
						'jQuery(document).ready(function () { ' . "\n\t" . 
							"jQuery('#form_" . $formname . "').validationEngine('init'); \n\t" . 
							"jQuery('#form_" . $formname . " a#" . $formname . "_formsend').click(function () { \n\t\t" . 
								"jQuery('#form_" . $formname . " .loading').animate( { opacity : 1 } , 250); \n\t\t";
			}
		}
		
		foreach ($results as $form_result) {
			if ($form_result->type == 'checkbox') {
				$out .= "var var_" . $form_result->slug . " = ''; \n\t\t" . 
				"jQuery('input[name=\'" . $form_result->slug . "\']:checked').each(function () { \n\t\t\t" . 
					"var_" . $form_result->slug . " += jQuery(this).val(); \n\t\t" . 
				"} ); \n\t\t";
			}
		}
		
		foreach ($results as $form_result) {
			if ($form_result->type == 'checkboxes') {
				$out .= "var var_" . $form_result->slug . " = ''; \n\t\t" . 
				"jQuery('input[name=\'" . $form_result->slug . "\']:checked').each(function () { \n\t\t\t" . 
					"var_" . $form_result->slug . " += jQuery(this).val() + ', '; \r\t\t" . 
				"} ); \n\t\t" . 
				"if (var_" . $form_result->slug . " !== '') { \n\t\t\t" . 
					"var_" . $form_result->slug . " = var_" . $form_result->slug . ".slice(0, -2); \r\t\t" . 
				"} \n\t\t";
			}
		}
		
		foreach ($results as $form_result) {
			if ($form_result->type == 'form') {
				$out .= "if (jQuery('#form_" . $formname . "').validationEngine('validate')) { \n\t\t\t";
				
				if (in_array('captcha', unserialize($form_result->parameters))) {
					$out .= "if (validateCaptcha() !== 'success') { \n\t\t\t\t" . 
						"jQuery('#" . $formname . "_builder_captcha').css( { border : '2px solid #ff0000' } ); \n\t\t\t\t" . 
						"jQuery('#form_" . $formname . " .loading').animate( { opacity : 0 } , 250); \n\t\t\t\t" . 
						'Recaptcha.reload(); ' . "\n\t\t\t\t" . 
						'return false; ' . "\r\t\t\t" . 
					'} else { ' . "\n\t\t\t\t" . 
						"jQuery('#" . $formname . "_builder_captcha').removeAttr('style'); \r\t\t\t" . 
					'} ' . "\n\t\t\t";
				}
				
				$out .= "jQuery.post('" . CMSMS_FORM_BUILDER_URL . "inc/form-builder-sendmail.php', { \n\t\t\t\t";
			}
		}
		
		foreach ($results as $form_result) {
			if ($form_result->type != 'form') {
				if ($form_result->type == 'checkboxes' || $form_result->type == 'checkbox') {
					$out .= $form_result->slug . " : var_" . $form_result->slug . ", \n\t\t\t\t";
				} elseif ($form_result->type == 'radiobutton') {
					$out .= $form_result->slug . " : jQuery('input[name=\'" . $form_result->slug . "\']:checked').val(), \n\t\t\t\t";
				} else {
					$out .= $form_result->slug . " : jQuery('#" . $form_result->slug . "').val(), \n\t\t\t\t";
				}
			}
		}
		
		foreach ($results as $form_result) {
			if ($form_result->type == 'form') {
				$out .= "contactemail : '" . $encodedEmail . "', \n\t\t\t\t" . 
								"formname : '" . $formname . "' \r\t\t\t" . 
							'}, function (data) { ' . "\n\t\t\t\t" . 
								"jQuery('#form_" . $formname . " .loading').animate( { opacity : 0 } , 250); \n\t\t\t\t" . 
								"jQuery('#form_" . $formname . "').fadeOut('slow'); \n\t\t\t\t" . 
								"document.getElementById('form_" . $formname . "').reset(); \n\t\t\t\t" . 
								"jQuery('#form_" . $formname . "').parent().find('.box').hide(); \n\t\t\t\t" . 
								"jQuery('#form_" . $formname . "').parent().find('.success_box').fadeIn('fast'); \n\t\t\t\t" . 
								"jQuery('html, body').animate( { scrollTop : jQuery('#form_" . $formname . "').offset().top - 140 } , 'slow'); \n\t\t\t\t" . 
								"jQuery('#form_" . $formname . "').parent().find('.success_box').delay(5000).fadeOut(1000, function () { \n\t\t\t\t\t" . 
									"jQuery('#form_" . $formname . "').fadeIn('slow'); \r\t\t\t\t" . 
								"} ); \r\t\t\t";
							
							if (in_array('captcha', unserialize($form_result->parameters))) {
								$out .= 'Recaptcha.reload();' . "\r\t\t\t";
							}
							
							$out .= '} ); ' . "\n\t\t\t" . 
							'return false; ' . "\r\t\t" . 
						'} else { ' . "\n\t\t\t" . 
							"jQuery('#form_" . $formname . " .loading').animate( { opacity : 0 } , 250); \n\t\t\t" . 
							'return false; ' . "\r\t\t" . 
						'} ' . "\r\t" . 
					'} ); ' . "\r" . 
				'} ); ' . "\n";
				
				if (in_array('captcha', unserialize($form_result->parameters))) {
					$out .= "var RecaptchaOptions = {theme : 'clean'}; \n" . 
					'function validateCaptcha() { ' . "\n\t" . 
						"var challengeField = jQuery('input#recaptcha_challenge_field').val(), \n\t\t" . 
							"responseField = jQuery('input#recaptcha_response_field').val(), \n\t\t" . 
							$formname . '_captcha_html = jQuery.ajax( { ' . "\n\t\t\t" . 
							"type : 'post', \n\t\t\t" . 
							"url : '" . CMSMS_FORM_BUILDER_URL . "inc/validate-captcha.php', \n\t\t\t" . 
							"data : 'form=signup&recaptcha_challenge_field=' + challengeField + '&recaptcha_response_field=' + responseField, \n\t\t\t" . 
							'async : false ' . "\r\t\t" . 
						'} ).responseText; ' . "\r\t" . 
						'return ' . $formname . '_captcha_html; ' . "\r" . 
					'} ' . "\n";
				}
				
				$out .= '</script>' . "\n" .
				'<form action="#" method="post" id="form_' . $formname . '">' . "\n\n";
			}
		}
		
		foreach ($results as $form_result) {
			if ($form_result->type != 'form') {
				$field_label = stripslashes($form_result->label);
				$field_name = $form_result->slug;
				$vals = unserialize($form_result->value);
				$params = unserialize($form_result->parameters);
				
				$required_label = (in_array('required', $params)) ? ' <span class="color_3">*</span>' : '';
				$required = (in_array('required', $params)) ? 'required,' : '';
				
				$minSize = '';
				$maxSize = '';
				
				foreach ($params as $param) {
					if (str_replace('minSize', '', $param) != $param) {
						$minSize = $param . ',';
					}
					
					if (str_replace('maxSize', '', $param) != $param) {
						$maxSize = $param . ',';
					}
				}
				
				$customEmail = (in_array('custom[email]', $params)) ? 'custom[email],' : '';
				$customUrl = (in_array('custom[url]', $params)) ? 'custom[url],' : '';
				$customNumber = (in_array('custom[number]', $params)) ? 'custom[number],' : '';
				$customOnlyNumberSp = (in_array('custom[onlyNumberSp]', $params)) ? 'custom[onlyNumberSp],' : '';
				$customOnlyLetterSp = (in_array('custom[onlyLetterSp]', $params)) ? 'custom[onlyLetterSp],' : '';
				$validate_val = $required . $minSize . $maxSize . $customEmail . $customUrl . $customNumber . $customOnlyNumberSp . $customOnlyLetterSp;
				$validate = ($validate_val != '') ? ' class="validate[' . substr($validate_val, 0, -1) . ']"' : '';
				$descr = (unserialize($form_result->description) != '' && unserialize($form_result->description) != ' ') ? "\t" . '<span class="db">' . str_replace("\n", '<br />', stripslashes(unserialize($form_result->description))) . '</span>' . "\r" : '';
				
				switch ($form_result->type) {
				case 'text':
					$out .= '<div class="form_info cmsms_input">' . "\n\t" . 
						'<label for="' . $field_name . '">' . $field_label . $required_label . '</label>' . "\n\t" . 
						'<div class="form_field_wrap">' . "\n\t\t" . 
							'<input type="text" name="' . $field_name . '" id="' . $field_name . '" value=""' . $validate . ' />' . "\r\t" . 
						'</div>' . "\n" . 
						$descr . 
					'</div>' . "\n" . 
					'<div class="cl"></div>' . "\n\n";
					
					break;
				case 'email':
					$out .= '<div class="form_info cmsms_input">' . "\n\t" . 
						'<label for="' . $field_name . '">' . $field_label . $required_label . '</label>' . "\n\t" . 
						'<div class="form_field_wrap">' . "\n\t\t" . 
							'<input type="text" name="' . $field_name . '" id="' . $field_name . '" value=""' . $validate . ' />' . "\r\t" . 
						'</div>' . "\n" . 
						$descr . 
					'</div>' . "\n" . 
					'<div class="cl"></div>' . "\n\n";
					
					break;
				case 'textarea':
					$out .= '<div class="form_info cmsms_textarea">' . "\n\t" . 
						'<label for="' . $field_name . '">' . $field_label . $required_label . '</label>' . "\n\t" . 
						'<div class="form_field_wrap">' . "\n\t\t" . 
							'<textarea name="' . $field_name . '" id="' . $field_name . '" cols="58" rows="6"' . $validate . '></textarea>' . "\r\t" . 
						'</div>' . "\n" . 
						$descr . 
					'</div>' . "\n" . 
					'<div class="cl"></div>' . "\n\n";
					
					break;
				case 'dropdown':
					$out .= '<div class="form_info cmsms_select">' . "\n\t" . 
						'<label>' . $field_label . $required_label . '</label>' . "\n\t" . 
						'<div class="form_field_wrap">' . "\n\t\t" . 
							'<select name="' . $field_name . '" id="' . $field_name . '"' . $validate . '>' . "\n\t\t";
					
					foreach ($vals as $val) {
						$out .= "\t" . '<option value="' . $val . '">' . $val . '</option>' . "\n\t\t";
					}
					
					$out .= '</select>' . "\r\t" . 
						'</div>' . "\n\t" . 
						'<div class="cl"></div>' . "\n" . 
						$descr . 
					'</div>' . "\n" . 
					'<div class="cl"></div>' . "\n\n";
					
					break;
				case 'radiobutton':
					$out .= '<div class="form_info cmsms_radio">' . "\n\t" . 
						'<label>' . $field_label . $required_label . '</label>' . "\n";
					
					$i = 1;
					
					foreach ($vals as $val) {
						$checked = ($i == 1) ? ' checked="checked"' : '';
						
						$out .= "\t" . '<div class="check_parent">' . "\n\t\t" . 
							'<input type="radio" name="' . $field_name . '" id="' . $field_name . $i . '" value="' . $val . '"' . $validate . $checked . ' />' . "\n\t\t" . 
							'<label for="' . $field_name . $i . '">' . $val . '</label>' . "\r\t" . 
						'</div>' . "\n\t" . 
						'<div class="cl"></div>' . "\n";
						
						$i++;
					}
					
					$out .= $descr . 
					'</div>' . "\n" . 
					'<div class="cl"></div>' . "\n\n";
					
					break;
				case 'checkbox':
					$out .= '<div class="form_info cmsms_checkbox">' . "\n\t" . 
						'<label>' . $field_label . $required_label . '</label>' . "\n\t" . 
						'<div class="check_parent">' . "\n\t\t" . 
							'<input type="checkbox" name="' . $field_name . '" id="' . $field_name . '" value="' . $vals[0] . '"' . $validate . ' />' . "\n\t\t" . 
							'<label for="' . $field_name . '">' . $vals[0] . '</label>' . "\r\t" . 
						'</div>' . "\n" . 
						$descr . 
					'</div>' . "\n" . 
					'<div class="cl"></div>' . "\n\n";
					
					break;
				case 'checkboxes':
					$out .= '<div class="form_info cmsms_checkboxes">' . "\n\t" . 
						'<label>' . $field_label . '</label>' . "\n";
					
					$i = 1;
					
					foreach ($vals as $val) {
						$out .= "\t" . '<div class="check_parent">' . "\n\t\t" . 
							'<input type="checkbox" name="' . $field_name . '" id="' . $field_name . $i . '" value="' . $val . '" />' . "\n\t\t" . 
							'<label for="' . $field_name . $i . '">' . $val . '</label>' . "\r\t" . 
						'</div>' . "\n\t" . 
						'<div class="cl"></div>' . "\n";
						
						$i++;
					}
					
					$out .= $descr . 
					'</div>' . "\n" . 
					'<div class="cl"></div>' . "\n\n";
					
					break;
				}
			}
		}
		
		foreach ($results as $form_result) {
			$form_but = unserialize($form_result->description);
			
			if ($form_result->type == 'form') {
				if (in_array('captcha', unserialize($form_result->parameters))) {
					require_once(CMSMS_FORM_BUILDER_PATH . 'inc/recaptchalib.php');
					
					
					global $cmsms_option;
					
					
					$out .= '<div id="' . $formname . '_builder_captcha" class="cmsms-form-builder-captcha">' . recaptcha_get_html($cmsms_option[CMSMS_SHORTNAME . '_recaptcha_public_key']) . '</div>' . "\n" . 
					'<div class="cl"></div>' . "\n";
				}
				
				$out .= '<div class="loading"></div>' . "\n" . 
				'<div class="fl">' . "\n" . 
					'<a id="' . $formname . '_formsend" class="button_small" href="#"><span>' . $form_but[2] . '</span></a>' . "\n" . 
				'</div>' . "\n";
				
				if (in_array('reset', unserialize($form_result->parameters))) {
					$out .= '<div class="fl" style="padding:0 0 0 10px;">' . "\n" . 
						'<a id="' . $formname . '_formclear" class="button_small" href="#" onclick="if (confirm(\'' . __('Do you really want to reset the form?', 'cmsmasters_form_builder') . '\')) document.getElementById(\'form_' . $formname . '\').reset(); return false;"><span>' . __('Reset', 'cmsmasters_form_builder') . '</span></a>' . "\n" . 
					'</div>' . "\n";
				}
				
				$out .= '<div class="cl"></div>' . "\n" . 
					'</form>' . "\n" . 
				'</div>';
			}
		}
		
		return $out;
	}
}

