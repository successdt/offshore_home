<?php
/*
Plugin Name: MK Slider
Plugin URI: https://manojranawpblog.wordpress.com/
Description: Wordpress Slider for posts & pages. Supports shortcode and sidebar widget to display slideshow.
Version: 1.3.4
Author: Manoj Kumar
Author URI: https://manojranawpblog.wordpress.com/
License: GPL2
Tags: Wordpress Slider, Wordpress Slideshow, Slider, Image Rotator, Gallery, Banner Slider, slide, slider, slides, slideshow, content slider, content slideshow, slider widget, widget slideshow
*/

// Admin 
require_once 'admin/init.php';

/*
 * Add Stylesheet & Scripts for the slider
 */

add_action('wp_enqueue_scripts', 'mk_slider_scripts');

function mk_slider_scripts() {
  wp_enqueue_script('jquery.easing.1.3', plugins_url('/js/jquery.easing.1.3.js', __FILE__), array('jquery'));
  wp_enqueue_script('jquery.animate-colors-min', plugins_url('/js/jquery.animate-colors-min.js', __FILE__), array('jquery'));
  wp_enqueue_script('jquery.skitter.min', plugins_url('/js/jquery.skitter.min.js', __FILE__), array('jquery'));

  wp_register_style('mk-skitter-css', plugins_url('/css/skitter.styles.css', __FILE__));
  wp_enqueue_style('mk-skitter-css');
}

/*
 * Create the MK Slider
 */

function mk_slider($sliderID) {
  global $post;
  $slideMeta = get_post_meta($sliderID);
  $slideCount = $slideMeta['mk_slides_count'][0];
  $mk_images = unserialize($slideMeta['mk_images'][0]);
  $mk_links = unserialize($slideMeta['mk_links'][0]);
  $mk_links_target = unserialize($slideMeta['mk_links_target'][0]);
  $mk_titles = unserialize($slideMeta['mk_titles'][0]);
  $mk_desc = unserialize($slideMeta['mk_desc'][0]);

  // Settings
  $mkShowLabel = $slideMeta['mkShowLabel'];
  $mkShowNav = $slideMeta['mkShowNav'];
  $mkSliderWidth = $slideMeta['mkSliderWidth'];
  $mkSliderHeight = $slideMeta['mkSliderHeight'];
  $mkSliderBorderWidth = $slideMeta['mkSliderBorderWidth'];
  $mkSliderBorderColor = $slideMeta['mkSliderBorderColor'];
  $mkSliderBorderRadius = $slideMeta['mkSliderBorderRadius'];

  if ($slideCount > 0) {
    do_action('mk_script', $sliderID); // Add MK Slider Script
    $sliderCSS = 'width: ' . $mkSliderWidth[0] . 'px; height: ' . $mkSliderHeight[0] . 'px;border: solid ' . $mkSliderBorderWidth[0] . 'px ' . $mkSliderBorderColor[0] . ';-moz-border-radius:' . $mkSliderBorderRadius[0] . 'px;-webkit-border-radius:' . $mkSliderBorderRadius[0] . 'px;border-radius:' . $mkSliderBorderRadius[0] . 'px; overflow: hidden;';
    ?>
    <div id="mk-slider<?php echo $sliderID; ?>" class="box_skitter" style="<?php echo $sliderCSS; ?>">
      <ul>
        <?php for ($i = 0; $i < $slideCount; $i++) { ?>
          <li>
            <?php if( $mk_links[$i] != "" ){ ?>
            <a href="<?php echo $mk_links[$i]; ?>" title="<?php echo $mk_titles[$i]; ?>" target="<?php echo $mk_links_target[$i]; ?>">
              <img src="<?php echo $mk_images[$i]; ?>" alt="<?php echo $mk_titles[$i]; ?>" title="<?php echo $mk_titles[$i]; ?>"/>
            </a>
            <?php } else{ ?>
            <a href="javascript:void(0);" title="<?php echo $mk_titles[$i]; ?>">
              <img src="<?php echo $mk_images[$i]; ?>" alt="<?php echo $mk_titles[$i]; ?>" title="<?php echo $mk_titles[$i]; ?>"/>
            </a>
            <?php } ?>
            <?php if ($mkShowLabel[0] == 'true') { ?>
              <div class="label_text">
                <h3><?php echo $mk_titles[$i]; ?></h3>
                <p><?php echo $mk_desc[$i]; ?></p>
              </div> 
            <?php } ?>
          </li>
        <?php } ?>
      </ul>
    </div><!-- .box_skitter -->
    <?php
  }

// Reset Query
  wp_reset_query();
}

/*
 * Add Header Content
 */
add_action('mk_script', 'mk_slider_options', 10, 1);

function mk_slider_options($sliderID) {
  ?>
  <script type="text/javascript">
    jQuery(function(){
      jQuery('#mk-slider<?php echo $sliderID; ?>').skitter({
        numbers: false,
        dots: true,
        stop_over: <?php echo get_post_meta($sliderID, 'mkStopOverHover', 1); ?>,
        animation: '<?php echo get_post_meta($sliderID, 'mkSliderTransition', 1); ?>',
        velocity: <?php echo get_post_meta($sliderID, 'mkTransitionVelocity', 1); ?>,
        interval: <?php echo get_post_meta($sliderID, 'mkSliderInterval', 1); ?>,
        navigation: <?php echo get_post_meta($sliderID, 'mkShowNav', 1); ?>
      });
    });
  </script>
  <?php
}

/*
 * Add Shortcode Support
 */

function mk_slider_shortcode($atts) {
  return mk_slider($atts[id]);
}

add_shortcode('MK-SLIDER', 'mk_slider_shortcode'); // Add shortcode [MK-SLIDER id='sliderID']
