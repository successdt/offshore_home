<?php 
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.1.1
 * 
 * Fonts & Colors Settings File
 * Created by CMSMasters
 * 
 */


header('Content-type: text/css');


require('../../../../wp-load.php');


$cmsms_option = cmsms_get_global_options();

?>

/* ===================> Fonts <================== */

/* ====> Content <==== */

body, 
li p,
.cmsms_sitemap > li ul > li ul li > a, 
.entry-content, 
.tabs li a, 
.tour li a, 
.cmsms_details_links, 
.cmsms_details_links *, 
.project ul.project_details li div {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_content_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_style']; ?>;
}

.comment-body .cmsms-edit, 
.comment-reply-link, 
.cmsmsLike span {
	font-family:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo (($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_content_font_system_font'];
	?>;
}

table.table th {
	font-family:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo (($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_content_font_system_font'];
	?>;
}

.colored_button, 
.cmsms_info .cmsms_post_year, 
.cmsms_info .cmsms_post_day, 
.skill_item_colored_wrap, 
.cmsms_pricing_table .title, 
.cmsms_pricing_table .currency, 
.cmsms_pricing_table .price, 
.cmsms_pricing_table .period, 
.cmsms_pricing_table .coins {
	font-family:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'];
	?>;
}

.portfolio.two_columns .portfolio_inner .project_rollover .entry-header .entry-title, 
.portfolio.two_columns .portfolio_inner .project_rollover .entry-header .entry-title a, 
.portfolio.one_column .portfolio_inner .project_rollover .entry-header .entry-title, 
.portfolio.one_column .portfolio_inner .project_rollover .entry-header .entry-title a {
    font-size:18px;
    line-height:18px;
}

.portfolio.two_columns .portfolio_inner .project_rollover .entry-meta,
.portfolio.two_columns .portfolio_inner .project_rollover .entry-meta a, 
.portfolio.one_column .portfolio_inner .project_rollover .entry-meta,
.portfolio.one_column .portfolio_inner .project_rollover .entry-meta a {font-size:13px;}

/* ====> Links <==== */

a {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_link_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_link_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_link_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_style']; ?>;
}

/* ====> Navigation <==== */

#navigation > li > a {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_style']; ?>;
}

#navigation ul li a {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_style']; ?>;
}


/* ====> Headings <==== */

h1,
h1 a,
.logo .title {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_style']; ?>;
}

h2,
h2 a, 
.cmsms_sitemap > li > a, 
.error h2, 
#reply-title {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h2_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h2_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h2_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_style']; ?>;
}

h3,
h3 a {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h3_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h3_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h3_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_style']; ?>;
}

h4,
h4 a, 
h1.widgettitle {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h4_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_style']; ?>;
}

h5,
h5 a, 
.widgettitle {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_h5_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h5_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_style']; ?>;
}

h6,
h6 a, 
.tog, 
.tog:hover,
.tog.current, 
.widget_portfolio_link, 
.related_posts_content .one_half > p, 
.related_posts_content .one_half > p a, 
.cmsms_shortcode_testimonials blockquote, 
.cmsms_sitemap > li ul > li > a {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_h6_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_h6_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_style']; ?>;
}


/* ====> Other <==== */

q, 
blockquote,
.post.format-aside h6.entry-content {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_quote_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_quote_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_style']; ?>;
}

.cmsms_shortcode_testimonials blockquote, 
q:before, 
blockquote:before {
	font-family:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo (($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_quote_font_system_font'];
	?>;
}

.tl-content:before, 
.tl-content:after, 
q:before, 
blockquote:before, 
.blog .post.format-quote .entry-header:before {
	font-family:'Droid Serif',serif;
	line-height:1.5;
	font-style:italic;
	font-weight:bold;
}

q:before, 
blockquote:before, 
.tl-content:before, 
.tl-content:after, 
.blog .post.format-quote .entry-header:before, 
.testimonial .tl-content blockquote:before, 
.opened-article .testimonial blockquote:before {
	font-size:30px;
}

span.dropcap {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_font_style']; ?>;
}

span.dropcap2 {
	font-size:42px;
	line-height:42px;
}

code {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_code_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_code_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_code_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_code_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_code_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_code_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_code_font_font_style']; ?>;
}

small,
small a,
#wp-calendar caption, 
.tweet_text a, 
abbr,
abbr a, 
.tab.lpr .tabs_tab strong, 
.cmsms_category *, 
.post .entry-header .cmsms_post_info span, 
.testimonial a.tl_company, 
.post .entry-header .cmsms_post_info *,
.post .entry-header .cmsms_post_info .user_name,
.post .entry-header .cmsms_post_info .published,
.post .entry-header .cmsms_post_info .post-categories,
.post_type_shortcode article .project_rollover .entry-meta .post_category a, 
.testimonial .tl_company, 
.testimonial .cmsms_tl_cat, 
.testimonial .cmsms_tl_cat a, 
.testimonial .tl_comments_wrap, 
.testimonial .tl_comments_wrap a, 
.testimonial .published, 
.post.format-quote .cmsms_author,
#comments .comment-body .published, 
.comment-body .comment-edit-link, 
.cmsms_tags *, 
.cmsms_tags, 
.cmsms_tags li, 
.cmsms_tags li a,
.cmsms_post_info span,  
.project ul.project_details li span.fl, 
.widget_custom_recent_testimonials_entries p, 
.tweet_text, 
.entry .project_navi span a, 
.cmsms_share, 
.tab.lpr .tabs_tab abbr, 
.headline p, 
.wp-caption-text, 
.pj_sort .button, 
.pj_sort .button_small, 
.pj_filter li a, 
.pj_filter a.pj_cat_filter, 
#cancel-comment-reply-link,
input[type="submit"] {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_small_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_small_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_style']; ?>;
}

.skill_item_colored > span, 
.comment-reply-link, 
.tab.lpr .tabs li a {
	font-family:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo (($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_small_font_system_font'];
	?>;
}

.comment-reply-link, 
.tab.lpr .tabs li a {
	font-size:11px;
	line-height:18px;
}
	
input,
input[type="submit"],
textarea,
select,
option,
label, 
.cmsms_select span, 
.cmsms-form-builder p, 
.cmsms-form-builder .check_parent input[type="checkbox"]+label,
.cmsms-form-builder .check_parent input[type="radio"]+label {
	font:<?php 
		if ($cmsms_option[CMSMS_SHORTNAME . '_input_font_google_font'] != '') {
			$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_input_font_google_font']);
			
			$google_font = str_replace('+', ' ', $google_font_array[0]);
		} else {
			$google_font = '';
		}
		
		echo $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_size'] . 
		'px/' . 
		$cmsms_option[CMSMS_SHORTNAME . '_input_font_line_height'] . 
		'px ' . 
		(($google_font != '') ? "'" . $google_font . "', " : '') . 
		$cmsms_option[CMSMS_SHORTNAME . '_input_font_system_font'];
	?>;
	font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_weight']; ?>;
	font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_style']; ?>;
}


/* ===================> Colors <================== */

/* ====> Content <==== */

body,  
.project ul.project_details li.published div, 
.project_sidebar .cmsms_like span,
.cmsmsLike span,
.tabs li a:hover, 
.tab.lpr .tabs li a:hover,
.tab.lpr .tabs li.current a,
.button.current, 
.button_small.current, 
.pj_filter_container:hover > a.pj_cat_filter, 
input[type="submit"]:hover, 
.button.current:hover, 
.button:hover, 
.button_small:hover, 
.button_medium.current, 
.button_medium:hover, 
.button_large.current, 
.button_large:hover {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_color']; ?>;
}

.comment-reply-link, 
.button,
.pricing_button,
.button_small, 
.button_medium,
.button_large, 
.bottom_inner .button, 
.bottom_inner .button_small, 
.bottom_inner .button_medium,
.bottom_inner .button_large, 
.pj_sort_block .button_medium.current,
.pj_sort_block .button_large.current, 
.featured_block, 
.colored_button, 
.colored_button:hover, 
.colored_title_inner *, 
.colored_banner *, 
.portfolio_inner .project_rollover *, 
.post_type_shortcode .project_rollover *, 
#cancel-comment-reply-link,
input[type="submit"], 
.cmsms_pricing_table .cmsms_price_outer *, 
.percent_item_colored > span, 
.cmsms_info .cmsmsLike span, 
.cmsms_team_rollover * {color:#ffffff;}

.bottom_inner h1, 
.bottom_inner h2.widgettitle, 
.bottom_inner h3, 
.bottom_inner h4, 
.bottom_inner h5, 
.bottom_inner h6 {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_headings_color']; ?>;
}

.bottom_inner, 
.bottom_inner .widget_portfolio_link, 
.bottom_inner code, 
.bottom_inner small, 
.bottom_inner abbr {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_content_font_color']; ?>;
}

/* ====> Links <==== */

.tabs li a,
.tab.lpr .tabs li a,  
ul.pj_filter_list li a, 
.portfolio_inner .project_rollover .entry-header .entry-title *,
.post_type_shortcode .project_rollover .entry-header .entry-title *,
.portfolio_inner .project_rollover .entry-header .entry-title a:hover, 
.post_type_shortcode .project_rollover .entry-header .entry-title a:hover, 
.portfolio_inner .project_rollover .entry-meta .cmsms_category a:hover, 
.post_type_shortcode .project_rollover .entry-meta .post_category a:hover {color:#ffffff;}

.bottom_inner .button:hover,
.bottom_inner .button_small:hover,
.bottom_inner .button_medium:hover,
.bottom_inner .button_large:hover, 
.bottom_inner .tab.lpr .tabs li a:hover, 
.bottom_inner .tab.lpr .tabs li.current a, 
.bottom_inner input[type="submit"]:hover {color:#d4d6d6;}

a, 
.cmsms_sitemap > li ul > li ul li > a,
.cms_archive li a, 
.jp-playlist li.jp-playlist-current div a, 
.post .entry-header .cmsms_post_info .published, 
ul.pj_filter_list li a:hover, 
ul.pj_filter_list li.current a, 
.jp-playlist li div a, 
.project_sidebar .cmsmsLike span:hover, 
.project_sidebar .cmsmsLike.active span, 
.project_sidebar .cmsmsLike.active span:hover, 
.cmsmsLike span:hover, 
.opened-article .cmsmsLike.active span, 
.rel_post_content a:hover, 
.jp-playlist li div a:hover, 
#wp-calendar #today, 
.color2,
q:before, 
blockquote:before,  
.blog .post.format-quote .entry-header:before, 
.cmsms_info .cmsmsLike.active:hover span, 
.color_3 {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_color']; ?>;
}

a:hover, 
.tabs li.current a, 
.jp-playlist li div a, 
.cmsms_sitemap > li ul > li ul li > a:hover, 
.cms_archive li a:hover {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_link_font_hover']; ?>;
}

.bottom_inner a, 
.bottom_inner .widget_links ul li a, 
.bottom_inner .footer_nav li a, 
.bottom_inner .widget_links ul li a, 
.bottom_inner .portfolio_inner .entry-title a, 
.bottom_inner abbr a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_content_link_font_color']; ?>;
}

.bottom_inner a:hover, 
.p_filter li a:hover, 
.related_posts_content div p a:hover, 
.bottom_inner .widget_links ul li a:hover, 
.bottom_inner .footer_nav li a:hover, 
.cmsms_shortcode_testimonials .cmsms_tags li a:hover, 
.entry-title a:hover {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_bottom_content_link_font_hover_color']; ?>;
}

/* ====> Navigation <==== */

#navigation li > a, 
#navigation li.current_page_item > a,
#navigation li.current_page_ancestor > a,
#navigation li.current-menu-ancestor > a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_color']; ?>;
}

#navigation li:hover > a:hover, 
#navigation li:hover > a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_hover']; ?>;
}

#navigation li li > a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_color']; ?>;
}

#navigation li li.current_page_item > a,
#navigation li li.current-menu-ancestor > a,
#navigation li li:hover > a:hover, 
#navigation ul li:hover > a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_hover']; ?>;
}


/* ====> Headings <==== */

h1,
h1 a, 
.logo {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_color']; ?>;
}

h2,
h2 a, 
#reply-title {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_color']; ?>;
}

h3, 
h3 a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_color']; ?>;
}

h4,
h4 a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_color']; ?>;
}

h5, 
h5 a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_color']; ?>;
}

h6,
h6 a, 
.tour li a, 
.accordion .acc a, 
.toggles .togg a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_color']; ?>;
}


/* ====> Other <==== */

q, 
blockquote {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_color']; ?>;
}

span.dropcap {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_dropcap_font_font_color']; ?>;
}

span.dropcap2 {
	color:#727A7E;
}

code {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_code_font_font_color']; ?>;
}

small, 
abbr {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_color']; ?>;
}

input, 
textarea, 
select, 
option, 
select option {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_color']; ?>;
}

input[type="text"]:focus,
input[type="password"]:focus, 
textarea:focus,
select option:hover,
select option:focus,
select:focus,
select:focus option {color:#ffffff;}

/* ====> Footer Content <==== */

#footer {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_footer_font_color']; ?>;
}

/* ====> Footer Links <==== */

#footer a,
#footer h1 a, 
#footer h2 a, 
#footer h3 a, 
#footer h4 a, 
#footer h5 a, 
#footer h6 a, 
#footer .footer_nav > li a {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_footer_link_font_color']; ?>;
}

#footer a:hover,
#footer h1 a:hover, 
#footer h2 a:hover, 
#footer h3 a:hover, 
#footer h4 a:hover, 
#footer h5 a:hover, 
#footer h6 a:hover, 
#footer .footer_nav > li.current-menu-ancestor a,
#footer .footer_nav > li.current_page_item a,
#footer .footer_nav > li a:hover {
	color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_footer_font_hover']; ?>;
}


/* ===================> Backgrounds and Borders <================== */

.button.current,  
.button_small.current,  
.button_medium.current, 
.button_large.current, 
.comment-reply-link:hover, 
.button_small.cmsms_share:hover, 
.pj_filter_container:hover > a.pj_cat_filter,
.pj_sort a:hover, 
.pj_sort a.current, 
.button:hover, 
.button_small:hover, 
.tabs li a:hover, 
.tab.lpr .tabs li a:hover, 
.tabs li a.current, 
.tab.lpr .tabs li.current a, 
.button_medium:hover, 
.button_large:hover, 
input[type="submit"]:hover, 
.cmsms_content_block_hover:hover {background-color:#F8F8F8;}

.cmsms_pricing_table .pricing_footer .pricing_button:hover {background-color:#F8F8F8 !important;}

.bottom_inner .comment-reply-link:hover,
.bottom_inner .tabs li a:hover, 
.bottom_inner .tab.lpr .tabs li a:hover, 
.bottom_inner .tab.lpr .tabs li.current a, 
.bottom_inner .button_small:hover,
.bottom_inner .button_medium:hover,
.bottom_inner .button_large:hover, 
.bottom_inner input[type="submit"]:hover {background-color:#495459;}

.search_line input[type="submit"]:hover {background-color:transparent;}
	
.cmsms_plus {background-color:#3A454B;}

.cmsmsLike:hover, 
.cmsmsLike.active, 
.cmsms_info .cmsmsLike, 
.cmsms_info .cmsmsLike:hover, 
.cmsms_content_slider_parent ul.cmsms_slides_nav li a:hover,
.cmsms_content_slider_parent ul.cmsms_slides_nav li.active a, 
.bottom_inner .cmsms_content_slider_parent ul.cmsms_slides_nav li a:hover,
.bottom_inner .cmsms_content_slider_parent ul.cmsms_slides_nav li.active a, 
a.cmsms_content_next_slide:hover, 
.bottom_inner a.cmsms_content_next_slide:hover, 
a.cmsms_content_prev_slide:hover, 
.bottom_inner a.cmsms_content_prev_slide:hover, 
.responsive_nav span, 
span.dropcap,
.comment-reply-link,
#slide_top, 
.button, 
.button_small, 
.button_medium,
.button_large, 
#cancel-comment-reply-link,
input[type="submit"], 
a.cmsms_content_prev_slide:hover, 
a.cmsms_content_next_slide:hover, 
.tp-bullets.simplebullets.round .bullet:hover, 
.tp-bullets.simplebullets.round .bullet.selected, 
.tp-leftarrow.tparrows:hover, 
.tp-rightarrow.tparrows:hover, 
input[type="text"]:focus,
input[type="password"]:focus, 
textarea:focus,
select option:hover, 
select option:focus,
select:focus, 
select:focus option,  
.table thead, 
.tabs li a, 
.colored_title_inner, 
.table thead tr, 
#cancel-comment-reply-link {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?>;
}

code {
	border-top-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?>;
}

.cmsmsLike {
	border-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_theme_color']; ?>;
}

.bottom_inner input[type="text"]:focus,
.bottom_inner input[type="password"]:focus, 
.bottom_inner textarea:focus,
.bottom_inner select:focus, 
.bottom_inner select:focus option {
	border:1px solid #495459;
	border:1px solid rgba(255, 255, 255, .08);
}

.post .cmsms_tags li a:hover:before,
.related_posts_content a img {
	border-color:#ebebeb;
	border-color:rgba(255, 255, 255, .08);
}

code {border-color:#ededed;}

.glow_blue {background:#33bee5;}

.glow_green {background:#6cc437;}

.glow_yellow {background:#fabe09;}

.glow_red {background:#f97a14;}

.colored_title_inner.glow_blue {background-color:#33bee5;}

.colored_title_inner.glow_green {background-color:#6cc437;}

.colored_title_inner.glow_yellow {background-color:#fabe09;}

.colored_title_inner.glow_red {background-color:#f97a14;}


@media only screen and (min-width: 950px) and (max-width: 1439px) {
	
	.portfolio.three_columns .portfolio_inner .project_rollover .entry-meta .cmsms_category a, 
	.portfolio.two_columns .portfolio_inner .project_rollover .entry-meta .cmsms_category a {
		font-size:12px;
	}
	
	.portfolio.two_columns .portfolio_inner .project_rollover .entry-header .entry-title a {
		font-size:16px;
	}
	
}


@media only screen and (max-width: 1024px) {

	#navigation li > a {
		color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_color']; ?>;
	}
	
	#navigation ul li a {
		font:<?php 
			if ($cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_google_font'] != '') {
				$google_font_array = explode(':', $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_google_font']);
				
				$google_font = str_replace('+', ' ', $google_font_array[0]);
			} else {
				$google_font = '';
			}
			
			echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] . 
			'px/' . 
			$cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] . 
			'px ' . 
			(($google_font != '') ? "'" . $google_font . "', " : '') . 
			$cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_system_font'];
		?>;
		font-weight:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_weight']; ?>;
		font-style:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_style']; ?>;
	}

}


@media only screen and (max-width: 950px) {
	
	.portfolio.three_columns .portfolio_inner .project_rollover .entry-meta .cmsms_category a, 
	.portfolio.two_columns .portfolio_inner .project_rollover .entry-meta .cmsms_category a {font-size:12px;}
	
	.portfolio.two_columns .portfolio_inner .project_rollover .entry-header .entry-title a {font-size:16px;}
	
}


@media only screen and (max-width: 768px) {
	
	.portfolio.two_columns .portfolio_inner .project_rollover .entry-header .entry-title, 
	.portfolio.two_columns .portfolio_inner .project_rollover .entry-header .entry-title a, 
	.portfolio.one_column .portfolio_inner .project_rollover .entry-header .entry-title, 
	.portfolio.one_column .portfolio_inner .project_rollover .entry-header .entry-title a {
		font-size:18px;
		line-height:18px;
	}
	
	.portfolio.two_columns .portfolio_inner .project_rollover .entry-meta,
	.portfolio.two_columns .portfolio_inner .project_rollover .entry-meta a, 
	.portfolio.one_column .portfolio_inner .project_rollover .entry-meta,
	.portfolio.one_column .portfolio_inner .project_rollover .entry-meta a {font-size:13px;}

}


@media only screen and (min-width: 401px) and (max-width: 540px) {
	
	.project_rollover .entry-header .entry-title, 
	.project_rollover .entry-header .entry-title a, 
	.portfolio.three_column .portfolio_inner .project_rollover .entry-header .entry-title, 
	.portfolio.three_column .portfolio_inner .project_rollover .entry-header .entry-title a {
		font-size:18px;
		line-height:18px;
	}
	
	.post_type_shortcode article .project_rollover .entry-meta .post_category a, 
	.project_rollover .entry-meta,
	.project_rollover .entry-meta a, 
	.portfolio.three_column .portfolio_inner .project_rollover .entry-meta,
	.portfolio.three_column .portfolio_inner .project_rollover .entry-meta a {font-size:13px;}

}


/* ===================> Navigation Hover Background Colors <================== */

#navigation > li:hover, 
#navigation > li.current_page_item > a, 
#navigation > li.current-menu-ancestor > a, 
.tour  > li a:hover, 
.tour  > li.current a {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg_color_1']; ?>;
}

#navigation > li + li:hover, 
#navigation > li + li.current_page_item > a, 
#navigation > li + li.current-menu-ancestor > a, 
.tour  > li + li a:hover, 
.tour  > li + li.current a {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg_color_2']; ?>;
}

#navigation > li + li + li:hover, 
#navigation > li + li + li.current_page_item > a, 
#navigation > li + li + li.current-menu-ancestor > a, 
.tour  > li + li + li a:hover, 
.tour  > li + li + li.current a {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg_color_3']; ?>;
}

#navigation > li + li + li + li:hover, 
#navigation > li + li + li + li.current_page_item > a, 
#navigation > li + li + li + li.current-menu-ancestor > a, 
.tour  > li + li + li + li a:hover, 
.tour  > li + li + li + li.current a {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg_color_4']; ?>;
}

#navigation > li + li + li + li + li:hover, 
#navigation > li + li + li + li + li.current_page_item > a, 
#navigation > li + li + li + li + li.current-menu-ancestor > a, 
.tour  > li + li + li + li + li a:hover, 
.tour  > li + li + li + li + li.current a {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg_color_5']; ?>;
}

#navigation > li + li + li + li + li + li:hover, 
#navigation > li + li + li + li + li + li.current_page_item > a, 
#navigation > li + li + li + li + li + li.current-menu-ancestor > a, 
.tour  > li + li + li + li + li + li a:hover, 
.tour  > li + li + li + li + li + li.current a {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg_color_6']; ?>;
}

#navigation > li + li + li + li + li + li + li:hover, 
#navigation > li + li + li + li + li + li + li.current_page_item > a, 
#navigation > li + li + li + li + li + li + li.current-menu-ancestor > a, 
.tour  > li + li + li + li + li + li + li a:hover, 
.tour  > li + li + li + li + li + li + li.current a {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg_color_7']; ?>;
}

#navigation > li + li + li + li + li + li + li + li:hover, 
#navigation > li + li + li + li + li + li + li + li.current_page_item > a, 
#navigation > li + li + li + li + li + li + li + li.current-menu-ancestor > a, 
.tour  > li + li + li + li + li + li + li + li a:hover, 
.tour  > li + li + li + li + li + li + li + li.current a {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg_color_8']; ?>;
}

#navigation > li + li + li + li + li + li + li + li + li:hover, 
#navigation > li + li + li + li + li + li + li + li + li.current_page_item > a, 
#navigation > li + li + li + li + li + li + li + li + li.current-menu-ancestor > a, 
.tour  > li + li + li + li + li + li + li + li + li a:hover, 
.tour  > li + li + li + li + li + li + li + li + li.current a {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg_color_9']; ?>;
}

#navigation > li + li + li + li + li + li + li + li + li + li:hover, 
#navigation > li + li + li + li + li + li + li + li + li + li.current_page_item > a, 
#navigation > li + li + li + li + li + li + li + li + li + li.current-menu-ancestor > a, 
.tour  > li + li + li + li + li + li + li + li + li + li a:hover, 
.tour  > li + li + li + li + li + li + li + li + li + li.current a {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_nav_title_bg_color_10']; ?>;
}

/* ===================> Post Formats Icons Colors <================== */

.format-standard .cmsms_post_format_img, 
.format-standard .project_rollover {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_standard_post_format_img']; ?>;
}

.format-aside .cmsms_post_format_img, 
.format-aside .project_rollover {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_aside_post_format_img']; ?>;
}

.format-quote .cmsms_post_format_img, 
.format-quote .project_rollover {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_quote_post_format_img']; ?>;
}

.format-link .cmsms_post_format_img, 
.format-link .project_rollover {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_link_post_format_img']; ?>;
}

.format-image .cmsms_post_format_img, 
.format-image .project_rollover {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_image_post_format_img']; ?>;
}

.format-gallery .cmsms_post_format_img, 
.format-gallery .project_rollover {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_gallery_post_format_img']; ?>;
}

.blog .format-video .cmsms_post_format_img, 
.format-video .project_rollover {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_video_post_format_img']; ?>;
}

.format-audio .cmsms_post_format_img, 
.format-audio .project_rollover {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_audio_post_format_img']; ?>;
}

/* ================> Portfolio Project Formats Colors <=============== */

.format-album .project_rollover {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_project_album_color']; ?>;
}

.format-slider .project_rollover {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_project_slider_color']; ?>;
}

.format-video .project_rollover {
	background-color:<?php echo $cmsms_option[CMSMS_SHORTNAME . '_project_video_color']; ?>;
}

/* =================> Social Icons Background Colors <================ */

#header .social_icons li {
	background-color:#e2e3e4;
	background-color:rgba(58, 69, 75, 0.15);
}

#footer .social_icons li {
	background-color:#495459;
	background-color:rgba(255, 255, 255, 0.08);
}

<?php 
$i = 1;

foreach ($cmsms_option[CMSMS_SHORTNAME . '_social_icons'] as $cmsms_social_icons) {
	$cmsms_social_icon = explode('|', str_replace(' ', '', $cmsms_social_icons));
	
	echo '#header .social_icons li:nth-child(' . $i . '):hover, #footer .social_icons li:nth-child(' . $i . '):hover {background-color:' . $cmsms_social_icon[1] . ';}' . "\n";
	
	$i++;
}
?>
