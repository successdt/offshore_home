<?php
/*
 * Create Meta boxes for MK Slider Sidebar
 */

add_action('add_meta_boxes', 'mk_slider_add_custom_box');

/* Do something with the data entered */
add_action('save_post', 'mk_slider_save_postdata');

/* Adds a box to the main column on the Post and Page edit screens */

function mk_slider_add_custom_box() {
  add_meta_box('mk_slides', 'MK Slider Slides', 'mk_slider_inner_custom_box', 'mkslider', 'normal', 'high');
  add_meta_box('mk_slider_settings', 'MK Slider Settings', 'mk_slider_settings_meta_box_content', 'mkslider', 'normal', 'high');
}

/* Prints the box content */

function mk_slider_inner_custom_box($post) {
  wp_nonce_field(plugin_basename(__FILE__), 'myplugin_noncename');

  $mk_meta = get_post_meta($post->ID);
  //echo "<pre>";print_r($mk_meta);echo "</pre>";
  $slides_count = $mk_meta['mk_slides_count'][0];
  $mk_images = unserialize($mk_meta['mk_images'][0]);
  $mk_links = unserialize($mk_meta['mk_links'][0]);
  $mk_links_target = unserialize($mk_meta['mk_links_target'][0]);
  $mk_titles = unserialize($mk_meta['mk_titles'][0]);
  $mk_desc = unserialize($mk_meta['mk_desc'][0]);
  ?>
  <!--<label for="myplugin_new_field">Number of slides you need? </label>-->
  <input type="hidden" id="mk_slides_count" name="mk_slides_count" value="<?php echo $slides_count; ?>" size="25" />
  <input type="submit" name="mkAddNewSlide" id="mkAddNewSlide" class="button secondary" value="Add New Slide"/>
  <?php
  if (isset($slides_count) && $slides_count > 0) {
    ?>
    <div id="mkSliderWrap">
      <?php for ($i = 0; $i < $slides_count; $i++) { ?>
        <div id="mkSliderContent-<?php echo $i; ?>" class="mkSliderContent">
          <h3 id="mkToggle<?php echo $i; ?>" class="mkToggle mkToggleTitle"><a title="Expand/Collapse" href="#" style="display:block" class="open">Slider Image <?php echo $i + 1; ?></a></h3>
          <div id="mkToggleContent<?php echo $i; ?>" class="mkToggleContent" style="display: none;">
            <div class="wid_50 f_left">
              <ul>
                <li>
                  <label for="image">Select Image</label>
                  <input type="text" name="mkImage[]" id="image_<?php echo $i; ?>" class="mkImg" value="<?php echo $mk_images[$i]; ?>"/>
                  <input type="button" value="Get Image" class="button-secondary btnGetImage" id="btnGetImage_<?php echo $i; ?>"/>
                </li>
                <li>
                  <?php if ($mk_images[$i] != "") { ?>
                    <img src="<?php echo $mk_images[$i]; ?>" height="90" class="mkThumb"/>
                  <?php } ?>
                </li>
                <li>
                  <input type="hidden" name="mkDelId" id="mkDelId" value="<?php echo $i; ?>"/>
                  <input onclick="return confirm('Do you really want to delete the slide?');" type="submit" value="Delete Slide" id="deleteMKSlide" class="button button-secondary" name="deleteMKSlide" style="width: auto;">
                </li>
              </ul>
            </div><!-- .wid_50 -->
            <div class="wid_50 f_right">
              <ul>
                <li>
                  <label for="image">Slide Link</label>
                  <input type="text" name="mkLink[]" id="mkLink_<?php echo $i; ?>" value="<?php echo $mk_links[$i]; ?>" />
                </li>
                <li>
                  <label for="image">Link Target</label>                  
                  <select name="mkLinkTarget[]" id="mkLinkTarget_<?php echo $i; ?>">
                    <option value="_self" <?php echo $mk_links_target[$i] == '_self' ? 'selected="selected"' : ''; ?>>Self</option>
                    <option value="_blank" <?php echo $mk_links_target[$i] == '_blank' ? 'selected="selected"' : ''; ?>>Blank</option>
                    <option value="_parent" <?php echo $mk_links_target[$i] == '_parent' ? 'selected="selected"' : ''; ?>>Parent</option>
                    <option value="_top" <?php echo $mk_links_target[$i] == '_top' ? 'selected="selected"' : ''; ?>>Top</option>                    
                  </select>
                </li>
                <li>
                  <label for="image">Title</label>
                  <input type="text" name="mkTitle[]" id="title_<?php echo $i; ?>" value="<?php echo $mk_titles[$i]; ?>"/>
                </li>
                <li>
                  <label for="description">Description</label>
                  <textarea name="mkDesc[]" id="description_<?php echo $i; ?>"><?php echo $mk_desc[$i]; ?></textarea>
                </li>
              </ul>
            </div><!-- .wid_50 -->
            <div class="cb"></div>
          </div>
        </div><!-- .mkSliderContent-<?php $i; ?> -->      
      <?php } ?>    
      <div class="cb"></div>
    </div><!-- #mkSliderWrap -->
    <input type="submit" name="mkAddNewSlide" id="mkAddNewSlide" class="button secondary" value="Add New Slide"/>
    <script type="text/javascript">
    <?php for ($i = 0; $i < $slides_count; $i++) { ?>
        jQuery('#mkToggle<?php echo $i; ?> > a').click(function(){
          jQuery('#mkToggleContent<?php echo $i; ?>').toggle('slow', function(){
            jQuery('#mkToggleContent<?php echo $i; ?>').focus()
            currentClass = jQuery('#mkToggle<?php echo $i; ?> > a').attr('class');
            if(currentClass == 'open'){
              jQuery('#mkToggle<?php echo $i; ?> > a').attr('class', '');
            }else{
              jQuery('#mkToggle<?php echo $i; ?> > a').attr('class', 'open');
            }
          });
          return false;
        });
    <?php } ?>
    </script>
    <?php
  }
}

function mk_slider_settings_meta_box_content($post) {
  $mk_meta = get_post_meta($post->ID);
  ?>
  <div id="mk-slider-settings">
    <ul>
      <li>
        <label for="mkShowLabel">Display Label/Description: </label>
        <select name="mkShowLabel" id="mkShowLabel">
          <option value="true" <?php echo ($mk_meta['mkShowLabel'][0] == "true") ? 'selected="selected"' : ''; ?>>Yes</option>
          <option value="false" <?php echo ($mk_meta['mkShowLabel'][0] == "false") ? 'selected="selected"' : ''; ?>>No</option>        
        </select>
        <small>(Display or hide navigation)</small>
      </li>
      <li>
        <label for="mkShowNav">Display Navigation: </label>
        <select name="mkShowNav" id="mkShowNav">
          <option value="true" <?php echo ($mk_meta['mkShowNav'][0] == "true") ? 'selected="selected"' : ''; ?>>Yes</option>
          <option value="false" <?php echo ($mk_meta['mkShowNav'][0] == "false") ? 'selected="selected"' : ''; ?>>No</option>        
        </select>
        <small>(Display or hide label/description)</small>
      </li>      
      <li>
        <label for="mkStopOverHover">Stop on mouseover: </label>
        <select name="mkStopOverHover" id="mkStopOverHover">
          <option value="true" <?php echo ($mk_meta['mkStopOverHover'][0] == "true") ? 'selected="selected"' : ''; ?>>Yes</option>
          <option value="false" <?php echo ($mk_meta['mkStopOverHover'][0] == "false") ? 'selected="selected"' : ''; ?>>No</option>        
        </select>
        <small>(Stop slider onmouseover)</small>
      </li>
      <li>
        <label for="mkSliderWidth">Slider Width</label>
        <input type="text" name="mkSliderWidth" id="mkSliderWidth" value="<?php echo ($mk_meta['mkSliderWidth'][0] != "") ? $mk_meta['mkSliderWidth'][0] : '900'; ?>" />px
        <small>(Slider width)</small>
      </li>
      <li>
        <label for="mkSliderHeight">Slider Height</label>
        <input type="text" name="mkSliderHeight" id="mkSliderHeight" value="<?php echo ($mk_meta['mkSliderHeight'][0] != "") ? $mk_meta['mkSliderHeight'][0] : '400'; ?>" />px
        <small>(Slider width)</small>
      </li>
      <li>
        <label for="mkSliderBorderWidth">Slider border width</label>
        <input type="text" name="mkSliderBorderWidth" id="mkSliderBorderWidth" value="<?php echo ($mk_meta['mkSliderBorderWidth'][0] != "") ? $mk_meta['mkSliderBorderWidth'][0] : '1'; ?>" />px
        <small>(Slider border width)</small>
      </li>
      <li>
        <label for="mkSliderBorderColor">Slider border color</label>
        <div class="color-picker" style="position: relative;float: left;">
          <input type="text" name="mkSliderBorderColor" id="mkSliderBorderColor" value="<?php echo ($mk_meta['mkSliderBorderColor'][0] != "") ? $mk_meta['mkSliderBorderColor'][0] : '#000000'; ?>" style="<?php echo ($mk_meta['mkSliderBorderColor'][0] != "") ? 'backbround-color:#' . $mk_meta['mkSliderBorderColor'][0] : 'backbround-color:#000000'; ?>" />
          <div style="position: absolute;z-index: 9999;" id="mkColorPicker"></div>
          <small>(Slider border color)</small>
        </div>
        <div class="cb"></div>
      </li>
      <li>
        <label for="mkSliderBorderRadius">Slider border radius</label>
        <input type="text" name="mkSliderBorderRadius" id="mkSliderBorderRadius" value="<?php echo ($mk_meta['mkSliderBorderRadius'][0] != "") ? $mk_meta['mkSliderBorderRadius'][0] : '10'; ?>" />px
        <small>(Slider border radius)</small>
      </li>
      <li>
        <label for="mkSliderTransition">Slider transition effect</label>
        <select type="text" name="mkSliderTransition" id="mkSliderTransition">
          <option value="cube" <?php echo ($mk_meta['mkSliderTransition'][0] == "cube") ? 'selected="selected"' : ''; ?>>Cube</option>
          <option value="block" <?php echo ($mk_meta['mkSliderTransition'][0] == "block") ? 'selected="selected"' : ''; ?>>Block</option>
          <option value="horizontal" <?php echo ($mk_meta['mkSliderTransition'][0] == "horizontal") ? 'selected="selected"' : ''; ?>>Horizontal</option>
          <option value="showBars" <?php echo ($mk_meta['mkSliderTransition'][0] == "showBars") ? 'selected="selected"' : ''; ?>>ShowBars</option>
          <option value="fade" <?php echo ($mk_meta['mkSliderTransition'][0] == "fade") ? 'selected="selected"' : ''; ?>>Fade</option>
          <option value="blind" <?php echo ($mk_meta['mkSliderTransition'][0] == "blind") ? 'selected="selected"' : ''; ?>>Blind</option>
          <option value="random" <?php echo ($mk_meta['mkSliderTransition'][0] == "random") ? 'selected="selected"' : ''; ?>>Random</option>
        </select>
        <small>(Slider transition effect)</small>
      </li>
      <li>
        <label for="mkTransitionVelocity">Slider transition velocity</label>
        <select type="text" name="mkTransitionVelocity" id="mkTransitionVelocity">
          <?php for ($i = 0.1; $i <= 2.1;) { ?>
            <option value="<?php echo $i; ?>" <?php echo ($mk_meta['mkTransitionVelocity'][0] == "$i") ? 'selected="selected"' : ''; ?>><?php echo number_format($i, 1); ?></option>
            <?php $i += 0.1;
          } ?>
        </select>
        <small>(Velocity of animation)</small>
      </li>      
      <li>
        <label for="mkSliderInterval">Slider Interval</label>
        <input type="text" name="mkSliderInterval" id="mkSliderInterval" value="<?php echo ($mk_meta['mkSliderInterval'][0] != "") ? $mk_meta['mkSliderInterval'][0] : '2500'; ?>" />
        <small>(Interval between transitions)</small>
      </li>
    </ul>
  </div><!-- #mk-slider-settings -->
  <?php
}

/* When the post is saved, saves our custom data */

function mk_slider_save_postdata($post_id) {
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    return;

  if (!isset($_POST['myplugin_noncename']) || !wp_verify_nonce($_POST['myplugin_noncename'], plugin_basename(__FILE__)))
    return;

  // Check permissions
  if ('mkslider' == $_POST['post_type']) {
    if (!current_user_can('edit_page', $post_id))
      return;
  }
  else {
    if (!current_user_can('edit_post', $post_id))
      return;
  }

  // OK, we're authenticated: we need to find and save the data
  $post_ID = $_POST['post_ID'];

  //sanitize user input
  $mk_slides_count = sanitize_text_field($_POST['mk_slides_count']);
  $mkImages = $_POST['mkImage'];
  $mkLinks = $_POST['mkLink'];
  $mkLinkTarget = $_POST['mkLinkTarget'];  
  $mkTitles = $_POST['mkTitle'];
  $mkDesc = $_POST['mkDesc'];

  $mk_meta = get_post_meta($post_ID);
  /*
   * Add/Update Slide Count
   */
  if (array_key_exists('mk_slides_count', $mk_meta)) {
    update_post_meta($post_ID, 'mk_slides_count', $mk_slides_count);
  } else {
    add_post_meta($post_ID, 'mk_slides_count', $mk_slides_count, true);
  }
  /*
   * Add/Update Images
   */
  if (array_key_exists('mk_images', $mk_meta)) {
    update_post_meta($post_ID, 'mk_images', $mkImages);
  } else {
    add_post_meta($post_ID, 'mk_images', $mkImages);
  }
  /*
   * Add/Update Links
   */
  if (array_key_exists('mk_links', $mk_meta)) {
    update_post_meta($post_ID, 'mk_links', $mkLinks);
  } else {
    add_post_meta($post_ID, 'mk_links', $mkLinks);
  }
  /*
   * Add/Update Links Target
   */
  if (array_key_exists('mk_links_target', $mk_meta)) {
    update_post_meta($post_ID, 'mk_links_target', $mkLinkTarget);
  } else {
    add_post_meta($post_ID, 'mk_links_target', $mkLinkTarget);
  }
  
  /*
   * Add/Update Title
   */
  if (array_key_exists('mk_titles', $mk_meta)) {
    update_post_meta($post_ID, 'mk_titles', $mkTitles);
  } else {
    add_post_meta($post_ID, 'mk_titles', $mkTitles);
  }
  /*
   * Add/Update Description
   */
  if (array_key_exists('mk_desc', $mk_meta)) {
    update_post_meta($post_ID, 'mk_desc', $mkDesc);
  } else {
    add_post_meta($post_ID, 'mk_desc', $mkDesc);
  }
  
  /*
   * Add new Slide
   */
  if (isset($_POST['mkAddNewSlide']) && $_POST['mkAddNewSlide'] != "") {
    $mkSlidesCount = 0;
    $mkSlidesCount = get_post_meta($post_ID, 'mk_slides_count', 1);    
    $newCount = $mkSlidesCount + 1;
    update_post_meta($post_ID, 'mk_slides_count', $newCount);
  }
  

  /*
   * Delete the slide
   */
  if (isset($_POST['deleteMKSlide']) && $_POST['mkDelId'] != "") {
    $delId = $_POST['mkDelId'];
    $mkSlidesCount = get_post_meta($post_ID, 'mk_slides_count', 1);
    $mkImages = get_post_meta($post_ID, 'mk_images', 1);
    unset($mkImages[$delId]);
    $mkLinks = get_post_meta($post_ID, 'mk_links', 1);
    unset($mkImages[$delId]);
    $mkLinkTarget = get_post_meta($post_ID, 'mk_links_target', 1);
    unset($mkImages[$delId]);
    $mkTitles = get_post_meta($post_ID, 'mk_titles', 1);
    unset($mkImages[$delId]);
    $mkDesc = get_post_meta($post_ID, 'mk_desc', 1);
    unset($mkImages[$delId]);

    update_post_meta($post_ID, 'mk_images', $mkImages);
    update_post_meta($post_ID, 'mk_links', $mkLinks);
    update_post_meta($post_ID, 'mk_links_target', $mkLinkTarget);
    update_post_meta($post_ID, 'mk_titles', $mkTitles);
    update_post_meta($post_ID, 'mk_desc', $mkDesc);
    $newCount = $mkSlidesCount - 1;
    update_post_meta($post_ID, 'mk_slides_count', $newCount);
  }
  /*
   * Save Slider Settings
   */
  $mkShowLabel = sanitize_text_field($_POST['mkShowLabel']);
  $mkShowNav = sanitize_text_field($_POST['mkShowNav']);
  $mkStopOverHover = sanitize_text_field($_POST['mkStopOverHover']);
  $mkSliderWidth = $_POST['mkSliderWidth'];
  $mkSliderHeight = $_POST['mkSliderHeight'];
  $mkSliderBorderWidth = $_POST['mkSliderBorderWidth'];
  $mkSliderBorderColor = $_POST['mkSliderBorderColor'];
  $mkSliderBorderRadius = $_POST['mkSliderBorderRadius'];
  $mkSliderTransition = $_POST['mkSliderTransition'];
  $mkTransitionVelocity = $_POST['mkTransitionVelocity'];
  $mkSliderInterval = $_POST['mkSliderInterval'];

  /*
   * Add/Update Slide Count
   */
  if (array_key_exists('mkShowLabel', $mk_meta)) {
    update_post_meta($post_ID, 'mkShowLabel', $mkShowLabel);
  } else {
    add_post_meta($post_ID, 'mkShowLabel', $mkShowLabel, true);
  }

  if (array_key_exists('mkShowNav', $mk_meta)) {
    update_post_meta($post_ID, 'mkShowNav', $mkShowNav);
  } else {
    add_post_meta($post_ID, 'mkShowNav', $mkShowNav, true);
  }

  if (array_key_exists('mkStopOverHover', $mk_meta)) {
    update_post_meta($post_ID, 'mkStopOverHover', $mkStopOverHover);
  } else {
    add_post_meta($post_ID, 'mkStopOverHover', $mkStopOverHover, true);
  }

  if (array_key_exists('mkSliderWidth', $mk_meta)) {
    update_post_meta($post_ID, 'mkSliderWidth', $mkSliderWidth);
  } else {
    add_post_meta($post_ID, 'mkSliderWidth', $mkSliderWidth, true);
  }

  if (array_key_exists('mkSliderHeight', $mk_meta)) {
    update_post_meta($post_ID, 'mkSliderHeight', $mkSliderHeight);
  } else {
    add_post_meta($post_ID, 'mkSliderHeight', $mkSliderHeight, true);
  }

  if (array_key_exists('mkSliderBorderWidth', $mk_meta)) {
    update_post_meta($post_ID, 'mkSliderBorderWidth', $mkSliderBorderWidth);
  } else {
    add_post_meta($post_ID, 'mkSliderBorderWidth', $mkSliderBorderWidth, true);
  }

  if (array_key_exists('mkSliderBorderColor', $mk_meta)) {
    update_post_meta($post_ID, 'mkSliderBorderColor', $mkSliderBorderColor);
  } else {
    add_post_meta($post_ID, 'mkSliderBorderColor', $mkSliderBorderColor, true);
  }

  if (array_key_exists('mkSliderBorderRadius', $mk_meta)) {
    update_post_meta($post_ID, 'mkSliderBorderRadius', $mkSliderBorderRadius);
  } else {
    add_post_meta($post_ID, 'mkSliderBorderRadius', $mkSliderBorderRadius, true);
  }

  if (array_key_exists('mkSliderTransition', $mk_meta)) {
    update_post_meta($post_ID, 'mkSliderTransition', $mkSliderTransition);
  } else {
    add_post_meta($post_ID, 'mkSliderTransition', $mkSliderTransition, true);
  }

  if (array_key_exists('mkTransitionVelocity', $mk_meta)) {
    update_post_meta($post_ID, 'mkTransitionVelocity', $mkTransitionVelocity);
  } else {
    add_post_meta($post_ID, 'mkTransitionVelocity', $mkTransitionVelocity, true);
  }

  if (array_key_exists('mkSliderInterval', $mk_meta)) {
    update_post_meta($post_ID, 'mkSliderInterval', $mkSliderInterval);
  } else {
    add_post_meta($post_ID, 'mkSliderInterval', $mkSliderInterval, true);
  }
}