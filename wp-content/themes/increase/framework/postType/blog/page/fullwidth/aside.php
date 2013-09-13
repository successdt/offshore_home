<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Blog Page Full Width Aside Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_aside_text = get_post_meta(get_the_ID(), 'cmsms_post_aside_text', true);

?>

<!--_________________________ Start Aside Article _________________________ -->
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
					if ($cmsms_post_aside_text != '') {
						echo '<h6 class="entry-content">' . $cmsms_post_aside_text . '</h6>' . "\n";
					} else {
						echo '<div class="entry-content">' . theme_excerpt(55, false) . '</div>' . "\n";
					}
				} else {
					echo '<p>' . __('There is no excerpt because this is a protected post.', 'cmsmasters') . '</p>';
				}
			?>
			<div class="cmsms_post_info">
				<?php 
					cmsms_meta();
					
					if (!post_password_required()) {
						cmsms_comments();
					} 
				?>
			</div>
		</header>
		<div class="cl"></div>
		<div class="divider"></div>
		<footer class="entry-meta">
			<?php cmsms_tags(get_the_ID(), 'post', 'page'); ?>
		</footer>
	</div>
</article>
<!--_________________________ Finish Aside Article _________________________ -->

