<?php
/**
 * Template Name: Homepage Template
 * Description: The Homepage Template
 *
 * @package Doover
 * @author Muffin Group
 * @link http://muffingroup.com
 */

get_header(); ?>

<!-- Content -->
<div id="Content">
	<div class="Wrapper">
	
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; ?>
		
	</div>
</div>

<?php get_footer(); ?>