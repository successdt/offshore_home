<?php
/**
 * @package Yahoo status and Skype status
 * @version 1.0
 */
/*
Plugin Name: Yahoo and Skype status widget
Plugin URI: http://blog.casanova.vn/wordpress-yahoo-skype-status-widget-plugin/
Description: <strong>Display Yahoo or Skype status</strong> on the web. After active this plugin please goto <strong>Appearance</strong> --> <strong>Widgets</strong> --> drang <strong>Yahoo and Skype status</strong> to your sidebar. If you have trouble? Plase goto <a href="http://blog.casanova.vn/wordpress-yahoo-skype-status-widget-plugin/" target="_blank">http://blog.casanova.vn/wordpress-yahoo-skype-status-widget-plugin/</a>
Author: Nguyen Duc Manh
Version: 1.0
Author URI: http://casanova.vn
*/

class Yahoo_Skype_status extends WP_Widget {
	public  $_number = 10;
	function Yahoo_Skype_status() {
		parent::WP_Widget(false, $name='Yahoo and Skype status',array( 'description' =>'Display Yahoo or skype status on the web by Nguyen Duc Manh'));
	}
	
	function widget($args, $instance)
	{
		extract( $args );		
		
		echo $before_widget;
			echo $before_title .$instance["title"]. $after_title;
			echo "<ul>";
			for($i=1;$i<= $this->_number;$i++){
				if(!empty($instance["nick_".$i])){
					if($instance["nick_type_".$i]=='yahoo')
					{
						if($instance['is_show_name_'.$i])
							echo '<li><a href="ymsgr:sendim?'.$instance["nick_".$i].'"><img border="0" src="http://opi.yahoo.com/online?u='.$instance["nick_".$i].'&t='.$instance["yahoo_status_type_".$i].'" alt="'.$instance["nick_name_".$i].'" /> '.$instance["nick_name_".$i].'</a></li>';
						else
							echo '<li><a href="ymsgr:sendim?'.$instance["nick_".$i].'"><img border="0" src="http://opi.yahoo.com/online?u='.$instance["nick_".$i].'&t='.$instance["yahoo_status_type_".$i].'" alt="'.$instance["nick_name_".$i].'" /></a></li>';	
					}		
					else{
						if($instance['is_show_name_'.$i])
							echo '<li><a href="skype:'.$instance["nick_".$i].'?call" title="Talk with me via Skype "><img src="http://mystatus.skype.com/'.$instance["skype_status_type_".$i].'/'.$instance["nick_".$i].'"  alt="Talk with me via Skype" /> '.$instance["nick_name_".$i].'</a></li>';	
						else
							echo '<li><a href="skype:'.$instance["nick_".$i].'?call" title="Talk with me via Skype "><img src="http://mystatus.skype.com/'.$instance["skype_status_type_".$i].'/'.$instance["nick_".$i].'"  alt="Talk with me via Skype" /></a></li>';		
						}
				}	
			}
			echo "</ul>";
		echo $after_widget;
	}
	
	function form($instance) {
		?>
		<p>
			<label for="<?php echo $this->get_field_id("title"); ?>">
				<strong><?php _e( 'Title' ); ?>:</strong>
				<input class="widefat" id="<?php echo $this->get_field_id("title"); ?>" name="<?php echo $this->get_field_name("title"); ?>" type="text" value="<?php echo esc_attr($instance["title"]); ?>" />
			</label>
		</p>
        <hr size="2" />
        <table width="100%" bgcolor="#EEEEEE">
        <?php for($i=1;$i<= $this->_number;$i++): ?>
        	<tr><td colspan="2"><a style="background:#CC0099; color:#FFF; padding:2px 5px;"><?php _e($i); ?></a></td></tr>
            <tr>
                <td><label for="<?php echo $this->get_field_id("nick_".$i); ?>"><strong><?php _e( 'Nick' ); ?>:</strong></label></td>
                <td><input id="<?php echo $this->get_field_id("nick_".$i); ?>" name="<?php echo $this->get_field_name("nick_".$i); ?>" type="text" value="<?php echo esc_attr($instance["nick_".$i]); ?>" /></td>
             </tr>
             <tr>
            	<td><label for="<?php echo $this->get_field_id("is_show_name_".$i); ?>">
            <?php _e('Show full name'); ?>:</label></td>
                <td> 
                	<select id="<?php echo $this->get_field_id("is_show_name_".$i); ?>" name="<?php echo $this->get_field_name("is_show_name_".$i); ?>">
                      <option value="1"<?php selected( $instance["is_show_name_".$i], "1" ); ?>>Yes</option>
                      <option value="0"<?php selected( $instance["is_show_name_".$i], "0" ); ?>>No</option>
                    </select>
            	</td>
            </tr>
			<tr>
            	<td> <label for="<?php echo $this->get_field_id("nick_name_".$i); ?>"><?php _e( 'Full name'); ?>:</label></td>
                <td><input id="<?php echo $this->get_field_id("nick_name_".$i); ?>" name="<?php echo $this->get_field_name("nick_name_".$i); ?>" type="text" value="<?php echo esc_attr($instance["nick_name_".$i]); ?>" /></td>
            </tr>
			<tr>
            	<td><label for="<?php echo $this->get_field_id("nick_type_".$i); ?>">
            <?php _e('Type'); ?>:</label></td>
                <td> 
                	<select id="<?php echo $this->get_field_id("nick_type_".$i); ?>" name="<?php echo $this->get_field_name("nick_type_".$i); ?>">
                      <option value="yahoo"<?php selected( $instance["nick_type_".$i], "yahoo" ); ?>>Yahoo</option>
                      <option value="skype"<?php selected( $instance["nick_type_".$i], "skype" ); ?>>Skype</option>
                    </select>
            	</td>
            </tr>
            <tr>
            	<td>Yahoo smile<br /><small><em>Yahoo only</em></small></td>
                <td>
                	<select id="<?php echo $this->get_field_id("yahoo_status_type_".$i); ?>" name="<?php echo $this->get_field_name("yahoo_status_type_".$i); ?>" >
                      <?php for($k=0;$k<25;$k++):?>	
                      <option value="<?php echo $k; ?>" <?php if($instance["yahoo_status_type_".$i] == $k) echo 'selected="selected"'; ?>><?php echo $k; ?></option>
                      <?php endfor;?>
                    </select> 
                   
                </td>
            </tr>
            <tr>
            	<td>Skype smile<br /><small><em>Skype only</em></small></td>
                <td>
                	<select id="<?php echo $this->get_field_id("skype_status_type_".$i); ?>" name="<?php echo $this->get_field_name("skype_status_type_".$i); ?>" >
                     <option value="smallclassic"<?php selected( $instance["skype_status_type_".$i], "smallclassic" ); ?>>smallclassic</option>
                      <option value="bigclassic"<?php selected( $instance["skype_status_type_".$i], "bigclassic" ); ?>>bigclassic</option>
                      <option value="balloon"<?php selected( $instance["skype_status_type_".$i], "balloon" ); ?>>balloon</option>
                      <option value="smallicon"<?php selected( $instance["skype_status_type_".$i], "smallicon" ); ?>>smallicon</option>
                      <option value="mediumicon"<?php selected( $instance["skype_status_type_".$i], "balloon" ); ?>>mediumicon</option>
                    </select> 
                </td>
            </tr>
            <tr><td colspan="2"><hr size="1" color="#666666"  /></td></tr>
        <?php endfor;?>
        </table>
        
	<?php }

	function update($new_instance, $old_instance) { 
		$instance = $old_instance;
		for($i=1;$i<=$this->_number;$i++){
			if(!empty($new_instance['nick_'.$i]) && empty($new_instance['nick_name_'.$i])){
				$new_instance['nick_name_'.$i]	=	$new_instance['nick_'.$i];
			}
		}
        return $new_instance;
	}
}

add_action( 'widgets_init', create_function('', 'return register_widget("Yahoo_Skype_status");') );
?>