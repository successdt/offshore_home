<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.1
 * 
 * Custom Theme Widgets
 * Created by CMSMasters
 * 
 */


/**
 * Advertisement Widget Class
 */
class WP_Widget_Custom_Advertisement extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_advertisement_entries', 
			'description' => __('Your advertisement', 'cmsmasters') 
		);
		$control_ops = array( 
			'width' => 600 
		);
		
		parent::__construct('custom-advertisement', '&nbsp;' . __('CMSMS - Advertisement', 'cmsmasters'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Advertisement', 'cmsmasters') : $instance['title'], $instance, $this->id_base);
        $image1 = isset($instance['image1']) ? $instance['image1'] : '';
        $link1 = isset($instance['link1']) ? $instance['link1'] : '';
        $image2 = isset($instance['image2']) ? $instance['image2'] : '';
        $link2 = isset($instance['link2']) ? $instance['link2'] : '';
        $image3 = isset($instance['image3']) ? $instance['image3'] : '';
        $link3 = isset($instance['link3']) ? $instance['link3'] : '';
        $image4 = isset($instance['image4']) ? $instance['image4'] : '';
        $link4 = isset($instance['link4']) ? $instance['link4'] : '';
        $image5 = isset($instance['image5']) ? $instance['image5'] : '';
        $link5 = isset($instance['link5']) ? $instance['link5'] : '';
        $image6 = isset($instance['image6']) ? $instance['image6'] : '';
        $link6 = isset($instance['link6']) ? $instance['link6'] : '';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
		echo '<div class="' . $widget_width . '">' . 
			$before_widget;
		
		if ($title) { 
			echo $before_title . $title . $after_title;
		}
		
		if ($image1 != '' && $link1 != '') {
			echo '<figure class="adv_widget_image">' . 
				'<a href="' . $link1 . '" target="_blank">' . 
					'<img src="' . $image1 . '" width="125" height="125" alt="" />' . 
				'</a>' . 
			'</figure>';
		}

		if ($image2 != '' && $link2 != '') {
			echo '<figure class="adv_widget_image">' . 
				'<a href="' . $link2 . '" target="_blank">' . 
					'<img src="' . $image2 . '" width="125" height="125" alt="" />' . 
				'</a>' . 
			'</figure>';
		}

		if ($image3 != '' && $link3 != '') {
			echo '<figure class="adv_widget_image">' . 
				'<a href="' . $link3 . '" target="_blank">' . 
					'<img src="' . $image3 . '" width="125" height="125" alt="" />' . 
				'</a>' . 
			'</figure>';
		}

		if ($image4 != '' && $link4 != '') {
			echo '<figure class="adv_widget_image">' . 
				'<a href="' . $link4 . '" target="_blank">' . 
					'<img src="' . $image4 . '" width="125" height="125" alt="" />' . 
				'</a>' . 
			'</figure>';
		}

		if ($image5 != '' && $link5 != '') {
			echo '<figure class="adv_widget_image">' . 
				'<a href="' . $link5 . '" target="_blank">' . 
					'<img src="' . $image5 . '" width="125" height="125" alt="" />' . 
				'</a>' . 
			'</figure>';
		}

		if ($image6 != '' && $link6 != '') {
			echo '<figure class="adv_widget_image">' . 
				'<a href="' . $link6 . '" target="_blank">' . 
					'<img src="' . $image6 . '" width="125" height="125" alt="" />' . 
				'</a>' . 
			'</figure>';
		}
		
        echo $after_widget . 
			'<div class="cl"></div>' . 
        '</div>';
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['image1'] = strip_tags($new_instance['image1']);
        $instance['link1'] = strip_tags($new_instance['link1']);
        $instance['image2'] = strip_tags($new_instance['image2']);
        $instance['link2'] = strip_tags($new_instance['link2']);
        $instance['image3'] = strip_tags($new_instance['image3']);
        $instance['link3'] = strip_tags($new_instance['link3']);
        $instance['image4'] = strip_tags($new_instance['image4']);
        $instance['link4'] = strip_tags($new_instance['link4']);
        $instance['image5'] = strip_tags($new_instance['image5']);
        $instance['link5'] = strip_tags($new_instance['link5']);
        $instance['image6'] = strip_tags($new_instance['image6']);
        $instance['link6'] = strip_tags($new_instance['link6']);
        $instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$image1 = isset($instance['image1']) ? esc_attr($instance['image1']) : '';
		$link1 = isset($instance['link1']) ? esc_attr($instance['link1']) : '';
		$image2 = isset($instance['image2']) ? esc_attr($instance['image2']) : '';
		$link2 = isset($instance['link2']) ? esc_attr($instance['link2']) : '';
		$image3 = isset($instance['image3']) ? esc_attr($instance['image3']) : '';
		$link3 = isset($instance['link3']) ? esc_attr($instance['link3']) : '';
		$image4 = isset($instance['image4']) ? esc_attr($instance['image4']) : '';
		$link4 = isset($instance['link4']) ? esc_attr($instance['link4']) : '';
		$image5 = isset($instance['image5']) ? esc_attr($instance['image5']) : '';
		$link5 = isset($instance['link5']) ? esc_attr($instance['link5']) : '';
		$image6 = isset($instance['image6']) ? esc_attr($instance['image6']) : '';
		$link6 = isset($instance['link6']) ? esc_attr($instance['link6']) : '';
        $widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('image1'); ?>"><?php _e('Image', 'cmsmasters'); ?> #1:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('image1'); ?>" name="<?php echo $this->get_field_name('image1'); ?>" type="text" value="<?php echo $image1; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('link1'); ?>"><?php _e('Link', 'cmsmasters'); ?> #1:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('link1'); ?>" name="<?php echo $this->get_field_name('link1'); ?>" type="text" value="<?php echo $link1; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('image2'); ?>"><?php _e('Image', 'cmsmasters'); ?> #2:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('image2'); ?>" name="<?php echo $this->get_field_name('image2'); ?>" type="text" value="<?php echo $image2; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('link2'); ?>"><?php _e('Link', 'cmsmasters'); ?> #2:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('link2'); ?>" name="<?php echo $this->get_field_name('link2'); ?>" type="text" value="<?php echo $link2; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('image3'); ?>"><?php _e('Image', 'cmsmasters'); ?> #3:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('image3'); ?>" name="<?php echo $this->get_field_name('image3'); ?>" type="text" value="<?php echo $image3; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('link3'); ?>"><?php _e('Link', 'cmsmasters'); ?> #3:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('link3'); ?>" name="<?php echo $this->get_field_name('link3'); ?>" type="text" value="<?php echo $link3; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('image4'); ?>"><?php _e('Image', 'cmsmasters'); ?> #4:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('image4'); ?>" name="<?php echo $this->get_field_name('image4'); ?>" type="text" value="<?php echo $image4; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('link4'); ?>"><?php _e('Link', 'cmsmasters'); ?> #4:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('link4'); ?>" name="<?php echo $this->get_field_name('link4'); ?>" type="text" value="<?php echo $link4; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('image5'); ?>"><?php _e('Image', 'cmsmasters'); ?> #5:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('image5'); ?>" name="<?php echo $this->get_field_name('image5'); ?>" type="text" value="<?php echo $image5; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('link5'); ?>"><?php _e('Link', 'cmsmasters'); ?> #5:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('link5'); ?>" name="<?php echo $this->get_field_name('link5'); ?>" type="text" value="<?php echo $link5; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('image6'); ?>"><?php _e('Image', 'cmsmasters'); ?> #6:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('image6'); ?>" name="<?php echo $this->get_field_name('image6'); ?>" type="text" value="<?php echo $image6; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('link6'); ?>"><?php _e('Link', 'cmsmasters'); ?> #6:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('link6'); ?>" name="<?php echo $this->get_field_name('link6'); ?>" type="text" value="<?php echo $link6; ?>" />
            </label>
        </p>
		<p class="w_col">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters'); ?>:<br /><br />
                <small class="s_red"><?php _e('Only for horizontal sidebars', 'cmsmasters'); ?></small>
                <select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" class="fl">
                    <option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
                    <option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
                    <option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
                </select>
            </label>
		</p>
        <div class="cl"></div>
        <?php
    }
}



/**
 * Contact Information Widget Class
 */
class WP_Widget_Custom_Contact_Info extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_contact_info_entries', 
			'description' => __('Your contact information', 'cmsmasters') 
		);
		$control_ops = array( 
			'width' => 600 
		);
		
		parent::__construct('custom-contact-info', '&nbsp;' . __('CMSMS - Contact Information', 'cmsmasters'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Contact Information', 'cmsmasters') : $instance['title'], $instance, $this->id_base);
        $name = isset($instance['name']) ? $instance['name'] : '';
        $address = isset($instance['address']) ? $instance['address'] : '';
        $city = isset($instance['city']) ? $instance['city'] : '';
        $state = isset($instance['state']) ? $instance['state'] : '';
        $zip = isset($instance['zip']) ? $instance['zip'] : '';
        $phone = isset($instance['phone']) ? $instance['phone'] : '';
        $email = isset($instance['email']) ? $instance['email'] : '';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
		echo '<div class="' . $widget_width . '">' . 
			$before_widget;
		
		if ($title) { 
			echo $before_title . $title . $after_title;
		}
		
		if ($name != '') { 
			echo '<span class="contact_widget_name">' . $name . '</span>' . 
			'<br />';
		}
		
		if ($address != '') { 
			echo '<span class="contact_widget_address">' . $address . '</span>' . 
			'<br />';
		}
		
		if ($city != '') { 
			echo '<span class="contact_widget_city">' . $city . '</span>' . 
			'<br />';
		}
		
		if ($state != '') { 
			echo '<span class="contact_widget_state">' . $state . '</span>' . 
			'<br />';
		}
		
		if ($zip != '') { 
			echo '<span class="contact_widget_zip">' . $zip . '</span>' . 
			'<br />';
		}
		
		if ($phone != '') { 
            echo '<span class="contact_widget_phone">' . 
				'<span style="display:inline-block; width:35%;">' . __('Phone', 'cmsmasters') . ':&nbsp;</span>' . 
				$phone . 
			'</span>' . 
			'<br />';
		}
		
        if ($email != '') { 
            echo '<span class="contact_widget_email">' . 
				'<span style="display:inline-block; width:35%;">' . __('Email', 'cmsmasters') . ':&nbsp;</span>' . 
				'<a href="mailto:' . $email . '">' . $email . '</a>' . 
			'</span>' . 
			'<br />';
		}
		
        echo $after_widget . 
        '</div>';
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['name'] = strip_tags($new_instance['name']);
        $instance['address'] = strip_tags($new_instance['address']);
        $instance['city'] = strip_tags($new_instance['city']);
        $instance['state'] = strip_tags($new_instance['state']);
        $instance['zip'] = strip_tags($new_instance['zip']);
        $instance['phone'] = strip_tags($new_instance['phone']);
        $instance['email'] = strip_tags($new_instance['email']);
        $instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $name = isset($instance['name']) ? esc_attr($instance['name']) : '';
        $address = isset($instance['address']) ? esc_attr($instance['address']) : '';
        $city = isset($instance['city']) ? esc_attr($instance['city']) : '';
        $state = isset($instance['state']) ? esc_attr($instance['state']) : '';
        $zip = isset($instance['zip']) ? esc_attr($instance['zip']) : '';
        $phone = isset($instance['phone']) ? esc_attr($instance['phone']) : '';
        $email = isset($instance['email']) ? esc_attr($instance['email']) : '';
        $widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
        ?>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('name'); ?>"><?php _e('Name', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" type="text" value="<?php echo $name; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo $address; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('city'); ?>"><?php _e('City', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('city'); ?>" name="<?php echo $this->get_field_name('city'); ?>" type="text" value="<?php echo $city; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('state'); ?>"><?php _e('State', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('state'); ?>" name="<?php echo $this->get_field_name('state'); ?>" type="text" value="<?php echo $state; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('zip'); ?>"><?php _e('Zip', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('zip'); ?>" name="<?php echo $this->get_field_name('zip'); ?>" type="text" value="<?php echo $zip; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo $phone; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>" />
            </label>
        </p>
		<p class="w_col">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters'); ?>:<br /><br />
                <small class="s_red"><?php _e('Only for horizontal sidebars', 'cmsmasters'); ?></small>
                <select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" class="fl">
                    <option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
                    <option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
                    <option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
                </select>
            </label>
		</p>
        <div class="cl"></div>
        <?php
    }
}



/**
 * Divider Widget Class
 */
class WP_Widget_Custom_Divider extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_divider_entries', 
			'description' => __('Divider for widgets rows', 'cmsmasters') 
		);
		
		parent::__construct('custom-divider', '&nbsp;' . __('CMSMS - Divider', 'cmsmasters'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
        $divider = isset($instance['divider']) ? $instance['divider'] : false;
		
		if ($divider) {
			echo '<div class="divider"></div>';
		} else {
			echo '<div class="cl"></div>';
		}
    }
	
	function update($new_instance, $old_instance) {
		$new_instance = (array) $new_instance;
		
		$instance = array( 
			'divider' => 0 
		);
		
		foreach ($instance as $field => $val) {
			if (isset($new_instance[$field])) {
				$instance[$field] = 1;
			}
		}
		
		return $instance;
	}
	
	function form($instance) {
		$instance = wp_parse_args((array) $instance, array( 
			'divider' => false 
		) );
        ?>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['divider'], true); ?> id="<?php echo $this->get_field_id('divider'); ?>" name="<?php echo $this->get_field_name('divider'); ?>" /> 
			<label for="<?php echo $this->get_field_id('divider'); ?>"><?php _e('Show Divider Line', 'cmsmasters'); ?></label>
		</p>
		<?php
	}
}



/**
 * Embedded Video Widget Class
 */
class WP_Widget_Custom_Video extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_video_entries', 
			'description' => __('Video from youtube, vimeo or dailymotion', 'cmsmasters') 
		);
		
		parent::__construct('custom-video', '&nbsp;' . __('CMSMS - Embedded Video', 'cmsmasters'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Embedded Video', 'cmsmasters') : $instance['title'], $instance, $this->id_base);
        $url = isset($instance['url']) ? $instance['url'] : '';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
		echo '<div class="' . $widget_width . '">' . 
			$before_widget;
		
		if ($title) { 
			echo $before_title . $title . $after_title;
		}
		
		if ($url != '') {
			echo '<div class="resizable_block">' . 
				get_video_iframe($url) . 
			'</div>';
		}
		
        echo $after_widget . 
        '</div>';
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['url'] = strip_tags($new_instance['url']);
        $instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$url = isset($instance['url']) ? esc_attr($instance['url']) : '';
        $widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('url'); ?>"><?php _e('Video URL', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('url'); ?>" name="<?php echo $this->get_field_name('url'); ?>" type="text" value="<?php echo $url; ?>" />
            </label>
        </p>
		<p class="w_col">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters'); ?>:<br /><br />
                <small class="s_red"><?php _e('Only for horizontal sidebars', 'cmsmasters'); ?></small>
                <select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" class="fl">
                    <option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
                    <option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
                    <option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
                </select>
            </label>
		</p>
        <div class="cl"></div>
        <?php
    }
}



/**
 * Facebook Widget Class
 */
class WP_Widget_Custom_Facebook extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_facebook_entries', 
			'description' => __('Your Facebook like box', 'cmsmasters') 
		);
		
		parent::__construct('custom-facebook', '&nbsp;' . __('CMSMS - Facebook', 'cmsmasters'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Facebook', 'cmsmasters') : $instance['title'], $instance, $this->id_base);
		$url = isset($instance['url']) ? $instance['url'] : '';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
		echo '<div class="' . $widget_width . '">' . 
			$before_widget;
		
		if ($title) { 
			echo $before_title . $title . $after_title;
		}
		
		echo '<iframe src="//www.facebook.com/plugins/likebox.php?href=' . urlencode($url) . '&amp;width=100&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23ffffff&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; background:#ffffff; overflow:hidden; width:100%; height:258px;" allowTransparency="true"></iframe>' . 
			'<div class="cl"></div>' . 
			$after_widget . 
		'</div>';
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['url'] = strip_tags($new_instance['url']);
        $instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $url = isset($instance['url']) ? esc_attr($instance['url']) : '';
        $widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('url'); ?>"><?php _e('Facebook Page URL', 'cmsmasters'); ?> :<br />
                <input class="widefat" id="<?php echo $this->get_field_id('url'); ?>" name="<?php echo $this->get_field_name('url'); ?>" type="text" value="<?php echo $url; ?>" />
            </label>
        </p>
		<p class="w_col">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters'); ?>:<br /><br />
                <small class="s_red"><?php _e('Only for horizontal sidebars', 'cmsmasters'); ?></small>
                <select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" class="fl">
                    <option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
                    <option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
                    <option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
                </select>
            </label>
		</p>
        <div class="cl"></div>
        <?php
    }
}



/**
 * Featured Block Widget Class
 */
class WP_Widget_Custom_Featured extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_featured', 
			'description' => __('Your custom featured block', 'cmsmasters') 
		);
		$control_ops = array( 
			'width' => 400 
		);
		
		parent::__construct('custom-featured', '&nbsp;' . __('CMSMS - Featured Block', 'cmsmasters'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Featured Block', 'cmsmasters') : $instance['title'], $instance, $this->id_base);
        $subtitle = isset($instance['subtitle']) ? $instance['subtitle'] : '';
        $icon = isset($instance['icon']) ? $instance['icon'] : '';
		$image = wp_get_attachment_image_src($icon, 'thumbnail');
        $text = isset($instance['text']) ? $instance['text'] : '';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
		echo '<div class="' . $widget_width . '">' . 
			$before_widget;
		
		if ($title || $icon != '') {
			echo '<table>' . 
				'<tr>';
			
			if ($icon != '') {
				$icons = explode('|', str_replace(' ', '', $icon));
				if (is_numeric($icons[0])) {
					$image = wp_get_attachment_image_src($icons[0], 'full');
					
					$image = $image[0];
				} else {
					$image = $icons[0];
				}
			
				echo '<td>' . 
					'<img src="' . $image . '" alt="" />' . 
				'</td>';
			}
			
			echo '<td>' . 
				'<div class="widgettitle">';
			
			if ($title) {
				echo $before_title . $title . $after_title;
			}
			
			if ($subtitle) {
				echo '<h6>' . $subtitle . '</h6>';
			}
			
			echo '</div>' . 
			'</td>';
			
			echo '</tr>' . 
			'</table>';
		}
		
		if ($text != '') {
			echo '<div class="cms_widget_content">' . 
				$text . 
			'</div>';
		}
		
		echo $after_widget . 
        '</div>';
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['subtitle'] = strip_tags($new_instance['subtitle']);
		$instance['icon'] = strip_tags($new_instance['icon']);
		$instance['text'] = $new_instance['text'];
        $instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $subtitle = isset($instance['subtitle']) ? esc_attr($instance['subtitle']) : '';
		$icon = isset($instance['icon']) ? esc_attr($instance['icon']) : '';
		$text = isset($instance['text']) ? esc_attr($instance['text']) : '';
        $widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('subtitle'); ?>"><?php _e('Subtitle', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('subtitle'); ?>" name="<?php echo $this->get_field_name('subtitle'); ?>" type="text" value="<?php echo $subtitle; ?>" />
            </label>
        </p>
        <p class="m0">
            <label for="<?php echo $this->get_field_id('icon'); ?>"><?php _e('Icon', 'cmsmasters'); ?>:<br />
                <input id="<?php echo $this->get_field_id('icon'); ?>" name="<?php echo $this->get_field_name('icon'); ?>" type="hidden" value="<?php echo $icon; ?>" />
            </label>
        </p>
		<div class="cmsmasters_icon_list">
			<ul id="icons<?php echo $this->get_field_id('icon'); ?>" class="iconslist">
		<?php 
			$cmsms_option = cmsms_get_global_options();
			
			
			if (!empty($cmsms_option[CMSMS_SHORTNAME . '_heading_icons'])) {
				foreach ($cmsms_option[CMSMS_SHORTNAME . '_heading_icons'] as $icon_numb => $icon_id) {
					$image = wp_get_attachment_image_src($icon_id, 'thumbnail');
					
					
					echo '<li id="cmsms_heading_icon_' . $icon_numb . '"' . (($icon !== '' && $icon === $icon_id) ? ' class="current_icon"' : '') . '>' . "\n" . 
						'<a href="' . $icon_id . '" class="click_img">' . "\n" . 
							'<img src="' . $image[0] . '" alt="' . $icon_numb . '" />' . "\n" . 
						'</a>' . "\n" . 
					'</li>' . "\n";
				}
			} else {
				echo '<li>' . __('Add new heading icons', 'cmsmasters') . ' <a href="' . admin_url() . 'admin.php?page=cmsms-settings-icon&tab=heading">' . __('here', 'cmsmasters') . '</a>.</li>';
			}
		?>
			</ul>    
		</div>
        <p>
            <label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Text', 'cmsmasters'); ?>:<br />
                <textarea class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" type="text" style="min-height:100px; resize:vertical;"><?php echo $text; ?></textarea>
            </label>
        </p>
		<p class="w_col">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters'); ?>:<br /><br />
                <small class="s_red"><?php _e('Only for horizontal sidebars', 'cmsmasters'); ?></small>
                <select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" class="fl">
                    <option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
                    <option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
                    <option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
                </select>
            </label>
		</p>
        <div class="cl"></div>
        <?php
    }
}



/**
 * Flickr Widget Class
 */
class WP_Widget_Custom_Flickr extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_flickr_entries', 
			'description' => __('Your Flickr account latest images', 'cmsmasters') 
		);
		
		parent::__construct('custom-flickr', '&nbsp;' . __('CMSMS - Flickr', 'cmsmasters'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Flickr', 'cmsmasters') : $instance['title'], $instance, $this->id_base);
		$user = isset($instance['user']) ? $instance['user'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 6;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
		echo '<div class="' . $widget_width . '">' . 
			$before_widget . 
			'<div id="flickr">';
		
		if ($title) { 
			echo $before_title . $title . $after_title;
		}
		
		echo '<div class="wrap">' . 
				'<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=' . $number . '&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=' . $user . '"></script>' . 
			'</div>' . 
			'<div class="cl"></div>' . 
			'<a href="http://www.flickr.com/photos/' . $user . '" target="_blank">' . __('More flickr images', 'cmsmasters') . '</a>' . 
			'</div>' . 
			$after_widget . 
		'</div>';
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['user'] = strip_tags($new_instance['user']);
        $instance['number'] = absint($new_instance['number']);
        $instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $user = isset($instance['user']) ? esc_attr($instance['user']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 6;
        $widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('user'); ?>"><?php _e('Flickr ID', 'cmsmasters'); ?> (<a href="http://www.idgettr.com" target="_blank">idGettr</a>):<br />
                <input class="widefat" id="<?php echo $this->get_field_id('user'); ?>" name="<?php echo $this->get_field_name('user'); ?>" type="text" value="<?php echo $user; ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e("Enter the number of latest flickr images you'd like to display", 'cmsmasters'); ?>:<br /><br />
                <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" />
                <small class="s_red"><?php _e('default is', 'cmsmasters'); ?> 6</small><br />
            </label>
        </p>
		<p class="w_col">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters'); ?>:<br /><br />
                <small class="s_red"><?php _e('Only for horizontal sidebars', 'cmsmasters'); ?></small>
                <select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" class="fl">
                    <option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
                    <option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
                    <option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
                </select>
            </label>
		</p>
        <div class="cl"></div>
        <?php
    }
}



/**
 * HTML5 Audio Widget Class
 */
class WP_Widget_Custom_HTML5_Audio extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_html5_audio_entries', 
			'description' => __('Your HTML5 Audio', 'cmsmasters') 
		);
		$control_ops = array( 
			'width' => 600 
		);
		
		parent::__construct('custom-html5-audio', '&nbsp;' . __('CMSMS - HTML5 Audio', 'cmsmasters'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('HTML5 Audio', 'cmsmasters') : $instance['title'], $instance, $this->id_base);
        $srcmp3 = isset($instance['srcmp3']) ? $instance['srcmp3'] : '';
        $srcogg = isset($instance['srcogg']) ? $instance['srcogg'] : '';
        $srcwebm = isset($instance['srcwebm']) ? $instance['srcwebm'] : '';
        $text = (isset($instance['text']) && $instance['text'] != '') ? $instance['text'] : __('Your browser does not support the audio tag.', 'cmsmasters');
        $controls = isset($instance['controls']) ? $instance['controls'] : 'controls';
        $autoplay = isset($instance['autoplay']) ? $instance['autoplay'] : '';
        $loop = isset($instance['loop']) ? $instance['loop'] : '';
        $preload = isset($instance['preload']) ? $instance['preload'] : 'none';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
		echo '<div class="' . $widget_width . '">' . 
			$before_widget;
		
		if ($title) { 
			echo $before_title . $title . $after_title;
		}
		
		$out = '<audio class="fullwidth"';
		
		if ($controls != '') {
			$out .= ' controls="controls"';
		}
		
		if ($autoplay != '') {
			$out .= ' autoplay="autoplay"';
		}
		
		if ($loop != '') {
			$out .= ' loop="loop"';
		}
		
		if ($preload != '') {
			$out .= ' preload="' . $preload . '"';
		}
		
		$out .= '>';
		
		if ($srcmp3 != '') {
			$out .= '<source src="' . $srcmp3 . '" type="audio/mpeg" />';
		}
		
		if ($srcogg != '') {
			$out .= '<source src="' . $srcogg . '" type="audio/ogg" />';
		}
		
		if ($srcwebm != '') {
			$out .= '<source src="' . $srcwebm . '" type="audio/webm" />';
		}
		
		$out .= $text . 
		'</audio>';
		
		echo $out . 
			$after_widget . 
        '</div>';
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['srcmp3'] = strip_tags($new_instance['srcmp3']);
        $instance['srcogg'] = strip_tags($new_instance['srcogg']);
		$instance['srcwebm'] = strip_tags($new_instance['srcwebm']);
		$instance['text'] = strip_tags($new_instance['text']);
		$instance['controls'] = strip_tags($new_instance['controls']);
		$instance['autoplay'] = strip_tags($new_instance['autoplay']);
		$instance['loop'] = strip_tags($new_instance['loop']);
		$instance['preload'] = strip_tags($new_instance['preload']);
        $instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$srcmp3 = isset($instance['srcmp3']) ? esc_attr($instance['srcmp3']) : '';
		$srcogg = isset($instance['srcogg']) ? esc_attr($instance['srcogg']) : '';
		$srcwebm = isset($instance['srcwebm']) ? esc_attr($instance['srcwebm']) : '';
		$text = (isset($instance['text']) && $instance['text'] != '') ? esc_attr($instance['text']) : __('Your browser does not support the audio tag.', 'cmsmasters');
		$controls = isset($instance['controls']) ? esc_attr($instance['controls']) : 'controls';
		$autoplay = isset($instance['autoplay']) ? esc_attr($instance['autoplay']) : '';
		$loop = isset($instance['loop']) ? esc_attr($instance['loop']) : '';
		$preload = isset($instance['preload']) ? esc_attr($instance['preload']) : 'none';
        $widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('srcmp3'); ?>"><?php echo __('Audio', 'cmsmasters') . ' .mp3 ' . __('File Format URL', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('srcmp3'); ?>" name="<?php echo $this->get_field_name('srcmp3'); ?>" type="text" value="<?php echo $srcmp3; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('srcogg'); ?>"><?php echo __('Audio', 'cmsmasters') . ' .ogg ' . __('File Format URL', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('srcogg'); ?>" name="<?php echo $this->get_field_name('srcogg'); ?>" type="text" value="<?php echo $srcogg; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('srcwebm'); ?>"><?php echo __('Audio', 'cmsmasters') . ' .webm ' . __('File Format URL', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('srcwebm'); ?>" name="<?php echo $this->get_field_name('srcwebm'); ?>" type="text" value="<?php echo $srcwebm; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Audio Tag Not Support Text', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" type="text" value="<?php echo $text; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('controls'); ?>"><?php _e('Controls', 'cmsmasters'); ?>:<br />
				<select class="widefat" id="<?php echo $this->get_field_id('controls'); ?>" name="<?php echo $this->get_field_name('controls'); ?>">
					<option value="controls"<?php if ($controls == 'controls') { echo ' selected="selected"'; } ?>><?php _e('Enable Controls', 'cmsmasters'); ?></option>
					<option value=""<?php if ($controls == '') { echo ' selected="selected"'; } ?>><?php _e('Disable Controls', 'cmsmasters'); ?></option>
				</select>
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('autoplay'); ?>"><?php _e('Autoplay', 'cmsmasters'); ?>:<br />
				<select class="widefat" id="<?php echo $this->get_field_id('autoplay'); ?>" name="<?php echo $this->get_field_name('autoplay'); ?>">
					<option value=""<?php if ($autoplay == '') { echo ' selected="selected"'; } ?>><?php _e('Disable Autoplay', 'cmsmasters'); ?></option>
					<option value="autoplay"<?php if ($autoplay == 'autoplay') { echo ' selected="selected"'; } ?>><?php _e('Enable Autoplay', 'cmsmasters'); ?></option>
				</select>
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('loop'); ?>"><?php _e('Repeat', 'cmsmasters'); ?>:<br />
				<select class="widefat" id="<?php echo $this->get_field_id('loop'); ?>" name="<?php echo $this->get_field_name('loop'); ?>">
					<option value=""<?php if ($loop == '') { echo ' selected="selected"'; } ?>><?php _e('Disable Repeat', 'cmsmasters'); ?></option>
					<option value="loop"<?php if ($loop == 'loop') { echo ' selected="selected"'; } ?>><?php _e('Enable Repeat', 'cmsmasters'); ?></option>
				</select>
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('preload'); ?>"><?php _e('Preload', 'cmsmasters'); ?>:<br />
				<select class="widefat" id="<?php echo $this->get_field_id('preload'); ?>" name="<?php echo $this->get_field_name('preload'); ?>">
					<option value="none"<?php if ($preload == 'none') { echo ' selected="selected"'; } ?>><?php _e('Not Preload', 'cmsmasters'); ?></option>
					<option value="auto"<?php if ($preload == 'auto') { echo ' selected="selected"'; } ?>><?php _e('Preload Auto', 'cmsmasters'); ?></option>
					<option value="metadata"<?php if ($preload == 'metadata') { echo ' selected="selected"'; } ?>><?php _e('Preload as Metadata', 'cmsmasters'); ?></option>
				</select>
            </label>
        </p>
		<p class="w_col">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters'); ?>:<br /><br />
                <small class="s_red"><?php _e('Only for horizontal sidebars', 'cmsmasters'); ?></small>
                <select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" class="fl">
                    <option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
                    <option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
                    <option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
                </select>
            </label>
		</p>
        <div class="cl"></div>
        <?php
    }
}



/**
 * HTML5 Video Widget Class
 */
class WP_Widget_Custom_HTML5_Video extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_html5_video_entries', 
			'description' => __('Your HTML5 Video', 'cmsmasters') 
		);
		$control_ops = array( 
			'width' => 600 
		);
		
		parent::__construct('custom-html5-video', '&nbsp;' . __('CMSMS - HTML5 Video', 'cmsmasters'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('HTML5 Video', 'cmsmasters') : $instance['title'], $instance, $this->id_base);
        $srcmp4 = isset($instance['srcmp4']) ? $instance['srcmp4'] : '';
        $srcogg = isset($instance['srcogg']) ? $instance['srcogg'] : '';
        $srcwebm = isset($instance['srcwebm']) ? $instance['srcwebm'] : '';
        $poster = isset($instance['poster']) ? $instance['poster'] : '';
        $text = (isset($instance['text']) && $instance['text'] != '') ? $instance['text'] : __('Your browser does not support the video tag.', 'cmsmasters');
        $controls = isset($instance['controls']) ? $instance['controls'] : 'controls';
        $autoplay = isset($instance['autoplay']) ? $instance['autoplay'] : '';
        $loop = isset($instance['loop']) ? $instance['loop'] : '';
        $preload = isset($instance['preload']) ? $instance['preload'] : 'none';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
		echo '<div class="' . $widget_width . '">' . 
			$before_widget;
		
		if ($title) { 
			echo $before_title . $title . $after_title;
		}
		
		$out = '<div class="resizable_block">' . 
			'<video class="fullwidth"';
		
		if ($poster != '') {
			$out .= ' poster="' . $poster . '"';
		}
		
		if ($controls != '') {
			$out .= ' controls="controls"';
		}
		
		if ($autoplay != '') {
			$out .= ' autoplay="autoplay"';
		}
		
		if ($loop != '') {
			$out .= ' loop="loop"';
		}
		
		if ($preload != '') {
			$out .= ' preload="' . $preload . '"';
		}
		
		$out .= '>';
		
		if ($srcmp4 != '') {
			$out .= '<source src="' . $srcmp4 . '" type="video/mp4" />';
		}
		
		if ($srcogg != '') {
			$out .= '<source src="' . $srcogg . '" type="video/ogg" />';
		}
		
		if ($srcwebm != '') {
			$out .= '<source src="' . $srcwebm . '" type="video/webm" />';
		}
		
		$out .= $text . 
			'</video>' . 
		'</div>';
		
		echo $out . 
			$after_widget . 
        '</div>';
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['srcmp4'] = strip_tags($new_instance['srcmp4']);
        $instance['srcogg'] = strip_tags($new_instance['srcogg']);
		$instance['srcwebm'] = strip_tags($new_instance['srcwebm']);
		$instance['poster'] = strip_tags($new_instance['poster']);
		$instance['text'] = strip_tags($new_instance['text']);
		$instance['controls'] = strip_tags($new_instance['controls']);
		$instance['autoplay'] = strip_tags($new_instance['autoplay']);
		$instance['loop'] = strip_tags($new_instance['loop']);
		$instance['preload'] = strip_tags($new_instance['preload']);
        $instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$srcmp4 = isset($instance['srcmp4']) ? esc_attr($instance['srcmp4']) : '';
		$srcogg = isset($instance['srcogg']) ? esc_attr($instance['srcogg']) : '';
		$srcwebm = isset($instance['srcwebm']) ? esc_attr($instance['srcwebm']) : '';
		$poster = isset($instance['poster']) ? esc_attr($instance['poster']) : '';
		$text = (isset($instance['text']) && $instance['text'] != '') ? esc_attr($instance['text']) : __('Your browser does not support the video tag.', 'cmsmasters');
		$controls = isset($instance['controls']) ? esc_attr($instance['controls']) : 'controls';
		$autoplay = isset($instance['autoplay']) ? esc_attr($instance['autoplay']) : '';
		$loop = isset($instance['loop']) ? esc_attr($instance['loop']) : '';
		$preload = isset($instance['preload']) ? esc_attr($instance['preload']) : 'none';
        $widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
        ?>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('srcmp4'); ?>"><?php echo __('Video', 'cmsmasters') . ' .mp4 ' . __('File Format Source', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('srcmp4'); ?>" name="<?php echo $this->get_field_name('srcmp4'); ?>" type="text" value="<?php echo $srcmp4; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('srcogg'); ?>"><?php echo __('Video', 'cmsmasters') . ' .ogg ' . __('File Format Source', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('srcogg'); ?>" name="<?php echo $this->get_field_name('srcogg'); ?>" type="text" value="<?php echo $srcogg; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('srcwebm'); ?>"><?php echo __('Video', 'cmsmasters') . ' .webm ' . __('File Format Source', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('srcwebm'); ?>" name="<?php echo $this->get_field_name('srcwebm'); ?>" type="text" value="<?php echo $srcwebm; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('poster'); ?>"><?php _e('Poster URL', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('poster'); ?>" name="<?php echo $this->get_field_name('poster'); ?>" type="text" value="<?php echo $poster; ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Video Tag Not Support Text', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" type="text" value="<?php echo $text; ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('controls'); ?>"><?php _e('Controls', 'cmsmasters'); ?>:<br />
				<select class="widefat" id="<?php echo $this->get_field_id('controls'); ?>" name="<?php echo $this->get_field_name('controls'); ?>">
					<option value="controls"<?php if ($controls == 'controls') { echo ' selected="selected"'; } ?>><?php _e('Enable Controls', 'cmsmasters'); ?></option>
					<option value=""<?php if ($controls == '') { echo ' selected="selected"'; } ?>><?php _e('Disable Controls', 'cmsmasters'); ?></option>
				</select>
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('autoplay'); ?>"><?php _e('Autoplay', 'cmsmasters'); ?>:<br />
				<select class="widefat" id="<?php echo $this->get_field_id('autoplay'); ?>" name="<?php echo $this->get_field_name('autoplay'); ?>">
					<option value=""<?php if ($autoplay == '') { echo ' selected="selected"'; } ?>><?php _e('Disable Autoplay', 'cmsmasters'); ?></option>
					<option value="autoplay"<?php if ($autoplay == 'autoplay') { echo ' selected="selected"'; } ?>><?php _e('Enable Autoplay', 'cmsmasters'); ?></option>
				</select>
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo $this->get_field_id('loop'); ?>"><?php _e('Repeat', 'cmsmasters'); ?>:<br />
				<select class="widefat" id="<?php echo $this->get_field_id('loop'); ?>" name="<?php echo $this->get_field_name('loop'); ?>">
					<option value=""<?php if ($loop == '') { echo ' selected="selected"'; } ?>><?php _e('Disable Repeat', 'cmsmasters'); ?></option>
					<option value="loop"<?php if ($loop == 'loop') { echo ' selected="selected"'; } ?>><?php _e('Enable Repeat', 'cmsmasters'); ?></option>
				</select>
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo $this->get_field_id('preload'); ?>"><?php _e('Preload', 'cmsmasters'); ?>:<br />
				<select class="widefat" id="<?php echo $this->get_field_id('preload'); ?>" name="<?php echo $this->get_field_name('preload'); ?>">
					<option value="none"<?php if ($preload == 'none') { echo ' selected="selected"'; } ?>><?php _e('Not Preload', 'cmsmasters'); ?></option>
					<option value="auto"<?php if ($preload == 'auto') { echo ' selected="selected"'; } ?>><?php _e('Preload Auto', 'cmsmasters'); ?></option>
					<option value="metadata"<?php if ($preload == 'metadata') { echo ' selected="selected"'; } ?>><?php _e('Preload as Metadata', 'cmsmasters'); ?></option>
				</select>
            </label>
        </p>
		<p class="w_col">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters'); ?>:<br /><br />
                <small class="s_red"><?php _e('Only for horizontal sidebars', 'cmsmasters'); ?></small>
                <select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" class="fl">
                    <option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
                    <option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
                    <option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
                </select>
            </label>
		</p>
        <div class="cl"></div>
        <?php
    }
}



/**
 * Latest Projects Widget Class
 */
class WP_Widget_Custom_Latest_Projects extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_latest_projects_entries', 
			'description' => __('Latest projects from your portfolio', 'cmsmasters') 
		);
		
		parent::__construct('custom-latest-projects', '&nbsp;' . __('CMSMS - Latest Projects', 'cmsmasters'), $widget_ops);
	}
	
    function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Latest Projects', 'cmsmasters') : $instance['title'], $instance, $this->id_base);
		$type = isset($instance['type']) ? $instance['type'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
        $queryArgs = array( 
			'posts_per_page' => $number, 
			'post_status' => 'publish', 
			'ignore_sticky_posts' => 1, 
			'post_type' => 'project' 
		);
		
		if ($type != '') {
            $queryArgs['tax_query'] = array(
                array( 
                    'taxonomy' => 'pj-categs', 
                    'field' => 'slug', 
                    'terms' => array($type) 
                )
            );
		}
		
        $lp = new WP_Query($queryArgs);
		
        if ($lp->have_posts()) { 
			echo '<div class="' . $widget_width . '">' . 
				$before_widget . 
				'<script type="text/javascript">' . 
					'jQuery(document).ready(function () { ' . 
						"jQuery('#" . $args['widget_id'] . " .widget_custom_projects_entries_slides').cmsmsResponsiveContentSlider( { " . 
							"sliderWidth : '100%', " . 
							"sliderHeight : 'auto', " . 
							'animationSpeed : 500, ' . 
							"animationEffect : 'slide', " . 
							"animationEasing : 'easeInOutExpo', " . 
							'pauseTime : 7000, ' . 
							'activeSlide : 1, ' . 
							'touchControls : true, ' . 
							'pauseOnHover : false, ' . 
							'arrowNavigation : true, ' . 
							'slidesNavigation : true, ' . 
							'afterSliderLoad : function () { ' . 
								'if ( ' . 
									"jQuery('#bottom a.sidebar_button_inner').hasClass('active') && " . 
									"jQuery('#bottom').height() !== 0 " . 
								') { ' . 
									"jQuery(window).trigger('resize');" . 
								'} ' . 
							'}, ' . 
							'afterSlideChange : function () { ' . 
								'if ( ' . 
									"jQuery('#bottom a.sidebar_button_inner').hasClass('active') && " . 
									"jQuery('#bottom').height() !== 0 " . 
								') { ' . 
									"jQuery(window).trigger('resize');" . 
								'} ' . 
							'} ' . 
						'} ); ' . 
					'} ); ' . 
				'</script>' . 
				'<div class="widget_custom_projects_entries_container">';
			
			if ($title) { 
				echo $before_title . $title . $after_title;
			}
			
			echo '<ul class="widget_custom_projects_entries_slides responsiveContentSlider">';
			
            while ($lp->have_posts()) : $lp->the_post();
				$pj_format = get_post_meta(get_the_ID(), 'pt_format', true);
				
				$img_number_list = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_project_images', true))));
				
				echo '<li>';
				
				if ($pj_format == 'video') {
					echo '<figure>' . 
						'<img src="' . get_template_directory_uri() . '/images/PF-XL-video.jpg' . '" alt="' . cmsms_title(get_the_ID(), false) . '" title="' . cmsms_title(get_the_ID(), false) . '" class="fullwidth" />' . 
					'</figure>';
				} else {
					if (has_post_thumbnail()) {
						echo '<figure>' . 
							get_the_post_thumbnail(get_the_ID(), 'full-thumb', array( 
								'class' => 'fullwidth', 
								'alt' => cmsms_title(get_the_ID(), false), 
								'title' => cmsms_title(get_the_ID(), false), 
								'style' => 'width:100%; height:auto;' 
							)) . 
						'</figure>';
					} elseif (sizeof($img_number_list) > 0) {
						echo '<figure>' . 
							wp_get_attachment_image($img_number_list[0], 'full-thumb', false, array( 
								'class' => 'fullwidth', 
								'alt' => cmsms_title(get_the_ID(), false), 
								'title' => cmsms_title(get_the_ID(), false), 
								'style' => 'width:100%; height:auto;' 
							)) . 
						'</figure>';
					} else {
						echo '<figure>' . 
							'<img src="' . get_template_directory_uri() . '/images/PF-XL-gallery.jpg' . '" alt="' . cmsms_title(get_the_ID(), false) . '" title="' . cmsms_title(get_the_ID(), false) . '" class="fullwidth" />' . 
						'</figure>';
					}
				}
				
				echo '<h5 class="project_title">' .	
					'<a href="' . get_permalink() . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . 
				'</h5>' . 
				'<div class="entry-content">';
				
				theme_excerpt(20);
				
				echo '</div>' . 
                '</li>';
			endwhile;
			
			echo '</ul>' . 
				'</div>' . 
				$after_widget . 
			'</div>';
        }
		
		wp_reset_postdata();
		wp_reset_query();
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['type'] = $new_instance['type'];
        $instance['number'] = absint($new_instance['number']);
        $instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $type = isset($instance['type']) ? esc_attr($instance['type']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
        $widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('type'); ?>"><?php _e('Show Only from Projects Type', 'cmsmasters'); ?>:<br />
                <select id="<?php echo $this->get_field_id('type'); ?>" name="<?php echo $this->get_field_name('type'); ?>" class="widefat">
                    <option value=""><?php _e('Show all projects', 'cmsmasters'); ?>&nbsp;</option>
				<?php 
					$pj_categs = get_terms('pj-categs', 'orderby=name&hide_empty=0');
					
					if (sizeof($pj_categs) > 0) {
						foreach($pj_categs as $pj_categ) {
							if ($type == $pj_categ->slug) {
								echo '<option value="' . $pj_categ->slug . '" selected="selected">' . $pj_categ->name . '&nbsp;</option>';
							} else {
								echo '<option value="' . $pj_categ->slug . '">' . $pj_categ->name . '&nbsp;</option>';
							}
						}
					}
				?>
                </select>
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e("Enter the number of latest projects you'd like to display", 'cmsmasters'); ?>:<br /><br />
                <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" />
                <small class="s_red"><?php _e('default is', 'cmsmasters'); ?> 3</small><br />
            </label>
        </p>
		<p class="w_col">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters'); ?>:<br /><br />
                <small class="s_red"><?php _e('Only for horizontal sidebars', 'cmsmasters'); ?></small>
                <select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" class="fl">
                    <option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
                    <option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
                    <option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
                </select>
            </label>
		</p>
        <div class="cl"></div>
        <?php
    }
}



/**
 * Popular Projects Widget Class
 */
class WP_Widget_Custom_Popular_Projects extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_popular_projects_entries', 
			'description' => __('Popular projects from your portfolio', 'cmsmasters') 
		);
		
		parent::__construct('custom-popular-projects', '&nbsp;' . __('CMSMS - Popular Projects', 'cmsmasters'), $widget_ops);
	}
	
    function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Popular Projects', 'cmsmasters') : $instance['title'], $instance, $this->id_base);
		$type = isset($instance['type']) ? $instance['type'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
        $queryArgs = array( 
			'posts_per_page' => $number, 
			'post_status' => 'publish', 
			'ignore_sticky_posts' => 1, 
			'post_type' => 'project', 
			'order' => 'DESC', 
			'orderby' => 'meta_value', 
			'meta_key' => 'cmsms_likes' 
		);
		
		if ($type != '') {
            $queryArgs['tax_query'] = array(
                array( 
                    'taxonomy' => 'pj-categs', 
                    'field' => 'slug', 
                    'terms' => array($type) 
                )
            );
		}
		
        $pp = new WP_Query($queryArgs);
		
        if ($pp->have_posts()) { 
			echo '<div class="' . $widget_width . '">' . 
				$before_widget . 
				'<script type="text/javascript">' . 
					'jQuery(document).ready(function () { ' . 
						"jQuery('#" . $args['widget_id'] . " .widget_custom_projects_entries_slides').cmsmsResponsiveContentSlider( { " . 
							"sliderWidth : '100%', " . 
							"sliderHeight : 'auto', " . 
							'animationSpeed : 500, ' . 
							"animationEffect : 'slide', " . 
							"animationEasing : 'easeInOutExpo', " . 
							'pauseTime : 7000, ' . 
							'activeSlide : 1, ' . 
							'touchControls : true, ' . 
							'pauseOnHover : false, ' . 
							'arrowNavigation : true, ' . 
							'slidesNavigation : true, ' . 
							'afterSliderLoad : function () { ' . 
								'if ( ' . 
									"jQuery('#bottom a.sidebar_button_inner').hasClass('active') && " . 
									"jQuery('#bottom').height() !== 0 " . 
								') { ' . 
									"jQuery(window).trigger('resize');" . 
								'} ' . 
							'}, ' . 
							'afterSlideChange : function () { ' . 
								'if ( ' . 
									"jQuery('#bottom a.sidebar_button_inner').hasClass('active') && " . 
									"jQuery('#bottom').height() !== 0 " . 
								') { ' . 
									"jQuery(window).trigger('resize');" . 
								'} ' . 
							'} ' . 
						'} ); ' . 
					'} ); ' . 
				'</script>' . 
				'<div class="widget_custom_projects_entries_container">';
			
			if ($title) { 
				echo $before_title . $title . $after_title;
			}
			
			echo '<ul class="widget_custom_projects_entries_slides responsiveContentSlider">';
			
            while ($pp->have_posts()) : $pp->the_post();
				$pj_format = get_post_meta(get_the_ID(), 'pt_format', true);
				
				$img_number_list = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_project_images', true))));
				
				echo '<li>';
				
				if ($pj_format == 'video') {
					echo '<figure>' . 
						'<img src="' . get_template_directory_uri() . '/images/PF-XL-video.jpg' . '" alt="' . cmsms_title(get_the_ID(), false) . '" title="' . cmsms_title(get_the_ID(), false) . '" class="fullwidth" />' . 
					'</figure>';
				} else {
					if (has_post_thumbnail()) {
						echo '<figure>' . 
							get_the_post_thumbnail(get_the_ID(), 'full-thumb', array( 
								'class' => 'fullwidth', 
								'alt' => cmsms_title(get_the_ID(), false), 
								'title' => cmsms_title(get_the_ID(), false), 
								'style' => 'width:100%; height:auto;' 
							)) . 
						'</figure>';
					} elseif (sizeof($img_number_list) > 0) {
						echo '<figure>' . 
							wp_get_attachment_image($img_number_list[0], 'full-thumb', false, array( 
								'class' => 'fullwidth', 
								'alt' => cmsms_title(get_the_ID(), false), 
								'title' => cmsms_title(get_the_ID(), false), 
								'style' => 'width:100%; height:auto;' 
							)) . 
						'</figure>';
					} else {
						echo '<figure>' . 
							'<img src="' . get_template_directory_uri() . '/images/PF-XL-gallery.jpg' . '" alt="' . cmsms_title(get_the_ID(), false) . '" title="' . cmsms_title(get_the_ID(), false) . '" class="fullwidth" />' . 
						'</figure>';
					}
				}
				
				echo '<h5 class="project_title">' .	
					'<a href="' . get_permalink() . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . 
				'</h5>' . 
				'<div class="entry-content">';
				
				theme_excerpt(20);
				
				echo '</div>' . 
                '</li>';
			endwhile;
			
			echo '</ul>' . 
				'</div>' . 
				$after_widget . 
			'</div>';
        }
		
		wp_reset_postdata();
		wp_reset_query();
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['type'] = $new_instance['type'];
        $instance['number'] = absint($new_instance['number']);
        $instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $type = isset($instance['type']) ? esc_attr($instance['type']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
        $widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('type'); ?>"><?php _e('Show Only from Projects Type', 'cmsmasters'); ?>:<br />
                <select id="<?php echo $this->get_field_id('type'); ?>" name="<?php echo $this->get_field_name('type'); ?>" class="widefat">
                    <option value=""><?php _e('Show all projects', 'cmsmasters'); ?>&nbsp;</option>
				<?php 
					$pj_categs = get_terms('pj-categs', 'orderby=name&hide_empty=0');
					
					if (sizeof($pj_categs) > 0) {
						foreach($pj_categs as $pj_categ) {
							if ($type == $pj_categ->slug) {
								echo '<option value="' . $pj_categ->slug . '" selected="selected">' . $pj_categ->name . '&nbsp;</option>';
							} else {
								echo '<option value="' . $pj_categ->slug . '">' . $pj_categ->name . '&nbsp;</option>';
							}
						}
					}
				?>
                </select>
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e("Enter the number of popular projects you'd like to display", 'cmsmasters'); ?>:<br /><br />
                <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" />
                <small class="s_red"><?php _e('default is', 'cmsmasters'); ?> 3</small><br />
            </label>
        </p>
		<p class="w_col">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters'); ?>:<br /><br />
                <small class="s_red"><?php _e('Only for horizontal sidebars', 'cmsmasters'); ?></small>
                <select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" class="fl">
                    <option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
                    <option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
                    <option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
                </select>
            </label>
		</p>
        <div class="cl"></div>
        <?php
    }
}



/**
 * Posts Tabs Widget Class
 */
class WP_Widget_Custom_Posts_Tabs extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_posts_tabs_entries', 
			'description' => __('Latest, popular posts & recent comments', 'cmsmasters') 
		);
		
		parent::__construct('custom-posts-tabs', '&nbsp;' . __('CMSMS - Posts Tabs', 'cmsmasters'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
		$latest = isset($instance['latest']) ? $instance['latest'] : true;
		$popular = isset($instance['popular']) ? $instance['popular'] : true;
		$recent = isset($instance['recent']) ? $instance['recent'] : true;
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
		echo '<div class="' . $widget_width . '">' . 
			$before_widget;
		
		if ($title) { 
			echo $before_title . $title . $after_title;
		}
		
		echo '<div class="tab lpr">' . 
				'<ul class="tabs">';
		
		if ($latest) {
			echo '<li>' . 
				'<a href="#"><span>' . __('Latest', 'cmsmasters') . '</span></a>' . 
			'</li>'; 
		}
		
		if ($popular) {
			echo '<li>' . 
				'<a href="#"><span>' . __('Popular', 'cmsmasters') . '</span></a>' . 
			'</li>'; 
		}
		
		if ($recent) {
			echo '<li>' . 
				'<a href="#"><span>' . __('Comments', 'cmsmasters') . '</span></a>' . 
			'</li>'; 
		}
		
		if (!$latest && !$popular && !$recent) {
			echo '<li>' . 
				'<a href="#"><span>' . __('Latest', 'cmsmasters') . '</span></a>' . 
			'</li>'; 
		}
		
		echo '</ul>' . 
		'<div class="tab_content">';
		
		if ($latest) {
			$l = new WP_Query(array( 
				'posts_per_page' => $number, 
				'post_status' => 'publish', 
				'ignore_sticky_posts' => 1, 
				'post_type' => 'post' 
			));
			
			if ($l->have_posts()) { 
				echo '<div class="tabs_tab tab_latest">' . 
					'<ul>';
				
				while ($l->have_posts()) : $l->the_post();
					$pt_format = get_post_format();
					
					$attachments =& get_children(array(
						'post_type' => 'attachment', 
						'post_mime_type' => 'image', 
						'post_parent' => get_the_ID(), 
						'orderby' => 'menu_order', 
						'order' => 'ASC' 
					));
					
					$post_link_text = get_post_meta(get_the_ID(), 'cmsms_post_link_text', true);
					$post_link_link = get_post_meta(get_the_ID(), 'cmsms_post_link_link', true);
					
					echo '<li>';
					
					if ($pt_format == 'image' || $pt_format == 'gallery') {
						echo '<div class="alignleft">';
						
						if (has_post_thumbnail()) {
							cmsms_thumb(get_the_ID(), array(50, 50), true, false, false, false, false, true, false);
						} elseif (!has_post_thumbnail() && sizeof($attachments) > 0) {
							if (isset($att_counter)) {
								unset($att_counter);
							}
							
							foreach ($attachments as $attachment) { 
								if (!isset($att_counter) && $att_counter = true) { 
									cmsms_thumb(get_the_ID(), array(50, 50), true, false, false, false, false, true, $attachment->ID);
								}
							}
						} else {
							echo '<figure>' . 
								'<a href="' . get_permalink() . '"' . ' title="' . cmsms_title(get_the_ID(), false) . '">' . 
									'<img src="' . get_template_directory_uri() . '/img/PF-' . (($pt_format == 'image') ? 'placeholder' : $pt_format) . '.jpg' . '" alt="' . cmsms_title(get_the_ID(), false) . '" title="' . cmsms_title(get_the_ID(), false) . '" style="width:50px; height:50px;" />' . 
								'</a>' . 
							'</figure>';
						}
						
						echo '</div>';
					} else {
						echo '<div class="alignleft">';
						
						if (has_post_thumbnail() && $pt_format != 'video') {
							cmsms_thumb(get_the_ID(), array(50, 50), true, false, false, false, false, true, false);
						} else {
							echo '<figure>' . 
								'<a href="' . get_permalink() . '"' . ' title="' . cmsms_title(get_the_ID(), false) . '">' . 
									'<img src="' . get_template_directory_uri() . '/img/PF-' . (($pt_format == '') ? 'placeholder' : $pt_format) . '.jpg' . '" alt="' . cmsms_title(get_the_ID(), false) . '" title="' . cmsms_title(get_the_ID(), false) . '" style="width:50px; height:50px;" />' . 
								'</a>' . 
							'</figure>';
						}
						
						echo '</div>';
					}
					
					echo '<div class="ovh">';
					
					if ($pt_format != 'aside' && $pt_format != 'link' && $pt_format != 'quote') {
						echo '<a href="' . get_permalink() . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . 
						'<br />' . 
						'<small>' . 
							'<abbr class="published" title="' . get_the_time('d-m-Y') . '">' . human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'cmsmasters') . '</abbr>' . 
						'</small>';
					} elseif ($pt_format == 'link') {
						echo '<a href="' . $post_link_link . '" title="' . $post_link_text . '">' . $post_link_text . '</a>' . 
						'<br />' . 
						'<small>' . 
							'<abbr class="published" title="' . get_the_time('d-m-Y') . '">' . human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'cmsmasters') . '</abbr>' . 
						'</small>';
					} elseif ($pt_format == 'aside') {
						echo '<div class="entry-content">';
						
						theme_excerpt(10);
						
						echo '</div>' . 
						'<small>' . 
							'<abbr class="published" title="' . get_the_time('d-m-Y') . '">' . human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'cmsmasters') . '</abbr>' . 
						'</small>';
					} elseif ($pt_format == 'quote') {
						echo '<div class="entry-content">';
						
						theme_excerpt(10);
						
						echo '</div>' . 
						'<small>' . 
							'<abbr class="published" title="' . get_the_time('d-m-Y') . '">' . human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'cmsmasters') . '</abbr>' . 
						'</small>';
					}
					
					echo '</div>' . 
						'<div class="cl"></div>' . 
					'</li>';
				endwhile;
				
				echo '</ul>' . 
				'</div>';
			}
			
			wp_reset_postdata();
			wp_reset_query();
		}
		
		if ($popular) {
			$p = new WP_Query(array( 
				'posts_per_page' => $number, 
				'post_status' => 'publish', 
				'ignore_sticky_posts' => 1, 
				'post_type' => 'post', 
				'order' => 'DESC', 
				'orderby' => 'meta_value', 
				'meta_key' => 'cmsms_likes' 
			));
			
			if ($p->have_posts()) { 
				echo '<div class="tabs_tab tab_popular">' . 
					'<ul>';
				
				while ($p->have_posts()) : $p->the_post();
					$pt_format = get_post_format();
					
					$attachments =& get_children(array(
						'post_type' => 'attachment', 
						'post_mime_type' => 'image', 
						'post_parent' => get_the_ID(), 
						'orderby' => 'menu_order', 
						'order' => 'ASC' 
					));
					
					$post_link_text = get_post_meta(get_the_ID(), 'cmsms_post_link_text', true);
					$post_link_link = get_post_meta(get_the_ID(), 'cmsms_post_link_link', true);
					
					echo '<li>';
					
					if ($pt_format == 'image' || $pt_format == 'gallery') {
						echo '<div class="alignleft">';
						
						if (has_post_thumbnail()) {
							cmsms_thumb(get_the_ID(), array(50, 50), true, false, false, false, false, true, false);
						} elseif (!has_post_thumbnail() && sizeof($attachments) > 0) {
							if (isset($att_counter)) {
								unset($att_counter);
							}
							
							foreach ($attachments as $attachment) { 
								if (!isset($att_counter) && $att_counter = true) { 
									cmsms_thumb(get_the_ID(), array(50, 50), true, false, false, false, false, true, $attachment->ID);
								}
							}
						} else {
							echo '<figure>' . 
								'<a href="' . get_permalink() . '"' . ' title="' . cmsms_title(get_the_ID(), false) . '">' . 
									'<img src="' . get_template_directory_uri() . '/img/PF-' . (($pt_format == 'image') ? 'placeholder' : $pt_format) . '.jpg' . '" alt="' . cmsms_title(get_the_ID(), false) . '" title="' . cmsms_title(get_the_ID(), false) . '" style="width:50px; height:50px;" />' . 
								'</a>' . 
							'</figure>';
						}
						
						echo '</div>';
					} else {
						echo '<div class="alignleft">';
						
						if (has_post_thumbnail() && $pt_format != 'video') {
							cmsms_thumb(get_the_ID(), array(50, 50), true, false, false, false, false, true, false);
						} else {
							echo '<figure>' . 
								'<a href="' . get_permalink() . '"' . ' title="' . cmsms_title(get_the_ID(), false) . '">' . 
									'<img src="' . get_template_directory_uri() . '/img/PF-' . (($pt_format == '') ? 'placeholder' : $pt_format) . '.jpg' . '" alt="' . cmsms_title(get_the_ID(), false) . '" title="' . cmsms_title(get_the_ID(), false) . '" style="width:50px; height:50px;" />' . 
								'</a>' . 
							'</figure>';
						}
						
						echo '</div>';
					}
					
					echo '<div class="ovh">';
					
					if ($pt_format != 'aside' && $pt_format != 'link' && $pt_format != 'quote') {
						echo '<a href="' . get_permalink() . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . 
						'<br />' . 
						'<small>' . 
							'<abbr class="published" title="' . get_the_time('d-m-Y') . '">' . human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'cmsmasters') . '</abbr>' . 
						'</small>';
					} elseif ($pt_format == 'link') {
						echo '<a href="' . $post_link_link . '" title="' . $post_link_text . '">' . $post_link_text . '</a>' . 
						'<br />' . 
						'<small>' . 
							'<abbr class="published" title="' . get_the_time('d-m-Y') . '">' . human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'cmsmasters') . '</abbr>' . 
						'</small>';
					} elseif ($pt_format == 'aside') {
						echo '<div class="entry-content">';
						
						theme_excerpt(10);
						
						echo '</div>' . 
						'<small>' . 
							'<abbr class="published" title="' . get_the_time('d-m-Y') . '">' . human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'cmsmasters') . '</abbr>' . 
						'</small>';
					} elseif ($pt_format == 'quote') {
						echo '<div class="entry-content">';
						
						theme_excerpt(10);
						
						echo '</div>' . 
						'<small>' . 
							'<abbr class="published" title="' . get_the_time('d-m-Y') . '">' . human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'cmsmasters') . '</abbr>' . 
						'</small>';
					}
					
					echo '</div>' . 
						'<div class="cl"></div>' . 
					'</li>';
				endwhile;
				
				echo '</ul>' . 
				'</div>';
			}
			
			wp_reset_postdata();
			wp_reset_query();
		}
		
		if ($recent) {
			$rcomments = get_comments(array( 
				'number' => $number, 
				'post_type' => 'post', 
				'status' => 'approve' 
			));
			
			if ($rcomments) { 
				echo '<div class="tabs_tab tab_comments">' . 
					'<ul>';
				
				foreach ($rcomments as $comment) {
					$comment_post_ID = $comment->comment_post_ID;
					$comment_author = $comment->comment_author;
					$comment_author_url = $comment->comment_author_url;
					$comment_date = mysql2date('U', $comment->comment_date, false);
					$comment_content = $comment->comment_content;
					$comment_array = explode(' ', $comment_content);
					
					if (sizeof($comment_array) > 10) {
						$new_comment_content = '';
						
						for ($i = 0; $i < 10; $i++) {
							$new_comment_content .= $comment_array[$i] . ' ';
						}
						
						$new_comment_content = trim($new_comment_content) . '...';
					} else {
						$new_comment_content = $comment_content;
					}
					
					echo '<li>' . 
						(($comment_author_url != '') ? '<a href="' . $comment_author_url . '" title="' . $comment_author_url . '" target="_blank">' : '') . $comment_author . (($comment_author_url != '') ? '</a>' : '') . 
						' <span class="color_2">' . __('on', 'cmsmasters') . '</span> <a href="' . get_permalink($comment_post_ID) . '#comments" rel="bookmark">' . cmsms_title($comment_post_ID, false) . '</a>' . 
						'<small>' . 
							'<abbr class="published" title="' . get_the_time('d-m-Y') . '">' . human_time_diff($comment_date, current_time('timestamp')) . ' ' . __('ago', 'cmsmasters') . '</abbr>' . 
						'</small>' . 
						'<p>' . $new_comment_content . '</p>' . 
					'</li>';
				}
				
				echo '</ul>' . 
				'</div>';
			}
		}
		
		echo '</div>' . 
			'</div>' .
			$after_widget . 
		'</div>';
	}
	
	function update($new_instance, $old_instance) {
		$new_instance = (array) $new_instance;
		
		$instance = array( 
			'latest' => 0, 
			'popular' => 0, 
			'recent' => 0 
		);
		
		foreach ($instance as $field => $val) {
			if (isset($new_instance[$field])) {
				$instance[$field] = 1;
			}
		}
		
		if ($new_instance['latest'] == '' && $instance['popular'] == '' && $instance['recent'] == '') {
			$instance['latest'] = 1;
		}
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = absint($new_instance['number']);
        $instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$instance = wp_parse_args((array) $instance, array( 
			'latest' => true, 
			'popular' => true, 
			'recent' => true 
		) );
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
        $widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label>
        </p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['latest'], true); ?> id="<?php echo $this->get_field_id('latest'); ?>" name="<?php echo $this->get_field_name('latest'); ?>" /> 
			<label for="<?php echo $this->get_field_id('latest'); ?>"><?php _e('Latest Posts', 'cmsmasters'); ?></label>
		</p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['popular'], true); ?> id="<?php echo $this->get_field_id('popular'); ?>" name="<?php echo $this->get_field_name('popular'); ?>" /> 
			<label for="<?php echo $this->get_field_id('popular'); ?>"><?php _e('Popular Posts', 'cmsmasters'); ?></label>
		</p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['recent'], true); ?> id="<?php echo $this->get_field_id('recent'); ?>" name="<?php echo $this->get_field_name('recent'); ?>" /> 
			<label for="<?php echo $this->get_field_id('recent'); ?>"><?php _e('Recent Comments', 'cmsmasters'); ?></label>
		</p>
        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e("Enter the number of recent comments, popular and latest posts you'd like to display", 'cmsmasters'); ?>:<br /><br />
                <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" />
                <small class="s_red"><?php _e('default is', 'cmsmasters'); ?> 3</small><br />
            </label>
        </p>
		<p class="w_col">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters'); ?>:<br /><br />
                <small class="s_red"><?php _e('Only for horizontal sidebars', 'cmsmasters'); ?></small>
                <select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" class="fl">
                    <option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
                    <option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
                    <option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
                </select>
            </label>
		</p>
        <div class="cl"></div>
        <?php
    }
}



/**
 * Recent Testimonials Widget Class
 */
class WP_Widget_Custom_Recent_Testimonials extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_recent_testimonials_entries', 
			'description' => __('Recent testimonials from your site', 'cmsmasters') 
		);
		
		parent::__construct('custom-recent-testimonials', '&nbsp;' . __('CMSMS - Recent Testimonials', 'cmsmasters'), $widget_ops);
	}
	
    function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Testimonials', 'cmsmasters') : $instance['title'], $instance, $this->id_base);
		$category = isset($instance['category']) ? $instance['category'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
        $queryArgs = array( 
			'posts_per_page' => $number, 
			'post_status' => 'publish', 
			'ignore_sticky_posts' => 1, 
			'post_type' => 'testimonial' 
		);
		
		if ($category != '') {
            $queryArgs['tax_query'] = array(
                array( 
                    'taxonomy' => 'tl-categs', 
                    'field' => 'slug', 
                    'terms' => array($category)
                )
            );
		}
		
        $lt = new WP_Query($queryArgs);
		
        if ($lt->have_posts()) { 
			echo '<div class="' . $widget_width . '">' . 
				$before_widget . 
				'<script type="text/javascript">' . 
					'jQuery(document).ready(function () { ' . 
						"jQuery('#" . $args['widget_id'] . " .widget_custom_projects_entries_slides').cmsmsResponsiveContentSlider( { " . 
							"sliderWidth : '100%', " . 
							"sliderHeight : 'auto', " . 
							'animationSpeed : 500, ' . 
							"animationEffect : 'slide', " . 
							"animationEasing : 'easeInOutExpo', " . 
							'pauseTime : 7000, ' . 
							'activeSlide : 1, ' . 
							'touchControls : true, ' . 
							'pauseOnHover : false, ' . 
							'arrowNavigation : true, ' . 
							'slidesNavigation : true, ' . 
							'afterSliderLoad : function () { ' . 
								'if ( ' . 
									"jQuery('#bottom a.sidebar_button_inner').hasClass('active') && " . 
									"jQuery('#bottom').height() !== 0 " . 
								') { ' . 
									"jQuery(window).trigger('resize');" . 
								'} ' . 
							'}, ' . 
							'afterSlideChange : function () { ' . 
								'if ( ' . 
									"jQuery('#bottom a.sidebar_button_inner').hasClass('active') && " . 
									"jQuery('#bottom').height() !== 0 " . 
								') { ' . 
									"jQuery(window).trigger('resize');" . 
								'} ' . 
							'} ' . 
						'} ); ' . 
					'} ); ' . 
				'</script>' . 
				'<div class="widget_custom_projects_entries_container">';
			
			if ($title) { 
				echo $before_title . $title . $after_title;
			}
			
			echo '<ul class="widget_custom_projects_entries_slides responsiveContentSlider">';
			
            while ($lt->have_posts()) : $lt->the_post();
				$pj_format = get_post_meta(get_the_ID(), 'pt_format', true);
				
				$img_number_list = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_project_images', true))));
				
				echo '<li>' . 
				'<div class="tl-content_wrap">' . 
					'<div class="tl-content">';
				
					theme_excerpt(20);
				
				echo '</div>' . 
				'</div>';
				
				$cmsms_testimonial_author = get_post_meta(get_the_ID(), 'cmsms_testimonial_author', true);
				$cmsms_testimonial_author_link = get_post_meta(get_the_ID(), 'cmsms_testimonial_author_link', true);
				
				if ($cmsms_testimonial_author != '' && $cmsms_testimonial_author_link != '') {
					echo '<a target="_blank" href="' . $cmsms_testimonial_author_link . '" class="tl_author">' . $cmsms_testimonial_author . '</a>' . "\n";
				} elseif ($cmsms_testimonial_author != '' && $cmsms_testimonial_author_link == '') {
					echo '<p class="tl_author">' . $cmsms_testimonial_author . '</p>' . "\n";
				}
				$cmsms_testimonial_company = get_post_meta(get_the_ID(), 'cmsms_testimonial_company', true);
				if ($cmsms_testimonial_company != '') {
					echo '<p class="tl_company">' . $cmsms_testimonial_company . '</p>';
				}
				 
                echo '</li>';
			endwhile;
			
			echo '</ul>' . 
				'</div>' . 
				$after_widget . 
			'</div>';
        }
		
		wp_reset_postdata();
		wp_reset_query();
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['category'] = $new_instance['category'];
        $instance['number'] = absint($new_instance['number']);
        $instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $category = isset($instance['category']) ? esc_attr($instance['category']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
        $widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Show Only from Testimonials Category', 'cmsmasters'); ?>:<br />
                <select id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" class="widefat">
                    <option value=""><?php _e('Show all testimonials', 'cmsmasters'); ?>&nbsp;</option>
				<?php 
					$tl_categs = get_terms('tl-categs', 'orderby=name&hide_empty=0');
					
					if (sizeof($tl_categs) > 0) {
						foreach($tl_categs as $tl_categ) {
							if ($category == $tl_categ->slug) {
								echo '<option value="' . $tl_categ->slug . '" selected="selected">' . $tl_categ->name . '&nbsp;</option>';
							} else {
								echo '<option value="' . $tl_categ->slug . '">' . $tl_categ->name . '&nbsp;</option>';
							}
						}
					}
				?>
                </select>
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e("Enter the number of latest testimonials you'd like to display", 'cmsmasters'); ?>:<br /><br />
                <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" />
                <small class="s_red"><?php _e('default is', 'cmsmasters'); ?> 3</small><br />
            </label>
        </p>
		<p class="w_col">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters'); ?>:<br /><br />
                <small class="s_red"><?php _e('Only for horizontal sidebars', 'cmsmasters'); ?></small>
                <select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" class="fl">
                    <option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
                    <option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
                    <option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
                </select>
            </label>
		</p>
        <div class="cl"></div>
        <?php
    }
}



/**
 * Twitter Widget Class
 */
class WP_Widget_Custom_Twitter extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_custom_twitter_entries', 
			'description' => __('Your Twitter account latest tweets', 'cmsmasters') 
		);
		
		parent::__construct('custom-twitter', '&nbsp;' . __('CMSMS - Twitter', 'cmsmasters'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Twitter', 'cmsmasters') : $instance['title'], $instance, $this->id_base);
		$user = isset($instance['user']) ? $instance['user'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
        $widget_width = isset($instance['widget_width']) ? $instance['widget_width'] : 'one_first';
		
		$uid = uniqid();
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 20) {
            $number = 20;
        }
		
		echo '<div class="' . $widget_width . '">' . 
			$before_widget;
?>
		<script type="text/javascript">
			jQuery(document).ready(function () { 
				jQuery('#<?php echo $args['widget_id']; ?>_tweets').tweet( { 
					modpath : '<?php echo get_template_directory_uri(); ?>/framework/class/load_tweets.php', 
					username : '<?php echo $user; ?>', 
					count : <?php echo $number; ?>, 
					loading_text : '<?php _e('loading...', 'cmsmasters'); ?>', 
					template : '{avatar}{join}{text}{time}' 
				} ); 
			} );
		</script>
<?php 
		if ($title) { 
			echo $before_title . $title . $after_title;
		}
		
		echo '<div id="' . $args['widget_id'] . '_tweets"></div>' . 
			$after_widget . 
		'</div>';
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['user'] = strip_tags($new_instance['user']);
        $instance['number'] = absint($new_instance['number']);
        $instance['widget_width'] = $new_instance['widget_width'];
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $user = isset($instance['user']) ? esc_attr($instance['user']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
        $widget_width = (isset($instance['widget_width']) && $instance['widget_width'] != '') ? $instance['widget_width'] : 'one_first';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('user'); ?>"><?php _e('Twitter Username', 'cmsmasters'); ?>:<br />
                <input class="widefat" id="<?php echo $this->get_field_id('user'); ?>" name="<?php echo $this->get_field_name('user'); ?>" type="text" value="<?php echo $user; ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e("Enter the number of latest tweets you'd like to display", 'cmsmasters'); ?>:<br /><br />
                <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" />
                <small class="s_red"><?php _e('default is', 'cmsmasters'); ?> 3</small><br />
            </label>
        </p>
		<p class="w_col">
			<label for="<?php echo $this->get_field_id('widget_width'); ?>">
				<?php _e('Choose the width of widget', 'cmsmasters'); ?>:<br /><br />
                <small class="s_red"><?php _e('Only for horizontal sidebars', 'cmsmasters'); ?></small>
                <select id="<?php echo $this->get_field_id('widget_width'); ?>" name="<?php echo $this->get_field_name('widget_width'); ?>" class="fl">
                    <option <?php if ($widget_width == 'one_first') { echo 'selected="selected" '; } ?>value="one_first">-- 1/1 --&nbsp;</option>
                    <option <?php if ($widget_width == 'three_fourth') { echo 'selected="selected" '; } ?>value="three_fourth">-- 3/4 --&nbsp;</option>
                    <option <?php if ($widget_width == 'two_third') { echo 'selected="selected" '; } ?>value="two_third">-- 2/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_half') { echo 'selected="selected" '; } ?>value="one_half">-- 1/2 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_third') { echo 'selected="selected" '; } ?>value="one_third">-- 1/3 --&nbsp;</option>
                    <option <?php if ($widget_width == 'one_fourth') { echo 'selected="selected" '; } ?>value="one_fourth">-- 1/4 --&nbsp;</option>
                </select>
            </label>
		</p>
        <div class="cl"></div>
        <?php
    }
}



function wp_custom_widgets_init() {
    if (!is_blog_installed()) {
        return;
    }
    
    register_widget('WP_Widget_Custom_Advertisement');
    register_widget('WP_Widget_Custom_Contact_Info');
    register_widget('WP_Widget_Custom_Divider');
    register_widget('WP_Widget_Custom_Video');
    register_widget('WP_Widget_Custom_Facebook');
    register_widget('WP_Widget_Custom_Featured');
    register_widget('WP_Widget_Custom_Flickr');
    register_widget('WP_Widget_Custom_HTML5_Audio');
    register_widget('WP_Widget_Custom_HTML5_Video');
    register_widget('WP_Widget_Custom_Latest_Projects');
    register_widget('WP_Widget_Custom_Popular_Projects');
    register_widget('WP_Widget_Custom_Posts_Tabs');
    register_widget('WP_Widget_Custom_Recent_Testimonials');
    register_widget('WP_Widget_Custom_Twitter');
    
    do_action('widgets_init');
}

add_action('init', 'wp_custom_widgets_init', 1);

