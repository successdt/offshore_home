<?php
/**
 * The Homepage Sidebar containing the widget area.
 *
 * @package Doover
 * @author Muffin group
 * @link http://muffingroup.com
 */
?>
	
<div id="secondary" class="widget-area">
	
	<?php if ( ! dynamic_sidebar ( 'sidebar-homepage' ) ):
		doover_nosidebar();				
	endif; ?>

</div>