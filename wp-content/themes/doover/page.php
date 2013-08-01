<?php
/**
 * The template for displaying all pages.
 *
 * @package Doover
 * @author Muffin group
 * @link http://muffingroup.com
 */

get_header(); ?>

<!-- Content -->
<div id="Content">
	<div class="Wrapper">
		
		<div class="content">
		
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>

		</div>	
		
	</div>
</div>

<?php get_footer(); ?>