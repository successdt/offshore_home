<?php
/*
 * Create Meta boxes for MK Slider
 */

add_action('add_meta_boxes', 'mk_slider_sidebar_meta_box');

/* Adds a box to the main column on the Post and Page edit screens */

function mk_slider_sidebar_meta_box() {
  $screens = array('mkslider');
  foreach ($screens as $screen) {
    add_meta_box('mk_slider_sidebar', 'MK Slider Integration', 'mk_slider_sidebar_meta_box_content', $screen, 'side', 'default');
  }
}

/* Prints the box content */

function mk_slider_sidebar_meta_box_content($post) {
  ?>
<p>You can place this slider anywhere into your posts, pages, custom post types by using the shortcode below:<br/><br/><em>[MK-SLIDER id="<?php echo $post->ID; ?>"]</em><br/></p>
          <p>You can also place this slider into your template files by using the function below:<br/><br/><em>&lt;?php if(function_exists('mk_slider')){mk_slider('<?php echo $post->ID; ?>');} ?&gt;</em></p>
          <h2>Buy me a beer !!!</h2>          
          <!--<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7N283YV4KLEQ2" title="Donate" target="_blank"><img src="https://www.paypalobjects.com/en_GB/i/btn/btn_donateCC_LG.gif" alt="Donate" title="Donate" /></a>-->
          <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7N283YV4KLEQ2" title="Donate" target="_blank"><img src="https://www.paypalobjects.com/en_GB/i/btn/btn_donateCC_LG.gif" alt="Donate" title="Donate" /></a>
<?php
}
