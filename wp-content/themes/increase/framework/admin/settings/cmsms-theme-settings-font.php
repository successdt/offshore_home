<?php 
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = __('Content', 'cmsmasters');
	$tabs['link'] = __('Links', 'cmsmasters');
	$tabs['nav'] = __('Navigation', 'cmsmasters');
	$tabs['h1'] = __('H1', 'cmsmasters');
	$tabs['h2'] = __('H2', 'cmsmasters');
	$tabs['h3'] = __('H3', 'cmsmasters');
	$tabs['h4'] = __('H4', 'cmsmasters');
	$tabs['h5'] = __('H5', 'cmsmasters');
	$tabs['h6'] = __('H6', 'cmsmasters');
	$tabs['other'] = __('Other', 'cmsmasters');
	
	return $tabs;
}


function cmsms_options_font_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = __('Content Font Options', 'cmsmasters');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = __('Links Font Options', 'cmsmasters');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = __('Navigation Font Options', 'cmsmasters');
		
		break;
	case 'h1':
		$sections = array();
		
		$sections['h1_section'] = __('H1 Font Options', 'cmsmasters');
		
		break;
	case 'h2':
		$sections = array();
		
		$sections['h2_section'] = __('H2 Font Options', 'cmsmasters');
		
		break;
	case 'h3':
		$sections = array();
		
		$sections['h3_section'] = __('H3 Font Options', 'cmsmasters');
		
		break;
	case 'h4':
		$sections = array();
		
		$sections['h4_section'] = __('H4 Font Options', 'cmsmasters');
		
		break;
	case 'h5':
		$sections = array();
		
		$sections['h5_section'] = __('H5 Font Options', 'cmsmasters');
		
		break;
	case 'h6':
		$sections = array();
		
		$sections['h6_section'] = __('H6 Font Options', 'cmsmasters');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = __('Other Fonts Options', 'cmsmasters');
		
		break;
	}
	
	return $sections;
} 


function cmsms_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_content_font', 
			'title' => __('Main Content Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial, Geneva, Helvetica, sans-serif", 
				'google_font' => 'Droid+Sans:400,700', 
				'font_color' => '#727a7e', 
				'font_size' => '13', 
				'line_height' => '18', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => CMSMS_SHORTNAME . '_link_font', 
			'title' => __('Links Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial, Geneva, Helvetica, sans-serif", 
				'google_font' => 'Droid+Sans:400,700', 
				'font_color' => '#33BEE5', 
				'font_size' => '13', 
				'line_height' => '18', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => CMSMS_SHORTNAME . '_link_font_hover', 
			'title' => __('Links Font Hover Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#727a7e' 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_content_link_font_color', 
			'title' => __('Bottom Content Links Font Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#B6C4CB' 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_content_link_font_hover_color', 
			'title' => __('Bottom Content Links Font Hover Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#33bee5' 
		);

		$options[] = array( 
			'section' => 'link_section', 
			'id' => CMSMS_SHORTNAME . '_footer_link_font_color', 
			'title' => __('Footer Links Font Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#B6C4CB' 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => CMSMS_SHORTNAME . '_footer_font_hover', 
			'title' => __('Footer Links Font Hover Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#33bee5' 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_font', 
			'title' => __('Navigation Title Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial, Geneva, Helvetica, sans-serif",  
				'google_font' => 'Oxygen:400,300,700', 
				'font_color' => '#ffffff', 
				'font_size' => '14', 
				'line_height' => '18', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_font_hover', 
			'title' => __('Navigation Title Hover Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_dropdown_font', 
			'title' => __('Navigation Dropdown Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial, Geneva, Helvetica, sans-serif", 
				'google_font' => 'Oxygen:400,300,700',
				'font_color' => '#4E5C64', 
				'font_size' => '13', 
				'line_height' => '18', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_dropdown_font_hover', 
			'title' => __('Navigation Dropdown Hover Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#33BEE5' 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_bg_color_1', 
			'title' => __('Navigation Title Hover Background Color 1', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#33bee5' 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_bg_color_2', 
			'title' => __('Navigation Title Hover Background Color 2', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#fabe09' 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_bg_color_3', 
			'title' => __('Navigation Title Hover Background Color 3', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#6cc437' 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_bg_color_4', 
			'title' => __('Navigation Title Hover Background Color 4', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#f97a14' 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_bg_color_5', 
			'title' => __('Navigation Title Hover Background Color 5', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#e94f4f' 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_bg_color_6', 
			'title' => __('Navigation Title Hover Background Color 6', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#48dcb8' 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_bg_color_7', 
			'title' => __('Navigation Title Hover Background Color 7', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#33bee5' 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_bg_color_8', 
			'title' => __('Navigation Title Hover Background Color 8', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#de5c8d' 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_bg_color_9', 
			'title' => __('Navigation Title Hover Background Color 9', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#db4141' 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => CMSMS_SHORTNAME . '_nav_title_bg_color_10', 
			'title' => __('Navigation Title Hover Background Color 10', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#3387e5' 
		);
		
		break;
	case 'h1':
		$options[] = array( 
			'section' => 'h1_section', 
			'id' => CMSMS_SHORTNAME . '_h1_font', 
			'title' => __('H1 Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial, Geneva, Helvetica, sans-serif", 
				'google_font' => 'Oxygen:400,300,700',
				'font_color' => '#4E5C64', 
				'font_size' => '32', 
				'line_height' => '36', 
				'font_weight' => '300', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'h2':
		$options[] = array( 
			'section' => 'h2_section', 
			'id' => CMSMS_SHORTNAME . '_h2_font', 
			'title' => __('H2 Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial, Geneva, Helvetica, sans-serif",
				'google_font' => 'Oxygen:400,300,700',
				'font_color' => '#4E5C64', 
				'font_size' => '24', 
				'line_height' => '36', 
				'font_weight' => '300', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'h3':
		$options[] = array( 
			'section' => 'h3_section', 
			'id' => CMSMS_SHORTNAME . '_h3_font', 
			'title' => __('H3 Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial, Geneva, Helvetica, sans-serif",
				'google_font' => 'Oxygen:400,300,700', 
				'font_color' => '#4E5C64', 
				'font_size' => '22', 
				'line_height' => '36', 
				'font_weight' => '300', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'h4':
		$options[] = array( 
			'section' => 'h4_section', 
			'id' => CMSMS_SHORTNAME . '_h4_font', 
			'title' => __('H4 Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial, Geneva, Helvetica, sans-serif",
				'google_font' => 'Oxygen:400,300,700',
				'font_color' => '#4E5C64', 
				'font_size' => '20', 
				'line_height' => '36', 
				'font_weight' => '300', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'h5':
		$options[] = array( 
			'section' => 'h5_section', 
			'id' => CMSMS_SHORTNAME . '_h5_font', 
			'title' => __('H5 Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial, Geneva, Helvetica, sans-serif",
				'google_font' => 'Oxygen:400,300,700', 
				'font_color' => '#4E5C64', 
				'font_size' => '18', 
				'line_height' => '24', 
				'font_weight' => '300', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'h6':
		$options[] = array( 
			'section' => 'h6_section', 
			'id' => CMSMS_SHORTNAME . '_h6_font', 
			'title' => __('H6 Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial, Geneva, Helvetica, sans-serif", 
				'google_font' => 'Oxygen:400,300,700', 
				'font_color' => '#4E5C64', 
				'font_size' => '16', 
				'line_height' => '18', 
				'font_weight' => '300', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_quote_font', 
			'title' => __('Blockquote Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial, Geneva, Helvetica, sans-serif", 
				'google_font' => 'Oxygen:400,300,700', 
				'font_color' => '#727A7E', 
				'font_size' => '16', 
				'line_height' => '24', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_dropcap_font', 
			'title' => __('Dropcap Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial, Geneva, Helvetica, sans-serif",  
				'google_font' => 'Oxygen:400,300,700',  
				'font_color' => '#ffffff', 
				'font_size' => '24', 
				'line_height' => '48', 
				'font_weight' => 'bold', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_code_font', 
			'title' => __('Code Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial,Geneva,Helvetica,sans-serif", 
				'google_font' => 'Droid+Sans:400,700', 
				'font_color' => '#727A7E', 
				'font_size' => '13', 
				'line_height' => '18', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_small_font', 
			'title' => __('Small Tag Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial, Geneva, Helvetica, sans-serif", 
				'google_font' => 'Droid+Sans:400,700', 
				'font_color' => '#727a7e', 
				'font_size' => '12', 
				'line_height' => '18', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_input_font', 
			'title' => __('Text Fields Font', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => "Arial,Geneva,Helvetica,sans-serif", 
				'google_font' => '', 
				'font_color' => '#727A7E', 
				'font_size' => '12', 
				'line_height' => '18', 
				'font_weight' => 'normal', 
				'font_style' => 'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_color', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_headings_color', 
			'title' => __('Bottom Headings Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_content_font_color', 
			'title' => __('Bottom Content Font Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#d1d3d4' 
		);

		$options[] = array( 
			'section' => 'other_section', 
			'id' => CMSMS_SHORTNAME . '_footer_font_color', 
			'title' => __('Footer Content Font Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#d1d3d4' 
		);
		
		break;
	}
	
	return $options;	
}

