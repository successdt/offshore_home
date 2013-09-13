<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Template Name: Testimonials
 * Created by CMSMasters
 * 
 */


get_header();


$cmsms_option = cmsms_get_global_options();


$cmsms_layout = get_post_meta(get_the_ID(), 'cmsms_layout', true);

if (!$cmsms_layout) { 
    $cmsms_layout = 'r_sidebar'; 
}

$cmsms_page_order = get_post_meta(get_the_ID(), 'cmsms_page_order', true);
$cmsms_page_items_number = get_post_meta(get_the_ID(), 'cmsms_page_items_number', true);
$cmsms_page_tl_categ = get_post_meta(get_the_ID(), 'cmsms_page_tl_categ', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n";

if ($cmsms_layout == 'r_sidebar') {
	echo '<section id="content" role="main">' . "\n\t";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo '<section id="content" class="fr" role="main">' . "\n\t";
} else {
	echo '<section id="middle_content" role="main">' . "\n\t";
}


if (get_query_var('paged')) { 
	$paged = get_query_var('paged'); 
} elseif (get_query_var('page')) { 
	$paged = get_query_var('page'); 
} else { 
	$paged = 1; 
}


$temp = $wp_query;
$wp_query= null;


$wp_query = new WP_Query(array( 
	'post_type' => 'testimonial', 
	'order' => $cmsms_page_order, 
	'posts_per_page' => $cmsms_page_items_number, 
	'paged' => $paged, 
	'tl-categs' => $cmsms_page_tl_categ 
));


if ($wp_query->have_posts()) : 
	echo '<div class="entry-summary">' . "\n" . 
		'<section class="testimonials">' . "\n";
	
	while ($wp_query->have_posts()) : $wp_query->the_post();
?>

<!--_________________________ Start Aside Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
	
	echo '<div class="tl-content_wrap">' .  "\n\t" . 
		'<div class="tl-content">' .  "\n\t\t" . 
			'<blockquote>' . theme_excerpt(60, false) . '</blockquote>' .  "\n\t" . 
		'</div>' .  "\n" . 
	'</div>' . "\n";
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_testimonial_page_author_avatar'] && has_post_thumbnail() != '') {
		echo '<figure class="tl_author_img">' . get_the_post_thumbnail(get_the_ID(), 'thumbnail', array( 
			'alt' => cmsms_title(get_the_ID(), false), 
			'title' => cmsms_title(get_the_ID(), false), 
			'style' => 'width:40px; height:40px;' 
		));
		echo '</figure>' . "\n";
	} else {
		echo '<figure class="tl_author_img">' . "\n" . 
			'<img src="' . get_template_directory_uri() . '/img/testimonials_avatar.jpg' . '" style="width:40px; height:40px;" />' . "\n" . 
		'</figure>';
	}
	
	cmsms_more(get_the_ID(), 'testimonial');
	
	cmsms_tl_descr(get_the_ID(), 'page');
	
	echo '<div class="cl"></div><div class="divider"></div>' . "\n";
	
	cmsms_tl_cat(get_the_ID(), 'tl-categs', 'page');
	
	if (!post_password_required()) {
		echo cmsms_comments('page', 'testimonial');		
	}
	
	cmsms_post_date('testimonial', 'page');
?>
</article>

<!--_________________________ Finish Testimonial Article _________________________ -->
<?php
	endwhile;
	
	echo '</section>' . "\n";
	
	pagination();
	
	echo '</div>' . "\n\t";
endif;


$wp_query = null;
$wp_query = $temp;


wp_reset_query();


echo '<div class="entry">' . "\n\t";

if (have_posts()) : the_post();
	if (has_post_thumbnail()) {
		
		if (has_post_thumbnail()) {
			echo '<div class="cmsms_media">' . "\n\t";
			
			cmsms_thumb(get_the_ID(), 'full-thumb', false, 'img_' . get_the_ID(), true, false, true, true, false);
			
			echo "\r" . '</div>';
		}
		
	}
	
	the_content();
	
	wp_link_pages(array( 
		'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . __('Pages', 'cmsmasters') . ':</strong>', 
		'after' => '</div>' . "\n", 
		'link_before' => ' [ ', 
		'link_after' => ' ] ' 
	));
	
	cmsms_content_composer(get_the_ID());
	
	echo '</div>' . "\n";
endif;


if (comments_open()) {
	echo '<br />' . 
	'<div class="divider"></div>';
	
	comments_template();
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

