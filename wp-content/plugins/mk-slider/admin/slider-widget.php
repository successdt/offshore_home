<?php
/*
 * MK slider Widget
 */

class MK_Slider_Widget extends WP_Widget {

  /**
   * Register widget with WordPress.
   */
  public function __construct() {
    parent::__construct(
            'mkslider_widget', // Base ID
            'MK Slider Widget', // Name
            array('description' => __('Sidebar widget for MK Slider', 'text_domain'),) // Args
    );
  }

  /**
   * Front-end display of widget.
   */
  public function widget($args, $instance) {
    extract($args);
    $title = apply_filters('widget_title', $instance['title']);
    $mkSliderID = $instance['mkSliderID'];

    echo $before_widget;
    if (!empty($title))
      echo $before_title . $title . $after_title;
    if (function_exists('mk_slider') && $mkSliderID != "") {
      mk_slider($mkSliderID);
    }
    echo $after_widget;
  }

  /**
   * Update Widget Content   
   */
  public function update($new_instance, $old_instance) {
    //print_r($new_instance);
    $instance = array();
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['mkSliderID'] = strip_tags($new_instance['mkSliderID']);
    return $instance;
  }

  /**
   * Back-end widget form.
   */
  public function form($instance) {
    global $post;
    $sliderPosts = new WP_Query(array('post_type' => 'mkslider', 'Orderby' => 'title', 'order' => 'ASC'));
    if (isset($instance['title'])) {
      $title = $instance['title'];
    } else {
      $title = __('MK Slider', 'text_domain');
    }
    if (isset($instance['mkSliderID'])) {
      $mkSliderID = $instance['mkSliderID'];
    } else {
      $mkSliderID = "";
    }
    ?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
    </p>
    <p>      
      <label for="<?php echo $this->get_field_id('mkSliderID'); ?>">Select slider: </label>
      <select class="widefat" id="<?php echo $this->get_field_id('mkSliderID'); ?>" name="<?php echo $this->get_field_name('mkSliderID'); ?>">
        <option value="">-Select-</option>
        <?php
        while ($sliderPosts->have_posts()) : $sliderPosts->the_post();
          if (esc_attr($mkSliderID) == get_the_ID()) {
            $selected = 'selected="selected"';
          } else {
            $selected = "";
          }
          ?>
          <option value="<?php the_ID(); ?>" <?php echo $selected; ?>><?php the_title(); ?></option>      
    <?php endwhile; ?>
      </select>
    </p>
    <?php
  }

}