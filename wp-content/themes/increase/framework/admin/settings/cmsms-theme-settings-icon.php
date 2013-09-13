<?php 
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0.3
 * 
 * Admin Panel Icons Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_icon_tabs() {
	$tabs = array();
	
	$tabs['heading'] = __('Heading Icons', 'cmsmasters');
	$tabs['social'] = __('Social Icons', 'cmsmasters');
	
	return $tabs;
}


function cmsms_options_icon_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = __('Heading Icons', 'cmsmasters');
		
		break;
	case 'social':
		$sections = array();
		
		$sections['social_section'] = __('Social Icons', 'cmsmasters');
		
		break;
	}
	
	return $sections;	
} 


function cmsms_options_icon_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => CMSMS_SHORTNAME . '_heading_icons', 
			'title' => __('Heading Icons', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'heading', 
			'std' => '' 
		);
		
		break;
	case 'social':
		$options[] = array( 
			'section' => 'social_section', 
			'id' => CMSMS_SHORTNAME . '_social_icons', 
			'title' => __('Social Icons', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				get_template_directory_uri() . '/img/facebook.png|#3a454b|#|true', 
				get_template_directory_uri() . '/img/youtube.png|#3a454b|#|true', 
				get_template_directory_uri() . '/img/vimeo.png|#3a454b|#|true', 
				get_template_directory_uri() . '/img/twitter.png|#3a454b|#|true', 
				get_template_directory_uri() . '/img/linkedin.png|#3a454b|#|true' 
			) 
		);
		
		break;
	}
	
	return $options;	
}

