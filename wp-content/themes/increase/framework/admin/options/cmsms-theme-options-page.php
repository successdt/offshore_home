<?php 
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Page Options Functions
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


$cmsms_global_layout = (isset($cmsms_option[CMSMS_SHORTNAME . '_layout']) && $cmsms_option[CMSMS_SHORTNAME . '_layout'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_layout'] : 'r_sidebar';
$cmsms_global_top_sidebar = (isset($cmsms_option[CMSMS_SHORTNAME . '_top_sidebar']) && $cmsms_option[CMSMS_SHORTNAME . '_top_sidebar'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_top_sidebar'] == 1) ? 'true' : 'false') : 'false';
$cmsms_global_middle_sidebar = (isset($cmsms_option[CMSMS_SHORTNAME . '_middle_sidebar']) && $cmsms_option[CMSMS_SHORTNAME . '_middle_sidebar'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_middle_sidebar'] == 1) ? 'true' : 'false') : 'false';
$cmsms_global_bottom_sidebar = (isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar']) && $cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';
$cmsms_global_seo = (isset($cmsms_option[CMSMS_SHORTNAME . '_seo']) && $cmsms_option[CMSMS_SHORTNAME . '_seo'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_seo'] == 1) ? true : false) : false;


$cmsms_option_name = 'cmsms_page_';


if ($cmsms_global_seo) {
	$tabs_array = array( 
		'cmsms_layout' => array( 
			'label' => __('Layout', 'cmsmasters'), 
			'value'	=> 'cmsms_layout' 
		), 
		'cmsms_bg' => array( 
			'label' => __('Background', 'cmsmasters'), 
			'value'	=> 'cmsms_bg' 
		), 
		'cmsms_heading' => array( 
			'label' => __('Heading', 'cmsmasters'), 
			'value'	=> 'cmsms_heading' 
		), 
		'cmsms_breadcrumbs' => array( 
			'label' => __('Breadcrumbs', 'cmsmasters'), 
			'value'	=> 'cmsms_breadcrumbs' 
		), 
		'cmsms_slider' => array( 
			'label' => __('Slider', 'cmsmasters'), 
			'value'	=> 'cmsms_slider' 
		), 
		'cmsms_seo' => array( 
			'label' => __('SEO', 'cmsmasters'), 
			'value'	=> 'cmsms_seo' 
		) 
	);
} else {
	$tabs_array = array( 
		'cmsms_layout' => array( 
			'label' => __('Layout', 'cmsmasters'), 
			'value'	=> 'cmsms_layout' 
		), 
		'cmsms_bg' => array( 
			'label' => __('Background', 'cmsmasters'), 
			'value'	=> 'cmsms_bg' 
		), 
		'cmsms_heading' => array( 
			'label' => __('Heading', 'cmsmasters'), 
			'value'	=> 'cmsms_heading' 
		), 
		'cmsms_breadcrumbs' => array( 
			'label' => __('Breadcrumbs', 'cmsmasters'), 
			'value'	=> 'cmsms_breadcrumbs' 
		), 
		'cmsms_slider' => array( 
			'label' => __('Slider', 'cmsmasters'), 
			'value'	=> 'cmsms_slider' 
		), 
	);
}


$custom_page_meta_fields = array( 
	array( 
		'id'	=> 'cmsms_page_items', 
		'type'	=> 'content_start', 
		'box'	=> 'true', 
		'hide'	=> '' 
	), 
	array( 
		'label'	=> __('Order Type', 'cmsmasters'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'order_type', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> 'date', 
		'options' => array( 
			'date' => array( 
				'label' => __('Order by Date', 'cmsmasters'), 
				'value'	=> 'date' 
			), 
			'name' => array( 
				'label' => __('Order by Name', 'cmsmasters'), 
				'value'	=> 'name' 
			), 
			'menu_order' => array( 
				'label' => __('Menu Order', 'cmsmasters'), 
				'value'	=> 'menu_order' 
			), 
			'rand' => array( 
				'label' => __('Random Order', 'cmsmasters'), 
				'value'	=> 'rand' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Order', 'cmsmasters'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'order', 
		'type'	=> 'radio', 
		'hide'	=> 'true', 
		'std'	=> 'DESC', 
		'options' => array( 
			'DESC' => array( 
				'label' => __('DESC', 'cmsmasters'), 
				'value'	=> 'DESC' 
			), 
			'ASC' => array( 
				'label' => __('ASC', 'cmsmasters'), 
				'value'	=> 'ASC' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Items per Page', 'cmsmasters'), 
		'desc'	=> 'There must be a number.', 
		'id'	=> $cmsms_option_name . 'items_number', 
		'type'	=> 'number', 
		'hide'	=> 'true', 
		'std'	=> '12' 
	), 
	array( 
		'label'	=> __('Posts Category', 'cmsmasters'), 
		'desc'	=> __('If you do not choose any of the post categories, then this page will show all the posts.', 'cmsmasters'), 
		'id'	=> $cmsms_option_name . 'post_categ', 
		'type'	=> 'select_post_categ', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Number of Columns', 'cmsmasters'), 
		'desc'	=> '', 
		'id'	=> $cmsms_option_name . 'full_columns', 
		'type'	=> 'select', 
		'hide'	=> 'true', 
		'std'	=> 'four_columns', 
		'options' => array( 
			'one_column' => array( 
				'label' => __('One Column', 'cmsmasters'), 
				'value'	=> 'one_column' 
			), 
			'two_columns' => array( 
				'label' => __('Two Columns', 'cmsmasters'), 
				'value'	=> 'two_columns' 
			), 
			'three_columns' => array( 
				'label' => __('Three Columns', 'cmsmasters'), 
				'value'	=> 'three_columns' 
			), 
			'four_columns' => array( 
				'label' => __('Four Columns', 'cmsmasters'), 
				'value'	=> 'four_columns' 
			)
		) 
	), 
	array( 
		'label'	=> __('Projects Filter & Sort', 'cmsmasters'), 
		'desc'	=> __('Show', 'cmsmasters'), 
		'id'	=> $cmsms_option_name . 'sort', 
		'type'	=> 'checkbox', 
		'hide'	=> 'true', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> __('Projects Type', 'cmsmasters'), 
		'desc'	=> __('If you do not choose any of the project types, then this page will show all the projects.', 'cmsmasters'), 
		'id'	=> $cmsms_option_name . 'project_type', 
		'type'	=> 'select_project_type', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Testimonial Category', 'cmsmasters'), 
		'desc'	=> __('If you do not choose any of the testimonial categories, then this page will show all the testimonials.', 'cmsmasters'), 
		'id'	=> $cmsms_option_name . 'tl_categ', 
		'type'	=> 'select_tl_categ', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'id'	=> 'cmsms_page_items', 
		'type'	=> 'content_finish' 
	), 
	array( 
		'id'	=> $cmsms_option_name . 'tabs', 
		'type'	=> 'tabs', 
		'std'	=> 'cmsms_layout', 
		'options' => $tabs_array 
	), 
	array( 
		'id'	=> 'cmsms_layout', 
		'type'	=> 'tab_start', 
		'std'	=> 'true' 
	), 
	array( 
		'label'	=> __('Page Layout', 'cmsmasters'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_layout', 
		'type'	=> 'radio_img', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_layout, 
		'options' => array( 
			'r_sidebar' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.png', 
				'label' => __('Right Sidebar', 'cmsmasters'), 
				'value'	=> 'r_sidebar' 
			), 
			'l_sidebar' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.png', 
				'label' => __('Left Sidebar', 'cmsmasters'), 
				'value'	=> 'l_sidebar' 
			), 
			'fullwidth' => array( 
				'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.png', 
				'label' => __('Full Width', 'cmsmasters'), 
				'value'	=> 'fullwidth' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Choose Right\Left Sidebar', 'cmsmasters'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_sidebar_id', 
		'type'	=> 'select_sidebar', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Top Sidebar', 'cmsmasters'), 
		'desc'	=> __('Show', 'cmsmasters'), 
		'id'	=> 'cmsms_top_sidebar', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_top_sidebar 
	), 
	array( 
		'label'	=> __('Choose Top Sidebar', 'cmsmasters'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_top_sidebar_id', 
		'type'	=> 'select_sidebar', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Middle Sidebar', 'cmsmasters'), 
		'desc'	=> __('Show', 'cmsmasters'), 
		'id'	=> 'cmsms_middle_sidebar', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_middle_sidebar 
	), 
	array( 
		'label'	=> __('Choose Middle Sidebar', 'cmsmasters'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_middle_sidebar_id', 
		'type'	=> 'select_sidebar', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Bottom Sidebar', 'cmsmasters'), 
		'desc'	=> __('Show', 'cmsmasters'), 
		'id'	=> 'cmsms_bottom_sidebar', 
		'type'	=> 'checkbox', 
		'hide'	=> '', 
		'std'	=> $cmsms_global_bottom_sidebar 
	), 
	array( 
		'label'	=> __('Choose Bottom Sidebar', 'cmsmasters'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_bottom_sidebar_id', 
		'type'	=> 'select_sidebar', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'id'	=> 'cmsms_layout', 
		'type'	=> 'tab_finish' 
	), 
	array( 
		'id'	=> 'cmsms_slider', 
		'type'	=> 'tab_start', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Slider', 'cmsmasters'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_slider', 
		'type'	=> 'radio', 
		'hide'	=> '', 
		'std'	=> 'disabled', 
		'options' => array( 
			'disabled' => array( 
				'label' => __('Disabled', 'cmsmasters'), 
				'value'	=> 'disabled' 
			), 
			'rev_slider' => array( 
				'label' => __('Revolution Slider', 'cmsmasters'), 
				'value'	=> 'rev_slider' 
			), 
			'lay_slider' => array( 
				'label' => __('Layer Slider', 'cmsmasters'), 
				'value'	=> 'lay_slider' 
			) 
		) 
	), 
	array( 
		'label'	=> __('Revolution Slider Short Code', 'cmsmasters'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_slider_rev_shortcode', 
		'type'	=> 'textcode', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'label'	=> __('Layer Slider Short Code', 'cmsmasters'), 
		'desc'	=> '', 
		'id'	=> 'cmsms_slider_lay_shortcode', 
		'type'	=> 'textcode', 
		'hide'	=> 'true', 
		'std'	=> '' 
	), 
	array( 
		'id'	=> 'cmsms_heading', 
		'type'	=> 'tab_finish' 
	)
);


function add_custom_page_meta_box() {
    add_meta_box( 
		'cmsms_page_meta_box', 
		CMSMS_FULLNAME . ' ' . __('Page Options', 'cmsmasters'), 
		'show_cmsms_meta_box', 
		'page', 
		'normal', 
		'high' 
	);
}

add_action('add_meta_boxes', 'add_custom_page_meta_box');

