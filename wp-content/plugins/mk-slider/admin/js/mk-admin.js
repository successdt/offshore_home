/*
 * Add Media Popup
 */
jQuery(document).ready(function() { 
  var uploadID = ''; //setup the var
  jQuery('.btnGetImage').click(function() {
    uploadID = jQuery(this).prev('input'); //grab the specific input
    formfield = jQuery('.mkImg').attr('name');
    tb_show('', 'media-upload.php?type=image&amp;amp;TB_iframe=true');
    return false;
  });
 
  window.send_to_editor = function(html) {
    imgurl = jQuery('img',html).attr('src');
    uploadID.val(imgurl); //assign the value to the input
    tb_remove();
  };
  
  
  // Add Color Picker
  jQuery('#mkColorPicker').hide();
  //jQuery('#mkColorPicker').farbtastic('#mkSliderBorderColor');
  jQuery('#mkSliderBorderColor').click(function() {
    jQuery('#mkColorPicker').fadeIn();
  });
  jQuery(document).mousedown(function() {
    jQuery('#mkColorPicker').each(function() {
      jQuery('#mkColorPicker').farbtastic('#mkSliderBorderColor');
      var display = jQuery(this).css('display');
      if ( display == 'block' )
        jQuery(this).fadeOut();
    });
  });
});