<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Blog Archives Page Template
 * Created by CMSMasters
 * 
 */


get_header();

?>
<!-- _________________________ Start Content _________________________ -->
<section id="content" role="main">
	<div class="entry-summary">
		<section class="blog">
<?php 
if (!have_posts()) : 
	echo '<h2>' . __('No posts found', 'cmsmasters') . '</h2>';
else : 
	while (have_posts()) : the_post();
		if (get_post_type() == 'post') {
			if (get_post_format() != '') {
				get_template_part('framework/postType/blog/page/sidebar/' . get_post_format());
			} else {
				get_template_part('framework/postType/blog/page/sidebar/standard');
			}
		} else if (get_post_type() == 'project') {
			$cmsms_project_format = get_post_meta(get_the_ID(), 'cmsms_project_format', true);
			
			if (!$cmsms_project_format) { 
				$cmsms_project_format = 'slider'; 
			}
?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('format-' . $cmsms_project_format); ?>>
				<?php 
					cmsms_heading(get_the_ID(), 'project');
					
					if (has_post_thumbnail()) {
						cmsms_thumb(get_the_ID(), 'post-thumbnail', true, false, true, false, true, true, false);
					}
					
					cmsms_exc_cont('project');
					
					cmsms_more(get_the_ID(), 'project');
				?>
			</article>
<?php 
		}
	endwhile;
	
	pagination();
endif;
?>
		</section>
	</div>
</section>
<!-- _________________________ Finish Content _________________________ -->


<!-- _________________________ Start Sidebar _________________________ -->
<section id="sidebar" role="complementary">
<?php get_sidebar(); ?>
</section>
<!-- _________________________ Finish Sidebar _________________________ -->

<?php 
get_footer();

