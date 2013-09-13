<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.1.2
 * 
 * 404 Error Page Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


get_header();

?>
<!-- _________________________ Start Content _________________________ -->
<section id="middle_content" role="main">
	<div class="entry">
		<div class="error">
		<?php 
			echo '<h1>404</h1>' . 
				'<h2>' . __("We're sorry, but the page you were looking for doesn't exist.", 'cmsmasters') . '</h2>';
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_error_search']) { 
				get_search_form(); 
			}
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_error_sitemap_button'] && $cmsms_option[CMSMS_SHORTNAME . '_error_sitemap_link'] != '') {
				echo '<a href="' . $cmsms_option[CMSMS_SHORTNAME . '_error_sitemap_link'] . '" class="button_small">' . __('Sitemap', 'cmsmasters') . '</a>';
			}
		?>
		</div>
	</div>
</section>
<!-- _________________________ Finish Content _________________________ -->


<?php 
get_footer();

