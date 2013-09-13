<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Portfolio Page Full Width Slider Project Format Template
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
 
$cmsms_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_project_images', true))));

$pj_sort_categs = get_the_terms(0, 'pj-sort-categs');

if ($pj_sort_categs != '') {
	$pj_categs = '';
	
	foreach ($pj_sort_categs as $pj_sort_categ) {
		$pj_categs .= ' ' . $pj_sort_categ->slug;
	}
	
	$pj_categs = ltrim($pj_categs, ' ');
}

?>

<!--_________________________ Start Slider Project _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('format-slider'); ?> data-category="<?php echo $pj_categs; ?>">
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
		} elseif (sizeof($cmsms_project_images) > 1) { ?>
			<div class="media_box cmsms_with_out_thumb_slider">
				<div class="shortcode_slideshow" id="slideshow_<?php the_ID(); ?>">
					<div class="shortcode_slideshow_body">
						<script type="text/javascript">
							jQuery(document).ready(function () { 
								jQuery('#slideshow_<?php the_ID(); ?> .shortcode_slideshow_slides').cmsmsResponsiveContentSlider( { 
									sliderWidth : '100%', 
									sliderHeight : 'auto', 
									animationSpeed : 500, 
									animationEffect : 'slide', 
									animationEasing : 'easeInOutExpo', 
									pauseTime : 0, 
									activeSlide : 1, 
									touchControls : true, 
									pauseOnHover : false, 
									arrowNavigation : false, 
									slidesNavigation : true 
								} ); 
							} );
						</script>
						<div class="shortcode_slideshow_container">
							<ul class="shortcode_slideshow_slides responsiveContentSlider">
							<?php 
								foreach ($cmsms_project_images as $cmsms_project_image) {
									echo '<li>' . 
										'<figure>' . 
											wp_get_attachment_image($cmsms_project_image, $pj_img_size, false, array( 
												'class' => 'fullwidth', 
												'alt' => cmsms_title(get_the_ID(), false), 
												'title' => cmsms_title(get_the_ID(), false) 
											)) . 
										'</figure>' . 
									'</li>';
								}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="project_rollover cmsms_with_out_thumb_slider">
				<span class="cmsms_post_format_img"></span>
				<?php 	
					cmsms_heading(get_the_ID(), 'project', true, 'h6');
					
					cmsms_meta('project', 'page', get_the_ID(), 'pj-sort-categs', 'fullwidth');
					
					cmsms_exc_cont('project');
				?>
			</div>
		<?php 
		} else if (sizeof($cmsms_project_images) == 1) {
			echo '<a href="' . get_permalink() . '"></a>' . 
			'<div class="media_box">';
				cmsms_thumb(get_the_ID(), $pj_img_size, false, 'img_' . get_the_ID(), true, false, true, true, $cmsms_project_images[0]);
			echo '</div>' . 
			'<div class="project_rollover">' . 
				'<span class="cmsms_post_format_img"></span>';
				cmsms_heading(get_the_ID(), 'project', true, 'h6');
				
				cmsms_meta('project', 'page', get_the_ID(), 'pj-sort-categs', 'fullwidth');
				
				cmsms_exc_cont('project');
			echo '</div>';
		} else if (sizeof($cmsms_project_images) < 1 && has_post_thumbnail()) {
			echo '<a href="' . get_permalink() . '"></a>' . 
			'<div class="media_box">';
				cmsms_thumb(get_the_ID(), $pj_img_size, false, 'img_' . get_the_ID(), true, false, true, true, false);
			echo '</div>' . 
			'<div class="project_rollover">' . 
				'<span class="cmsms_post_format_img"></span>';
				cmsms_heading(get_the_ID(), 'project', true, 'h6');
				
				cmsms_meta('project', 'page', get_the_ID(), 'pj-sort-categs', 'fullwidth');
				
				cmsms_exc_cont('project');
			echo '</div>';
		}
		?>
	</div>
</article>
<!--_________________________ Finish Slider Project _________________________ -->

