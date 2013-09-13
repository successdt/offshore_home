/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Admin Panel Toggles Scripts
 * Created by CMSMasters
 * 
 */


jQuery(document).ready(function () { 
	/* General '404' Tab Fields Load */
	if (jQuery('#increase_error_sitemap_button').is(':not(:checked)')) {
		jQuery('#increase_error_sitemap_link').closest('tr').hide();
	}
	
	/* General '404' Tab Fields Change */
	jQuery('#increase_error_sitemap_button').bind('change', function () { 
		if (jQuery(this).is(':checked')) {
			jQuery('#increase_error_sitemap_link').closest('tr').show();
		} else {
			jQuery('#increase_error_sitemap_link').closest('tr').hide();
		}
	} );
	
	
	
	/* General 'SEO' Tab Fields Load */
	if (jQuery('#increase_seo').is(':not(:checked)')) {
		jQuery('#increase_seo_title').closest('tr').hide();
		jQuery('#increase_seo_description').closest('tr').hide();
		jQuery('#increase_seo_keywords').closest('tr').hide();
	}
	
	/* General 'SEO' Tab Fields Change */
	jQuery('#increase_seo').bind('change', function () { 
		if (jQuery(this).is(':checked')) {
			jQuery('#increase_seo_title').closest('tr').show();
			jQuery('#increase_seo_description').closest('tr').show();
			jQuery('#increase_seo_keywords').closest('tr').show();
		} else {
			jQuery('#increase_seo_title').closest('tr').hide();
			jQuery('#increase_seo_description').closest('tr').hide();
			jQuery('#increase_seo_keywords').closest('tr').hide();
		}
	} );
	
	
	
	/* Appearance 'Background' Tab Fields Load */
	if (jQuery('#increase_bg_img_enable').is(':not(:checked)')) {
		jQuery('#increase_bg_img').closest('tr').hide();
		jQuery('label[for="increase_bg_rep"]').closest('tr').hide();
		jQuery('label[for="increase_bg_pos_v"]').closest('tr').hide();
		jQuery('label[for="increase_bg_pos_h"]').closest('tr').hide();
		jQuery('label[for="increase_bg_att"]').closest('tr').hide();
	}
	
	/* Appearance 'Background' Tab Fields Change */
	jQuery('#increase_bg_img_enable').bind('change', function () { 
		if (jQuery('#increase_bg_img_enable').is(':checked')) {
			jQuery('#increase_bg_img').closest('tr').show();
			jQuery('label[for="increase_bg_rep"]').closest('tr').show();
			jQuery('label[for="increase_bg_pos_v"]').closest('tr').show();
			jQuery('label[for="increase_bg_pos_h"]').closest('tr').show();
			jQuery('label[for="increase_bg_att"]').closest('tr').show();
		} else {
			jQuery('#increase_bg_img').closest('tr').hide();
			jQuery('label[for="increase_bg_rep"]').closest('tr').hide();
			jQuery('label[for="increase_bg_pos_v"]').closest('tr').hide();
			jQuery('label[for="increase_bg_pos_h"]').closest('tr').hide();
			jQuery('label[for="increase_bg_att"]').closest('tr').hide();
		}
	} );
	
	
	
	/* Appearance 'Footer' Tab Fields Load */
	if (jQuery('input[name^="cmsms_options_increase_style_footer"]:checked').val() !== 'text') {
		jQuery('#increase_footer_html').closest('tr').hide();
	}
	
	/* Appearance 'Footer' Tab Fields Change */
	jQuery('input[name^="cmsms_options_increase_style_footer"]').bind('change', function () { 
		if (jQuery('input[name^="cmsms_options_increase_style_footer"]:checked').val() === 'text') {
			jQuery('#increase_footer_html').closest('tr').show();
		} else {
			jQuery('#increase_footer_html').closest('tr').hide();
		}
	} );

	
	
	/* Header Checkbox Field Load */
	if (jQuery('#increase_header_custom_html').is(':not(:checked)')) {
		jQuery('#increase_header_html').closest('tr').hide();
		jQuery('#increase_header_custom_html_top').closest('tr').hide();
		jQuery('#increase_header_custom_html_right').closest('tr').hide();
	}
	if (jQuery('#increase_header_social').is(':not(:checked)')) {
		jQuery('#increase_header_social_top').closest('tr').hide();
		jQuery('#increase_header_social_right').closest('tr').hide();
	}
	
	/* Header Checkbox Field Change */
	jQuery('#increase_header_custom_html').bind('change', function () { 
		if (jQuery('#increase_header_custom_html').is(':not(:checked)')) {
			jQuery('#increase_header_html').closest('tr').hide();
			jQuery('#increase_header_custom_html_top').closest('tr').hide();
			jQuery('#increase_header_custom_html_right').closest('tr').hide();
		} else {
			jQuery('#increase_header_html').closest('tr').show();
			jQuery('#increase_header_custom_html_top').closest('tr').show();
			jQuery('#increase_header_custom_html_right').closest('tr').show();
		}
	} );
	jQuery('#increase_header_social').bind('change', function () { 
		if (jQuery('#increase_header_social').is(':not(:checked)')) {
			jQuery('#increase_header_social_top').closest('tr').hide();
			jQuery('#increase_header_social_right').closest('tr').hide();
		} else {
			jQuery('#increase_header_social_top').closest('tr').show();
			jQuery('#increase_header_social_right').closest('tr').show();
		}
	} );
	
	
	
	/* Logo 'Text Logo' Tab Fields Load */
	if (jQuery('#increase_text_logo').is(':not(:checked)')) {
		jQuery('#increase_text_logo_title').closest('tr').hide();
		jQuery('#increase_text_logo_subtitle').closest('tr').hide();
		jQuery('#increase_text_logo_subtitle_text').closest('tr').hide();
	} else {
		if (jQuery('#increase_text_logo_subtitle').is(':not(:checked)')) {
			jQuery('#increase_text_logo_subtitle_text').closest('tr').hide();
		}
	}
	
	/* Logo 'Text Logo' Tab Fields Change */
	jQuery('#increase_text_logo').bind('change', function () { 
		if (jQuery(this).is(':checked')) {
			jQuery('#increase_text_logo_title').closest('tr').show();
			jQuery('#increase_text_logo_subtitle').closest('tr').show();
			
			if (jQuery('#increase_text_logo_subtitle').is(':checked')) {
				jQuery('#increase_text_logo_subtitle_text').closest('tr').show();
			}
		} else {
			jQuery('#increase_text_logo_title').closest('tr').hide();
			jQuery('#increase_text_logo_subtitle').closest('tr').hide();
			jQuery('#increase_text_logo_subtitle_text').closest('tr').hide();
		}
	} );
	
	/* Logo 'Text Logo' Tab 'Logo Subtitle' Field Change */
	jQuery('#increase_text_logo_subtitle').bind('change', function () { 
		if (jQuery(this).is(':checked')) {
			jQuery('#increase_text_logo_subtitle_text').closest('tr').show();
		} else {
			jQuery('#increase_text_logo_subtitle_text').closest('tr').hide();
		}
	} );
	
	
	
	/* Logo 'Favicon' Tab Fields Load */
	if (jQuery('#increase_favicon').is(':not(:checked)')) {
		jQuery('#increase_favicon_url').closest('tr').hide();
	}
	
	/* Logo 'Favicon' Tab Fields Change */
	jQuery('#increase_favicon').bind('change', function () { 
		if (jQuery(this).is(':checked')) {
			jQuery('#increase_favicon_url').closest('tr').show();
		} else {
			jQuery('#increase_favicon_url').closest('tr').hide();
		}
	} );
} );

