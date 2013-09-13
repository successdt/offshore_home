<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Sidebar Template
 * Created by CMSMasters
 * 
 */


if ( 
	!is_404() && 
	!is_archive() && 
	!is_search() && 
	!is_home() 
) {
	$top_sidebar_id = get_post_meta(get_the_ID(), 'cmsms_top_sidebar_id', true);
}


if (isset($top_sidebar_id) && is_dynamic_sidebar($top_sidebar_id) && is_active_sidebar($top_sidebar_id)) {
	dynamic_sidebar($top_sidebar_id);
} else if (is_active_sidebar('sidebar_top')) {
	dynamic_sidebar('sidebar_top');
} else {
	sidebarDefaultText();
}

