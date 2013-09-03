<?php
/*
 * Register Custom Post Type For MK Slider
 */

add_action('init', 'register_mk_posts');

function register_mk_posts() {
  $labels = array(
    'name' => 'MK Slider',
    'singular_name' => 'MK Slider',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Slider',
    'edit_item' => 'Edit Slider',
    'new_item' => 'New Slider',
    'all_items' => 'All Sliders',
    'view_item' => 'View Slider',
    'search_items' => 'Search Sliders',
    'not_found' =>  'No slider found',
    'not_found_in_trash' => 'No sliders found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'MK Slider'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'mkslider' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    /*'menu_position' => 80,*/
    'menu_icon' => plugins_url( 'images/mk16.png' , __FILE__ ),
    'supports' => array( 'title', 'author' )
  ); 

  register_post_type( 'MK Slider', $args );
}
add_action("manage_posts_custom_column", "mk_listing_values");
add_filter("manage_edit-mkslider_columns", "mk_listings_columns");
function mk_listings_columns($columns) {
  $columns = array(
      //Create custom columns
      "cb" => "<input type=\"checkbox\" />",
      "ID" => "ID",
      "title" => "Title",
      "shortcode" => "Shortcode",
      "template_tag" => "Template Tag",
      "no_of_images" => "Number of Slides",
      "author" => "Create By",
      "date" => "Created On",
  );
  return $columns;
}

function mk_listing_values($column){
  global $post;
  if("ID" == $column){
    echo $post->ID;
  } elseif("shortcode" == $column){
    echo '[MK-SLIDER id="'.$post->ID.'"]';
  } elseif("template_tag" == $column){
    echo '&lt;?php if(function_exists(\'mk_slider\')){mk_slider('.$post->ID.');} ?&gt;';
  } elseif("no_of_images" == $column){    
    echo get_post_meta($post->ID, 'mk_slides_count', 1);
  }
  
}