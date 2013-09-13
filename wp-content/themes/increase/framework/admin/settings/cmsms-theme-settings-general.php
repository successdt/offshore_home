<?php 
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_general_tabs() {
	$tabs = array();
	
	$tabs['general'] = __('General', 'cmsmasters');
	$tabs['sidebar'] = __('Sidebars', 'cmsmasters');
	$tabs['sitemap'] = __('Sitemap', 'cmsmasters');
	$tabs['error'] = __('404', 'cmsmasters');
	$tabs['seo'] = __('SEO', 'cmsmasters');
	$tabs['code'] = __('Custom Codes', 'cmsmasters');
	
	if (is_plugin_active('contact-form-builder/contact-form-builder.php')) {
		$tabs['recaptcha'] = __('reCAPTCHA', 'cmsmasters');
	}
	
	return $tabs;
}


function cmsms_options_general_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = __('General Options', 'cmsmasters');
		
		break;
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = __('Custom Sidebars', 'cmsmasters');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = __('Sitemap Page Options', 'cmsmasters');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = __('404 Error Page Options', 'cmsmasters');
		
		break;
	case 'seo':
		$sections = array();
		
		$sections['seo_section'] = __('SEO Tools', 'cmsmasters');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = __('Custom Codes', 'cmsmasters');
		
		break;
	case 'recaptcha':
		if (is_plugin_active('contact-form-builder/contact-form-builder.php')) {
			$sections = array();
			
			$sections['recaptcha_section'] = __('Form Builder Plugin reCAPTCHA Keys', 'cmsmasters');
		}
		
		break;
	}
	
	return $sections;	
} 


function cmsms_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_theme_color', 
			'title' => __('Theme Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#33BEE5' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_responsive', 
			'title' => __('Responsive Layout', 'cmsmasters'), 
			'desc' => __('enable', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_retina', 
			'title' => __('High Resolution', 'cmsmasters'), 
			'desc' => __('enable', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => CMSMS_SHORTNAME . '_sidebar', 
			'title' => __('Custom Sidebars', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_nav', 
			'title' => __('Website Pages', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_categs', 
			'title' => __('Blog Archives by Categories', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_tags', 
			'title' => __('Blog Archives by Tags', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_month', 
			'title' => __('Blog Archives by Month', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_pj_categs', 
			'title' => __('Portfolio Archives by Categories', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_pj_tags', 
			'title' => __('Portfolio Archives by Tags', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_search', 
			'title' => __('Search Line', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_sitemap_button', 
			'title' => __('Sitemap Button', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_sitemap_link', 
			'title' => __('Sitemap Page URL', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '' 
		);
		
		break;
	case 'seo':
		$options[] = array( 
			'section' => 'seo_section', 
			'id' => CMSMS_SHORTNAME . '_seo', 
			'title' => __('SEO Settings', 'cmsmasters'), 
			'desc' => __('enable', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'seo_section', 
			'id' => CMSMS_SHORTNAME . '_seo_title', 
			'title' => __('Default Title', 'cmsmasters'), 
			'desc' => __('We recommend you enter no more than 60 characters.', 'cmsmasters'), 
			'type' => 'text', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'seo_section', 
			'id' => CMSMS_SHORTNAME . '_seo_description', 
			'title' => __('Default Description', 'cmsmasters'), 
			'desc' => __('We recommend you enter no more than 160 characters.', 'cmsmasters'), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'seo_section', 
			'id' => CMSMS_SHORTNAME . '_seo_keywords', 
			'title' => __('Default Keywords', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_google_analytics', 
			'title' => __('Google Analytics', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_custom_css', 
			'title' => __('Custom CSS', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_custom_js', 
			'title' => __('Custom JavaScript', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		break;
	case 'recaptcha':
		if (is_plugin_active('contact-form-builder/contact-form-builder.php')) {
			$options[] = array( 
				'section' => 'recaptcha_section', 
				'id' => CMSMS_SHORTNAME . '_recaptcha_public_key', 
				'title' => __('reCAPTCHA Public Key', 'cmsmasters'), 
				'desc' => '', 
				'type' => 'text', 
				'std' => '' 
			);
			
			$options[] = array( 
				'section' => 'recaptcha_section', 
				'id' => CMSMS_SHORTNAME . '_recaptcha_private_key', 
				'title' => __('reCAPTCHA Private Key', 'cmsmasters'), 
				'desc' => '', 
				'type' => 'text', 
				'std' => '' 
			);
		}
		
		break;
	}
	
	return $options;	
}

