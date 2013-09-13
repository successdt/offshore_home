<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Blog Post with Sidebar Video Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_video_type = get_post_meta(get_the_ID(), 'cmsms_post_video_type', true);
$cmsms_post_video_link = get_post_meta(get_the_ID(), 'cmsms_post_video_link', true);
$cmsms_post_video_links = get_post_meta(get_the_ID(), 'cmsms_post_video_links', true);

?>

<!--_________________________ Start Video Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_info">
		<?php cmsms_post_date('post', 'post'); ?>
		<span class="cmsms_post_format_img"></span>
		<div class="cmsms_like"><?php cmsmsLike(); ?></div>
	</div>
	<div class="ovh">
		<header class="entry-header">
			<?php 
				if (!post_password_required()) {
					if ($cmsms_post_video_type == 'selfhosted' && sizeof($cmsms_post_video_links) > 0) {
						foreach ($cmsms_post_video_links as $cmsms_post_video_link_url) {
							$video_link[$cmsms_post_video_link_url[0]] = $cmsms_post_video_link_url[1];
						}
						
						if (has_post_thumbnail()) {
							$poster = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'post-thumbnail');
							
							$video_link['poster'] = $poster[0];
						}
						
						echo '<div class="cmsms_blog_media">' . "\n" . 
							cmsmastersSingleVideoPlayer($video_link) . "\r\t\t" . 
						'</div>' . "\r\t\t";
					} elseif ($cmsms_post_video_type == 'embedded' && $cmsms_post_video_link != '') {
						echo '<div class="cmsms_blog_media">' . "\n\t\t" . 
							'<div class="resizable_block">' . "\n\t\t\t" . 
								get_video_iframe($cmsms_post_video_link) . "\r\t\t" . 
							'</div>' . "\r\t" . 
						'</div>' . "\r";
					}
				}
			?>
			<?php cmsms_heading_nolink(get_the_ID(), 'post', true) . "\n"; ?>
			<div class="cmsms_post_info">
				<?php 
					cmsms_meta('post', 'post');
					
					if (!post_password_required()) {
						cmsms_comments('post');
					} 
				?>
			</div>
		</header>
		<?php 
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
		<div class="cl"></div>
		<div class="divider"></div>
		<footer class="entry-meta">
			<?php cmsms_tags(get_the_ID(), 'post', 'post'); ?>
		</footer>
	</div>
</article>
<!--_________________________ Finish Video Article _________________________ -->

