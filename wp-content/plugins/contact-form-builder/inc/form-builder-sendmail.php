<?php
/**
 * @package WordPress
 * @subpackage Contact Form Builder Plugin
 * @since Contact Form Builder 1.0.1
 * 
 * Contact Form Builder Send Mail Function
 * Created by CMSMasters
 * 
 */


require('../../../../wp-load.php');


global $wpdb;


if (isset($_POST['formname']) && isset($_POST['contactemail'])) {
	$formname = $_REQUEST['formname'];
	$mailString = base64_decode($_POST['contactemail']);
	
	$mail = explode('|', $mailString);
	
	if ($wpdb->get_var("SELECT id FROM " . $wpdb->prefix . "cmsms_forms WHERE type = 'form' AND slug = '" . $formname . "'") != '') {
		$results = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "cmsms_forms WHERE parent_slug='" . $formname . "' ORDER BY number ASC");
		
		$headers = "MIME-Version: 1.0\r\n Content-type: text/plain; charset=utf-8\r\n";
		
		foreach ($results as $form_result) {
			if ($form_result->type == 'form') {
				$subjects = unserialize($form_result->description);
				$msg = unserialize($form_result->value);
				
				$subject = $subjects[0];
			}
		}
		
		foreach ($results as $result) {
			if ($result->type != 'form') {
				$field_label = $result->label;
				$field_name = $result->slug;
				
				if (isset($_POST[$field_name])) {
					$subject = str_replace('[%' . $field_label . '%]', $_POST[$field_name], $subject);
					$msg = str_replace('[%' . $field_label . '%]', $_POST[$field_name], $msg);
				}
			}
		}
		
		foreach ($results as $result) {
			if ($result->type == 'email') {
				$headers_from = "From: " . $_POST[$result->slug] . " <" . $_POST[$result->slug] . ">\r\nReply-To: " . $_POST[$result->slug] . " <" . $_POST[$result->slug] . ">\r\n";
			}
		}
		
		if ($headers_from == '') {
			$headers_from = "From: Example <email@example.com>\r\nReply-To: Emample <email@example.com>\r\n";
		}
		
		$headers .= $headers_from . 'X-Mailer: PHP/' . phpversion();
		
		if ($mail[0] == $formname && $mail[2] == $formname) {
			$mailTo = explode(',', $mail[1]);
			
			$count = false;
			$out = '';
			$number = 0;
			
			foreach ($mailTo as $mailAddress) {
				wp_mail(trim($mailAddress), $subject, $msg, $headers);
				
				if (!$count) { 
					$count = true;
					
					$out = 'ok';
				}
				
				$number++;
			}
			
			if ($out == '' || $number == 0) {
				echo 'Error!!!';
			} elseif ($out == 'ok' && $number == 1) {
				echo 'Letter was sent.';
			} elseif ($out == 'ok' && $number > 1) {
				echo $number . ' letters have been sent.';
			}
		}
	} else {
		echo 'Error!!!';
	}
}

