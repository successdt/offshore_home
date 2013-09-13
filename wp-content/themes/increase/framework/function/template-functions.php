<?php 
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.1.2
 * 
 * Template Functions
 * Created by CMSMasters
 * 
 */


/* Get Posts Thumbnail Function */
function cmsms_thumb($cmsms_id, $type = 'post-thumbnail', $link = true, $group = false, $preload = true, $highImg = false, $fullwidth = true, $show = true, $attachment = false) {
	$args = array( 
		'class' => (($fullwidth) ? 'fullwidth' : ''), 
		'alt' => cmsms_title($cmsms_id, false), 
		'title' => cmsms_title($cmsms_id, false) 
	);
	
	$link_href = ($attachment) ? wp_get_attachment_image_src($attachment, 'full') : wp_get_attachment_image_src(get_post_thumbnail_id($cmsms_id), 'full');
	
	if ($show) {
		echo '<figure>' . "\n\t\t" . 
			'<a href="' . (($link) ? get_permalink() : $link_href[0]) . '"' . (($preload) ? ' class="preloader' . (($highImg) ? ' highImg' : '') . (($group) ? ' jackbox' : '') . '"' : '') . (($group) ? ' data-group="' . $group . '"' : '') . ' title="' . cmsms_title($cmsms_id, false) . '">' . "\n\t\t\t" . 
				(($attachment) ? wp_get_attachment_image($attachment, (($type) ? $type : 'full'), false, $args) : get_the_post_thumbnail($cmsms_id, (($type) ? $type : 'full'), $args)) . "\r\t\t" . 
			'</a>' . "\r\t" . 
		'</figure>' . "\n";
	} else {
		return '<figure>' . "\n\t\t" . 
			'<a href="' . (($link) ? get_permalink() : $link_href[0]) . '"' . (($preload) ? ' class="preloader' . (($highImg) ? ' highImg' : '') . (($group) ? ' jackbox' : '') . '"' : '') . (($group) ? ' data-group="' . $group . '"' : '') . ' title="' . cmsms_title($cmsms_id, false) . '">' . "\n\t\t\t" . 
				(($attachment) ? wp_get_attachment_image($attachment, (($type) ? $type : 'full'), false, $args) : get_the_post_thumbnail($cmsms_id, (($type) ? $type : 'full'), $args)) . "\r\t\t" . 
			'</a>' . "\r\t" . 
		'</figure>' . "\n";
	}
}



/* Get Posts Small Thumbnail Function */
function cmsms_thumb_small($cmsms_id, $type = 'post', $w = 100, $h = 100) {
	$args = array( 
		'alt' => cmsms_title($cmsms_id, false), 
		'title' => cmsms_title($cmsms_id, false), 
		'style' => 'width:' . $w . 'px; height:' . $h . 'px;' 
	);
	
	if ($type == 'post') { // Post type - blog
		echo '<figure class="alignleft">' . "\n\t" . 
			'<a href="' . get_permalink() . '"' . ' title="' . cmsms_title($cmsms_id, false) . '">' . "\n\t\t";
		
		if (get_post_format()) {
			if (get_post_format() == 'image' || get_post_format() == 'gallery') {
				if (get_post_format() == 'image') {
					$cmsms_post_image_link = get_post_meta($cmsms_id, 'cmsms_post_image_link', true);
					
					$cmsms_post_image = $cmsms_post_image_link;
				} elseif (get_post_format() == 'gallery') {
					$cmsms_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta($cmsms_id, 'cmsms_post_images', true))));
					
					$cmsms_post_image = $cmsms_post_images[0];
				}
				
				if (has_post_thumbnail()) {
					echo get_the_post_thumbnail($cmsms_id, array($w, $h), $args);
				} elseif (!has_post_thumbnail() && $cmsms_post_image != '') {
					echo wp_get_attachment_image($cmsms_post_image, array($w, $h), false, $args);
				} else {
					if (get_post_format() == 'gallery') {
						echo '<img src="' . get_template_directory_uri() . '/img/PF-' . get_post_format() . '.jpg' . '" alt="' . cmsms_title($cmsms_id, false) . '" title="' . cmsms_title($cmsms_id, false) . '" style="width:' . $w . 'px; height:' . $h . 'px;" />';
					} else {
						echo '<img src="' . get_template_directory_uri() . '/img/PF-placeholder.jpg' . '" alt="' . cmsms_title($cmsms_id, false) . '" title="' . cmsms_title($cmsms_id, false) . '" style="width:' . $w . 'px; height:' . $h . 'px;" />';
					}
				}
			} else {
				echo '<img src="' . get_template_directory_uri() . '/img/PF-' . get_post_format() . '.jpg' . '" alt="' . cmsms_title($cmsms_id, false) . '" title="' . cmsms_title($cmsms_id, false) . '" style="width:' . $w . 'px; height:' . $h . 'px;" />';
			}
		} else {
			if (has_post_thumbnail()) {
				echo get_the_post_thumbnail($cmsms_id, array($w, $h), $args);
			} else {
				echo '<img src="' . get_template_directory_uri() . '/img/PF-placeholder.jpg' . '" alt="' . cmsms_title($cmsms_id, false) . '" title="' . cmsms_title($cmsms_id, false) . '" style="width:' . $w . 'px; height:' . $h . 'px;" />';
			}
		}
		
		echo "\r\t" . '</a>' . "\r" . 
		'</figure>' . "\n";
	} elseif ($type == 'project') { // Post type - project
		$project_format = get_post_meta($cmsms_id, 'pt_format', true);
		
		if ($project_format) {
			if ($project_format == 'slider' || $project_format == 'album') {
				$attachments =& get_children(array(
					'post_type' => 'attachment', 
					'post_mime_type' => 'image', 
					'post_parent' => $cmsms_id, 
					'orderby' => 'menu_order', 
					'order' => 'ASC'
				));
				
				if (has_post_thumbnail()) {
					echo '<figure class="alignleft">' . 
						'<a href="' . get_permalink() . '"' . ' title="' . cmsms_title($cmsms_id, false) . '">' . 
							get_the_post_thumbnail($cmsms_id, array($w, $h), $args) . 
						'</a>' . 
					'</figure>';
				} elseif (!has_post_thumbnail() && sizeof($attachments) > 0) {
					foreach ($attachments as $attachment) { 
						if (!isset($small_thumb_counter) && $small_thumb_counter = true) {
							echo '<figure class="alignleft">' . 
								'<a href="' . get_permalink() . '"' . ' title="' . cmsms_title($cmsms_id, false) . '">' . 
									wp_get_attachment_image($attachment->ID, array($w, $h), false, $args) . 
								'</a>' . 
							'</figure>';
						}
					}
				} else {
					echo '<figure class="alignleft">' . 
						'<a href="' . get_permalink() . '"' . ' title="' . cmsms_title($cmsms_id, false) . '">' . 
							'<img src="' . get_template_directory_uri() . '/img/PF-placeholder.jpg' . '" alt="' . cmsms_title($cmsms_id, false) . '" title="' . cmsms_title($cmsms_id, false) . '" style="width:' . $w . 'px; height:' . $h . 'px;" />' . 
						'</a>' . 
					'</figure>';
				}
			} else {
				echo '<figure class="alignleft">' . 
					'<a href="' . get_permalink() . '"' . ' title="' . cmsms_title($cmsms_id, false) . '">' . 
						'<img src="' . get_template_directory_uri() . '/img/PF-' . $project_format . '.jpg' . '" alt="' . cmsms_title($cmsms_id, false) . '" title="' . cmsms_title($cmsms_id, false) . '" style="width:' . $w . 'px; height:' . $h . 'px;" />' . 
					'</a>' . 
				'</figure>';
			}
		} else {
			if (has_post_thumbnail()) {
				echo '<figure class="alignleft">' . 
					'<a href="' . get_permalink() . '"' . ' title="' . cmsms_title($cmsms_id, false) . '">' . 
						get_the_post_thumbnail($cmsms_id, array($w, $h), $args) . 
					'</a>' . 
				'</figure>';
			} else {
				echo '<figure class="alignleft">' . 
					'<a href="' . get_permalink() . '"' . ' title="' . cmsms_title($cmsms_id, false) . '">' . 
						'<img src="' . get_template_directory_uri() . '/img/PF-placeholder.jpg' . '" alt="' . cmsms_title($cmsms_id, false) . '" title="' . cmsms_title($cmsms_id, false) . '" style="width:' . $w . 'px; height:' . $h . 'px;" />' . 
					'</a>' . 
				'</figure>';
			}
		}
	} elseif ($type == 'testimonial') {
		echo '<figure class="alignleft">' . "\n";
		if (has_post_thumbnail()) {
			echo get_the_post_thumbnail($cmsms_id, array($w, $h), $args);
		} else {
			echo '<img src="' . get_template_directory_uri() . '/img/PF-quote.jpg' . '" alt="' . cmsms_title($cmsms_id, false) . '" title="' . cmsms_title($cmsms_id, false) . '" style="width:' . $w . 'px; height:' . $h . 'px;" />';
		}
		echo '</figure>' . "\n";
	}
}



/* Get Content Composer Function */
function cmsms_content_composer($cmsms_id) { 
    $cmsms_content_composer_text = get_post_meta($cmsms_id, 'cmsms_content_composer_text', true);
    
	if (!post_password_required($cmsms_id)) {
		echo "\t" . '<div class="cmsms_cc">' . "\n" . 
			do_shortcode(urldecode($cmsms_content_composer_text)) . "\n\t\t" .
		'</div>' . "\n\t";
	}
}



/* Get Posts Title Function */
function cmsms_title($cmsms_id, $show = true) { 
    $headingtools_active = get_post_meta($cmsms_id, 'headingtools_active', true);
    $headingtools_title = get_post_meta($cmsms_id, 'headingtools_title', true);
    
    if ($show) {
        if ($headingtools_active == 'custom' && $headingtools_title != '') {
            echo $headingtools_title;
        } else {
            echo esc_attr(get_the_title($cmsms_id) ? get_the_title($cmsms_id) : $cmsms_id);
        } 
    } else {
        if ($headingtools_active == 'custom' && $headingtools_title != '') {
            return $headingtools_title;
        } else {
            return esc_attr(get_the_title($cmsms_id) ? get_the_title($cmsms_id) : $cmsms_id);
        } 
    }
}



/* Get Heading Without Link Function */
function cmsms_heading_nolink($cmsms_id, $type = 'post', $show = true, $tag = 'h1') { 
	if ($type == 'post') { // Post type - post
		$cmsms_option = cmsms_get_global_options();
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_title']) {
			if ($show) {
				echo '<' . $tag . ' class="entry-title">' . 
					cmsms_title($cmsms_id, false) . 
				'</' . $tag . '>';
			} else {
				return '<' . $tag . ' class="entry-title">' . 
					cmsms_title($cmsms_id, false) . 
				'</' . $tag . '>';
			}
		}
	} elseif ($type == 'project') { // Post type - project
		$cmsms_option = cmsms_get_global_options();
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_title']) { 
			if ($show) {
				echo '<' . $tag . ' class="entry-title">' . 
					cmsms_title($cmsms_id, false) . 
				'</' . $tag . '>';
			} else {
				return '<' . $tag . ' class="entry-title">' . 
					cmsms_title($cmsms_id, false) . 
				'</' . $tag . '>';
			}
		}
	} else { // Page heading
		if ($show) {
			echo '<' . $tag . ' class="entry-title">' . 
				cmsms_title($cmsms_id, false) . 
			'</' . $tag . '>';
		} else {
			return '<' . $tag . ' class="entry-title">' . 
				cmsms_title($cmsms_id, false) . 
			'</' . $tag . '>';
		}
	}
}



/* Get Heading Function */
function cmsms_heading($cmsms_id, $type = 'post', $show = true, $tag = 'h1') { 
	
	if ($type == 'post') { // Post type - post		
		if ($show) {
			echo '<' . $tag . ' class="entry-title">' . "\n\t\t" . 
				'<a href="' . get_permalink() . '">' . cmsms_title($cmsms_id, false) . '</a>' . "\r\t" . 
			'</' . $tag . '>' . "\r";
		} else {
			return '<' . $tag . ' class="entry-title">' . "\n\t\t\t" . 
				'<a href="' . get_permalink() . '">' . cmsms_title($cmsms_id, false) . '</a>' . "\r\t\t" . 
			'</' . $tag . '>' . "\r";
		}
	} elseif ($type == 'project') { // Post type - project
		$cmsms_option = cmsms_get_global_options();
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_full_title']) {
			if ($show) {
				echo '<header class="entry-header">' . "\n\t\t" . 
					'<' . $tag . ' class="entry-title">' . "\n\t\t\t" . 
						'<a href="' . get_permalink() . '">' . cmsms_title($cmsms_id, false) . '</a>' . "\r\t\t" . 
					'</' . $tag . '>' . "\r\t" . 
				'</header>' . "\n\t";
			} else {
				return '<header class="entry-header">' . "\n\t\t" . 
					'<a href="' . get_permalink() . '">' . cmsms_title($cmsms_id, false) . '</a>' . "\r\t\t" . 
				'</header>' . "\n\t";
			}
		}
	} else { // Page heading
		if ($show) {
			echo '<header class="entry-header">' . "\n\t\t" . 
				'<' . $tag . ' class="entry-title">' . cmsms_title($cmsms_id, false) . '</' . $tag . '>' . "\r\t" . 
			'</header>' . "\n\t";
		} else {
			return '<header class="entry-header">' . "\n\t\t" . 
				'<' . $tag . ' class="entry-title">' . cmsms_title($cmsms_id, false) . '</' . $tag . '>' . "\r\t" . 
			'</header>' . "\n\t";
		}
	}
}



/* Get Posts Content/Excerpt Function */
function cmsms_exc_cont($type = 'post') {
	$cmsms_option = cmsms_get_global_options();
	
	if ($type == 'post') { // Post type - blog
		echo '<div class="entry-content">' . "\n\t\t\t";
		
		the_excerpt();
		
		echo "\t\t" . '</div>' . "\n";
	} elseif ($type == 'project') { // Post type - portfolio
		if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_full_descr']) {
			echo '<div class="entry-content">';
			
			the_excerpt();
			
			echo '</div>';
		}
	}
}



/* Get Posts Metadata Function */
function cmsms_meta($content_type = 'post', $template_type = 'page', $cmsms_id = 0, $taxonomy = '', $layout = 'fullwidth') {
	$cmsms_option = cmsms_get_global_options();
	
	if ($content_type == 'post') { // Post type - post
		if ($template_type == 'post') { // Template type - post
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_author']) {
				echo '<span class="user_name">' . 
					__('By', 'cmsmasters') . ' ';
				
				the_author_posts_link();
				
				echo '</span>' . "\n\t\t\t\t";
			}
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_cat'] && get_the_category()) {
				if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_author']) {
					echo '<span class="cmsms_post_meta_divider">/</span>' . "\n\t\t\t";
				}
				
				echo '<span class="cmsms_category">' . 
				__('In', 'cmsmasters') . 
				"\n\t\t\t\t\t";
				
				the_category(", \n\t\t\t\t\t");
				
				echo "\r\t\t\t\t" . '</span>' . "\n";
			}
		} elseif ($template_type == 'page') { // Template type - page
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_page_author']) {
				echo '<span class="user_name">' . 
					__('By', 'cmsmasters') . ' ';
				
				the_author_posts_link();
				
				echo '</span>' . "\n\t\t\t\t";
			}
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_page_cat'] && get_the_category()) {
				if ($cmsms_option[CMSMS_SHORTNAME . '_blog_page_author']) {
					echo '<span class="cmsms_post_meta_divider">/</span>' . "\n\t\t\t";
				}
				
				echo '<span class="cmsms_category">' . 
				__('In', 'cmsmasters') . 
				"\n\t\t\t\t\t";
				
				the_category(", \n\t\t\t\t\t");
				
				echo "\r\t\t\t\t" . '</span>' . "\n";
			}
		}
	} elseif ($content_type == 'project') { // Post type - project
		if ($template_type == 'post') { // Template type - post
			if ( 
				$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_date'] || 
				($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_cat'] && get_the_terms($cmsms_id, $taxonomy)) || 
				$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_author'] || 
				$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_comment'] 
			) {
				if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_comment']) {
					comments_popup_link(__('No Comments', 'cmsmasters'), '1 ' . __('Comment', 'cmsmasters'), '% ' . __('Comments', 'cmsmasters'), 'cmsms_comments', __('Comments Off', 'cmsmasters'));
				}
				
				if ( 
					$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_date'] || 
					($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_cat'] && get_the_terms($cmsms_id, $taxonomy)) || 
					$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_author'] 
				) {
					if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_date']) {
						echo '<abbr class="published" title="' . get_the_date() . '">' . 
							get_the_date() . 
						'</abbr>';
					}
					
					if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_author']) {
						echo '<span class="user_name">' . 
							__('By', 'cmsmasters') . ' ' . 
							'<span class="color_3">' . get_the_author() . '</span>' . 
						'</span>';
					}
					
					if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_cat'] && get_the_terms($cmsms_id, $taxonomy)) {
						echo '<span class="cmsms_category">' . 
							__('in', 'cmsmasters') . ' ' . 
							get_the_term_list($cmsms_id, $taxonomy, '<ul><li>', '</li><li>', '</li></ul>') . 
						'</span>';
					}
				}
			}
		} elseif ($template_type == 'page') { // Template type - page
			echo '<footer class="entry-meta">' . "\n\t\t";
			
				$terms = get_the_terms($cmsms_id, $taxonomy);
				
				if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_full_cat']) {
					echo '<span class="cmsms_category">' . 
						get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
					'</span>';
				}
				
			echo '<span class="meta-date">' . get_the_time('YmdHis') . '</span>' . "\r\t" . 
			'</footer>' . "\n\t";
		}
	}
}



/* Get Posts Date Function */
function cmsms_post_date($content_type = 'post', $template_type = 'page') {
	$cmsms_option = cmsms_get_global_options();
	
	
	if ($content_type == 'post') { // Post type - post
		if ($template_type == 'post') { // Template type - post
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_date']) {
				$y = get_the_time('Y');
				$m = get_the_time('m');
				$d = get_the_time('d');
				
				echo '<abbr class="published" title="' . get_the_time('F j, Y') . '">' . 
					'<span class="cmsms_post_day">' . get_the_time('j') . '</span>' . 
					'<span class="cmsms_post_year">' . get_the_time('Y') . '</span>' . 
					'<span class="cmsms_post_month">' . get_the_time('M') . '</span>' . 
				'</abbr>' . "\n\t\t\t";
			}
		} elseif ($template_type == 'page') { // Template type - page
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_page_date']) {
				$y = get_the_time('Y');
				$m = get_the_time('m');
				$d = get_the_time('d');
				
				echo '<abbr class="published" title="' . get_the_time('F j, Y') . '">' . 
					'<span class="cmsms_page_day">' . get_the_time('j') . '</span>' . 
					'<span class="cmsms_page_year">' . get_the_time('Y') . '</span>' . 
					'<span class="cmsms_page_month">' . get_the_time('M') . '</span>' . 
				'</abbr>' . "\n\t\t\t";
			}
		}
	} elseif ($content_type == 'testimonial') { 
		if ($template_type == 'post' && $cmsms_option[CMSMS_SHORTNAME . '_testimonial_post_date']) { // Template type - post
			echo '<abbr class="published" title="' . get_the_date() . '">' . 
				get_the_date() . 
			'</abbr>' . "\n";
		} elseif ($template_type == 'page' && $cmsms_option[CMSMS_SHORTNAME . '_testimonial_page_date']) { // Template type - page
			echo '<abbr class="published" title="' . get_the_date() . '">' . 
				get_the_date() . 
			'</abbr>' . "\n";
		}
	}
	
}



/* Get Posts Comments Function */
function cmsms_comments($page_type = 'page', $type = 'post') {
	$cmsms_option = cmsms_get_global_options();


	if ($type == 'post') {
		if ($page_type == 'page') {
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_page_comment']) {
				if ($cmsms_option[CMSMS_SHORTNAME . '_blog_page_cat'] && get_the_category() || $cmsms_option[CMSMS_SHORTNAME . '_blog_page_author']) {
					echo '<span class="cmsms_post_meta_divider">/</span>' . "\n\t\t\t";
				}
				echo '<span class="cmsms_comments_wrap">' . 
				__('Comments', 'cmsmasters') . '';

				comments_popup_link('(0)', '(1)', '(%)', 'cmsms_comments', __('Off', 'cmsmasters'));

				echo '</span>';
			}
		} elseif ($page_type == 'post') {
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_comment']) {
				if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_cat'] && get_the_category() || $cmsms_option[CMSMS_SHORTNAME . '_blog_post_author']) {
					echo '<span class="cmsms_post_meta_divider">/</span>' . "\n\t\t\t";
				}
				echo '<span class="cmsms_comments_wrap">' . 
				__('Comments', 'cmsmasters') . '';

				comments_popup_link('(0)', '(1)', '(%)', 'cmsms_comments', __('Off', 'cmsmasters'));

				echo '</span>';
			}
		}
	} elseif ($type == 'testimonial') {
		if ($page_type == 'page') {
			if ($cmsms_option[CMSMS_SHORTNAME . '_testimonial_page_comment']) {
				if($cmsms_option[CMSMS_SHORTNAME . '_testimonial_page_cat']) {
					echo ' / ';
				}
				echo '<span class="tl_comments_wrap">' . 
				__('Comments', 'cmsmasters') . ': ';

				comments_popup_link('(0)', '(1)', '(%)', 'tl_comments', __('Off', 'cmsmasters'));

				echo '</span>';
			}
		} elseif ($page_type == 'post') {
			if ($cmsms_option[CMSMS_SHORTNAME . '_testimonial_post_comment']) {
				if($cmsms_option[CMSMS_SHORTNAME . '_testimonial_post_cat']) {
					echo ' / ';
				}
				echo '<span class="tl_comments_wrap">' . 
				__('Comments', 'cmsmasters') . ': ';

				comments_popup_link('(0)', '(1)', '(%)', 'tl_comments', __('Off', 'cmsmasters'));

				echo '</span>';
			}
		}
	}

	echo "\n";
}



/* Get Project Date Function */
function cmsms_pj_date($page_type = 'page') {
	$cmsms_option = cmsms_get_global_options();
	
	if ( 
		$page_type == 'page' && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_full_date'] || 
		$page_type == 'post' && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_date'] 
	) {
		echo '<li>' . 
			'<span class="cmsms_details_links">' . 
				'<abbr class="published" title="' . get_the_date() . '">' . 
					get_the_date() . 
				'</abbr>' . 
			'</span>' . 
			__('Date', 'cmsmasters') . ':' .
		'</li>' . "\n\t\t\t";
	}
}



/* Get Project Link Function */
function cmsms_link($cmsms_id, $type = 'post') {
	$cmsms_project_pj_link_text = get_post_meta(get_the_ID(), 'cmsms_project_pj_link_text', true);
	$cmsms_project_pj_link_url = get_post_meta(get_the_ID(), 'cmsms_project_pj_link_url', true);
	$cmsms_project_pj_link_target = get_post_meta(get_the_ID(), 'cmsms_project_pj_link_target', true);
	
	$cmsms_option = cmsms_get_global_options();
	
	if ($type = 'project' && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_link'] && $cmsms_project_pj_link_text != '' && $cmsms_project_pj_link_url != '') { 
		echo '<li>' . 
		'<span class="cmsms_details_links button_click"><a class="button_small" href="' . $cmsms_project_pj_link_url . '" title="' . $cmsms_project_pj_link_text . '"' . (($cmsms_project_pj_link_target == 'true') ? ' target="_blank"' : '') . '>' . $cmsms_project_pj_link_text . '</a></span>';
		echo _e('Project Link', 'cmsmasters') . ':' . 
		'</li>' . "\n\t\t\t"; 
	}
}



/* Get Project Categories Function */
function cmsms_pj_cat($cmsms_id, $taxonomy, $page_type = 'page') {
	$cmsms_option = cmsms_get_global_options();
	
	
	if ( 
		$page_type == 'page' && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_full_cat'] && get_the_terms($cmsms_id, $taxonomy) || 
		$page_type == 'post' && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_cat'] && get_the_terms($cmsms_id, $taxonomy) 
	) {
		echo '<li>' . 
			'<span class="cmsms_details_links">' . 
				get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
			'</span>' . 
			__('Categories', 'cmsmasters') . ':' .
		'</li>' . "\n\t\t\t";
	}
}



/* Get Testimonial Categories Function */
function cmsms_tl_cat($cmsms_id, $taxonomy, $page_type = 'page') {
	$cmsms_option = cmsms_get_global_options();
	
	if ($page_type == 'page' && $cmsms_option[CMSMS_SHORTNAME . '_testimonial_page_cat']) {
		echo '<span class="cmsms_tl_cat">' . 
			__('Categories', 'cmsmasters') . ': ' .
			get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
		'</span>' . "\n";
	} elseif ($page_type == 'post' && $cmsms_option[CMSMS_SHORTNAME . '_testimonial_post_cat']) {
		echo '<span class="cmsms_tl_cat">' . 
			__('Categories', 'cmsmasters') . ': ' .
			get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
		'</span>' . "\n";
	}
}



/* Get Testimonial Description Function */
function cmsms_tl_descr($cmsms_id, $page_type = 'page') {
	$cmsms_testimonial_author = get_post_meta(get_the_ID(), 'cmsms_testimonial_author', true);
	$cmsms_testimonial_author_link = get_post_meta(get_the_ID(), 'cmsms_testimonial_author_link', true);
	$cmsms_testimonial_company = get_post_meta(get_the_ID(), 'cmsms_testimonial_company', true);
	
	$cmsms_option = cmsms_get_global_options();
	
	if ($page_type == 'page' && $cmsms_option[CMSMS_SHORTNAME . '_testimonial_page_author_descr']) { 
		if ($cmsms_testimonial_author != '' && $cmsms_testimonial_author_link != '') {
			echo '<a target="_blank" href="' . $cmsms_testimonial_author_link . '" class="tl_author">' . $cmsms_testimonial_author . '</a>' . "\n";
		} elseif ($cmsms_testimonial_author != '' && $cmsms_testimonial_author_link == '') {
			echo '<p class="tl_author">' . $cmsms_testimonial_author . '</p>' . "\n";
		}
		
		if ($cmsms_testimonial_company != '') {
			echo '<p class="tl_company">' . $cmsms_testimonial_company . '</p>' . "\n";
		}
	} elseif ($page_type == 'post' && $cmsms_option[CMSMS_SHORTNAME . '_testimonial_post_author_descr']) { 
		if ($cmsms_testimonial_author != '' && $cmsms_testimonial_author_link != '') {
			echo '<a target="_blank" href="' . $cmsms_testimonial_author_link . '" class="tl_author">' . $cmsms_testimonial_author . '</a>' . "\n";
		} elseif ($cmsms_testimonial_author != '' && $cmsms_testimonial_author_link == '') {
			echo '<p class="tl_author">' . $cmsms_testimonial_author . '</p>' . "\n";
		}
		
		if ($cmsms_testimonial_company != '') {
			echo '<p class="tl_company">' . $cmsms_testimonial_company . '</p>' . "\n";
		}
	}
}



/* Get Project Author Function */
function cmsms_pj_author($page_type = 'page') {
	$cmsms_option = cmsms_get_global_options();
	
	
	if ( 
		$page_type == 'page' && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_full_author'] || 
		$page_type == 'post' && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_author'] 
	) {
		echo '<li>' . 
			'<span class="cmsms_details_links">';
				the_author_posts_link(); 
			echo '</span>' . 
			__('Author', 'cmsmasters') . ':' .
		'</li>' . "\n\t\t\t";
	}
}



/* Get Project Comments Function */
function cmsms_pj_comments($page_type = 'page') {
	$cmsms_option = cmsms_get_global_options();
	
	
	if ( 
		$page_type == 'page' && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_full_comment'] || 
		$page_type == 'post' && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_comment'] 
	) {
		echo '<li>' . 
			'<span class="cmsms_details_links">';
				comments_popup_link('0', '1', '%', '', __('Off', 'cmsmasters'));
			echo '</span>' . 
			__('Comments', 'cmsmasters') . ':' .
		'</li>' . "\n\t\t\t";
	}
}



/* Get Project Tags Function */
function cmsms_pj_tag($cmsms_id, $taxonomy, $page_type = 'page') {
	$cmsms_option = cmsms_get_global_options();
	
	
	if ( 
		$page_type == 'page' && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_full_tag'] && get_the_terms($cmsms_id, $taxonomy) || 
		$page_type == 'post' && $cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_tag'] && get_the_terms($cmsms_id, $taxonomy) 
	) {
		echo '<li>' . 
			'<span class="cmsms_details_links">' . 
				get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
			'</span>' . 
			__('Tags', 'cmsmasters') . ':' .
		'</li>' . "\n\t\t\t";
	}
}



/* Get Posts Tags Function */
function cmsms_tags($cmsms_id, $type = 'post', $page_type = 'page', $layout = 'sidebar', $taxonomy = '') {
	$cmsms_option = cmsms_get_global_options();
	
	
	if ($type == 'post') { // Post type - blog
		if ($page_type == 'page') {
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_page_tag'] && get_the_tags()) {
				echo '<span class="cmsms_tags">' . "\n\t\t\t";
				
				the_tags(__('Tags', 'cmsmasters') . ": \n\t\t\t", "" . '<span class="cmsms_post_meta_divider">, </span>' . "", "");
				
				echo '</span>' . "\n";
			}
		} else if ($page_type == 'post') {
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_tag'] && get_the_tags()) {
				echo "\t\t" . '<span class="cmsms_tags">' . "\n\t\t\t";
				
				the_tags(__('Tags', 'cmsmasters') . ": \n\t\t\t", "" . '<span class="cmsms_post_meta_divider">, </span>' . "", "");
				
				echo '</span>' . "\n";
			}
		}
	} elseif ($type == 'project') { // Post type - portfolio
		if ($page_type == 'post') {
			$project_tags = get_the_terms($cmsms_id, $taxonomy);
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_tag'] && $project_tags) { 
				echo get_the_term_list($cmsms_id, $taxonomy, '<ul class="entry-meta cmsms_tags"><li>', '</li><li>', '</li></ul>');
			}
		}
	}
}



/* Get Posts More Button/Link Function */
function cmsms_more($cmsms_id, $type = 'post') {
	if ($type == 'post') { // Post type - blog
		$cmsms_option = cmsms_get_global_options();
		
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_blog_page_more']) { 
			$cmsms_post_read_more = get_post_meta($cmsms_id, 'cmsms_post_read_more', true);
			
			if ($cmsms_post_read_more == '') {
				$cmsms_post_read_more = __('Read More', 'cmsmasters');
			}
			
			echo '<a class="more_button" href="' . get_permalink($cmsms_id) . '">' . $cmsms_post_read_more . '</a>' . "\n";
		}
	} elseif ($type == 'project') { // Post type - portfolio
		$cmsms_project_more = get_post_meta($cmsms_id, 'project_more', true);
		
		if ($cmsms_project_more == '') {
			$cmsms_project_more = __('Read More', 'cmsmasters');
		}
		
		echo '<a class="more_button" href="' . get_permalink($cmsms_id) . '">' . $cmsms_project_more . '<span></span></a>';
	} elseif ($type == 'testimonial')  { // Post type - testimonial
		$cmsms_option = cmsms_get_global_options();
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_testimonial_page_more']) { 
			$cmsms_testimonial_more = get_post_meta($cmsms_id, 'cmsms_testimonial_more', true);
			
			if ($cmsms_testimonial_more == '') {
				$cmsms_testimonial_more = __('Read More', 'cmsmasters');
			}
			
			echo '<a class="button" href="' . get_permalink($cmsms_id) . '">' . $cmsms_testimonial_more . '</a>' . "\n";
		}
	}
}



/* Get Related, Popular & Recent Posts Function */
function cmsms_related($related_box = false, $tgsarray = null, $popular_box = false, $recent_box = false, $related_number = 4, $type = 'post', $taxonomy = null) {
	if (($related_box && !empty($tgsarray)) || $recent_box || $popular_box) {
		if ($type == 'post') {
			$r = new WP_Query(array( 
				'posts_per_page' => $related_number, 
				'post_status' => 'publish', 
				'ignore_sticky_posts' => 1, 
				'tag__in' => $tgsarray, 
				'post__not_in' => array(get_the_ID()), 
				'post_type' => $type 
			));
		} elseif ($type == 'testimonial') {
			$r = new WP_Query(array( 
				'posts_per_page' => $related_number, 
				'post_status' => 'publish', 
				'ignore_sticky_posts' => 1, 
				'tag__in' => $tgsarray, 
				'post__not_in' => array(get_the_ID()), 
				'post_type' => $type 
			));
		} elseif ($type != 'post' && $type != 'testimonial' && $taxonomy) {
			$r = new WP_Query(array( 
				'posts_per_page' => $related_number, 
				'post_status' => 'publish', 
				'ignore_sticky_posts' => 1, 
				'tax_query' => array( 
					array( 
						'taxonomy' => $taxonomy, 
						'field' => 'term_id', 
						'terms' => $tgsarray 
					) 
				), 
				'post__not_in' => array(get_the_ID()), 
				'post_type' => $type 
			));
		}
		
		echo '<aside class="related_posts">' . "\n" . 
			'<h2>';
			if ($type == 'post') {
				echo __('More posts', 'cmsmasters');
			} elseif ($type == 'testimonial') {
				echo __('More testimonials', 'cmsmasters');
			} else {
				echo __('More projects', 'cmsmasters');
			}
			echo '</h2>' . "\n" . 
			'<ul>' . "\n\t";
		
		if ($related_box && !empty($tgsarray) && $r->have_posts()) {
			echo '<li>' . "\n\t\t" . 
				'<a href="#" class="button_small current">' . __('Related', 'cmsmasters') . '</a>' . "\r\t" . 
			'</li>' . "\n\t";
		}
		
		if ($popular_box) {
			echo '<li>' . "\n\t\t" . 
				'<a href="#" class="button_small';
			
			if (!$related_box || empty($tgsarray) || !$r->have_posts()) {
				echo ' current';
			}
			
			echo '">' . __('Popular', 'cmsmasters') . '</a>' . "\r\t" . 
			'</li>' . "\n\t";
		}
		
		if ($recent_box) {
			echo '<li>' . "\n\t\t" . 
				'<a href="#" class="button_small';
			
			if ((!$related_box || empty($tgsarray) || !$r->have_posts()) && !$popular_box) {
				echo ' current';
			}
			
			echo '">' . __('Latest', 'cmsmasters') . '</a>' . "\r\t" . 
			'</li>' . "\n\t";
		}
		
		echo '</ul>' . "\n" . 
		'<div class="related_posts_content">' . "\n";
		
		if ($related_box && !empty($tgsarray) && $r->have_posts()) {
			echo '<div class="related_posts_content_tab" style="display:block;">' . "\n";
			
			if ($type == 'post') {
				$related = new WP_Query(array( 
					'posts_per_page' => $related_number, 
					'post_status' => 'publish', 
					'ignore_sticky_posts' => 1, 
					'tag__in' => $tgsarray, 
					'post__not_in' => array(get_the_ID()), 
					'post_type' => $type 
				));
			} elseif ($type == 'testimonial') {
				$related = new WP_Query(array( 
					'posts_per_page' => $related_number, 
					'post_status' => 'publish', 
					'ignore_sticky_posts' => 1, 
					'tag__in' => $tgsarray, 
					'post__not_in' => array(get_the_ID()), 
					'post_type' => $type 
				));
			} elseif ($type != 'post' && $type != 'testimonial' && $taxonomy) {
				$related = new WP_Query(array( 
					'posts_per_page' => $related_number, 
					'post_status' => 'publish', 
					'ignore_sticky_posts' => 1, 
					'tax_query' => array( 
						array( 
							'taxonomy' => $taxonomy, 
							'field' => 'term_id', 
							'terms' => $tgsarray 
						) 
					), 
					'post__not_in' => array(get_the_ID()), 
					'post_type' => $type 
				));
			}
			
			if ($related->have_posts()) :
				$numb = 0;
				
				while ($related->have_posts()) : $related->the_post();
					$numb++;
					
					if ($numb % 2) {
						echo '<div class="one_half">' . "\n";
					} else {
						echo '<div class="one_half last">' . "\n";
					}
					
					echo '<div class="rel_post_content">' . "\n";
					
					cmsms_thumb_small(get_the_ID(), $type);
					
					echo '<h6>' . "\n\t" . 
							'<a href="' . get_permalink() . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . "\r" . 
						'</h6>' . "\r" . 
					'</div>' . "\n";
					
					if ($numb % 2) {
						echo '</div>' . "\n";
					} else {
						echo '</div>' . "\n" . 
						'<div class="cl"></div>' . "\n"; 
					}
				endwhile;
			else :
				echo '<h6>';
				if ($type == 'post') {
					echo __('No Related Posts Found', 'cmsmasters');
				} elseif ($type == 'testimonial') {
					echo __('No Related Testimonials Found', 'cmsmasters');
				} else {
					echo __('No Related Projects Found', 'cmsmasters');
				}
				echo '</h6>' . "\n";
			endif;
			
			wp_reset_postdata();
			
			echo '</div>' . "\n";
		} 
		
		if ($popular_box) {
			echo '<div class="related_posts_content_tab"';
			
			if (!$related_box || empty($tgsarray) || !$r->have_posts()) {
				echo ' style="display:block;"';
			}
			
			echo '>' . "\n";
			
			$popular = new WP_Query(array( 
				'posts_per_page' => $related_number, 
				'post_status' => 'publish', 
				'ignore_sticky_posts' => 1, 
				'order' => 'DESC', 
				'orderby' => 'meta_value', 
				'meta_key' => 'cmsms_likes', 
				'post__not_in' => array(get_the_ID()), 
				'post_type' => $type 
			));
			
			if ($popular->have_posts()) :
				$numb = 0;
				
				while ($popular->have_posts()) : $popular->the_post();
					$numb++;
					
					if ($numb % 2) {
						echo '<div class="one_half">' . "\n";
					} else {
						echo '<div class="one_half last">' . "\n";
					}
					
					echo '<div class="rel_post_content">' . "\n";
					
					cmsms_thumb_small(get_the_ID(), $type);
					
					echo '<h6>' . "\n\t" . 
							'<a href="' . get_permalink() . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . "\r" . 
						'</h6>' . "\n" . 
					'</div>' . "\n";
					
					if ($numb % 2) {
						echo '</div>' . "\n";
					} else {
						echo '</div>' . "\n" . 
						'<div class="cl"></div>' . "\n";
					}
				endwhile;
			else :
				echo '<h6>';
				if ($type == 'post') {
					echo __('No Popular Posts Found', 'cmsmasters');
				} elseif ($type == 'testimonial') {
					echo __('No Popular Testimonials Found', 'cmsmasters');
				} else {
					echo __('No Popular Projects Found', 'cmsmasters');
				}
				echo '</h6>' . "\n";
			endif;
			
			wp_reset_postdata();
			
			echo '</div>' . "\n";
		}
		
		if ($recent_box) { 
			echo '<div class="related_posts_content_tab"';
			
			if ((!$related_box || empty($tgsarray) || !$r->have_posts()) && !$popular_box) {
				echo ' style="display:block;"';
			}
			
			echo '>' . "\n";
			
			$recent = new WP_Query(array( 
				'posts_per_page' => $related_number, 
				'post_status' => 'publish', 
				'ignore_sticky_posts' => 1, 
				'post__not_in' => array(get_the_ID()), 
				'post_type' => $type 
			));
			
			if ($recent->have_posts()) :
				$numb = 0;
				
				while ($recent->have_posts()) : $recent->the_post();
					$numb++;
					
					if ($numb % 2) {
						echo '<div class="one_half">' . "\n";
					} else {
						echo '<div class="one_half last">' . "\n";
					}
					
					echo '<div class="rel_post_content">' . "\n";
					
					cmsms_thumb_small(get_the_ID(), $type);
					
					echo '<h6>' . "\n\t" . 
							'<a href="' . get_permalink() . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . "\r" . 
						'</h6>' . "\n" . 
					'</div>' . "\n";
					
					if ($numb % 2) {
						echo '</div>' . "\n";
					} else {
						echo '</div><div class="cl"></div>' . "\n"; 
					}
				endwhile;
			else :
				echo '<h6>';
				if ($type == 'post') {
					echo __('No Latest Posts Found', 'cmsmasters');
				} elseif ($type == 'testimonial') {
					echo __('No Latest Testimonials Found', 'cmsmasters');
				} else {
					echo __('No Latest Projects Found', 'cmsmasters');
				}
				echo '</h6>' . "\n";
			endif;
			
			wp_reset_postdata(); 
			
			echo '</div>' . "\n";
		}
		
		echo '</div>' . "\n" . 
		'</aside>' . "\n";
	}
}



/* Get Embedded Video Function */
function get_video_iframe($url, $text = null) {
    preg_match('/^(http:\/\/)(www\.)?([^\/]+)(\.com)/i', $url, $matches);
    
    if ($matches[3] == 'youtube') {
        preg_match('/^(http:\/\/)?(www\.)?youtube\.com\/(watch\?v=)?(v\/)?([^&]+)/i', $url, $matches);
        
        $match = $matches[5];
        
        return '<iframe src="http://www.youtube.com/embed/' . $match . '?rel=0&amp;showinfo=0&amp;hd=1&amp;fs=1&amp;wmode=transparent" class="fullwidth" frameborder="0" allowfullscreen></iframe>';
    } elseif ($matches[3] == 'vimeo') {
        preg_match('/^(http:\/\/)?(www\.)?vimeo\.com\/([^\/]+)/i', $url, $matches);
        
        $match = $matches[3];
        
        return '<iframe src="http://player.vimeo.com/video/' . $match . '?title=0&amp;byline=0&amp;portrait=0&amp;hd=1&amp;wmode=transparent" class="fullwidth" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
    } elseif ($matches[3] == 'dailymotion') {
        preg_match('/^(http:\/\/)?(www\.)?dailymotion\.com\/(video\/)?([^_]+)/i', $url, $matches);
        
        $match = $matches[4];
        
        return '<iframe src="http://www.dailymotion.com/embed/video/' . $match . '?hideInfos=1&amp;logo=0&amp;forcedQuality=hd&amp;wmode=transparent" class="fullwidth" frameborder="0" allowFullScreen></iframe>';
    } elseif ($matches[3] == 'screenr') {
        preg_match('/^(http:\/\/)?(www\.)?screenr\.com\/([^\/]+)/i', $url, $matches);
        
        $match = $matches[3];
        
        return '<iframe src="http://www.screenr.com/embed/' . $match . '?wmode=transparent" class="fullwidth" frameborder="0" allowFullScreen></iframe>';
    } else {
		if ($text) {
			return $text;
		} else {
			return '<br /><h2 style="text-align:center;">' . __('Unknown type of the video. Check your video link.', 'cmsmasters') . '</h2><br />';
		}
    }
}

