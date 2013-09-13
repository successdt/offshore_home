<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Blog Page with Sidebar Standard Post Format Template
 * Created by CMSMasters
 * 
 */

 
$cmsms_post_featured_image_show = get_post_meta(get_the_ID(), 'cmsms_post_featured_image_show', true);

?>

<!--_________________________ Start Standard Article _________________________ -->
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
					if (has_post_thumbnail() && $cmsms_post_featured_image_show == 'true') {
						cmsms_thumb(get_the_ID(), 'post-thumbnail', true, false, true, false, true, true, false);
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
<!--_________________________ Finish Standard Article _________________________ -->

