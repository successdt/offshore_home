<?php
/**
 * @package WordPress
 * @subpackage Contact Form Builder Plugin
 * @since Contact Form Builder 1.0
 * 
 * Contact Form Builder Validator Language File
 * Created by CMSMasters
 * 
 */


header('Content-type: text/javascript');


require('../../../../wp-load.php');

?>
(function ($) { 
    $.fn.validationEngineLanguage = function () { };
	
    $.validationEngineLanguage = { 
        newLang : function () { 
            $.validationEngineLanguage.allRules = { 
                "required" : { 
                    "regex" : "none", 
                    "alertText" : "<?php _e('* This field is required', 'cmsmasters_form_builder'); ?>", 
                    "alertTextCheckboxMultiple" : "<?php _e('* Please select an option', 'cmsmasters_form_builder'); ?>", 
                    "alertTextCheckboxe" : "<?php _e('* This checkbox is required', 'cmsmasters_form_builder'); ?>" 
                }, 
                "minSize" : { 
                    "regex" : "none", 
                    "alertText" : "<?php _e('* Minimum', 'cmsmasters_form_builder'); ?> ", 
                    "alertText2" : " <?php _e('characters allowed', 'cmsmasters_form_builder'); ?>" 
                }, 
                "maxSize" : { 
                    "regex" : "none", 
                    "alertText" : "<?php _e('* Maximum', 'cmsmasters_form_builder'); ?> ", 
                    "alertText2" : " <?php _e('characters allowed', 'cmsmasters_form_builder'); ?>" 
                }, 
                "email" : { 
                    "regex" : /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, 
                    "alertText" : "<?php _e('* Invalid email address', 'cmsmasters_form_builder'); ?>" 
                }, 
                "number" : { 
                    "regex" : /^[\-\+]?(([0-9]+)([\.,]([0-9]+))?|([\.,]([0-9]+))?)$/, 
                    "alertText" : "<?php _e('* Invalid number', 'cmsmasters_form_builder'); ?>" 
                }, 
                "url" : { 
                    "regex" : /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i, 
                    "alertText" : "<?php _e('* Invalid URL', 'cmsmasters_form_builder'); ?>" 
                }, 
                "onlyNumberSp" : { 
                    "regex" : /^[0-9\ ]+$/, 
                    "alertText" : "<?php _e('* Numbers and spaces only', 'cmsmasters_form_builder'); ?>" 
                }, 
                "onlyLetterSp" : { 
                    "regex" : /^[a-zA-Z\ \']+$/, 
                    "alertText" : "<?php _e('* Letters and spaces only', 'cmsmasters_form_builder'); ?>" 
                } 
            };
        } 
    };
	
    $.validationEngineLanguage.newLang();
} )(jQuery);

