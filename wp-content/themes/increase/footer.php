<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.1.2
 * 
 * Website Footer Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();

if ( 
	!is_404() && 
	!is_archive() && 
	!is_search() && 
	!is_home() 
) {
	$cmsms_middle_sidebar = get_post_meta(get_the_ID(), 'cmsms_middle_sidebar', true);
	$cmsms_bottom_sidebar = get_post_meta(get_the_ID(), 'cmsms_bottom_sidebar', true);
}


echo '<div class="cl"></div>' . "\n" . 
'</div>' . "\n";


if ( 
	!is_home() && 
	!is_404() && 
	!is_archive() && 
	!is_search() && 
	$cmsms_middle_sidebar == 'true' 
) {
	echo '<!-- _________________________ Start Middle Sidebar _________________________ -->' . "\n" . 
	'<section class="middle_sidebar">' . "\n" . 
	'<div class="middle_sidebar_inner">';
	
	get_sidebar('middle');
	
	echo "\n" . 
	'</div>' . "\n" .
	'<div class="cl"></div>' . "\r" . 
	'</section>' . "\n" . 
	'<!-- _________________________ Finish Middle Sidebar _________________________ -->' . "\n";
}

echo '</section>' . "\n" . 
'<!-- _________________________ Finish Middle _________________________ -->' . "\n\n\n";

if ( 
	!is_home() && 
	!is_404() && 
	!is_archive() && 
	!is_search() && 
	$cmsms_bottom_sidebar == 'true' 
) {
	echo '<!-- _________________________ Start Bottom _________________________ -->' . "\n" . 
		'<section id="bottom">' . "\n" . 
		'<div class="bottom_inner">' . "\n";
	
	get_sidebar('bottom');
	
	echo '</div>' . "\n" . 
	'</section>' . "\n" . 
	'<!-- _________________________ Finish Bottom _________________________ -->' . "\n\n";
}


echo '<a href="javascript:void(0);" id="slide_top"></a>' . "\n";
?>
</div>
<!-- _________________________ Finish Container _________________________ -->

<!-- _________________________ Start Footer _________________________ -->
	<footer id="footer" role="contentinfo">
	<?php 
		echo '<span class="copyright">' . stripslashes($cmsms_option[CMSMS_SHORTNAME . '_footer_copyright']) . '</span>' . "\n";
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_footer_additional_content'] == 'text') {
			echo stripslashes($cmsms_option[CMSMS_SHORTNAME . '_footer_html']);
		} elseif ($cmsms_option[CMSMS_SHORTNAME . '_footer_additional_content'] == 'social' && isset($cmsms_option[CMSMS_SHORTNAME . '_social_icons'])) {
			echo '<ul class="social_icons">' . "\n";
			
			foreach ($cmsms_option[CMSMS_SHORTNAME . '_social_icons'] as $cmsms_social_icons) {
				$cmsms_social_icon = explode('|', str_replace(' ', '', $cmsms_social_icons));
				
				if (is_numeric($cmsms_social_icon[0])) {
					$image = wp_get_attachment_image_src($cmsms_social_icon[0], 'full');
					
					$image = $image[0];
				} else {
					$image = $cmsms_social_icon[0];
				}
				
				echo '<li>' . "\n\t" . 
					'<a' . (($cmsms_social_icon[3] == 'true') ? ' target="_blank"' : '') . ' href="' . $cmsms_social_icon[2] . '" title="' . $cmsms_social_icon[2] . '">' . "\n\t\t" . 
						'<img src="' . $image . '" alt="' . $cmsms_social_icon[2] . '" />' . "\r\t" . 
					'</a>' . "\r" . 
				'</li>' . "\n";
			}
			
			echo '</ul>' . "\n";
		} elseif ($cmsms_option[CMSMS_SHORTNAME . '_footer_additional_content'] == 'nav' && has_nav_menu('footer')) {
			wp_nav_menu(array( 
				'theme_location' => 'footer', 
				'container' => '', 
				'sort_column' => 'menu_order', 
				'menu_id' => 'footer_nav', 
				'menu_class' => 'footer_nav' 
			));
		}
	?>
	</footer>
<!-- _________________________ Finish Footer _________________________ -->

</section>
<!-- _________________________ Finish Page _________________________ -->

<?php 
if ($cmsms_option[CMSMS_SHORTNAME . '_google_analytics'] != '') {
	echo stripslashes($cmsms_option[CMSMS_SHORTNAME . '_google_analytics']);
}

echo "\r" . '<script type="text/javascript">' . "\n\t" . 
	'jQuery(document).ready(function () {' . "\n\t\t" . 
		"jQuery('.cmsms_social').socicons( {" . "\n\t\t\t" . 
			"icons : 'nujij,ekudos,digg,linkedin,sphere,technorati,delicious,furl,netscape,yahoo,google,newsvine,reddit,blogmarks,magnolia,live,tailrank,facebook,twitter,stumbleupon,bligg,symbaloo,misterwong,buzz,myspace,mail,googleplus'," . "\n\t\t\t" . 
			"imagesurl : '" . get_template_directory_uri() . "/img/share_icons/'" . "\n\t\t" . 
		'} );' . "\n\t" . 
	'} );' . "\n" . 
'</script>' . "\n";

if ($cmsms_option[CMSMS_SHORTNAME . '_custom_css'] != '') {
	echo '<style type="text/css">' . 
		stripslashes($cmsms_option[CMSMS_SHORTNAME . '_custom_css']) . 
	'</style>';
}

if ($cmsms_option[CMSMS_SHORTNAME . '_custom_js'] != '') {
	echo '<script type="text/javascript">' . 
		stripslashes($cmsms_option[CMSMS_SHORTNAME . '_custom_js']) . 
	'</script>';
}

if ($cmsms_option[CMSMS_SHORTNAME . '_header_nav_fixed']) { ?>
	<script type="text/javascript">
		jQuery(document).ready(function() { 
			(function ($) { 
				$(window).scroll(function () { 
					var sT = $(window).scrollTop();
					
					if (sT > 220) { 
						if ($('#header nav').addClass('navi_scrolled').is(':animated')) {
							return false;
						} else {
							$('#header nav').addClass('navi_scrolled').animate( { 
								top : 0,
								opacity : 1 
							}, 500);
						}
					} else { 
						$('#header nav').removeClass('navi_scrolled').stop().attr( { style : '' } );
					}
				} );
			} )(jQuery);
		} );
	</script>
<?php
}

wp_footer();
?>
</body>
</html>
