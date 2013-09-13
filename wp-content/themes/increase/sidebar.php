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
	$sidebar_id = get_post_meta(get_the_ID(), 'cmsms_sidebar_id', true);
}


if (isset($sidebar_id) && is_dynamic_sidebar($sidebar_id) && is_active_sidebar($sidebar_id)) {
	dynamic_sidebar($sidebar_id);
} else if (is_active_sidebar('sidebar_default')) {
	dynamic_sidebar('sidebar_default');
} else {
	sidebarDefaultText();
}

