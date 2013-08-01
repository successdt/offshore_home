<?php
/**
 * Template Name: Homepage Right Sidebar Template
 * Description: The Homepage Template with Right Sidebar
 *
 * @package Doover
 * @author Muffin group
 * @link http://muffingroup.com
 */

get_header(); ?>

<!-- Content -->
<div id="Content" class="with_aside right_submenu">
	<div class="Wrapper">

		<div class="content">
		
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
		
		</div>
		
		<div class="sidebar">	
			<?php get_sidebar( 'homepage' ); ?>	
		</div>
		
	</div>
</div>

<?php get_footer(); ?>