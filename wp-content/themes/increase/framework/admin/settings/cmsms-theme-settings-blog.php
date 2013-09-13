<?php 
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Admin Panel Blog Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_blog_tabs() {
	$tabs = array();
	
	$tabs['page'] = __('Page', 'cmsmasters');
	$tabs['post'] = __('Post', 'cmsmasters');
	
	return $tabs;
}


function cmsms_options_blog_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'page':
		$sections = array();
		
		$sections['page_section'] = __('Blog Page Options', 'cmsmasters');
		
		break;
	case 'post':
		$sections = array();
		
		$sections['post_section'] = __('Blog Post Options', 'cmsmasters');
		
		break;
	}
	
	return $sections;
} 


function cmsms_options_blog_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'page':
		$options[] = array( 
			'section' => 'page_section', 
			'id' => CMSMS_SHORTNAME . '_blog_page_date', 
			'title' => __('Post Date', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'page_section', 
			'id' => CMSMS_SHORTNAME . '_blog_page_cat', 
			'title' => __('Post Categories', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'page_section', 
			'id' => CMSMS_SHORTNAME . '_blog_page_author', 
			'title' => __('Post Author', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'page_section', 
			'id' => CMSMS_SHORTNAME . '_blog_page_comment', 
			'title' => __('Post Comments', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'page_section', 
			'id' => CMSMS_SHORTNAME . '_blog_page_tag', 
			'title' => __('Post Tags', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'page_section', 
			'id' => CMSMS_SHORTNAME . '_blog_page_more', 
			'title' => __('Read More', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_layout', 
			'title' => __('Layout Type', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'cmsmasters') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.png' . '|r_sidebar', 
				__('Left Sidebar', 'cmsmasters') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.png' . '|l_sidebar', 
				__('Full Width', 'cmsmasters') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.png' . '|fullwidth' 
			) 
		);

		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_title', 
			'title' => __('Post Title', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_date', 
			'title' => __('Post Date', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_cat', 
			'title' => __('Post Categories', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_author', 
			'title' => __('Post Author', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_comment', 
			'title' => __('Post Comments', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_tag', 
			'title' => __('Post Tags', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_nav_box', 
			'title' => __('Posts Navigation Box', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_share_box', 
			'title' => __('Sharing Box', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_author_box', 
			'title' => __('About Author Box', 'cmsmasters'), 
			'desc' => __('show', 'cmsmasters'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_more_posts_box', 
			'title' => __('More Posts Box', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'multi-checkbox', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				__('Show Related Tab', 'cmsmasters') . '|related', 
				__('Show Popular Tab', 'cmsmasters') . '|popular', 
				__('Show Recent Tab', 'cmsmasters') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_r_p_l_number', 
			'title' => __('Related, Popular & Latest Posts Boxes Items Number', 'cmsmasters'), 
			'desc' => __('posts', 'cmsmasters'), 
			'type' => 'number', 
			'std' => '4' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_standard_post_format_img', 
			'title' => __('Standard Post Format Icon Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#FABE09' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_aside_post_format_img', 
			'title' => __('Aside Post Format Icon Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#F97A14' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_quote_post_format_img', 
			'title' => __('Quote Post Format Icon Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#6dc437' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_link_post_format_img', 
			'title' => __('Link Post Format Icon Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#3C9EF1' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_image_post_format_img', 
			'title' => __('Image Post Format Icon Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#DE5C8D' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_gallery_post_format_img', 
			'title' => __('Gallery Post Format Icon Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#E94F4F' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_video_post_format_img', 
			'title' => __('Video Post Format Icon Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#48DCB8' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_audio_post_format_img', 
			'title' => __('Audio Post Format Icon Color', 'cmsmasters'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#BC9EE5' 
		);
		
		break;
	}
	
	return $options;	
}

