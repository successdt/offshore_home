<?php
/*
 * Initialize
 */

function load_mk_admin_style() {
  if(get_post_type() == 'mkslider'){
    wp_enqueue_script('mk_admin_js', plugin_dir_url(__FILE__) . 'js/mk-admin.js', array('jquery'));
  }
  wp_register_style('mk_admin_styles', plugin_dir_url(__FILE__) . '/admin-styles.css', false, '1.0.0');
  wp_enqueue_style('mk_admin_styles');
  wp_enqueue_script('thickbox');
  wp_enqueue_script('media-upload');
  wp_enqueue_style('thickbox');
  wp_enqueue_script('farbtastic');	
  wp_enqueue_style( 'farbtastic' );
}

add_action('admin_enqueue_scripts', 'load_mk_admin_style');

// Styling for the custom post type icon
add_action('admin_head', 'mk_slider_icons');

function mk_slider_icons() {
  ?>
  <style type="text/css" media="screen">        
    #icon-edit.icon32-posts-mkslider{background: url('<?php echo plugin_dir_url(__FILE__); ?>/images/mk32.png') no-repeat;}
  </style>
  <?php
}

/*
 * Add Custom Post Types
 */
require_once 'post-type.php';


/**
 * Add Slides Meta Boxes
 */
require_once 'slides-metabox.php';

/**
 * Add Slides Sidebar Meta Boxes Sidebar
 */
require_once 'slides-sidebar-metabox.php';


/*
 * Add MK Slider Widget
 */

require_once 'slider-widget.php';
add_action( 'widgets_init', create_function( '', 'register_widget( "MK_Slider_Widget" );' ) );
