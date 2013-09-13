<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Blog Post with Sidebar Link Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_link_text = get_post_meta(get_the_ID(), 'cmsms_post_link_text', true);
$cmsms_post_link_address = get_post_meta(get_the_ID(), 'cmsms_post_link_address', true);

if ($cmsms_post_link_text == '') {
	$cmsms_post_link_text = __('Enter link text', 'cmsmasters');
}

if ($cmsms_post_link_address == '') {
	$cmsms_post_link_address = '#';
}

?>

<!--_________________________ Start Link Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_info">
		<?php cmsms_post_date();?>
		<span class="cmsms_post_format_img"></span>
		<div class="cmsms_like"><?php cmsmsLike(); ?></div>
	</div>
	<div class="ovh">
		<?php 
			if (!post_password_required()) {
				echo '<h1 class="entry-title">' . 
					'<a href="' . $cmsms_post_link_address . '" target="_blank">' . $cmsms_post_link_text . '</a>' . 
				'</h1>' . "\n\t" . 
				'<h5>- ' . $cmsms_post_link_address . ' -</h5>' . "\n";
			} else {
				echo '<h1 class="entry-title">' . $cmsms_post_link_text . '</h1>';
			}
		?>
		<header class="entry-header">
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
<!--_________________________ Finish Link Article _________________________ -->

