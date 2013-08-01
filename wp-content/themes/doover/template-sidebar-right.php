<?php
/**
 * Template Name: Right Sidebar Template
 * Description: A Page Template that adds a sidebar to pages
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
			<?php get_sidebar(); ?>	
		</div>
		
	</div>
</div>

<?php get_footer(); ?>