<?php
/**
 * @package WordPress
 * @subpackage Contact Form Builder Plugin
 * @since Contact Form Builder 1.0.1
 * 
 * Contact Form Widget Class
 * Created by CMSMasters
 * 
 */


class WP_Widget_Custom_Contact_Form extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_contact_form_entries', 
			'description' => __('Your website contact form widget', 'cmsmasters_form_builder') 
		);
		
		parent::__construct('custom-contact-form', '&nbsp;' . __('CMSMS - Contact Form', 'cmsmasters_form_builder'), $widget_ops);
	}
    
    function widget($args, $instance) {
        extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Contact Form', 'cmsmasters_form_builder') : $instance['title'], $instance, $this->id_base);
        $email = isset($instance['email']) ? $instance['email'] : '';
        $formname = isset($instance['formname']) ? $instance['formname'] : '';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
		$encodedEmail = base64_encode($formname . '|' . $email . '|' . $formname);
		
		
		global $wpdb;
		
		
		wp_enqueue_style('cmsms_contact_form_style');
		
		if (is_rtl()) {
			wp_enqueue_style('cmsms_contact_form_style_rtl');
		}
		
		wp_enqueue_script('validator');
		wp_enqueue_script('validatorLanguage');
		
		
		echo '<div class="' . $widget_width . '">' . 
			$before_widget;
		
		if ($title) { 
			echo $before_title . $title . $after_title;
		}
		
		if ($wpdb->get_var("SELECT id FROM " . $wpdb->prefix . "cmsms_forms WHERE type = 'form' AND parent_slug = '" . $formname . "'") != '') {
			$results = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "cmsms_forms WHERE parent_slug='" . $formname . "' ORDER BY number ASC");
			
			foreach ($results as $form_result) {
				$form_descr = str_replace("\n", '<br />', unserialize($form_result->description));
				
				if ($form_result->type == 'form') {
					$out = '<div class="cmsms-form-builder">' .
						'<div class="widgetinfo">' . $form_descr[1] . '</div>' .
						'<script type="text/javascript"> ' .
							'jQuery(document).ready(function () { ' .
								"jQuery('#form_" . $formname . "').validationEngine('init'); " .
								"jQuery('#form_" . $formname . " a#" . $formname . "_wformsend').click(function () { " .
									"jQuery('#form_" . $formname . " .loading').animate( { opacity : 1 } , 250); ";
				}
			}
			
			foreach ($results as $form_result) {
				if ($form_result->type == 'checkbox') {
					$out .= "var var_" . $form_result->slug . " = ''; " . 
					"jQuery('input[name=\'" . $form_result->slug . "\']:checked').each(function () { " . 
						"var_" . $form_result->slug . " += jQuery(this).val(); " . 
					"} ); ";
				}
			}
			
			foreach ($results as $form_result) {
				if ($form_result->type == 'checkboxes') {
					$out .= "var var_" . $form_result->slug . " = ''; " . 
					"jQuery('input[name=\'" . $form_result->slug . "\']:checked').each(function () { " . 
						"var_" . $form_result->slug . " += jQuery(this).val() + ', '; " . 
					"} ); " . 
					"if (var_" . $form_result->slug . " != '') { " . 
						"var_" . $form_result->slug . " = var_" . $form_result->slug . ".slice(0, -2); " . 
					"} ";
				}
			}
			
			foreach ($results as $form_result) {
				if ($form_result->type == 'form') {
					$out .= "if (jQuery('#form_" . $formname . "').validationEngine('validate')) { " .
						"jQuery.post('" . CMSMS_FORM_BUILDER_URL . "inc/form-builder-sendmail.php', { ";
				}
			}
			
			foreach ($results as $form_result) {
				if ($form_result->type != 'form') {
					if ($form_result->type == 'checkboxes' || $form_result->type == 'checkbox') {
						$out .= $form_result->slug . " : var_" . $form_result->slug . ", ";
					} else if ($form_result->type == 'radiobutton') {
						$out .= $form_result->slug . " : jQuery('input[name=\'" . $form_result->slug . "\']:checked').val(), ";
					} else {
						$out .= $form_result->slug . " : jQuery('#" . $form_result->slug . "').val(), ";
					}
				}
			}
			
			foreach ($results as $form_result) {
				if ($form_result->type == 'form') {
					$out .= "contactemail : '" . $encodedEmail . "', " .
										"formname : '" . $formname . "' " .
									'} , function (data) { ' .
										"jQuery('#form_" . $formname . " .loading').animate( { opacity : 0 } , 250); " .
										"jQuery('#form_" . $formname . "').fadeOut('slow'); " .
										"document.getElementById('form_" . $formname . "').reset(); " .
										"jQuery('#form_" . $formname . "').parent().find('.widgetinfo').hide(); " .
										"jQuery('#form_" . $formname . "').parent().find('.widgetinfo').fadeIn('fast'); " .
										"jQuery('html, body').animate( { scrollTop : jQuery('#form_" . $formname . "').offset().top - 140 } , 'slow'); " .
										"jQuery('#form_" . $formname . "').parent().find('.widgetinfo').delay(5000).fadeOut(1000, function () { " . 
											"jQuery('#form_" . $formname . "').fadeIn('slow'); " . 
										"} ); " .
									'} ); ' .
									'return false; ' .
								'} else { ' .
									"jQuery('#form_" . $formname . " .loading').animate( { opacity : 0 } , 250); " .
									'return false; ' .
								'} ' .
							'} ); ' .
						'} ); ' .
					'</script>' .
					'<form action="#" method="post" id="form_' . $formname . '">';
				}
			}
			
			foreach ($results as $form_result) {
				if ($form_result->type != 'form') {
					$field_label = $form_result->label;
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
					$descr = (unserialize($form_result->description) != '' && unserialize($form_result->description) != ' ') ? '<span class="db">' . stripslashes(unserialize($form_result->description)) . '</span>' : '';
					
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
					$out .= '<div class="loading"></div>' .
					'<div class="fl" style="padding:0 10px 0 0;"><a id="' . $formname . '_wformsend" class="button_small" href="#"><span>' . $form_but[2] . '</span></a></div>';
					
					if (in_array('reset', unserialize($form_result->parameters))) {
						$out .= '<div class="fl"><a id="' . $formname . '_wformclear" class="button_small" href="#" onclick="if (confirm(\'' . __('Do you really want to reset the form?', 'cmsmasters_form_builder') . '\')) document.getElementById(\'form_' . $formname . '\').reset(); return false;"><span>' . __('Reset', 'cmsmasters_form_builder') . '</span></a></div>';
					}
					
					$out .= '<div class="cl"></div>' .
						'</form>' .
					'</div>';
				}
			}
			
			echo $out;
		}
		
		echo $after_widget . 
		'</div>';
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['email'] = strip_tags($new_instance['email']);
		$instance['formname'] = strip_tags($new_instance['formname']);
		$instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
	function form($instance) {
		global $wpdb;
		
		
		$get_forms = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "cmsms_forms WHERE type='form'");
		
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$email = isset($instance['email']) ? esc_attr($instance['email']) : '';
		$formname = (isset($instance['formname']) && $instance['formname'] != '') ? $instance['formname'] : '';
		$widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters_form_builder'); ?>:<br />
				<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email', 'cmsmasters_form_builder'); ?>:<br />
				<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('formname'); ?>"><?php _e('Form Name', 'cmsmasters_form_builder'); ?>:<br />
				<select class="widefat" id="<?php echo $this->get_field_id('formname'); ?>" name="<?php echo $this->get_field_name('formname'); ?>">
					<option value=""><?php _e('Choose Form Name Here', 'cmsmasters_form_builder'); ?> &nbsp;</option>
					<?php
					foreach ($get_forms as $get_form) {
						$val = $get_form->slug;
						$name = $get_form->label;
						
						if ($formname == $val) {
							$selected = ' selected="selected"';
						} else {
							$selected = '';
						}
						
						echo '<option' . $selected . ' value="' . $val . '">' . $name . '</option>';
					}
					?>
				</select>
			</label>
		</p>
		<p style="border-top:1px solid #dfdfdf; border-bottom:1px solid #dfdfdf; padding:10px 0; overflow:hidden;">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters_form_builder'); ?>:<br /><br />
				<small style="color:#f00; float:right; padding-top:5px;"><?php _e('Only for horizontal sidebars', 'cmsmasters_form_builder'); ?></small>
				<select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" style="float:left;">
					<option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
					<option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
					<option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
					<option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
					<option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
					<option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
				</select>
			</label>
		</p>
		<div style="clear:both;"></div>
		<?php
	}
}


function wp_custom_contact_form_widget_init() {
	if (!is_blog_installed()) {
		return;
	}
	
	register_widget('WP_Widget_Custom_Contact_Form');
	
	do_action('widgets_init');
}

add_action('init', 'wp_custom_contact_form_widget_init', 1);

