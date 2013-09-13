<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Blog Page Full Width Image Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_featured_image_show = get_post_meta(get_the_ID(), 'cmsms_post_featured_image_show', true);

$cmsms_post_image_link = get_post_meta(get_the_ID(), 'cmsms_post_image_link', true);

?>

<!--_________________________ Start Image Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_info">
		<?php cmsms_post_date();?>
		<span class="cmsms_post_format_img"></span>
		<div class="cmsms_like"><?php cmsmsLike(); ?></div>
	</div>
	<div class="ovh">
		<header class="entry-header">
			<?php 
				if (!post_password_required()) {
					if ($cmsms_post_image_link != '' && $cmsms_post_image_link != get_template_directory_uri() . '/framework/admin/inc/img/image.png') {
						cmsms_thumb(get_the_ID(), 'full-slider-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsms_post_image_link);
					} else if (has_post_thumbnail() && $cmsms_post_featured_image_show == 'true') {
						cmsms_thumb(get_the_ID(), 'full-slider-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
					}
				}
			?>
			<?php cmsms_heading(get_the_ID()); ?>
			<div class="cmsms_post_info">
				<?php 
					cmsms_meta();
					
					if (!post_password_required()) {
						cmsms_comments();
					} 
				?>
			</div>
		</header>
		<?php
			cmsms_exc_cont();
			
			cmsms_more(get_the_ID()); 
		?>
		<div class="cl"></div>
		<div class="divider"></div>
		<footer class="entry-meta">
			<?php cmsms_tags(get_the_ID(), 'post', 'page'); ?>
		</footer>
	</div>
</article>
<!--_________________________ Finish Image Article _________________________ -->

