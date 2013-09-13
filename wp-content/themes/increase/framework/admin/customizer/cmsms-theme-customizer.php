<?php 
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Theme Customizer
 * Created by CMSMasters
 * 
 */


function cmsms_theme_customizer($wp_customize) {
	// General Options Section
    $wp_customize->add_section('cmsms_general_section', array( 
        'title' => __('General Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme general options', 'cmsmasters'), 
		'priority' => '121' 
    ) );
	
	// General Options Theme Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_general[' . CMSMS_SHORTNAME . '_theme_color]', array( 
		'default' => '#33bee5', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_theme_color', array( 
		'label' => __('Theme Color', 'cmsmasters'), 
		'section' => 'cmsms_general_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_general[' . CMSMS_SHORTNAME . '_theme_color]', 
		'priority' => '1' 
	) ) );
	
	// General Options Responsive Layout
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_general[' . CMSMS_SHORTNAME . '_responsive]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_general[' . CMSMS_SHORTNAME . '_responsive]', array( 
		'label' => __('Responsive Layout', 'cmsmasters'), 
		'section' => 'cmsms_general_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_general[' . CMSMS_SHORTNAME . '_responsive]', 
		'type' => 'checkbox', 
		'priority' => '2' 
	) );
	
	// General Options High Resolution
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_general[' . CMSMS_SHORTNAME . '_retina]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_general[' . CMSMS_SHORTNAME . '_retina]', array( 
		'label' => __('High Resolution', 'cmsmasters'), 
		'section' => 'cmsms_general_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_general[' . CMSMS_SHORTNAME . '_retina]', 
		'type' => 'checkbox', 
		'priority' => '3' 
	) );
	
	
	
	// Header Options Section
    $wp_customize->add_section('cmsms_header_section', array( 
        'title' => __('Header Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme header options', 'cmsmasters'), 
		'priority' => '122' 
    ) );
	
	// Header Options Header Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_height]', array( 
		'default' => 184, 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_height]', array( 
		'label' => __('Header Height', 'cmsmasters'), 
		'section' => 'cmsms_header_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_height]', 
		'type' => 'text', 
		'priority' => '1' 
	) );
	
	// Header Options Header Navigation Top Position
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_nav_top]', array( 
		'default' => 117, 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_nav_top]', array( 
		'label' => __('Header Navigation Top Position', 'cmsmasters'), 
		'section' => 'cmsms_header_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_nav_top]', 
		'type' => 'text', 
		'priority' => '2' 
	) );
	
	// Header Options Header Navigation Right Position
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_nav_right]', array( 
		'default' => 0, 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_nav_right]', array( 
		'label' => __('Header Navigation Right Position', 'cmsmasters') . ' (' . __('px', 'cmsmasters') . ')', 
		'section' => 'cmsms_header_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_nav_right]', 
		'type' => 'text', 
		'priority' => '3' 
	) );
	
	// Header Options Header Social Icons
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_social]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_social]', array( 
		'label' => __('Header Social Icons', 'cmsmasters'), 
		'section' => 'cmsms_header_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_social]', 
		'type' => 'checkbox', 
		'priority' => '4' 
	) );
	
	// Header Options Social Icons Top Position
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_social_top]', array( 
		'default' => 40, 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_social_top]', array( 
		'label' => __('Header Social Icons Top Position', 'cmsmasters'), 
		'section' => 'cmsms_header_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_social_top]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// Header Options Social Icons Right Position
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_social_right]', array( 
		'default' => 0, 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_social_right]', array( 
		'label' => __('Header Social Icons Right Position', 'cmsmasters'), 
		'section' => 'cmsms_header_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_style_header[' . CMSMS_SHORTNAME . '_header_social_right]', 
		'type' => 'text', 
		'priority' => '6' 
	) );
	
	
	
	// Logo Options Section
    $wp_customize->add_section('cmsms_logo_section', array( 
        'title' => __('Logo Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme logo options', 'cmsmasters'), 
		'priority' => '123' 
    ) );
	
	// Logo Options Custom Logo Image URL
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_url]', array( 
		'default' => get_template_directory_uri() . '/img/logo.png', 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, CMSMS_SHORTNAME . '_logo_url', array( 
		'label' => __('Custom Logo Image URL', 'cmsmasters'), 
		'section' => 'cmsms_logo_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_url]', 
		'priority' => '1' 
	) ) );
	
	// Logo Options Custom Logo Image Width
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_width]', array( 
		'default' => 190, 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_width]', array( 
		'label' => __('Custom Logo Image Width', 'cmsmasters'), 
		'section' => 'cmsms_logo_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_width]', 
		'type' => 'text', 
		'priority' => '2' 
	) );
	
	// Logo Options Custom Logo Image Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_height]', array( 
		'default' => 69, 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_height]', array( 
		'label' => __('Custom Logo Image Height', 'cmsmasters'), 
		'section' => 'cmsms_logo_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_height]', 
		'type' => 'text', 
		'priority' => '3' 
	) );
	
	// Logo Options Custom Logo Top Position
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_top]', array( 
		'default' => 30, 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_top]', array( 
		'label' => __('Custom Logo Top Position', 'cmsmasters'), 
		'section' => 'cmsms_logo_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_top]', 
		'type' => 'text', 
		'priority' => '4' 
	) );
	
	// Logo Options Custom Logo Left Position
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_left]', array( 
		'default' => 0, 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_left]', array( 
		'label' => __('Custom Logo Left Position', 'cmsmasters'), 
		'section' => 'cmsms_logo_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_logo_image[' . CMSMS_SHORTNAME . '_logo_left]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// Logo Options Text Logo
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_logo_text[' . CMSMS_SHORTNAME . '_text_logo]', array( 
		'default' => 0, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_logo_text[' . CMSMS_SHORTNAME . '_text_logo]', array( 
		'label' => __('Text Logo', 'cmsmasters'), 
		'section' => 'cmsms_logo_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_logo_text[' . CMSMS_SHORTNAME . '_text_logo]', 
		'type' => 'checkbox', 
		'priority' => '6' 
	) );
	
	// Logo Options Custom Logo Title
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_logo_text[' . CMSMS_SHORTNAME . '_text_logo_title]', array( 
		'default' => ((get_bloginfo('name')) ? get_bloginfo('name') : 'Increase'), 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_logo_text[' . CMSMS_SHORTNAME . '_text_logo_title]', array( 
		'label' => __('Custom Logo Title', 'cmsmasters'), 
		'section' => 'cmsms_logo_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_logo_text[' . CMSMS_SHORTNAME . '_text_logo_title]', 
		'type' => 'text', 
		'priority' => '7' 
	) );
	
	// Logo Options Logo Subtitle
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_logo_text[' . CMSMS_SHORTNAME . '_text_logo_subtitle]', array( 
		'default' => 0, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_logo_text[' . CMSMS_SHORTNAME . '_text_logo_subtitle]', array( 
		'label' => __('Logo Subtitle', 'cmsmasters'), 
		'section' => 'cmsms_logo_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_logo_text[' . CMSMS_SHORTNAME . '_text_logo_subtitle]', 
		'type' => 'checkbox', 
		'priority' => '8' 
	) );
	
	// Logo Options Custom Logo Subtitle
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_logo_text[' . CMSMS_SHORTNAME . '_text_logo_subtitle_text]', array( 
		'default' => ((get_bloginfo('description')) ? get_bloginfo('description') : 'Corporate &amp; Business'), 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_logo_text[' . CMSMS_SHORTNAME . '_text_logo_subtitle_text]', array( 
		'label' => __('Custom Logo Subtitle', 'cmsmasters'), 
		'section' => 'cmsms_logo_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_logo_text[' . CMSMS_SHORTNAME . '_text_logo_subtitle_text]', 
		'type' => 'text', 
		'priority' => '9' 
	) );
	
	
	
	// Background Options Section
    $wp_customize->add_section('cmsms_bg_section', array( 
        'title' => __('Background Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme background options', 'cmsmasters'), 
		'priority' => '124' 
    ) );
	
	// Background Options Background Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_style_bg[' . CMSMS_SHORTNAME . '_bg_col]', array( 
		'default' => '#f5f5f5', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_bg_col', array( 
		'label' => __('Background Color', 'cmsmasters'), 
		'section' => 'cmsms_bg_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_style_bg[' . CMSMS_SHORTNAME . '_bg_col]', 
		'priority' => '1' 
	) ) );
	
	// Background Options Background Image
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_style_bg[' . CMSMS_SHORTNAME . '_bg_img]', array( 
		'default' => get_template_directory_uri() . '/img/bg_body.png', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, CMSMS_SHORTNAME . '_bg_img', array( 
		'label' => __('Background Image', 'cmsmasters'), 
		'section' => 'cmsms_bg_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_style_bg[' . CMSMS_SHORTNAME . '_bg_img]', 
		'priority' => '2' 
	) ) );
	
	// Background Options Background Repeat
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_style_bg[' . CMSMS_SHORTNAME . '_bg_rep]', array( 
		'default' => 'repeat-x', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_style_bg[' . CMSMS_SHORTNAME . '_bg_rep]', array( 
		'label' => __('Background Repeat', 'cmsmasters'), 
		'section' => 'cmsms_bg_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_style_bg[' . CMSMS_SHORTNAME . '_bg_rep]', 
		'type' => 'radio', 
		'choices' => array( 
			'no-repeat' => __('No Repeat', 'cmsmasters'), 
			'repeat-x' => __('Repeat Horizontally', 'cmsmasters'), 
			'repeat-y' => __('Repeat Vertically', 'cmsmasters'), 
			'repeat' => __('Repeat', 'cmsmasters') 
        ), 
		'priority' => '3' 
	) );
	
	// Background Options Background Position
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_style_bg[' . CMSMS_SHORTNAME . '_bg_pos]', array( 
		'default' => 'top center', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_style_bg[' . CMSMS_SHORTNAME . '_bg_pos]', array( 
		'label' => __('Background Position', 'cmsmasters'), 
		'section' => 'cmsms_bg_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_style_bg[' . CMSMS_SHORTNAME . '_bg_pos]', 
		'type' => 'select', 
		'choices' => array( 
			'top left' => __('Top Left', 'cmsmasters'), 
			'top center' => __('Top Center', 'cmsmasters'), 
			'top right' => __('Top Right', 'cmsmasters'), 
			'center left' => __('Center Left', 'cmsmasters'), 
			'center center' => __('Center Center', 'cmsmasters'), 
			'center right' => __('Center Right', 'cmsmasters'), 
			'bottom left' => __('Bottom Left', 'cmsmasters'), 
			'bottom center' => __('Bottom Center', 'cmsmasters'), 
			'bottom right' => __('Bottom Right', 'cmsmasters') 
        ), 
		'priority' => '4' 
	) );
	
	// Background Options Background Attachment
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_style_bg[' . CMSMS_SHORTNAME . '_bg_att]', array( 
		'default' => 'fixed', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_style_bg[' . CMSMS_SHORTNAME . '_bg_att]', array( 
		'label' => __('Background Attachment', 'cmsmasters'), 
		'section' => 'cmsms_bg_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_style_bg[' . CMSMS_SHORTNAME . '_bg_att]', 
		'type' => 'radio', 
		'choices' => array( 
			'scroll' => __('Scroll', 'cmsmasters'), 
			'fixed' => __('Fixed', 'cmsmasters') 
        ), 
		'priority' => '5' 
	) );
	
	
	
	// Footer Options Section
    $wp_customize->add_section('cmsms_footer_section', array( 
        'title' => __('Footer Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme footer options', 'cmsmasters'), 
		'priority' => '125' 
    ) );
	
	// Footer Options Footer Copyright Text
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_style_footer[' . CMSMS_SHORTNAME . '_footer_copyright]', array( 
		'default' => CMSMS_FULLNAME . ' &copy; 2013 | ' . __('All Rights Reserved', 'cmsmasters'), 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_style_footer[' . CMSMS_SHORTNAME . '_footer_copyright]', array( 
		'label' => __('Copyright Text', 'cmsmasters'), 
		'section' => 'cmsms_footer_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_style_footer[' . CMSMS_SHORTNAME . '_footer_copyright]', 
		'type' => 'text', 
		'priority' => '1' 
	) );
	
	// Footer Options Footer Additional Content
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_style_footer[' . CMSMS_SHORTNAME . '_footer_additional_content]', array( 
		'default' => 'social', 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_style_footer[' . CMSMS_SHORTNAME . '_footer_additional_content]', array( 
		'label' => __('Footer Additional Content', 'cmsmasters'), 
		'section' => 'cmsms_footer_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_style_footer[' . CMSMS_SHORTNAME . '_footer_additional_content]', 
		'type' => 'radio', 
		'choices' => array( 
			'none' => __('None', 'cmsmasters'), 
			'nav' => __('Footer Navigation', 'cmsmasters'), 
			'social' => __('Social Icons', 'cmsmasters'), 
			'text' => __('Custom HTML', 'cmsmasters') 
        ), 
		'priority' => '2' 
	) );
	
	
	
	// Content Font Options Section
    $wp_customize->add_section('cmsms_font_content_section', array( 
        'title' => __('Content Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme content font options', 'cmsmasters'), 
		'priority' => '126' 
    ) );
	
	// Content Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_content_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// Content Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_google_font]', array( 
		'default' => 'Droid+Sans:400,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_content_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// Content Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_font_color]', array( 
		'default' => '#727a7e', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_content_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_content_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// Content Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_font_size]', array( 
		'default' => '13', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_content_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_font_size]', 
		'type' => 'text', 
		'priority' => '4' 
	) );
	
	// Content Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_line_height]', array( 
		'default' => '18', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_content_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_line_height]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// Content Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_font_weight]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_content_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '6' 
	) );
	
	// Content Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_content_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_content_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '7' 
	) );

	// Bottom Headings Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_bottom_headings_color]', array( 
		'default' => '#ffffff', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_bottom_headings_color', array( 
		'label' => __('Bottom Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_content_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_bottom_headings_color]', 
		'priority' => '8' 
	) ) );
	
	// Bottom Content Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_bottom_content_font_color]', array( 
		'default' => '#d1d3d4', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_bottom_content_font_color', array( 
		'label' => __('Bottom Headings Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_content_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_content[' . CMSMS_SHORTNAME . '_bottom_content_font_color]', 
		'priority' => '9' 
	) ) );
	
	
	
	// Links Font Options Section
    $wp_customize->add_section('cmsms_font_link_section', array( 
        'title' => __('Links Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme links font options', 'cmsmasters'), 
		'priority' => '127' 
    ) );
	
	// Links Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_link_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// Links Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_google_font]', array( 
		'default' => 'Droid+Sans:400,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_link_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// Links Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_font_color]', array( 
		'default' => '#33BEE5', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_link_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_link_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// Links Font Options Font Hover Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_hover]', array( 
		'default' => '#727a7e', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_link_font_hover', array( 
		'label' => __('Font Hover Color', 'cmsmasters'), 
		'section' => 'cmsms_font_link_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_hover]', 
		'priority' => '4' 
	) ) );
	
	// Links Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_font_size]', array( 
		'default' => '13', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_link_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_font_size]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// Links Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_line_height]', array( 
		'default' => '18', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_link_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_line_height]', 
		'type' => 'text', 
		'priority' => '6' 
	) );
	
	// Links Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_font_weight]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_link_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '7' 
	) );
	
	// Links Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_link_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_link_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '8' 
	) );
	
	// Bottom Content Links Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_bottom_content_link_font_color]', array( 
		'default' => '#B6C4CB', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_bottom_content_link_font_color', array( 
		'label' => __('Bottom Content Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_link_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_bottom_content_link_font_color]', 
		'priority' => '9' 
	) ) );
	
	// Bottom Content Links Font Hover Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_bottom_content_link_font_hover_color]', array( 
		'default' => '#33bee5', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_bottom_content_link_font_hover_color', array( 
		'label' => __('Bottom Content Font Hover Color', 'cmsmasters'), 
		'section' => 'cmsms_font_link_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_link[' . CMSMS_SHORTNAME . '_bottom_content_link_font_hover_color]', 
		'priority' => '10' 
	) ) );
	

	
	// Navigation Title Font Options Section
    $wp_customize->add_section('cmsms_font_nav_title_section', array( 
        'title' => __('Navigation Title Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme navigation title font options', 'cmsmasters'), 
		'priority' => '128' 
    ) );
	
	// Navigation Title Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// Navigation Title Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_google_font]', array( 
		'default' => 'Oxygen:400,300,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// Navigation Title Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_font_color]', array( 
		'default' => '#ffffff', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_title_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// Navigation Title Font Options Font Hover Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_hover]', array( 
		'default' => '#ffffff', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_title_font_hover', array( 
		'label' => __('Font Hover Color', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_hover]', 
		'priority' => '4' 
	) ) );
	
	// Navigation Title Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_font_size]', array( 
		'default' => '14', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_font_size]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// Navigation Title Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_line_height]', array( 
		'default' => '18', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_line_height]', 
		'type' => 'text', 
		'priority' => '6' 
	) );
	
	// Navigation Title Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_font_weight]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '7' 
	) );
	
	// Navigation Title Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '8' 
	) );
	
	// Navigation Background Color 1
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_1]', array( 
		'default' => '#33bee5', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_title_bg_color_1', array( 
		'label' => __('Background Color 1', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_1]', 
		'priority' => '9' 
	) ) );
	
	// Navigation Background Color 2
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_2]', array( 
		'default' => '#fabe09', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_title_bg_color_2', array( 
		'label' => __('Background Color 2', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_2]', 
		'priority' => '10' 
	) ) );
	
	// Navigation Background Color 3
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_3]', array( 
		'default' => '#6cc437', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_title_bg_color_3', array( 
		'label' => __('Background Color 3', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_3]', 
		'priority' => '11' 
	) ) );
	
	// Navigation Background Color 4
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_4]', array( 
		'default' => '#f97a14', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_title_bg_color_4', array( 
		'label' => __('Background Color 4', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_4]', 
		'priority' => '12' 
	) ) );
	
	// Navigation Background Color 5
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_5]', array( 
		'default' => '#e94f4f', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_title_bg_color_5', array( 
		'label' => __('Background Color 5', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_5]', 
		'priority' => '13' 
	) ) );
	
	// Navigation Background Color 6
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_6]', array( 
		'default' => '#48dcb8', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_title_bg_color_6', array( 
		'label' => __('Background Color 6', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_6]', 
		'priority' => '14' 
	) ) );
	
	// Navigation Background Color 7
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_7]', array( 
		'default' => '#33bee5', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_title_bg_color_7', array( 
		'label' => __('Background Color 7', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_7]', 
		'priority' => '15' 
	) ) );
	
	// Navigation Background Color 8
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_8]', array( 
		'default' => '#de5c8d', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_title_bg_color_8', array( 
		'label' => __('Background Color 8', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_8]', 
		'priority' => '16' 
	) ) );
	
	// Navigation Background Color 9
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_9]', array( 
		'default' => '#db4141', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_title_bg_color_9', array( 
		'label' => __('Background Color 9', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_9]', 
		'priority' => '17' 
	) ) );
	
	// Navigation Background Color 10
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_10]', array( 
		'default' => '#3387e5', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_title_bg_color_10', array( 
		'label' => __('Background Color 10', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_title_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_title_bg_color_10]', 
		'priority' => '18' 
	) ) );	
	
	
	
	// Navigation Dropdown Font Options Section
    $wp_customize->add_section('cmsms_font_nav_dropdown_section', array( 
        'title' => __('Navigation Dropdown Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme navigation dropdown font options', 'cmsmasters'), 
		'priority' => '129' 
    ) );
	
	// Navigation Dropdown Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_dropdown_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// Navigation Dropdown Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_google_font]', array( 
		'default' => 'Oxygen:400,300,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_dropdown_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// Navigation Dropdown Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_font_color]', array( 
		'default' => '#4E5C64', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_dropdown_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_dropdown_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// Navigation Dropdown Font Options Font Hover Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_hover]', array( 
		'default' => '#33bee5', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_nav_dropdown_font_hover', array( 
		'label' => __('Font Hover Color', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_dropdown_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_hover]', 
		'priority' => '4' 
	) ) );
	
	// Navigation Dropdown Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_font_size]', array( 
		'default' => '13', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_dropdown_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_font_size]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// Navigation Dropdown Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_line_height]', array( 
		'default' => '18', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_dropdown_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_line_height]', 
		'type' => 'text', 
		'priority' => '6' 
	) );
	
	// Navigation Dropdown Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_font_weight]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_dropdown_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '7' 
	) );
	
	// Navigation Dropdown Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_nav_dropdown_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_nav[' . CMSMS_SHORTNAME . '_nav_dropdown_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '8' 
	) );
	
	
	
	// H1 Heading Font Options Section
    $wp_customize->add_section('cmsms_font_h1_section', array( 
        'title' => __('H1 Heading Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme H1 heading font options', 'cmsmasters'), 
		'priority' => '130' 
    ) );
	
	// H1 Heading Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_h1_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// H1 Heading Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_google_font]', array( 
		'default' => 'Oxygen:400,300,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_h1_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// H1 Heading Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_font_color]', array( 
		'default' => '#4E5C64', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_h1_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_h1_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// H1 Heading Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_font_size]', array( 
		'default' => '32', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_h1_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_font_size]', 
		'type' => 'text', 
		'priority' => '4' 
	) );
	
	// H1 Heading Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_line_height]', array( 
		'default' => '36', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_h1_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_line_height]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// H1 Heading Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_font_weight]', array( 
		'default' => '300', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_h1_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '6' 
	) );
	
	// H1 Heading Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_h1_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h1[' . CMSMS_SHORTNAME . '_h1_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '7' 
	) );
	
	
	
	// H2 Heading Font Options Section
    $wp_customize->add_section('cmsms_font_h2_section', array( 
        'title' => __('H2 Heading Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme H2 heading font options', 'cmsmasters'), 
		'priority' => '131' 
    ) );
	
	// H2 Heading Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_h2_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// H2 Heading Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_google_font]', array( 
		'default' => 'Oxygen:400,300,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_h2_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// H2 Heading Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_font_color]', array( 
		'default' => '#4E5C64', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_h2_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_h2_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// H2 Heading Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_font_size]', array( 
		'default' => '24', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_h2_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_font_size]', 
		'type' => 'text', 
		'priority' => '4' 
	) );
	
	// H2 Heading Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_line_height]', array( 
		'default' => '36', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_h2_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_line_height]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// H2 Heading Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_font_weight]', array( 
		'default' => '300', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_h2_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '6' 
	) );
	
	// H2 Heading Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_h2_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h2[' . CMSMS_SHORTNAME . '_h2_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '7' 
	) );
	
	
	
	// H3 Heading Font Options Section
    $wp_customize->add_section('cmsms_font_h3_section', array( 
        'title' => __('H3 Heading Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme H3 heading font options', 'cmsmasters'), 
		'priority' => '132' 
    ) );
	
	// H3 Heading Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_h3_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// H3 Heading Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_google_font]', array( 
		'default' => 'Oxygen:400,300,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_h3_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// H3 Heading Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_font_color]', array( 
		'default' => '#4E5C64', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_h3_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_h3_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// H3 Heading Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_font_size]', array( 
		'default' => '22', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_h3_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_font_size]', 
		'type' => 'text', 
		'priority' => '4' 
	) );
	
	// H3 Heading Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_line_height]', array( 
		'default' => '36', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_h3_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_line_height]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// H3 Heading Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_font_weight]', array( 
		'default' => '300', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_h3_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '6' 
	) );
	
	// H3 Heading Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_h3_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h3[' . CMSMS_SHORTNAME . '_h3_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '7' 
	) );
	
	
	
	// H4 Heading Font Options Section
    $wp_customize->add_section('cmsms_font_h4_section', array( 
        'title' => __('H4 Heading Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme H4 heading font options', 'cmsmasters'), 
		'priority' => '133' 
    ) );
	
	// H4 Heading Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_h4_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// H4 Heading Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_google_font]', array( 
		'default' => 'Oxygen:400,300,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_h4_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// H4 Heading Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_font_color]', array( 
		'default' => '#4E5C64', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_h4_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_h4_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// H4 Heading Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_font_size]', array( 
		'default' => '20', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_h4_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_font_size]', 
		'type' => 'text', 
		'priority' => '4' 
	) );
	
	// H4 Heading Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_line_height]', array( 
		'default' => '36', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_h4_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_line_height]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// H4 Heading Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_font_weight]', array( 
		'default' => '300', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_h4_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '6' 
	) );
	
	// H4 Heading Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_h4_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h4[' . CMSMS_SHORTNAME . '_h4_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '7' 
	) );
	
	
	
	// H5 Heading Font Options Section
    $wp_customize->add_section('cmsms_font_h5_section', array( 
        'title' => __('H5 Heading Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme H5 heading font options', 'cmsmasters'), 
		'priority' => '134' 
    ) );
	
	// H5 Heading Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_h5_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// H5 Heading Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_google_font]', array( 
		'default' => 'Oxygen:400,300,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_h5_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// H5 Heading Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_font_color]', array( 
		'default' => '#4E5C64', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_h5_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_h5_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// H5 Heading Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_font_size]', array( 
		'default' => '18', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_h5_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_font_size]', 
		'type' => 'text', 
		'priority' => '4' 
	) );
	
	// H5 Heading Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_line_height]', array( 
		'default' => '24', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_h5_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_line_height]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// H5 Heading Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_font_weight]', array( 
		'default' => '300', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_h5_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '6' 
	) );
	
	// H5 Heading Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_h5_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h5[' . CMSMS_SHORTNAME . '_h5_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '7' 
	) );
	
	
	
	// H6 Heading Font Options Section
    $wp_customize->add_section('cmsms_font_h6_section', array( 
        'title' => __('H6 Heading Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme H6 heading font options', 'cmsmasters'), 
		'priority' => '135' 
    ) );
	
	// H6 Heading Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_h6_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// H6 Heading Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_google_font]', array( 
		'default' => 'Oxygen:400,300,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_h6_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// H6 Heading Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_font_color]', array( 
		'default' => '#4E5C64', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_h6_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_h6_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// H6 Heading Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_font_size]', array( 
		'default' => '16', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_h6_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_font_size]', 
		'type' => 'text', 
		'priority' => '4' 
	) );
	
	// H6 Heading Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_line_height]', array( 
		'default' => '18', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_h6_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_line_height]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// H6 Heading Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_font_weight]', array( 
		'default' => '300', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_h6_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '6' 
	) );
	
	// H6 Heading Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_h6_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_h6[' . CMSMS_SHORTNAME . '_h6_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '7' 
	) );
	
	
	
	// Blockquote Font Options Section
    $wp_customize->add_section('cmsms_font_quote_section', array( 
        'title' => __('Blockquote Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme blockquote font options', 'cmsmasters'), 
		'priority' => '136' 
    ) );
	
	// Blockquote Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_quote_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// Blockquote Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_google_font]', array( 
		'default' => 'Oxygen:400,300,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_quote_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// Blockquote Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_font_color]', array( 
		'default' => '#727A7E', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_quote_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_quote_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// Blockquote Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_font_size]', array( 
		'default' => '16', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_quote_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_font_size]', 
		'type' => 'text', 
		'priority' => '4' 
	) );
	
	// Blockquote Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_line_height]', array( 
		'default' => '24', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_quote_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_line_height]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// Blockquote Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_font_weight]', array( 
		'default' => '300', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_quote_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '6' 
	) );
	
	// Blockquote Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_quote_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_quote_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '7' 
	) );
	
	
	
	// Dropcap Font Options Section
    $wp_customize->add_section('cmsms_font_dropcap_section', array( 
        'title' => __('Dropcap Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme dropcap font options', 'cmsmasters'), 
		'priority' => '137' 
    ) );
	
	// Dropcap Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_dropcap_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// Dropcap Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_google_font]', array( 
		'default' => 'Oxygen:400,300,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_dropcap_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// Dropcap Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_font_color]', array( 
		'default' => '#ffffff', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_dropcap_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_dropcap_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// Dropcap Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_font_size]', array( 
		'default' => '24', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_dropcap_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_font_size]', 
		'type' => 'text', 
		'priority' => '4' 
	) );
	
	// Dropcap Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_line_height]', array( 
		'default' => '48', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_dropcap_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_line_height]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// Dropcap Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_font_weight]', array( 
		'default' => 'bold', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_dropcap_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '6' 
	) );
	
	// Dropcap Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_dropcap_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_dropcap_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '7' 
	) );
	
	
	
	// Code Tag Font Options Section
    $wp_customize->add_section('cmsms_font_code_section', array( 
        'title' => __('Code Tag Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme code tag font options', 'cmsmasters'), 
		'priority' => '138' 
    ) );
	
	// Code Tag Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_code_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// Code Tag Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_google_font]', array( 
		'default' => 'Droid+Sans:400,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_code_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// Code Tag Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_font_color]', array( 
		'default' => '#727A7E', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_code_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_code_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// Code Tag Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_font_size]', array( 
		'default' => '13', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_code_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_font_size]', 
		'type' => 'text', 
		'priority' => '4' 
	) );
	
	// Code Tag Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_line_height]', array( 
		'default' => '18', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_code_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_line_height]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// Code Tag Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_font_weight]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_code_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '6' 
	) );
	
	// Code Tag Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_code_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_code_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '7' 
	) );
	
	
	
	// Small Tag Font Options Section
    $wp_customize->add_section('cmsms_font_small_section', array( 
        'title' => __('Small Tag Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme small tag font options', 'cmsmasters'), 
		'priority' => '139' 
    ) );
	
	// Small Tag Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_small_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// Small Tag Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_google_font]', array( 
		'default' => 'Droid+Sans:400,700', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_small_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// Small Tag Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_font_color]', array( 
		'default' => '#727A7E', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_small_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_small_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// Small Tag Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_font_size]', array( 
		'default' => '12', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_small_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_font_size]', 
		'type' => 'text', 
		'priority' => '4' 
	) );
	
	// Small Tag Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_line_height]', array( 
		'default' => '18', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_small_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_line_height]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// Small Tag Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_font_weight]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_small_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '6' 
	) );
	
	// Small Tag Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_small_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_small_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '7' 
	) );
	
	
	
	// Text Fields Font Options Section
    $wp_customize->add_section('cmsms_font_input_section', array( 
        'title' => __('Text Fields Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme text fields font options', 'cmsmasters'), 
		'priority' => '140' 
    ) );
	
	// Text Fields Font Options System Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_system_font]', array( 
		'default' => "Arial, Helvetica, sans-serif", 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_system_font]', array( 
		'label' => __('System Font', 'cmsmasters'), 
		'section' => 'cmsms_font_input_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_system_font]', 
		'type' => 'select', 
		'choices' => cmsms_system_fonts_list(), 
		'priority' => '1' 
	) );
	
	// Text Fields Font Options Google Font
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_google_font]', array( 
		'default' => '', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_google_font]', array( 
		'label' => __('Google Font', 'cmsmasters'), 
		'section' => 'cmsms_font_input_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_google_font]', 
		'type' => 'select', 
		'choices' => cmsms_google_fonts_list(), 
		'priority' => '2' 
	) );
	
	// Text Fields Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_font_color]', array( 
		'default' => '#4E5C64', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_input_font_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_input_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_font_color]', 
		'priority' => '3' 
	) ) );
	
	// Text Fields Font Options Font Size
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_font_size]', array( 
		'default' => '12', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_font_size]', array( 
		'label' => __('Font Size', 'cmsmasters'), 
		'section' => 'cmsms_font_input_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_font_size]', 
		'type' => 'text', 
		'priority' => '4' 
	) );
	
	// Text Fields Font Options Line Height
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_line_height]', array( 
		'default' => '18', 
		'type' => 'option', 
		'transport' => 'postMessage', 
		'sanitize_callback' => 'check_number' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_line_height]', array( 
		'label' => __('Line Height', 'cmsmasters'), 
		'section' => 'cmsms_font_input_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_line_height]', 
		'type' => 'text', 
		'priority' => '5' 
	) );
	
	// Text Fields Font Options Font Weight
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_font_weight]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_font_weight]', array( 
		'label' => __('Font Weight', 'cmsmasters'), 
		'section' => 'cmsms_font_input_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_font_weight]', 
		'type' => 'select', 
		'choices' => cmsms_font_weight_list(), 
		'priority' => '6' 
	) );
	
	// Text Fields Font Options Font Style
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_font_style]', array( 
		'default' => 'normal', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_font_style]', array( 
		'label' => __('Font Style', 'cmsmasters'), 
		'section' => 'cmsms_font_input_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_input_font_font_style]', 
		'type' => 'select', 
		'choices' => cmsms_font_style_list(), 
		'priority' => '7' 
	) );
	
	
	
	// Footer Font Options Section
    $wp_customize->add_section('cmsms_font_footer_section', array( 
        'title' => __('Footer Font Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme footer font options', 'cmsmasters'), 
		'priority' => '141' 
    ) );
	
	// Footer Font Options Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_footer_font_color]', array( 
		'default' => '#D1D3D4', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_footer_font_color', array( 
		'label' => __('Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_footer_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_footer_font_color]', 
		'priority' => '3' 
	) ) );

	// Footer Links Font Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_footer_link_font_color]', array( 
		'default' => '#B6C4CB', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_footer_link_font_color', array( 
		'label' => __('Links Font Color', 'cmsmasters'), 
		'section' => 'cmsms_font_footer_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_footer_link_font_color]', 
		'priority' => '4' 
	) ) );
	
	// Footer Links Font Hover Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_footer_font_hover]', array( 
		'default' => '#33BEE5', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_footer_font_hover', array( 
		'label' => __('Footer Links Font Hover Color', 'cmsmasters'), 
		'section' => 'cmsms_font_footer_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_font_other[' . CMSMS_SHORTNAME . '_footer_font_hover]', 
		'priority' => '5' 
	) ) );
	
	
	
	// Blog Page Options Section
    $wp_customize->add_section('cmsms_blog_page_section', array( 
        'title' => __('Blog Page Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme blog page template options', 'cmsmasters'), 
		'priority' => '142' 
    ) );
	
	// Blog Page Options Post Date
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_date]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_date]', array( 
		'label' => __('Post Date', 'cmsmasters'), 
		'section' => 'cmsms_blog_page_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_date]', 
		'type' => 'checkbox', 
		'priority' => '1' 
	) );
	
	// Blog Page Options Post Categories
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_cat]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_cat]', array( 
		'label' => __('Post Categories', 'cmsmasters'), 
		'section' => 'cmsms_blog_page_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_cat]', 
		'type' => 'checkbox', 
		'priority' => '2' 
	) );
	
	// Blog Page Options Post Author
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_author]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_author]', array( 
		'label' => __('Post Author', 'cmsmasters'), 
		'section' => 'cmsms_blog_page_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_author]', 
		'type' => 'checkbox', 
		'priority' => '3' 
	) );
	
	// Blog Page Options Post Comments
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_comment]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_comment]', array( 
		'label' => __('Post Comments', 'cmsmasters'), 
		'section' => 'cmsms_blog_page_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_comment]', 
		'type' => 'checkbox', 
		'priority' => '4' 
	) );
	
	// Blog Page Options Post Tags
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_tag]', array( 
		'default' => 0, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_tag]', array( 
		'label' => __('Post Tags', 'cmsmasters'), 
		'section' => 'cmsms_blog_page_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_tag]', 
		'type' => 'checkbox', 
		'priority' => '5' 
	) );
	
	// Blog Page Options Post Read More
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_more]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_more]', array( 
		'label' => __('Read More', 'cmsmasters'), 
		'section' => 'cmsms_blog_page_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_page[' . CMSMS_SHORTNAME . '_blog_page_more]', 
		'type' => 'checkbox', 
		'priority' => '6' 
	) );
	
	
	
	// Blog Post Options Section
    $wp_customize->add_section('cmsms_blog_post_section', array( 
        'title' => __('Blog Post Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme blog post options', 'cmsmasters'), 
		'priority' => '143' 
    ) );
	
	// Blog Post Options Post Title
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_title]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_title]', array( 
		'label' => __('Post Title', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_title]', 
		'type' => 'checkbox', 
		'priority' => '1' 
	) );
	
	// Blog Post Options Post Date
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_date]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_date]', array( 
		'label' => __('Post Date', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_date]', 
		'type' => 'checkbox', 
		'priority' => '2' 
	) );
	
	// Blog Post Options Post Categories
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_cat]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_cat]', array( 
		'label' => __('Post Categories', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_cat]', 
		'type' => 'checkbox', 
		'priority' => '3' 
	) );
	
	// Blog Post Options Post Author
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_author]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_author]', array( 
		'label' => __('Post Author', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_author]', 
		'type' => 'checkbox', 
		'priority' => '4' 
	) );
	
	// Blog Post Options Post Comments
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_comment]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_comment]', array( 
		'label' => __('Post Comments', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_comment]', 
		'type' => 'checkbox', 
		'priority' => '5' 
	) );
	
	// Blog Post Options Post Tags
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_tag]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_tag]', array( 
		'label' => __('Post Tags', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_tag]', 
		'type' => 'checkbox', 
		'priority' => '6' 
	) );
	
	// Blog Post Options Posts Navigation Box
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_nav_box]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_nav_box]', array( 
		'label' => __('Posts Navigation Box', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_nav_box]', 
		'type' => 'checkbox', 
		'priority' => '7' 
	) );
	
	// Blog Post Options Related, Popular & Latest Projects Boxes Items Number
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_r_p_l_number]', array( 
		'default' => 4, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_r_p_l_number]', array( 
		'label' => __('Related, Popular & Latest Posts Boxes Items Number', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_blog_post_r_p_l_number]', 
		'type' => 'text', 
		'priority' => '8' 
	) );
	
	// Standard Post Format Icon Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_standard_post_format_img]', array( 
		'default' => '#FABE09', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_standard_post_format_img', array( 
		'label' => __('Standard Post Format Icon Color', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_standard_post_format_img]', 
		'priority' => '9' 
	) ) );
	
	// Aside Post Format Icon Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_aside_post_format_img]', array( 
		'default' => '#f97a14', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_aside_post_format_img', array( 
		'label' => __('Aside Post Format Icon Color', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_aside_post_format_img]', 
		'priority' => '10' 
	) ) );
	
	// Quote Post Format Icon Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_quote_post_format_img]', array( 
		'default' => '#6dc437', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_quote_post_format_img', array( 
		'label' => __('Quote Post Format Icon Color', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_quote_post_format_img]', 
		'priority' => '11' 
	) ) );
	
	// Link Post Format Icon Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_link_post_format_img]', array( 
		'default' => '#3c9ef1', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_link_post_format_img', array( 
		'label' => __('Link Post Format Icon Color', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_link_post_format_img]', 
		'priority' => '12' 
	) ) );
	
	// Image Post Format Icon Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_image_post_format_img]', array( 
		'default' => '#de5c8d', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_image_post_format_img', array( 
		'label' => __('Image Post Format Icon Color', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_image_post_format_img]', 
		'priority' => '13' 
	) ) );
	
	// Gallery Post Format Icon Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_gallery_post_format_img]', array( 
		'default' => '#e94f4f', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_gallery_post_format_img', array( 
		'label' => __('Gallery Post Format Icon Color', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_gallery_post_format_img]', 
		'priority' => '14' 
	) ) );
	
	// Video Post Format Icon Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_video_post_format_img]', array( 
		'default' => '#48dcb8', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_video_post_format_img', array( 
		'label' => __('Video Post Format Icon Color', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_video_post_format_img]', 
		'priority' => '15' 
	) ) );
	
	// Audio Post Format Icon Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_audio_post_format_img]', array( 
		'default' => '#bc9ee5', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_audio_post_format_img', array( 
		'label' => __('Audio Post Format Icon Color', 'cmsmasters'), 
		'section' => 'cmsms_blog_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_blog_post[' . CMSMS_SHORTNAME . '_audio_post_format_img]', 
		'priority' => '16' 
	) ) );
	
	
	
	// Portfolio Page Options Section
    $wp_customize->add_section('cmsms_portfolio_full_section', array( 
        'title' => __('Portfolio Page Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme portfolio page template options', 'cmsmasters'), 
		'priority' => '144' 
    ) );
	
	// Portfolio Page Options Projects Titles
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_full[' . CMSMS_SHORTNAME . '_portfolio_full_title]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_full[' . CMSMS_SHORTNAME . '_portfolio_full_title]', array( 
		'label' => __('Project Title', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_full_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_full[' . CMSMS_SHORTNAME . '_portfolio_full_title]', 
		'type' => 'checkbox', 
		'priority' => '1' 
	) );
	
	// Portfolio Page Options Projects Descriptions
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_full[' . CMSMS_SHORTNAME . '_portfolio_full_descr]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_full[' . CMSMS_SHORTNAME . '_portfolio_full_descr]', array( 
		'label' => __('Project Description', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_full_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_full[' . CMSMS_SHORTNAME . '_portfolio_full_descr]', 
		'type' => 'checkbox', 
		'priority' => '2' 
	) );
	
	// Portfolio Page Options Projects Categories
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_full[' . CMSMS_SHORTNAME . '_portfolio_full_cat]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_full[' . CMSMS_SHORTNAME . '_portfolio_full_cat]', array( 
		'label' => __('Project Categories', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_full_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_full[' . CMSMS_SHORTNAME . '_portfolio_full_cat]', 
		'type' => 'checkbox', 
		'priority' => '3' 
	) );
	
	
	
	// Portfolio Project Options Section
    $wp_customize->add_section('cmsms_portfolio_project_section', array( 
        'title' => __('Portfolio Project Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme portfolio project options', 'cmsmasters'), 
		'priority' => '145' 
    ) );
	
	// Portfolio Project Options Project Title
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_title]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_title]', array( 
		'label' => __('Project Title', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_project_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_title]', 
		'type' => 'checkbox', 
		'priority' => '1' 
	) );
	
	// Portfolio Project Options Project Date
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_date]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_date]', array( 
		'label' => __('Project Date', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_project_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_date]', 
		'type' => 'checkbox', 
		'priority' => '2' 
	) );
	
	// Portfolio Project Options Project Categories
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_cat]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_cat]', array( 
		'label' => __('Project Categories', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_project_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_cat]', 
		'type' => 'checkbox', 
		'priority' => '3' 
	) );
	
	// Portfolio Project Options Project Author
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_author]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_author]', array( 
		'label' => __('Project Author', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_project_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_author]', 
		'type' => 'checkbox', 
		'priority' => '4' 
	) );
	
	// Portfolio Project Options Project Comments
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_comment]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_comment]', array( 
		'label' => __('Project Comments', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_project_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_comment]', 
		'type' => 'checkbox', 
		'priority' => '5' 
	) );
	
	// Portfolio Project Options Project Tags
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_tag]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_tag]', array( 
		'label' => __('Project Tags', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_project_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_tag]', 
		'type' => 'checkbox', 
		'priority' => '6' 
	) );
	
	// Portfolio Project Options Project Link
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_link]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_link]', array( 
		'label' => __('Project Link', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_project_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_link]', 
		'type' => 'checkbox', 
		'priority' => '7' 
	) );
	
	// Portfolio Project Options Projects Navigation Box
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_nav_box]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_nav_box]', array( 
		'label' => __('Projects Navigation Box', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_project_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_nav_box]', 
		'type' => 'checkbox', 
		'priority' => '8' 
	) );
	
	// Portfolio Project Options Related, Popular & Latest Projects Boxes Items Number
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_r_p_l_number]', array( 
		'default' => 4, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_r_p_l_number]', array( 
		'label' => __('Related, Popular & Latest Projects Boxes Items Number', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_project_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_portfolio_project_r_p_l_number]', 
		'type' => 'text', 
		'priority' => '9' 
	) );
	
	// Portfolio Project Format Album
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_project_album_color]', array( 
		'default' => '#6CC437', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_project_album_color', array( 
		'label' => __('Portfolio Project Format Album', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_project_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_project_album_color]', 
		'priority' => '10' 
	) ) );
	
	// Portfolio Project Format Slider
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_project_slider_color]', array( 
		'default' => '#FABE09', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_project_slider_color', array( 
		'label' => __('Portfolio Project Format Slider', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_project_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_project_slider_color]', 
		'priority' => '11' 
	) ) );
	
	// Video Post Format Icon Color
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_project_video_color]', array( 
		'default' => '#F97A14', 
		'type' => 'option', 
		'transport' => 'postMessage' 
	) );
	
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, CMSMS_SHORTNAME . '_project_video_color', array( 
		'label' => __('Video Post Format Icon Color', 'cmsmasters'), 
		'section' => 'cmsms_portfolio_project_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_portfolio_project[' . CMSMS_SHORTNAME . '_project_video_color]', 
		'priority' => '12' 
	) ) );
	
	
	
	// Testimonials Page Options Section
    $wp_customize->add_section('cmsms_tl_page_section', array( 
        'title' => __('Testimonials Page Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme testimonials page template options', 'cmsmasters'), 
		'priority' => '146' 
    ) );
	
	// Testimonials Page Options Testimonial Author Avatar
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_author_avatar]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_author_avatar]', array( 
		'label' => __('Testimonial Author Avatar', 'cmsmasters'), 
		'section' => 'cmsms_tl_page_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_author_avatar]', 
		'type' => 'checkbox', 
		'priority' => '1' 
	) );
	
	// Testimonials Page Options Testimonial Author Description
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_author_descr]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_author_descr]', array( 
		'label' => __('Testimonial Author Description', 'cmsmasters'), 
		'section' => 'cmsms_tl_page_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_author_descr]', 
		'type' => 'checkbox', 
		'priority' => '2' 
	) );
	
	// Testimonials Page Options Testimonial Date
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_date]', array( 
		'default' => 0, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_date]', array( 
		'label' => __('Testimonial Date', 'cmsmasters'), 
		'section' => 'cmsms_tl_page_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_date]', 
		'type' => 'checkbox', 
		'priority' => '3' 
	) );
	
	// Testimonials Page Options Testimonial Categories
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_cat]', array( 
		'default' => 0, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_cat]', array( 
		'label' => __('Testimonial Categories', 'cmsmasters'), 
		'section' => 'cmsms_tl_page_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_cat]', 
		'type' => 'checkbox', 
		'priority' => '4' 
	) );
	
	// Testimonials Page Options Testimonial Comments
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_comment]', array( 
		'default' => 0, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_comment]', array( 
		'label' => __('Testimonial Comments', 'cmsmasters'), 
		'section' => 'cmsms_tl_page_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_comment]', 
		'type' => 'checkbox', 
		'priority' => '5' 
	) );
	
	// Testimonials Page Options Testimonial Read More
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_more]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_more]', array( 
		'label' => __('Read More', 'cmsmasters'), 
		'section' => 'cmsms_tl_page_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_page[' . CMSMS_SHORTNAME . '_testimonial_page_more]', 
		'type' => 'checkbox', 
		'priority' => '6' 
	) );
	
	
	
	// Testimonials Post Options Section
    $wp_customize->add_section('cmsms_tl_post_section', array( 
        'title' => __('Testimonials Post Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme testimonials posts options', 'cmsmasters'), 
		'priority' => '147' 
    ) );
	
	// Testimonials Post Options Testimonial Author Avatar
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_author_avatar]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_author_avatar]', array( 
		'label' => __('Testimonial Author Avatar', 'cmsmasters'), 
		'section' => 'cmsms_tl_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_author_avatar]', 
		'type' => 'checkbox', 
		'priority' => '1' 
	) );
	
	// Testimonials Post Options Testimonial Author Description
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_author_descr]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_author_descr]', array( 
		'label' => __('Testimonial Author Description', 'cmsmasters'), 
		'section' => 'cmsms_tl_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_author_descr]', 
		'type' => 'checkbox', 
		'priority' => '2' 
	) );
	
	// Testimonials Post Options Testimonial Date
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_date]', array( 
		'default' => 0, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_date]', array( 
		'label' => __('Testimonial Date', 'cmsmasters'), 
		'section' => 'cmsms_tl_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_date]', 
		'type' => 'checkbox', 
		'priority' => '3' 
	) );
	
	// Testimonials Post Options Testimonial Categories
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_cat]', array( 
		'default' => 0, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_cat]', array( 
		'label' => __('Testimonial Categories', 'cmsmasters'), 
		'section' => 'cmsms_tl_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_cat]', 
		'type' => 'checkbox', 
		'priority' => '4' 
	) );
	
	// Testimonials Post Options Testimonial Comments
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_comment]', array( 
		'default' => 0, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_comment]', array( 
		'label' => __('Testimonial Comments', 'cmsmasters'), 
		'section' => 'cmsms_tl_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_comment]', 
		'type' => 'checkbox', 
		'priority' => '5' 
	) );
	
	// Testimonials Post Options Testimonial Navigation Box
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_nav_box]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_nav_box]', array( 
		'label' => __('Testimonial Navigation Box', 'cmsmasters'), 
		'section' => 'cmsms_tl_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_nav_box]', 
		'type' => 'checkbox', 
		'priority' => '6' 
	) );
	
	// Testimonials Post Options Popular & Latest Testimonials Boxes Items Number
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_p_l_number]', array( 
		'default' => 4, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_p_l_number]', array( 
		'label' => __('Popular & Latest Testimonials Boxes Items Number', 'cmsmasters'), 
		'section' => 'cmsms_tl_post_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_testimonial_t_post[' . CMSMS_SHORTNAME . '_testimonial_post_p_l_number]', 
		'type' => 'text', 
		'priority' => '7' 
	) );
	
	
	
	// Sitemap Options Section
    $wp_customize->add_section('cmsms_sitemap_section', array( 
        'title' => __('Sitemap Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme sitemap page template options', 'cmsmasters'), 
		'priority' => '148' 
    ) );
	
	// Sitemap Options Website Pages
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_nav]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_nav]', array( 
		'label' => __('Website Pages', 'cmsmasters'), 
		'section' => 'cmsms_sitemap_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_nav]', 
		'type' => 'checkbox', 
		'priority' => '1' 
	) );
	
	// Sitemap Options Blog Archives by Categories
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_categs]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_categs]', array( 
		'label' => __('Blog Archives by Categories', 'cmsmasters'), 
		'section' => 'cmsms_sitemap_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_categs]', 
		'type' => 'checkbox', 
		'priority' => '2' 
	) );
	
	// Sitemap Options Blog Archives by Tags
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_tags]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_tags]', array( 
		'label' => __('Blog Archives by Tags', 'cmsmasters'), 
		'section' => 'cmsms_sitemap_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_tags]', 
		'type' => 'checkbox', 
		'priority' => '3' 
	) );
	
	// Sitemap Options Blog Archives by Month
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_month]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_month]', array( 
		'label' => __('Blog Archives by Month', 'cmsmasters'), 
		'section' => 'cmsms_sitemap_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_month]', 
		'type' => 'checkbox', 
		'priority' => '4' 
	) );
	
	// Sitemap Options Portfolio Archives by Categories
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_pj_categs]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_pj_categs]', array( 
		'label' => __('Portfolio Archives by Categories', 'cmsmasters'), 
		'section' => 'cmsms_sitemap_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_pj_categs]', 
		'type' => 'checkbox', 
		'priority' => '5' 
	) );
	
	// Sitemap Options Portfolio Archives by Tags
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_pj_tags]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_pj_tags]', array( 
		'label' => __('Portfolio Archives by Tags', 'cmsmasters'), 
		'section' => 'cmsms_sitemap_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_sitemap[' . CMSMS_SHORTNAME . '_sitemap_pj_tags]', 
		'type' => 'checkbox', 
		'priority' => '6' 
	) );
	
	
	
	// 404 Error Page Options Section
    $wp_customize->add_section('cmsms_error_section', array( 
        'title' => __('404 Error Page Options', 'cmsmasters'), 
        'description' => __('Allows you to change theme 404 error page options', 'cmsmasters'), 
		'priority' => '149' 
    ) );
	
	// 404 Error Page Options Search Line
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_error[' . CMSMS_SHORTNAME . '_error_search]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_error[' . CMSMS_SHORTNAME . '_error_search]', array( 
		'label' => __('Search Line', 'cmsmasters'), 
		'section' => 'cmsms_error_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_error[' . CMSMS_SHORTNAME . '_error_search]', 
		'type' => 'checkbox', 
		'priority' => '1' 
	) );
	
	// 404 Error Page Options Sitemap Button
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_error[' . CMSMS_SHORTNAME . '_error_sitemap_button]', array( 
		'default' => 1, 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_error[' . CMSMS_SHORTNAME . '_error_sitemap_button]', array( 
		'label' => __('Sitemap Button', 'cmsmasters'), 
		'section' => 'cmsms_error_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_error[' . CMSMS_SHORTNAME . '_error_sitemap_button]', 
		'type' => 'checkbox', 
		'priority' => '2' 
	) );
	
	// 404 Error Page Options Sitemap Page URL
	$wp_customize->add_setting('cmsms_options_' . CMSMS_SHORTNAME . '_error[' . CMSMS_SHORTNAME . '_error_sitemap_link]', array( 
		'default' => '#', 
		'type' => 'option' 
	) );
	
	$wp_customize->add_control('cmsms_options_' . CMSMS_SHORTNAME . '_error[' . CMSMS_SHORTNAME . '_error_sitemap_link]', array( 
		'label' => __('Sitemap Page URL', 'cmsmasters'), 
		'section' => 'cmsms_error_section', 
		'settings' => 'cmsms_options_' . CMSMS_SHORTNAME . '_error[' . CMSMS_SHORTNAME . '_error_sitemap_link]', 
		'type' => 'text', 
		'priority' => '3' 
	) );
	
	
	
	// Check Number Function
	function check_number($value) {
		$value = (int) $value;
		
		
		return ($value > 0) ? $value : null;
	}
}

add_action('customize_register', 'cmsms_theme_customizer');


function cmsms_theme_customizer_js() {
    wp_enqueue_script('cmsms-theme-customizer', get_template_directory_uri() . '/framework/admin/customizer/js/cmsms-theme-customizer.js', array('jquery', 'customize-preview'), '1.0.0', true);
}

add_action('customize_preview_init', 'cmsms_theme_customizer_js');

