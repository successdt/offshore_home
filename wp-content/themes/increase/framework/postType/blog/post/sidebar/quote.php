<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Blog Post with Sidebar Quote Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_quote_text = get_post_meta(get_the_ID(), 'cmsms_post_quote_text', true);
$cmsms_post_quote_author = get_post_meta(get_the_ID(), 'cmsms_post_quote_author', true);

?>

<!--_________________________ Start Quote Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_info">
		<?php cmsms_post_date();?>
		<span class="cmsms_post_format_img"></span>
		<div class="cmsms_like"><?php cmsmsLike(); ?></div>
	</div>
	<div class="ovh">
		<header class="entry-header">
			<?php if (!post_password_required()) { ?>
			<blockquote>
				<?php 
					if ($cmsms_post_quote_text != '') {
						echo "\t" . '<p>' . str_replace("\n", '<br />', $cmsms_post_quote_text) . '</p>' . "\n";
					} else {
						echo "\t" . '<p>' . theme_excerpt(55, false) . '</p>' . "\n";
					}
				?>
			</blockquote>
			<?php 
					if ($cmsms_post_quote_author != '') {
						echo "\t" . '<div class="cmsms_author"><p>' . $cmsms_post_quote_author . '</p></div>' . "\n";
					}
				} else {
					echo "\t" . '<p>' . __('There is no excerpt because this is a protected post.', 'cmsmasters') . '</p>';
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
			<?php 
				the_content();
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . __('Pages', 'cmsmasters') . ':</strong>', 
					'after' => '</div>' . "\n", 
					'link_before' => ' [ ', 
					'link_after' => ' ] ' 
				));
				
				cmsms_content_composer(get_the_ID());
			?>
		</header>
		<div class="cl"></div>
		<div class="divider"></div>
		<footer class="entry-meta">
			<?php cmsms_tags(get_the_ID(), 'post', 'post'); ?>
		</footer>
	</div>
</article>
<!--_________________________ Finish Quote Article _________________________ -->

