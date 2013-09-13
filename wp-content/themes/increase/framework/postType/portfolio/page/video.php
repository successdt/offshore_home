<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Portfolio Page Full Width Video Project Format Template
 * Created by CMSMasters
 * 
 */


global $cmsms_page_full_columns;


if (!$cmsms_page_full_columns) {
    $cmsms_page_full_columns = 'four_columns';
}

if ($cmsms_page_full_columns == 'four_columns' || $cmsms_page_full_columns == 'three_columns') {
    $pj_img_size = 'project-thumb';
} elseif ($cmsms_page_full_columns == 'two_columns') {
    $pj_img_size = 'project-thumb-half';
} elseif ($cmsms_page_full_columns == 'one_column') {
    $pj_img_size = 'project-thumb-full';
}


$cmsms_project_featured_image_show = get_post_meta(get_the_ID(), 'cmsms_project_featured_image_show', true);

$pj_sort_categs = get_the_terms(0, 'pj-sort-categs');

if ($pj_sort_categs != '') {
	$pj_categs = '';
	
	foreach ($pj_sort_categs as $pj_sort_categ) {
		$pj_categs .= ' ' . $pj_sort_categ->slug;
	}
	
	$pj_categs = ltrim($pj_categs, ' ');
}

$cmsms_project_video_type = get_post_meta(get_the_ID(), 'cmsms_project_video_type', true);
$cmsms_project_video_link = get_post_meta(get_the_ID(), 'cmsms_project_video_link', true);
$cmsms_project_video_links = get_post_meta(get_the_ID(), 'cmsms_project_video_links', true);

?>

<!--_________________________ Start Video Project _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('format-video'); ?> data-category="<?php echo $pj_categs; ?>">
	<div class="portfolio_inner">
		<?php 
			
			if (has_post_thumbnail() && $cmsms_project_featured_image_show == 'true') {
				echo '<a href="' . get_permalink() . '"></a>' . 
				'<div class="media_box">' . 
					cmsms_thumb(get_the_ID(), $pj_img_size, true, false, true, false, true, false, false) . 
				'</div>' . 
				'<div class="project_rollover">' . 
					'<span class="cmsms_post_format_img"></span>';
						cmsms_heading(get_the_ID(), 'project', true, 'h6');
									
						cmsms_meta('project', 'page', get_the_ID(), 'pj-sort-categs', 'fullwidth');
						
						cmsms_exc_cont('project');
				echo '</div>';
				
			} elseif ($cmsms_project_video_type == 'selfhosted' && sizeof($cmsms_project_video_links) > 0) {
				foreach ($cmsms_project_video_links as $cmsms_project_video_link_url) {
					$video_link[$cmsms_project_video_link_url[0]] = $cmsms_project_video_link_url[1];
				}
				
				if (has_post_thumbnail()) {
					$poster = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $pj_img_size);
					
					$video_link['poster'] = $poster[0];
				}
				
				echo '<div class="media_box cmsms_with_out_thumb">' . 
					cmsmastersSingleVideoPlayer($video_link) . 
				'</div>' . 
				'<div class="project_rollover cmsms_with_out_thumb">' . 
					'<span class="cmsms_post_format_img"></span>';
						cmsms_heading(get_the_ID(), 'project', true, 'h6');
									
						cmsms_meta('project', 'page', get_the_ID(), 'pj-sort-categs', 'fullwidth');
						
						cmsms_exc_cont('project');
				echo '</div>';
				
			} elseif ($cmsms_project_video_type == 'embedded' && $cmsms_project_video_link != '') {
				echo '<div class="media_box cmsms_with_out_thumb">' . 
					'<div class="resizable_block">' . 
						get_video_iframe($cmsms_project_video_link) . 
					'</div>' . 
				'</div>' . 
				'<div class="project_rollover cmsms_with_out_thumb">' . 
					'<span class="cmsms_post_format_img"></span>';
						cmsms_heading(get_the_ID(), 'project', true, 'h6');
									
						cmsms_meta('project', 'page', get_the_ID(), 'pj-sort-categs', 'fullwidth');
						
						cmsms_exc_cont('project');
				echo '</div>';
			}
		?>
	</div>
</article>
<!--_________________________ Finish Video Project _________________________ -->

