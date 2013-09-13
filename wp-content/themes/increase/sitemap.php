<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Template Name: Sitemap
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


get_header();


$cmsms_layout = get_post_meta(get_the_ID(), 'cmsms_layout', true);

if (!$cmsms_layout) { 
    $cmsms_layout = 'fullwidth';
}


echo '<!--_________________________ Start Content _________________________ -->' . "\n";

if ($cmsms_layout == 'r_sidebar') {
	echo '<section id="content" role="main">' . "\n";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo '<section id="content" class="fr" role="main">' . "\n";
} else {
	echo '<section id="middle_content" role="main">' . "\n";
}

echo '<div class="entry">' . "\n";

if (have_posts()) : the_post();
	if (has_post_thumbnail()) {
		
		if (has_post_thumbnail()) {
			if ($cmsms_layout == 'r_sidebar' || $cmsms_layout == 'l_sidebar') {
				echo '<div class="cmsms_media">' . "\n\t";
				
				cmsms_thumb(get_the_ID(), 'post-thumbnail', false, 'img_' . get_the_ID(), true, false, true, true, false);
				
				echo "\r" . '</div>';
			} else {
				echo '<div class="cmsms_media">' . "\n\t";
				
				cmsms_thumb(get_the_ID(), 'full-thumb', false, 'img_' . get_the_ID(), true, false, true, true, false);
				
				echo "\r" . '</div>';
			}
		}
		
		echo '<div class="entry-content">' . "\n";
		
		the_content();
		
		echo '</div>' . "\n";
		
		wp_link_pages(array( 
			'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . __('Pages', 'cmsmasters') . ':</strong>', 
			'after' => '</div>' . "\n", 
			'link_before' => ' [ ', 
			'link_after' => ' ] ' 
		));
		
		cmsms_content_composer(get_the_ID());
		
		echo '</div>' . "\n" . 
		'<div class="divider_fullwidth"></div>' . "\n";
	}
endif;


if ($cmsms_option[CMSMS_SHORTNAME . '_sitemap_nav']) { 
	echo '<h1>' .  __('Website Pages', 'cmsmasters') . '</h1>';
	
	wp_nav_menu(array( 
		'theme_location' => 'primary', 
		'container' => '', 
		'sort_column' => 'menu_order', 
		'menu_class' => 'cmsms_sitemap navigation_menu' 
	));
	
}


if ($cmsms_option[CMSMS_SHORTNAME . '_sitemap_categs']) {
	echo '<h1>' . __('Blog Archives by Categories', 'cmsmasters') . '</h1>' . 
		'<ul class="cmsms_sitemap_category">';
	
	wp_list_categories(array( 
		'title_li' => '', 
		'orderby' => 'name', 
		'order' => 'ASC' 
	));
	
	echo '</ul>' . 
	'<br />' . 
	'<div class="divider_fullwidth"></div>';
}


if ($cmsms_option[CMSMS_SHORTNAME . '_sitemap_tags']) {
	$tags = get_tags(array( 
		'orderby' => 'name', 
		'order' => 'DESC' 
	));
	
	echo '<h1>' . __('Blog Archives by Tags', 'cmsmasters') . '</h1>' . 
		'<ul class="cmsms_sitemap_archive">';
	
	foreach ((array) $tags as $tag) {
		echo '<li><a href="' . get_tag_link($tag->term_id) . '" rel="tag" title="' . $tag->name . '">' . $tag->name . '</a> (' . $tag->count . ')</li>';
	}
	
	echo '</ul>' . 
	'<br />' . 
	'<div class="divider_fullwidth"></div>';
}


if ($cmsms_option[CMSMS_SHORTNAME . '_sitemap_month']) {
	echo '<h1>' . __('Blog Archives by Month', 'cmsmasters') . '</h1>' . 
		'<ul class="cmsms_sitemap_archive">';
	
	wp_get_archives(array( 
		'show_post_count' => true, 
		'format' => 'custom', 
		'before' => '<li>', 
		'after' => '</li>' 
	));
	
	echo '</ul>' . 
	'<br />' . 
	'<div class="divider_fullwidth"></div>';
}


if ($cmsms_option[CMSMS_SHORTNAME . '_sitemap_pj_categs']) {
	echo '<h1>' . __('Portfolio Archives by Categories', 'cmsmasters') . '</h1>' . 
		'<ul class="cmsms_sitemap_category">';
	
	wp_list_categories(array( 
		'title_li' => '', 
		'orderby' => 'name', 
		'order' => 'ASC', 
		'taxonomy' => 'pj-sort-categs' 
	));
	
	echo '</ul>' . 
	'<br />' . 
	'<div class="divider_fullwidth"></div>';
}


if ($cmsms_option[CMSMS_SHORTNAME . '_sitemap_pj_tags']) {
	echo '<h1>' . __('Portfolio Archives by Tags', 'cmsmasters') . '</h1>' . 
		'<ul class="cmsms_sitemap_archive">';
	
	wp_list_categories(array( 
		'title_li' => '', 
		'orderby' => 'name', 
		'order' => 'ASC', 
		'hierarchical' => false, 
		'taxonomy' => 'pj-tags' 
	));
	
	echo '</ul>' . 
	'<div class="cl"></div>';
}


echo '</section>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


if ($cmsms_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<section id="sidebar" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</section>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<section id="sidebar" class="fl" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</section>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}


get_footer();

