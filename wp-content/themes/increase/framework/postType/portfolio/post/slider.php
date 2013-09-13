<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.1.2
 * 
 * Portfolio Project Full Width Slider Project Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_project_featured_image_show = get_post_meta(get_the_ID(), 'cmsms_project_featured_image_show', true);

$cmsms_project_features = get_post_meta(get_the_ID(), 'cmsms_project_features', true);
$cmsms_project_sharing_box = get_post_meta(get_the_ID(), 'cmsms_project_sharing_box', true);

$cmsms_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_project_images', true))));

$cmsms_content_composer_text = get_post_meta(get_the_ID(), 'cmsms_content_composer_text', true);

?>

<!--_________________________ Start Slider Project _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('format-slider'); ?>>
	<div class="project_content">
		<div class="resize">
			<?php if (sizeof($cmsms_project_images) > 1) { ?>
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
										wp_get_attachment_image($cmsms_project_image, 'full-slider-thumb', false, array( 
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
			<?php 
			} else if (sizeof($cmsms_project_images) == 1 && $cmsms_project_images[0] != '') {
				cmsms_thumb(get_the_ID(), 'full-slider-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsms_project_images[0]);
			} else if (sizeof($cmsms_project_images) < 1 && has_post_thumbnail() && $cmsms_project_featured_image_show == 'true') {
				cmsms_thumb(get_the_ID(), 'full-slider-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
			}
			?>
	
			<?php
				cmsms_heading_nolink(get_the_ID(), 'project', true, 'h2');
				
				echo '<div class="entry-content">' . "\n";
			
				the_content();
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . __('Pages', 'cmsmasters') . ':</strong>', 
					'after' => '</div>' . "\n", 
					'link_before' => ' [ ', 
					'link_after' => ' ] ' 
				));
				
				cmsms_content_composer(get_the_ID());
				
				echo "\t\t" . '</div>' . "\n";
			?>
		</div>
	</div>
	<footer class="entry-meta project_sidebar">
		<?php 
		
		echo '<ul class="cmsms_details">' . "\n\t\t\t";
		
		echo '<li>' . 
				__('like it', 'cmsmasters') . '?' . 
			'<div class="cmsms_like">';
				cmsmsLike();
			echo '</div>' . 
		'</li>' . "\n\t\t\t";
		
		cmsms_pj_cat(get_the_ID(), 'pj-sort-categs', 'post');
		
		cmsms_pj_date('post');
		
		cmsms_pj_author('post');
		
		cmsms_pj_comments('post');
		
		cmsms_pj_tag(get_the_ID(), 'pj-tags', 'post');
		
		foreach ($cmsms_project_features as $cmsms_project_feature) {
			if ($cmsms_project_feature[0] != '' && $cmsms_project_feature[1] != '') {
				$cmsms_project_feature_lists = explode("\n", $cmsms_project_feature[1]);
				
				echo '<li>' . 
					$cmsms_project_feature[0] . ':';
				
				echo '<span class="cmsms_details_links">';
				
					foreach ($cmsms_project_feature_lists as $cmsms_project_feature_list) {
						echo '' . trim($cmsms_project_feature_list) . '';
					}
				
				echo '</span></li>' . "\n\t\t\t";
			}
		}
		
		cmsms_link(get_the_ID(), 'project');
		
		?>
		</ul>
		<div class="divider"></div>
		<?php
		if ($cmsms_project_sharing_box == 'true') {
		?>
		<div class="fl">
			<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en"><?php _e('Tweet', 'cmsmasters'); ?></a>
			<script type="text/javascript">
				!function (d, s, id) { 
					var js = undefined, 
						fjs = d.getElementsByTagName(s)[0];
					
					if (d.getElementById(id)) { 
						d.getElementById(id).parentNode.removeChild(d.getElementById(id));
					}
					
					js = d.createElement(s);
					js.id = id;
					js.src = '//platform.twitter.com/widgets.js';
					
					fjs.parentNode.insertBefore(js, fjs);
				} (document, 'script', 'twitter-wjs');
			</script>
		</div>
		<div class="fl">
			<div class="g-plusone" data-size="medium"></div>
			<script type="text/javascript">
				(function () { 
					var po = document.createElement('script'), 
						s = document.getElementsByTagName('script')[0];
					
					po.type = 'text/javascript';
					po.async = true;
					po.src = 'https://apis.google.com/js/plusone.js';
					
					s.parentNode.insertBefore(po, s);
				} )();
			</script>
		</div>
		<div class="fl">
			<a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink(get_the_ID())); ?>" class="pin-it-button" count-layout="horizontal">
				<img border="0" src="//assets.pinterest.com/images/PinExt.png" title="<?php _e('Pin It', 'cmsmasters'); ?>" />
			</a>
			<script type="text/javascript">
				(function (d, s, id) { 
					var js = undefined, 
						fjs = d.getElementsByTagName(s)[0];
					
					if (d.getElementById(id)) { 
						d.getElementById(id).parentNode.removeChild(d.getElementById(id));
					}
					
					js = d.createElement(s);
					js.id = id;
					js.src = '//assets.pinterest.com/js/pinit.js';
					
					fjs.parentNode.insertBefore(js, fjs);
				} (document, 'script', 'pinterest-wjs'));
			</script>
		</div>
		<div class="fl">
			<div class="fb-like" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial"></div>
			<script type="text/javascript">
				(function (d, s, id) { 
					var js = undefined, 
						fjs = d.getElementsByTagName(s)[0];
					
					if (d.getElementById(id)) { 
						d.getElementById(id).parentNode.removeChild(d.getElementById(id));
					}
					
					js = d.createElement(s);
					js.id = id;
					js.src = '//connect.facebook.net/en_US/all.js#xfbml=1';
					
					fjs.parentNode.insertBefore(js, fjs);
				} (document, 'script', 'facebook-jssdk'));
			</script>
		</div>
		<div class="cl"></div>
		<a class="cmsms_share" href="#"><span><?php _e('More sharing options', 'cmsmasters'); ?></span></a>
		<div class="cmsms_social cl"></div>
		<?php } ?>
	</footer>
	<div class="cl"></div>
</article>
<!--_________________________ Finish Slider Project _________________________ -->

