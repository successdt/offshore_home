<?php 
/*
Plugin Name: Contact Form Builder
Plugin URI: http://cmsmasters.net/
Description: Contact form builder created by <a href="http://themeforest.net/user/cmsmasters/portfolio" title="cmsmasters">cmsmasters</a>. Contact form plugin with visual form builder, shortcode, widget for <a href="http://themeforest.net/user/cmsmasters/portfolio" title="cmsmasters">cmsmasters</a> WordPress themes.
Version: 1.0.1
Author: cmsmasters
Author URI: http://cmsmasters.net/
License: GPL2
*/

/*  Copyright 2012 cmsmasters (email : cmsmstrs@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


define('CMSMS_FORM_BUILDER_PATH', plugin_dir_path(__FILE__));
define('CMSMS_FORM_BUILDER_URL', plugin_dir_url(__FILE__));


$form_handle = 'form-builder';


require_once(CMSMS_FORM_BUILDER_PATH . 'inc/form-builder-shortcode.php');
require_once(CMSMS_FORM_BUILDER_PATH . 'inc/form-builder-widget.php');


function form_builder_database() {
	$active_theme = wp_get_theme();
	
	if (is_admin() && strip_tags($active_theme->Author) === 'cmsmasters') {
		require_once(CMSMS_FORM_BUILDER_PATH . 'inc/form-builder-database.php');
		
		register_activation_hook(__FILE__, 'form_builder_install');
		
		register_uninstall_hook(__FILE__, 'form_builder_uninstall');
	}
}

form_builder_database();


function form_builder_scripts() {
	global $form_handle;
	
	
	wp_register_style('cmsms_form_builder_css', CMSMS_FORM_BUILDER_URL . 'css/contact-form-builder.css', array(), '1.3.0', 'screen');
	wp_register_style('cmsms_form_builder_css_rtl', CMSMS_FORM_BUILDER_URL . 'css/contact-form-builder-rtl.css', array(), '1.3.0', 'screen');
	wp_register_style('cmsms_contact_form_style', CMSMS_FORM_BUILDER_URL . 'css/contact-form-style.css', array(), '1.0.0', 'screen');
	wp_register_style('cmsms_contact_form_style_rtl', CMSMS_FORM_BUILDER_URL . 'css/contact-form-style-rtl.css', array(), '1.0.0', 'screen');
	
	wp_register_script('cmsms_form_builder_js', CMSMS_FORM_BUILDER_URL . 'js/contact-form-builder.js', array('jquery', 'jquery-ui-sortable'), '1.3.0', true);
	wp_register_script('validator', CMSMS_FORM_BUILDER_URL . 'js/jquery.validationEngine.min.js', array('jquery'), '2.2.4', true);
	wp_register_script('validatorLanguage', CMSMS_FORM_BUILDER_URL . 'js/jquery.validationEngine-lang.php', array('jquery', 'validator'), '1.0.0', true);
	
	
	if (is_admin() && isset($_GET['page']) && $_GET['page'] == $form_handle) {
		wp_enqueue_style('cmsms_form_builder_css');
		
		if (is_rtl()) {
			wp_enqueue_style('cmsms_form_builder_css_rtl');
		}
		
		wp_enqueue_script('jquery-ui-sortable');
		wp_enqueue_script('cmsms_form_builder_js');
	}
}

add_action('init', 'form_builder_scripts');


function cmsmasters_form_builder() {
	global $wpdb;
?>
	<div class="wrap" style="position:relative; overflow:hidden;">
		<?php screen_icon('themes'); ?>
		<h2 style="padding-top:12px;"><?php _e('Contact Form Builder', 'cmsmasters_form_builder'); ?></h2>
	</div>
	<div id="settings_save" class="updated fade below-h2 myadminpanel" style="display:none;"><p><strong><?php _e('Form settings succesfully saved.', 'cmsmasters_form_builder'); ?>.</strong></p></div>
	<div id="settings_error" class="error fade below-h2 myadminpanel" style="display:none;"><p><strong><?php _e('Form succesfully deleted.', 'cmsmasters_form_builder'); ?>.</strong></p></div>
	<div class="slider wrap">
		<div class="bot">
			<div class="rght form_builder_mp">
				<form method="post" action="" id="adminoptions_form">
					<div id="form_choose_tab" class="tabb top">
						<table class="form-table cmsmasters-options">
							<tr>
								<td>
									<input type="hidden" name="loader_image_url" value="<?php echo CMSMS_FORM_BUILDER_URL; ?>" />
									<input class="button add" type="button" name="add_form" value="<?php _e('Add New', 'cmsmasters_form_builder'); ?>" />
									<input class="button" type="button" name="cancel_form" value="<?php _e('Cancel', 'cmsmasters_form_builder'); ?>" />
									<div class="fr">
										<img class="submit_loader" src="<?php echo CMSMS_FORM_BUILDER_URL; ?>img/wpspin_light.gif" alt="<?php _e('Loading', 'cmsmasters_form_builder'); ?>" />
									</div>
									<select id="form_choose" class="fl">
										<option value=""><?php _e('Select your form here', 'cmsmasters_form_builder'); ?></option>
									<?php
										$get_forms = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "cmsms_forms WHERE type='form'");
										
										foreach ($get_forms as $form) {
											$val = $form->slug;
											$name = $form->label;
											
											echo '<option value="' . $val . '">' . $name . '</option>';
										}
									?>
									</select>
									<input class="button edit fl" type="button" name="edit_form" value="<?php _e('Edit', 'cmsmasters_form_builder'); ?>" />
									<div class="fl">
										<img class="submit_loader" src="<?php echo CMSMS_FORM_BUILDER_URL; ?>img/wpspin_light.gif" alt="<?php _e('Loading', 'cmsmasters_form_builder'); ?>" />
									</div>
									<div class="fl">
										<input class="button delete fl" type="button" name="delete_form" value="<?php _e('Delete', 'cmsmasters_form_builder'); ?>" />
										<div class="fl">
											<img class="submit_loader" src="<?php echo CMSMS_FORM_BUILDER_URL; ?>img/wpspin_light.gif" alt="<?php _e('Loading', 'cmsmasters_form_builder'); ?>" />
										</div>
									</div>
									<div class="fl">
										<input class="button" type="button" name="save_as_form" value="<?php _e('Save As...', 'cmsmasters_form_builder'); ?>" />
										<div class="fl">
											<img class="submit_loader" src="<?php echo CMSMS_FORM_BUILDER_URL; ?>img/wpspin_light.gif" alt="<?php _e('Loading', 'cmsmasters_form_builder'); ?>" />
										</div>
									</div>
								</td>
							</tr>
							<tr><td style="padding:0; margin:0;"></td></tr>
						</table>
					</div>
					<div class="clsep">
						<div id="form_build_tab" class="tabb bot"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="cmsms_translates dn">
		<div class="enter_form_name"><?php _e('Enter Form Name!', 'cmsmasters_form_builder'); ?></div>
		<div class="enter_mess_text"><?php _e('Enter your message text!', 'cmsmasters_form_builder'); ?></div>
		<div class="enter_mess_subj"><?php _e('Enter your message subject text!', 'cmsmasters_form_builder'); ?></div>
		<div class="enter_success_text"><?php _e('Enter the text about your message successfully sending!', 'cmsmasters_form_builder'); ?></div>
		<div class="enter_field_labels"><?php _e('Please fill all field labels!', 'cmsmasters_form_builder'); ?></div>
		<div class="enter_field_options"><?php _e('Please fill all field options!', 'cmsmasters_form_builder'); ?></div>
		<div class="error_on_page"><?php _e('Error on page! Please reload page and try again.', 'cmsmasters_form_builder'); ?></div>
		<div class="form_name_exists"><?php _e('Form with this name already exists, try another name.', 'cmsmasters_form_builder'); ?></div>
		<div class="form_saving_error"><?php _e('Form saving error was detected! Please try again.', 'cmsmasters_form_builder'); ?></div>
		<div class="save_form_as"><?php _e("It is no form with this name in your database. \nSave this form as", 'cmsmasters_form_builder'); ?></div>
		<div class="new_form_name"><?php _e('Please enter new form name.', 'cmsmasters_form_builder'); ?></div>
		<div class="form_name_invalid"><?php _e('Form name is invalid.', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_text"><?php _e('Text', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_field_label"><?php _e('Field Label', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_required"><?php _e('Required', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_field_descr"><?php _e('Field Description', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_field_opts"><?php _e('Field Options', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_min_text_size"><?php _e('Min text size', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_max_text_size"><?php _e('Max text size', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_choose_verif"><?php _e('Choose verification', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_email"><?php _e('Email', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_url"><?php _e('URL', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_number"><?php _e('Number', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_only_nb_sp"><?php _e("Only Numbers & Spaces", 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_only_lt_sp"><?php _e("Only Letters & Spaces", 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_items"><?php _e('Items', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_label"><?php _e('Label', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_thank_you"><?php _e("Thank You! \nYour message has been sent successfully.", 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_form_subj"><?php _e('Form Subject', 'cmsmasters_form_builder'); ?></div>
		<div class="your_mess_text"><?php _e('Your message text...', 'cmsmasters_form_builder'); ?></div>
		<div class="form_del_error"><?php _e("Form deleting error was detected! \nIt is no such form in your database.", 'cmsmasters_form_builder'); ?></div>
		<div class="del_the_form_first"><?php _e('Are you sure you want to delete the form', 'cmsmasters_form_builder'); ?></div>
		<div class="del_the_form_last"><?php _e('and all the fields it contains?', 'cmsmasters_form_builder'); ?></div>
		<div class="please_choose_form"><?php _e('Please choose form!', 'cmsmasters_form_builder'); ?></div>
		<div class="want_to_proceed"><?php _e("All unsaved changes will be lost! \nDo you want to proceed?", 'cmsmasters_form_builder'); ?></div>
		<div class="error_was_detect"><?php _e("Error was detected! \nIt is no such form in your database.", 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_form_name"><?php _e('Form Name', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_drag_and_drop"><?php _e("Drag & Drop to change fields order", 'cmsmasters_form_builder'); ?></div>
		<div class="add_remove_edit"><?php _e('Add / Remove / Edit Fields', 'cmsmasters_form_builder'); ?></div>
		<div class="add_new_field"><?php _e('Add New Field', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_text_field"><?php _e('Text Field', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_email_field"><?php _e('Email Field', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_text_area"><?php _e('Text Area', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_dropdown"><?php _e('Dropdown', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_radiobuttons"><?php _e('Radiobuttons', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_checkbox"><?php _e('Checkbox', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_checkboxes"><?php _e('Checkboxes', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_mess_comp"><?php _e('Message Composer', 'cmsmasters_form_builder'); ?></div>
		<div class="the_mess_subj"><?php _e('The Message Subject', 'cmsmasters_form_builder'); ?></div>
		<div class="the_mess_button"><?php _e('Submit Button Text', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_form_button"><?php _e('Send Message', 'cmsmasters_form_builder'); ?></div>
		<div class="success_send_text"><?php _e('The Message About Succesful Sending Text', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_use_captcha"><?php _e('Use CAPTCHA', 'cmsmasters_form_builder'); ?></div>
		<div class="add_reset_button"><?php _e('Add Reset Button', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_save_form"><?php _e('Save Form', 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_loading"><?php _e('Loading', 'cmsmasters_form_builder'); ?></div>
		<div class="form_not_saved"><?php _e('Form not saved! Form name is invalid.', 'cmsmasters_form_builder'); ?></div>
		<div class="enter_valid_number"><?php _e('Please enter valid number.', 'cmsmasters_form_builder'); ?></div>
		<div class="choose_field_type"><?php _e('Please choose field type!', 'cmsmasters_form_builder'); ?></div>
		<div class="del_this_field"><?php _e('Are you sure you want to delete this field?', 'cmsmasters_form_builder'); ?></div>
		<div class="field_del_error"><?php _e("Field deleting error was detected! \nIt is no such field in your database.", 'cmsmasters_form_builder'); ?></div>
		<div class="del_this_option"><?php _e('Are you sure you want to delete this option?', 'cmsmasters_form_builder'); ?></div>
		<div class="less_two_options"><?php _e("Here can't be less than 2 options!", 'cmsmasters_form_builder'); ?></div>
		<div class="cmsms_field"><?php _e('Field', 'cmsmasters_form_builder'); ?></div>
		<div class="settings_lost"><?php _e("All unsaved changes will be lost! \nAre you sure you want to leave this page?", 'cmsmasters_form_builder'); ?></div>
	</div>
<?php
}

function cmsmasters_enable_form_builder() {
	global $form_handle;
	
	
	add_menu_page( 
		__('Form Builder', 'cmsmasters_form_builder'), 
		__('Form Builder', 'cmsmasters_form_builder'), 
		'edit_themes', 
		$form_handle, 
		'cmsmasters_form_builder', 
		'', 
		112 
	);
}

add_action('admin_menu', 'cmsmasters_enable_form_builder');


// Load Plugin Local File
load_plugin_textdomain('cmsmasters_form_builder', false, dirname(plugin_basename(__FILE__)) . '/languages/');

