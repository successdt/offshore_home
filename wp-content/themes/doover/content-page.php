<?php
/**
 * The template used for displaying page content in page.php and Page Templates
 *
 * @package Doover
 * @author Muffin group
 * @link http://muffingroup.com
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class() ?>>	
	<?php the_content(); ?>
</div>