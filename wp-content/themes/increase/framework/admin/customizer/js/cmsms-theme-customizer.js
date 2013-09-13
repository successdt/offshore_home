/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Theme Customizer Scripts
 * Created by CMSMasters
 * 
 */


(function ($) { 
	// General Options Theme Color
	wp.customize('cmsms_options_increase_general[increase_theme_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_theme_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_theme_color"> ' + 
				'.cmsmsLike:hover, ' + 
				'.cmsmsLike.active, ' + 
				'.cmsms_info .cmsmsLike, ' + 
				'.cmsms_info .cmsmsLike:hover, ' + 
				'.cmsms_content_slider_parent ul.cmsms_slides_nav li a:hover, ' + 
				'.cmsms_content_slider_parent ul.cmsms_slides_nav li.active a, ' + 
				'.bottom_inner .cmsms_content_slider_parent ul.cmsms_slides_nav li a:hover, ' + 
				'.bottom_inner .cmsms_content_slider_parent ul.cmsms_slides_nav li.active a, ' + 
				'a.cmsms_content_next_slide:hover, ' + 
				'.bottom_inner a.cmsms_content_next_slide:hover, ' + 
				'a.cmsms_content_prev_slide:hover, ' + 
				'.bottom_inner a.cmsms_content_prev_slide:hover, ' + 
				'.responsive_nav span, ' + 
				'span.dropcap, ' + 
				'.comment-reply-link, ' + 
				'#slide_top, ' + 
				'.button, ' + 
				'.button_small, ' + 
				'.button_medium, ' + 
				'.button_large, ' + 
				'#cancel-comment-reply-link, ' + 
				'input[type="submit"], ' + 
				'a.cmsms_content_prev_slide:hover, ' + 
				'a.cmsms_content_next_slide:hover, ' + 
				'.tp-bullets.simplebullets.round .bullet:hover, ' + 
				'.tp-bullets.simplebullets.round .bullet.selected, ' + 
				'.tp-leftarrow.round:hover, ' + 
				'.tp-rightarrow.round:hover, ' + 
				'input[type="text"]:focus, ' + 
				'input[type="password"]:focus, ' + 
				'textarea:focus, ' + 
				'select option:hover, ' + 
				'select option:focus, ' + 
				'select:focus, ' + 
				'.table thead, ' + 
				'.tabs li a, ' + 
				'.colored_title_inner, ' + 
				'.table thead tr, ' + 
				'#cancel-comment-reply-link {background-color:' + newval + ';} ' + 
				'code { border-top-color:' + newval + ';} ' + 
				'.cmsmsLike { border-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// Header Options Header Height
	wp.customize('cmsms_options_increase_style_header[increase_header_height]', function (value) { 
		value.bind(function (newval) { 
			$('#header > .header_inner').css('height', newval + 'px');
		} );
	} );
	
	// Header Options Header Navigation Top Position
	wp.customize('cmsms_options_increase_style_header[increase_header_nav_top]', function (value) { 
		value.bind(function (newval) { 
			$('#header nav').css('top', newval + 'px');
		} );
	} );
	
	// Header Options Header Navigation Right Position
	wp.customize('cmsms_options_increase_style_header[increase_header_nav_right]', function (value) { 
		value.bind(function (newval) { 
			$('#header nav').css('right', newval + 'px');
		} );
	} );
	
	// Header Options Social Icons Top Position
	wp.customize('cmsms_options_increase_style_header[increase_header_social_top]', function (value) { 
		value.bind(function (newval) { 
			$('#header .wrap_social_icons').css('top', newval + 'px');
		} );
	} );
	
	// Header Options Social Icons Right Position
	wp.customize('cmsms_options_increase_style_header[increase_header_social_right]', function (value) { 
		value.bind(function (newval) { 
			$('#header .wrap_social_icons').css('right', newval + 'px');
		} );
	} );
	
	
	
	// Background Options Background Color
	wp.customize('cmsms_options_increase_style_bg[increase_bg_col]', function (value) { 
		value.bind(function (newval) { 
			$('body').css('background-color', newval);
		} );
	} );
	
	// Background Options Background Image
	wp.customize('cmsms_options_increase_style_bg[increase_bg_img]', function (value) { 
		value.bind(function (newval) { 
			$('body').css('background-image', 'url(' + newval + ')');
		} );
	} );
	
	// Background Options Background Repeat
	wp.customize('cmsms_options_increase_style_bg[increase_bg_rep]', function (value) { 
		value.bind(function (newval) { 
			$('body').css('background-repeat', newval);
		} );
	} );
	
	// Background Options Background Position
	wp.customize('cmsms_options_increase_style_bg[increase_bg_pos]', function (value) { 
		value.bind(function (newval) { 
			$('body').css('background-position', newval);
		} );
	} );
	
	// Background Options Background Attachment
	wp.customize('cmsms_options_increase_style_bg[increase_bg_att]', function (value) { 
		value.bind(function (newval) { 
			$('body').css('background-attachment', newval);
		} );
	} );
	
	
	
	// Logo Options Custom Logo Image Width
	wp.customize('cmsms_options_increase_logo_image[increase_logo_width]', function (value) { 
		value.bind(function (newval) { 
			$('#page .header_inner > a.logo, #page .header_inner > a.logo > img').css('width', newval + 'px');
		} );
	} );
	
	// Logo Options Custom Logo Image Height
	wp.customize('cmsms_options_increase_logo_image[increase_logo_height]', function (value) { 
		value.bind(function (newval) { 
			$('#page .header_inner > a.logo, #page .header_inner > a.logo > img').css('height', newval + 'px');
		} );
	} );
	
	// Logo Options Custom Logo Top Position
	wp.customize('cmsms_options_increase_logo_image[increase_logo_top]', function (value) { 
		value.bind(function (newval) { 
			$('#page .header_inner > a.logo').css('top', newval + 'px');
		} );
	} );
	
	// Logo Options Custom Logo Left Position
	wp.customize('cmsms_options_increase_logo_image[increase_logo_left]', function (value) { 
		value.bind(function (newval) { 
			$('#page .header_inner > a.logo').css('left', newval + 'px');
		} );
	} );
	
	
	
	// Content Font Options System Font
	wp.customize('cmsms_options_increase_font_content[increase_content_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_content_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_content_font_system_font"> ' + 
				'body, ' + 
				'li p, ' + 
				'.cmsms_sitemap > li ul > li ul li > a, ' + 
				'.entry-content, ' + 
				'.tabs li a, ' + 
				'.tour li a, ' + 
				'.cmsms_details_links, ' + 
				'.cmsms_details_links *, ' + 
				'.project ul.project_details li div, ' + 
				'.comment-body .cmsms-edit, ' + 
				'.comment-reply-link, ' + 
				'.cmsmsLike span, ' + 
				'table.table th {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Content Font Options Google Font
	wp.customize('cmsms_options_increase_font_content[increase_content_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_content_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_content_font_google_font"> ' + 
				'body, ' + 
				'li p, ' + 
				'.cmsms_sitemap > li ul > li ul li > a, ' + 
				'.entry-content, ' + 
				'.tabs li a, ' + 
				'.tour li a, ' + 
				'.cmsms_details_links, ' + 
				'.cmsms_details_links *, ' + 
				'.project ul.project_details li div, ' + 
				'.comment-body .cmsms-edit, ' + 
				'.comment-reply-link, ' + 
				'.cmsmsLike span, ' + 
				"table.table th {font-family:'" + newvalResult + "';} " + 
			'</style>');
		} );
	} );
	
	// Content Font Options Font Color
	wp.customize('cmsms_options_increase_font_content[increase_content_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_content_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_content_font_font_color"> ' + 
				'body, ' + 
				'.project ul.project_details li.published div, ' + 
				'.project_sidebar .cmsms_like span, ' + 
				'.cmsmsLike span, ' + 
				'.tabs li a:hover, ' + 
				'.tab.lpr .tabs li a:hover, ' + 
				'.tab.lpr .tabs li.current a, ' + 
				'.button.current, ' + 
				'.button_small.current, ' + 
				'.pj_filter_container:hover > a.pj_cat_filter, ' + 
				'input[type="submit"]:hover, ' + 
				'.button.current:hover, ' + 
				'.button:hover, ' + 
				'.button_small:hover, ' + 
				'.button_medium.current, ' + 
				'.button_medium:hover, ' + 
				'.button_large.current, ' + 
				'.button_large:hover {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Content Font Options Font Size
	wp.customize('cmsms_options_increase_font_content[increase_content_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_content_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_content_font_font_size"> ' + 
				'body, ' + 
				'li p, ' + 
				'.cmsms_sitemap > li ul > li ul li > a, ' + 
				'.entry-content, ' + 
				'.tabs li a, ' + 
				'.tour li a, ' + 
				'.cmsms_details_links, ' + 
				'.cmsms_details_links *, ' + 
				'.project ul.project_details li div {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Content Font Options Line Height
	wp.customize('cmsms_options_increase_font_content[increase_content_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_content_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_content_font_line_height"> ' + 
				'body, ' + 
				'li p, ' + 
				'.cmsms_sitemap > li ul > li ul li > a, ' + 
				'.entry-content, ' + 
				'.tabs li a, ' + 
				'.tour li a, ' + 
				'.cmsms_details_links, ' + 
				'.cmsms_details_links *, ' + 
				'.project ul.project_details li div {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Content Font Options Font Weight
	wp.customize('cmsms_options_increase_font_content[increase_content_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_content_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_content_font_font_weight"> ' + 
				'body, ' + 
				'li p, ' + 
				'.cmsms_sitemap > li ul > li ul li > a, ' + 
				'.entry-content, ' + 
				'.tabs li a, ' + 
				'.tour li a, ' + 
				'.cmsms_details_links, ' + 
				'.cmsms_details_links *, ' + 
				'.project ul.project_details li div {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Content Font Options Font Style
	wp.customize('cmsms_options_increase_font_content[increase_content_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_content_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_content_font_font_style"> ' + 
				'body, ' + 
				'li p, ' + 
				'.cmsms_sitemap > li ul > li ul li > a, ' + 
				'.entry-content, ' + 
				'.tabs li a, ' + 
				'.tour li a, ' + 
				'.cmsms_details_links, ' + 
				'.cmsms_details_links *, ' + 
				'.project ul.project_details li div {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Bottom Headings Font Options Font Color
	wp.customize('cmsms_options_increase_font_content[increase_bottom_headings_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_bottom_headings_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_bottom_headings_color"> ' + 
				'.bottom_inner h1, ' + 
				'.bottom_inner h2.widgettitle, ' + 
				'.bottom_inner h3, ' + 
				'.bottom_inner h4, ' + 
				'.bottom_inner h5, ' + 
				'.bottom_inner h6  {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Bottom Content Font Options Font Color
	wp.customize('cmsms_options_increase_font_content[increase_bottom_content_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_bottom_content_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_bottom_content_font_color"> ' + 
				'.bottom_inner, ' + 
				'.bottom_inner .widget_portfolio_link, ' + 
				'.bottom_inner code, ' + 
				'.bottom_inner small, ' + 
				'.bottom_inner abbr {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// Link Font Options System Font
	wp.customize('cmsms_options_increase_font_link[increase_link_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_link_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_link_font_system_font"> ' + 
				'a {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Link Font Options Google Font
	wp.customize('cmsms_options_increase_font_link[increase_link_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_link_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_link_font_google_font"> ' + 
				"a {font-family:'" + newvalResult + "';} " + 
			'</style>');
		} );
	} );
	
	// Link Font Options Font Color
	wp.customize('cmsms_options_increase_font_link[increase_link_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_link_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_link_font_font_color"> ' + 
				'a, ' + 
				'.cmsms_sitemap > li ul > li ul li > a, ' + 
				'.cms_archive li a, ' + 
				'.jp-playlist li.jp-playlist-current div a, ' + 
				'.post .entry-header .cmsms_post_info .published, ' + 
				'ul.pj_filter_list li a:hover, ' + 
				'ul.pj_filter_list li.current a, ' + 
				'.jp-playlist li div a, ' + 
				'.project_sidebar .cmsmsLike span:hover, ' + 
				'.project_sidebar .cmsmsLike.active span, ' + 
				'.project_sidebar .cmsmsLike.active span:hover, ' + 
				'.cmsmsLike span:hover, ' + 
				'.opened-article .cmsmsLike.active span, ' + 
				'.rel_post_content a:hover, ' + 
				'.jp-playlist li div a:hover, ' + 
				'#wp-calendar #today, ' + 
				'.color2, ' + 
				'q:before, ' + 
				'blockquote:before, ' + 
				'.blog .post.format-quote .entry-header:before, ' + 
				'.color_3 {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Link Font Options Font Hover Color
	wp.customize('cmsms_options_increase_font_link[increase_link_font_hover]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_link_font_hover').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_link_font_hover"> ' + 
				'a:hover, ' + 
				'.tabs li.current a, ' + 
				'.jp-playlist li div a, ' + 
				'.cmsms_sitemap > li ul > li ul li > a:hover, ' + 
				'.cms_archive li a:hover {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Link Font Options Font Size
	wp.customize('cmsms_options_increase_font_link[increase_link_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_link_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_link_font_font_size"> ' + 
				'a {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Link Font Options Line Height
	wp.customize('cmsms_options_increase_font_link[increase_link_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_link_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_link_font_line_height"> ' + 
				'a {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Link Font Options Font Weight
	wp.customize('cmsms_options_increase_font_link[increase_link_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_link_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_link_font_font_weight"> ' + 
				'a {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Link Font Options Font Style
	wp.customize('cmsms_options_increase_font_link[increase_link_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_link_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_link_font_font_style"> ' + 
				'a {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );

	// Bottom Content Link Font Options Font Color
	wp.customize('cmsms_options_increase_font_link[increase_bottom_content_link_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_bottom_content_link_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_bottom_content_link_font_color"> ' + 
				'.bottom_inner a, ' + 
				'.bottom_inner .widget_links ul li a, ' + 
				'.bottom_inner .footer_nav li a, ' + 
				'.bottom_inner .widget_links ul li a, ' + 
				'.bottom_inner .portfolio_inner .entry-title a, ' + 
				'.bottom_inner abbr a {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Bottom Content Link Font Options Font Hover Color
	wp.customize('cmsms_options_increase_font_link[increase_bottom_content_link_font_hover_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_bottom_content_link_font_hover_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_bottom_content_link_font_hover_color"> ' + 
				'.bottom_inner a:hover, ' + 
				'.p_filter li a:hover, ' + 
				'.related_posts_content div p a:hover, ' + 
				'.bottom_inner .widget_links ul li a:hover, ' + 
				'.bottom_inner .footer_nav li a:hover, ' + 
				'.cmsms_shortcode_testimonials .cmsms_tags li a:hover, ' + 
				'.entry-title a:hover {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// Navigation Title Font Options System Font
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_font_system_font"> ' + 
				'#navigation > li > a {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Title Font Options Google Font
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_nav_title_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_font_google_font"> ' + 
				'#navigation > li > a {font-family:' + newvalResult + ';} ' + 
				'@media only screen and (max-width: 950px) { ' + 
					'#navigation > li > a {font-family:' + newvalResult + ';} ' + 
				'} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Title Font Options Font Color
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_font_font_color"> ' + 
				'#navigation li > a, ' + 
				'#navigation li.current_page_item > a, ' + 
				'#navigation li.current_page_ancestor > a, ' + 
				'#navigation li.current-menu-ancestor > a {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Title Font Options Font Hover Color
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_font_hover]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_font_hover').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_font_hover"> ' + 
				'#navigation li:hover > a:hover, ' + 
				'#navigation li:hover > a {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Title Font Options Font Size
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_font_font_size"> ' + 
				'#navigation > li > a {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Title Font Options Line Height
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_font_line_height"> ' + 
				'#navigation > li > a {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Title Font Options Font Weight
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_font_font_weight"> ' + 
				'#navigation > li > a {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Title Font Options Font Style
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_font_font_style"> ' + 
				'#navigation > li > a {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Background Color 1
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_bg_color_1]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_bg_color_1').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_bg_color_1"> ' + 
				'#navigation > li:hover, ' + 
				'#navigation > li.current_page_item > a, ' + 
				'#navigation > li.current-menu-ancestor > a, ' + 
				'.tour  > li a:hover, ' + 
				'.tour  > li.current a {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Background Color 2
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_bg_color_2]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_bg_color_2').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_bg_color_2"> ' + 
				'#navigation > li + li:hover, ' + 
				'#navigation > li + li.current_page_item > a, ' + 
				'#navigation > li + li.current-menu-ancestor > a, ' + 
				'.tour  > li + li a:hover, ' + 
				'.tour  > li + li.current a {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Background Color 3
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_bg_color_3]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_bg_color_3').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_bg_color_3"> ' + 
				'#navigation > li + li + li:hover, ' + 
				'#navigation > li + li + li.current_page_item > a, ' + 
				'#navigation > li + li + li.current-menu-ancestor > a, ' + 
				'.tour  > li + li + li a:hover, ' + 
				'.tour  > li + li + li.current a {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Background Color 4
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_bg_color_4]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_bg_color_4').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_bg_color_4"> ' + 
				'#navigation > li + li + li + li:hover, ' + 
				'#navigation > li + li + li + li.current_page_item > a, ' + 
				'#navigation > li + li + li + li.current-menu-ancestor > a, ' + 
				'.tour  > li + li + li + li a:hover, ' + 
				'.tour  > li + li + li + li.current a {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Background Color 5
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_bg_color_5]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_bg_color_5').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_bg_color_5"> ' + 
				'#navigation > li + li + li + li + li:hover, ' + 
				'#navigation > li + li + li + li + li.current_page_item > a, ' + 
				'#navigation > li + li + li + li + li.current-menu-ancestor > a, ' + 
				'.tour  > li + li + li + li + li a:hover, ' + 
				'.tour  > li + li + li + li + li.current a {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Background Color 6
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_bg_color_6]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_bg_color_6').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_bg_color_6"> ' + 
				'#navigation > li + li + li + li + li + li:hover, ' + 
				'#navigation > li + li + li + li + li + li.current_page_item > a, ' + 
				'#navigation > li + li + li + li + li + li.current-menu-ancestor > a, ' + 
				'.tour  > li + li + li + li + li + li a:hover, ' + 
				'.tour  > li + li + li + li + li + li.current a {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );

	// Navigation Background Color 7
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_bg_color_7]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_bg_color_7').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_bg_color_7"> ' + 
				'#navigation > li + li + li + li + li + li + li:hover, ' + 
				'#navigation > li + li + li + li + li + li + li.current_page_item > a, ' + 
				'#navigation > li + li + li + li + li + li + li.current-menu-ancestor > a, ' + 
				'.tour  > li + li + li + li + li + li + li a:hover, ' + 
				'.tour  > li + li + li + li + li + li + li.current a {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Background Color 8
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_bg_color_8]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_bg_color_8').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_bg_color_8"> ' + 
				'#navigation > li + li + li + li + li + li + li + li:hover, ' + 
				'#navigation > li + li + li + li + li + li + li + li.current_page_item > a, ' + 
				'#navigation > li + li + li + li + li + li + li + li.current-menu-ancestor > a, ' + 
				'.tour  > li + li + li + li + li + li + li + li a:hover, ' + 
				'.tour  > li + li + li + li + li + li + li + li.current a {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Background Color 9
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_bg_color_9]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_bg_color_9').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_bg_color_9"> ' + 
				'#navigation > li + li + li + li + li + li + li + li + li:hover, ' + 
				'#navigation > li + li + li + li + li + li + li + li + li.current_page_item > a, ' + 
				'#navigation > li + li + li + li + li + li + li + li + li.current-menu-ancestor > a, ' + 
				'.tour  > li + li + li + li + li + li + li + li + li a:hover, ' + 
				'.tour  > li + li + li + li + li + li + li + li + li.current a {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Background Color 10
	wp.customize('cmsms_options_increase_font_nav[increase_nav_title_bg_color_10]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_title_bg_color_10').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_title_bg_color_10"> ' + 
				'#navigation > li + li + li + li + li + li + li + li + li + li:hover, ' + 
				'#navigation > li + li + li + li + li + li + li + li + li + li.current_page_item > a, ' + 
				'#navigation > li + li + li + li + li + li + li + li + li + li.current-menu-ancestor > a, ' + 
				'.tour  > li + li + li + li + li + li + li + li + li + li a:hover, ' + 
				'.tour  > li + li + li + li + li + li + li + li + li + li.current a {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// Navigation Dropdown Font Options System Font
	wp.customize('cmsms_options_increase_font_nav[increase_nav_dropdown_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_dropdown_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_dropdown_font_system_font"> ' + 
				'#navigation ul li a {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Dropdown Font Options Google Font
	wp.customize('cmsms_options_increase_font_nav[increase_nav_dropdown_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_nav_dropdown_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_dropdown_font_google_font"> ' + 
				"#navigation ul li a {font-family:'" + newvalResult + "';} " + 
			'</style>');
		} );
	} );
	
	// Navigation Dropdown Font Options Font Color
	wp.customize('cmsms_options_increase_font_nav[increase_nav_dropdown_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_dropdown_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_dropdown_font_font_color"> ' + 
				'#navigation li li > a {color:' + newval + ';} ' + 
				'@media only screen and (max-width: 950px) { ' + 
					'#navigation li > a {color:' + newval + ';} ' + 
				'} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Dropdown Font Options Font Hover Color
	wp.customize('cmsms_options_increase_font_nav[increase_nav_dropdown_font_hover]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_dropdown_font_hover').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_dropdown_font_hover"> ' + 
				'#navigation li li.current_page_item > a, ' + 
				'#navigation li li.current-menu-ancestor > a, ' + 
				'#navigation li li:hover > a:hover, ' + 
				'#navigation ul li:hover > a {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Dropdown Font Options Font Size
	wp.customize('cmsms_options_increase_font_nav[increase_nav_dropdown_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_dropdown_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_dropdown_font_font_size"> ' + 
				'#navigation ul li a {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Dropdown Font Options Line Height
	wp.customize('cmsms_options_increase_font_nav[increase_nav_dropdown_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_dropdown_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_dropdown_font_line_height"> ' + 
				'#navigation ul li a {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Dropdown Font Options Font Weight
	wp.customize('cmsms_options_increase_font_nav[increase_nav_dropdown_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_dropdown_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_dropdown_font_font_weight"> ' + 
				'#navigation ul li a {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Navigation Dropdown Font Options Font Style
	wp.customize('cmsms_options_increase_font_nav[increase_nav_dropdown_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_nav_dropdown_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_nav_dropdown_font_font_style"> ' + 
				'#navigation ul li a {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// H1 Heading Font Options System Font
	wp.customize('cmsms_options_increase_font_h1[increase_h1_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h1_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h1_font_system_font"> ' + 
				'h1, ' + 
				'h1 a, ' + 
				'.logo .title, ' + 
				'.colored_button, ' + 
				'.cmsms_info .cmsms_post_year, ' + 
				'.cmsms_info .cmsms_post_day, ' + 
				'.skill_item_colored_wrap, ' + 
				'.cmsms_pricing_table .title, ' + 
				'.cmsms_pricing_table .currency, ' + 
				'.cmsms_pricing_table .price, ' + 
				'.cmsms_pricing_table .period, ' + 
				'.cmsms_pricing_table .coins {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H1 Heading Font Options Google Font
	wp.customize('cmsms_options_increase_font_h1[increase_h1_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_h1_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h1_font_google_font"> ' + 
				'h1, ' + 
				'h1 a, ' + 
				'.logo .title, ' + 
				'.colored_button, ' + 
				'.cmsms_info .cmsms_post_year, ' + 
				'.cmsms_info .cmsms_post_day, ' + 
				'.skill_item_colored_wrap, ' + 
				'.cmsms_pricing_table .title, ' + 
				'.cmsms_pricing_table .currency, ' + 
				'.cmsms_pricing_table .price, ' + 
				'.cmsms_pricing_table .period, ' + 
				'.cmsms_pricing_table .coins {font-family:' + newvalResult + ';} ' + 
			'</style>');
		} );
	} );
	
	// H1 Heading Font Options Font Color
	wp.customize('cmsms_options_increase_font_h1[increase_h1_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h1_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h1_font_font_color"> ' + 
				'h1, ' + 
				'h1 a, ' + 
				'.logo {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H1 Heading Font Options Font Size
	wp.customize('cmsms_options_increase_font_h1[increase_h1_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h1_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h1_font_font_size"> ' + 
				'h1, ' + 
				'h1 a, ' + 
				'.logo .title {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// H1 Heading Font Options Line Height
	wp.customize('cmsms_options_increase_font_h1[increase_h1_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h1_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h1_font_line_height"> ' + 
				'h1, ' + 
				'h1 a, ' + 
				'.logo .title {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// H1 Heading Font Options Font Weight
	wp.customize('cmsms_options_increase_font_h1[increase_h1_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h1_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h1_font_font_weight"> ' + 
				'h1, ' + 
				'h1 a, ' + 
				'.logo .title {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H1 Heading Font Options Font Style
	wp.customize('cmsms_options_increase_font_h1[increase_h1_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h1_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h1_font_font_style"> ' + 
				'h1, ' + 
				'h1 a, ' + 
				'.logo .title {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// H2 Heading Font Options System Font
	wp.customize('cmsms_options_increase_font_h2[increase_h2_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h2_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h2_font_system_font"> ' + 
				'h2, ' + 
				'h2 a, ' + 
				'.cmsms_sitemap > li > a, ' + 
				'.error h2, ' + 
				'#reply-title {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H2 Heading Font Options Google Font
	wp.customize('cmsms_options_increase_font_h2[increase_h2_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_h2_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h2_font_google_font"> ' + 
				'h2, ' + 
				'h2 a, ' + 
				'.cmsms_sitemap > li > a, ' + 
				'.error h2, ' + 
				'#reply-title {font-family:' + newvalResult + ';} ' + 
			'</style>');
		} );
	} );
	
	// H2 Heading Font Options Font Color
	wp.customize('cmsms_options_increase_font_h2[increase_h2_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h2_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h2_font_font_color"> ' + 
				'h2, ' + 
				'h2 a, ' + 
				'#reply-title {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H2 Heading Font Options Font Size
	wp.customize('cmsms_options_increase_font_h2[increase_h2_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h2_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h2_font_font_size"> ' + 
				'h2, ' + 
				'h2 a, ' + 
				'.cmsms_sitemap > li > a, ' + 
				'.error h2, ' + 
				'#reply-title {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// H2 Heading Font Options Line Height
	wp.customize('cmsms_options_increase_font_h2[increase_h2_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h2_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h2_font_line_height"> ' + 
				'h2, ' + 
				'h2 a, ' + 
				'.cmsms_sitemap > li > a, ' + 
				'.error h2, ' + 
				'#reply-title {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// H2 Heading Font Options Font Weight
	wp.customize('cmsms_options_increase_font_h2[increase_h2_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h2_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h2_font_font_weight"> ' + 
				'h2, ' + 
				'h2 a, ' + 
				'.cmsms_sitemap > li > a, ' + 
				'.error h2, ' + 
				'#reply-title {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H2 Heading Font Options Font Style
	wp.customize('cmsms_options_increase_font_h2[increase_h2_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h2_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h2_font_font_style"> ' + 
				'h2, ' + 
				'h2 a, ' + 
				'.cmsms_sitemap > li > a, ' + 
				'.error h2, ' + 
				'#reply-title {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// H3 Heading Font Options System Font
	wp.customize('cmsms_options_increase_font_h3[increase_h3_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h3_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h3_font_system_font"> ' + 
				'h3, ' + 
				'h3 a {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H3 Heading Font Options Google Font
	wp.customize('cmsms_options_increase_font_h3[increase_h3_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_h3_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h3_font_google_font"> ' + 
				'h3, ' + 
				'h3 a {font-family:' + newvalResult + ';} ' + 
			'</style>');
		} );
	} );
	
	// H3 Heading Font Options Font Color
	wp.customize('cmsms_options_increase_font_h3[increase_h3_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h3_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h3_font_font_color"> ' + 
				'h3, ' + 
				'h3 a {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H3 Heading Font Options Font Size
	wp.customize('cmsms_options_increase_font_h3[increase_h3_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h3_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h3_font_font_size"> ' + 
				'h3, ' + 
				'h3 a {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// H3 Heading Font Options Line Height
	wp.customize('cmsms_options_increase_font_h3[increase_h3_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h3_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h3_font_line_height"> ' + 
				'h3, ' + 
				'h3 a {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// H3 Heading Font Options Font Weight
	wp.customize('cmsms_options_increase_font_h3[increase_h3_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h3_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h3_font_font_weight"> ' + 
				'h3, ' + 
				'h3 a {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H3 Heading Font Options Font Style
	wp.customize('cmsms_options_increase_font_h3[increase_h3_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h3_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h3_font_font_style"> ' + 
				'h3, ' + 
				'h3 a {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// H4 Heading Font Options System Font
	wp.customize('cmsms_options_increase_font_h4[increase_h4_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h4_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h4_font_system_font"> ' + 
				'h4, ' + 
				'h4 a, ' + 
				'h1.widgettitle {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H4 Heading Font Options Google Font
	wp.customize('cmsms_options_increase_font_h4[increase_h4_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_h4_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h4_font_google_font"> ' + 
				'h4, ' + 
				'h4 a, ' + 
				'h1.widgettitle {font-family:' + newvalResult + ';} ' + 
			'</style>');
		} );
	} );
	
	// H4 Heading Font Options Font Color
	wp.customize('cmsms_options_increase_font_h4[increase_h4_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h4_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h4_font_font_color"> ' + 
				'h4, ' + 
				'h4 a {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H4 Heading Font Options Font Size
	wp.customize('cmsms_options_increase_font_h4[increase_h4_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h4_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h4_font_font_size"> ' + 
				'h4, ' + 
				'h4 a, ' + 
				'h1.widgettitle {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// H4 Heading Font Options Line Height
	wp.customize('cmsms_options_increase_font_h4[increase_h4_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h4_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h4_font_line_height"> ' + 
				'h4, ' + 
				'h4 a, ' + 
				'h1.widgettitle {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// H4 Heading Font Options Font Weight
	wp.customize('cmsms_options_increase_font_h4[increase_h4_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h4_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h4_font_font_weight"> ' + 
				'h4, ' + 
				'h4 a, ' + 
				'h1.widgettitle {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H4 Heading Font Options Font Style
	wp.customize('cmsms_options_increase_font_h4[increase_h4_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h4_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h4_font_font_style"> ' + 
				'h4, ' + 
				'h4 a, ' + 
				'h1.widgettitle {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// H5 Heading Font Options System Font
	wp.customize('cmsms_options_increase_font_h5[increase_h5_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h5_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h5_font_system_font"> ' + 
				'h5, ' + 
				'h5 a, ' + 
				'.widgettitle {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H5 Heading Font Options Google Font
	wp.customize('cmsms_options_increase_font_h5[increase_h5_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_h5_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h5_font_google_font"> ' + 
				'h5, ' + 
				'h5 a, ' + 
				'.widgettitle {font-family:' + newvalResult + ';} ' + 
			'</style>');
		} );
	} );
	
	// H5 Heading Font Options Font Color
	wp.customize('cmsms_options_increase_font_h5[increase_h5_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h5_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h5_font_font_color"> ' + 
				'h5, ' + 
				'h5 a {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H5 Heading Font Options Font Size
	wp.customize('cmsms_options_increase_font_h5[increase_h5_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h5_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h5_font_font_size"> ' + 
				'h5, ' + 
				'h5 a, ' + 
				'.widgettitle {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// H5 Heading Font Options Line Height
	wp.customize('cmsms_options_increase_font_h5[increase_h5_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h5_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h5_font_line_height"> ' + 
				'h5, ' + 
				'h5 a, ' + 
				'.widgettitle {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// H5 Heading Font Options Font Weight
	wp.customize('cmsms_options_increase_font_h5[increase_h5_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h5_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h5_font_font_weight"> ' + 
				'h5, ' + 
				'h5 a, ' + 
				'.widgettitle {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H5 Heading Font Options Font Style
	wp.customize('cmsms_options_increase_font_h5[increase_h5_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h5_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h5_font_font_style"> ' + 
				'h5, ' + 
				'h5 a, ' + 
				'.widgettitle {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// H6 Heading Font Options System Font
	wp.customize('cmsms_options_increase_font_h6[increase_h6_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h6_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h6_font_system_font"> ' + 
				'h6, ' + 
				'h6 a, ' + 
				'.tog, ' + 
				'.tog:hover, ' + 
				'.tog.current, ' + 
				'.widget_portfolio_link, ' + 
				'.related_posts_content .one_half > p, ' + 
				'.related_posts_content .one_half > p a, ' + 
				'.cmsms_shortcode_testimonials blockquote, ' + 
				'.cmsms_sitemap > li ul > li > a {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H6 Heading Font Options Google Font
	wp.customize('cmsms_options_increase_font_h6[increase_h6_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_h6_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h6_font_google_font"> ' + 
				'h6, ' + 
				'h6 a, ' + 
				'.tog, ' + 
				'.tog:hover, ' + 
				'.tog.current, ' + 
				'.widget_portfolio_link, ' + 
				'.related_posts_content .one_half > p, ' + 
				'.related_posts_content .one_half > p a, ' + 
				'.cmsms_shortcode_testimonials blockquote, ' + 
				'.cmsms_sitemap > li ul > li > a {font-family:' + newvalResult + ';} ' + 
			'</style>');
		} );
	} );
	
	// H6 Heading Font Options Font Color
	wp.customize('cmsms_options_increase_font_h6[increase_h6_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h6_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h6_font_font_color"> ' + 
				'h6, ' + 
				'h6 a, ' + 
				'.tour li a, ' + 
				'.accordion .acc a, ' + 
				'.toggles .togg a {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H6 Heading Font Options Font Size
	wp.customize('cmsms_options_increase_font_h6[increase_h6_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h6_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h6_font_font_size"> ' + 
				'h6, ' + 
				'h6 a, ' + 
				'.tog, ' + 
				'.tog:hover, ' + 
				'.tog.current, ' + 
				'.widget_portfolio_link, ' + 
				'.related_posts_content .one_half > p, ' + 
				'.related_posts_content .one_half > p a, ' + 
				'.cmsms_shortcode_testimonials blockquote, ' + 
				'.cmsms_sitemap > li ul > li > a {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// H6 Heading Font Options Line Height
	wp.customize('cmsms_options_increase_font_h6[increase_h6_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h6_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h6_font_line_height"> ' + 
				'h6, ' + 
				'h6 a, ' + 
				'.tog, ' + 
				'.tog:hover, ' + 
				'.tog.current, ' + 
				'.widget_portfolio_link, ' + 
				'.related_posts_content .one_half > p, ' + 
				'.related_posts_content .one_half > p a, ' + 
				'.cmsms_shortcode_testimonials blockquote, ' + 
				'.cmsms_sitemap > li ul > li > a {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// H6 Heading Font Options Font Weight
	wp.customize('cmsms_options_increase_font_h6[increase_h6_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h6_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h6_font_font_weight"> ' + 
				'h6, ' + 
				'h6 a, ' + 
				'.tog, ' + 
				'.tog:hover, ' + 
				'.tog.current, ' + 
				'.widget_portfolio_link, ' + 
				'.related_posts_content .one_half > p, ' + 
				'.related_posts_content .one_half > p a, ' + 
				'.cmsms_shortcode_testimonials blockquote, ' + 
				'.cmsms_sitemap > li ul > li > a {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// H6 Heading Font Options Font Style
	wp.customize('cmsms_options_increase_font_h6[increase_h6_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_h6_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_h6_font_font_style"> ' + 
				'h6, ' + 
				'h6 a, ' + 
				'.tog, ' + 
				'.tog:hover, ' + 
				'.tog.current, ' + 
				'.widget_portfolio_link, ' + 
				'.related_posts_content .one_half > p, ' + 
				'.related_posts_content .one_half > p a, ' + 
				'.cmsms_shortcode_testimonials blockquote, ' + 
				'.cmsms_sitemap > li ul > li > a {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// Blockquote Font Options System Font
	wp.customize('cmsms_options_increase_font_other[increase_quote_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_quote_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_quote_font_system_font"> ' + 
				'q, ' + 
				'blockquote, ' + 
				'.post.format-aside h6.entry-content, ' + 
				'.cmsms_shortcode_testimonials blockquote, ' + 
				'q:before, ' + 
				'blockquote:before {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Blockquote Font Options Google Font
	wp.customize('cmsms_options_increase_font_other[increase_quote_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_quote_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_quote_font_google_font"> ' + 
				'q, ' + 
				'blockquote, ' + 
				'.post.format-aside h6.entry-content, ' + 
				'.cmsms_shortcode_testimonials blockquote, ' + 
				'q:before, ' + 
				'blockquote:before {font-family:' + newvalResult + ';} ' + 
			'</style>');
		} );
	} );
	
	// Blockquote Font Options Font Color
	wp.customize('cmsms_options_increase_font_other[increase_quote_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_quote_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_quote_font_font_color"> ' + 
				'q, ' + 
				'blockquote {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Blockquote Font Options Font Size
	wp.customize('cmsms_options_increase_font_other[increase_quote_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_quote_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_quote_font_font_size"> ' + 
				'q, ' + 
				'blockquote, ' + 
				'.post.format-aside h6.entry-content {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Blockquote Font Options Line Height
	wp.customize('cmsms_options_increase_font_other[increase_quote_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_quote_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_quote_font_line_height"> ' + 
				'q, ' + 
				'blockquote, ' + 
				'.post.format-aside h6.entry-content {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Blockquote Font Options Font Weight
	wp.customize('cmsms_options_increase_font_other[increase_quote_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_quote_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_quote_font_font_weight"> ' + 
				'q, ' + 
				'blockquote, ' + 
				'.post.format-aside h6.entry-content {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Blockquote Font Options Font Style
	wp.customize('cmsms_options_increase_font_other[increase_quote_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_quote_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_quote_font_font_style"> ' + 
				'q, ' + 
				'blockquote, ' + 
				'.post.format-aside h6.entry-content {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// Dropcap Font Options System Font
	wp.customize('cmsms_options_increase_font_other[increase_dropcap_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_dropcap_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_dropcap_font_system_font"> ' + 
				'span.dropcap {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Dropcap Font Options Google Font
	wp.customize('cmsms_options_increase_font_other[increase_dropcap_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_dropcap_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_dropcap_font_google_font"> ' + 
				'span.dropcap {font-family:' + newvalResult + ';} ' + 
			'</style>');
		} );
	} );
	
	// Dropcap Font Options Font Color
	wp.customize('cmsms_options_increase_font_other[increase_dropcap_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_dropcap_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_dropcap_font_font_color"> ' + 
				'span.dropcap {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Dropcap Font Options Font Size
	wp.customize('cmsms_options_increase_font_other[increase_dropcap_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_dropcap_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_dropcap_font_font_size"> ' + 
				'span.dropcap {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Dropcap Font Options Line Height
	wp.customize('cmsms_options_increase_font_other[increase_dropcap_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_dropcap_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_dropcap_font_line_height"> ' + 
				'span.dropcap {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Dropcap Font Options Font Weight
	wp.customize('cmsms_options_increase_font_other[increase_dropcap_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_dropcap_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_dropcap_font_font_weight"> ' + 
				'span.dropcap {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Dropcap Font Options Font Style
	wp.customize('cmsms_options_increase_font_other[increase_dropcap_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_dropcap_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_dropcap_font_font_style"> ' + 
				'span.dropcap {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// Code Tag Font Options System Font
	wp.customize('cmsms_options_increase_font_other[increase_code_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_code_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_code_font_system_font"> ' + 
				'code {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Code Tag Font Options Google Font
	wp.customize('cmsms_options_increase_font_other[increase_code_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_code_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_code_font_google_font"> ' + 
				'code {font-family:' + newvalResult + ';} ' + 
			'</style>');
		} );
	} );
	
	// Code Tag Font Options Font Color
	wp.customize('cmsms_options_increase_font_other[increase_code_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_code_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_code_font_font_color"> ' + 
				'code {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Code Tag Font Options Font Size
	wp.customize('cmsms_options_increase_font_other[increase_code_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_code_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_code_font_font_size"> ' + 
				'code {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Code Tag Font Options Line Height
	wp.customize('cmsms_options_increase_font_other[increase_code_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_code_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_code_font_line_height"> ' + 
				'code {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Code Tag Font Options Font Weight
	wp.customize('cmsms_options_increase_font_other[increase_code_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_code_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_code_font_font_weight"> ' + 
				'code {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Code Tag Font Options Font Style
	wp.customize('cmsms_options_increase_font_other[increase_code_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_code_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_code_font_font_style"> ' + 
				'code {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// Small Tag Font Options System Font
	wp.customize('cmsms_options_increase_font_other[increase_small_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_small_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_small_font_system_font"> ' + 
				'small, ' + 
				'small a, ' + 
				'#wp-calendar caption, ' + 
				'.jta-tweet-a, ' + 
				'abbr, ' + 
				'abbr a, ' + 
				'.tab.lpr .tabs_tab strong, ' + 
				'.cmsms_category *, ' + 
				'.post .entry-header .cmsms_post_info span, ' + 
				'.testimonial a.tl_company, ' + 
				'.post .entry-header .cmsms_post_info *, ' + 
				'.post .entry-header .cmsms_post_info .user_name, ' + 
				'.post .entry-header .cmsms_post_info .published, ' + 
				'.post .entry-header .cmsms_post_info .post-categories, ' + 
				'.post_type_shortcode article .project_rollover .entry-meta .post_category a, ' + 
				'.testimonial .tl_company, ' + 
				'.testimonial .cmsms_tl_cat, ' + 
				'.testimonial .cmsms_tl_cat a, ' + 
				'.testimonial .tl_comments_wrap, ' + 
				'.testimonial .tl_comments_wrap a, ' + 
				'.testimonial .published, ' + 
				'.post.format-quote .cmsms_author, ' + 
				'#comments .comment-body .published, ' + 
				'.comment-body .comment-edit-link, ' + 
				'.cmsms_tags *, ' + 
				'.cmsms_tags, ' + 
				'.cmsms_tags li, ' + 
				'.cmsms_tags li a, ' + 
				'.cmsms_post_info span, ' +  
				'.project ul.project_details li span.fl, ' + 
				'.widget_custom_recent_testimonials_entries p, ' + 
				'.jta-tweet-text, ' + 
				'.entry .project_navi span a, ' + 
				'.cmsms_share, ' + 
				'.tab.lpr .tabs_tab abbr, ' + 
				'.headline p, ' + 
				'.wp-caption-text, ' + 
				'.pj_sort .button, ' + 
				'.pj_sort .button_small, ' + 
				'.pj_filter li a, ' + 
				'.pj_filter a.pj_cat_filter, ' + 
				'#cancel-comment-reply-link, ' + 
				'input[type="submit"], ' + 
				'.skill_item_colored > span, ' + 
				'.comment-reply-link, ' + 
				'.tab.lpr .tabs li a {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Small Tag Font Options Google Font
	wp.customize('cmsms_options_increase_font_other[increase_small_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_small_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_small_font_google_font"> ' + 
				'small, ' + 
				'small a, ' + 
				'#wp-calendar caption, ' + 
				'.jta-tweet-a, ' + 
				'abbr, ' + 
				'abbr a, ' + 
				'.tab.lpr .tabs_tab strong, ' + 
				'.cmsms_category *, ' + 
				'.post .entry-header .cmsms_post_info span, ' + 
				'.testimonial a.tl_company, ' + 
				'.post .entry-header .cmsms_post_info *, ' + 
				'.post .entry-header .cmsms_post_info .user_name, ' + 
				'.post .entry-header .cmsms_post_info .published, ' + 
				'.post .entry-header .cmsms_post_info .post-categories, ' + 
				'.post_type_shortcode article .project_rollover .entry-meta .post_category a, ' + 
				'.testimonial .tl_company, ' + 
				'.testimonial .cmsms_tl_cat, ' + 
				'.testimonial .cmsms_tl_cat a, ' + 
				'.testimonial .tl_comments_wrap, ' + 
				'.testimonial .tl_comments_wrap a, ' + 
				'.testimonial .published, ' + 
				'.post.format-quote .cmsms_author, ' + 
				'#comments .comment-body .published, ' + 
				'.comment-body .comment-edit-link, ' + 
				'.cmsms_tags *, ' + 
				'.cmsms_tags, ' + 
				'.cmsms_tags li, ' + 
				'.cmsms_tags li a, ' + 
				'.cmsms_post_info span, ' +  
				'.project ul.project_details li span.fl, ' + 
				'.widget_custom_recent_testimonials_entries p, ' + 
				'.jta-tweet-text, ' + 
				'.entry .project_navi span a, ' + 
				'.cmsms_share, ' + 
				'.tab.lpr .tabs_tab abbr, ' + 
				'.headline p, ' + 
				'.wp-caption-text, ' + 
				'.pj_sort .button, ' + 
				'.pj_sort .button_small, ' + 
				'.pj_filter li a, ' + 
				'.pj_filter a.pj_cat_filter, ' + 
				'#cancel-comment-reply-link, ' + 
				'input[type="submit"], ' + 
				'.skill_item_colored > span, ' + 
				'.comment-reply-link, ' + 
				'.tab.lpr .tabs li a {font-family:' + newvalResult + ';} ' + 
			'</style>');
		} );
	} );
	
	// Small Tag Font Options Font Color
	wp.customize('cmsms_options_increase_font_other[increase_small_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_small_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_small_font_font_color"> ' + 
				'abbr, ' + 
				'small {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Small Tag Font Options Font Size
	wp.customize('cmsms_options_increase_font_other[increase_small_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_small_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_small_font_font_size"> ' + 
				'small, ' + 
				'small a, ' + 
				'#wp-calendar caption, ' + 
				'.jta-tweet-a, ' + 
				'abbr, ' + 
				'abbr a, ' + 
				'.tab.lpr .tabs_tab strong, ' + 
				'.cmsms_category *, ' + 
				'.post .entry-header .cmsms_post_info span, ' + 
				'.testimonial a.tl_company, ' + 
				'.post .entry-header .cmsms_post_info *, ' + 
				'.post .entry-header .cmsms_post_info .user_name, ' + 
				'.post .entry-header .cmsms_post_info .published, ' + 
				'.post .entry-header .cmsms_post_info .post-categories, ' + 
				'.post_type_shortcode article .project_rollover .entry-meta .post_category a, ' + 
				'.testimonial .tl_company, ' + 
				'.testimonial .cmsms_tl_cat, ' + 
				'.testimonial .cmsms_tl_cat a, ' + 
				'.testimonial .tl_comments_wrap, ' + 
				'.testimonial .tl_comments_wrap a, ' + 
				'.testimonial .published, ' + 
				'.post.format-quote .cmsms_author, ' + 
				'#comments .comment-body .published, ' + 
				'.comment-body .comment-edit-link, ' + 
				'.cmsms_tags *, ' + 
				'.cmsms_tags, ' + 
				'.cmsms_tags li, ' + 
				'.cmsms_tags li a, ' + 
				'.cmsms_post_info span, ' +  
				'.project ul.project_details li span.fl, ' + 
				'.widget_custom_recent_testimonials_entries p, ' + 
				'.jta-tweet-text, ' + 
				'.entry .project_navi span a, ' + 
				'.cmsms_share, ' + 
				'.tab.lpr .tabs_tab abbr, ' + 
				'.headline p, ' + 
				'.wp-caption-text, ' + 
				'.pj_sort .button, ' + 
				'.pj_sort .button_small, ' + 
				'.pj_filter li a, ' + 
				'.pj_filter a.pj_cat_filter, ' + 
				'#cancel-comment-reply-link, ' + 
				'input[type="submit"] {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Small Tag Font Options Line Height
	wp.customize('cmsms_options_increase_font_other[increase_small_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_small_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_small_font_line_height"> ' + 
				'small, ' + 
				'small a, ' + 
				'#wp-calendar caption, ' + 
				'.jta-tweet-a, ' + 
				'abbr, ' + 
				'abbr a, ' + 
				'.tab.lpr .tabs_tab strong, ' + 
				'.cmsms_category *, ' + 
				'.post .entry-header .cmsms_post_info span, ' + 
				'.testimonial a.tl_company, ' + 
				'.post .entry-header .cmsms_post_info *, ' + 
				'.post .entry-header .cmsms_post_info .user_name, ' + 
				'.post .entry-header .cmsms_post_info .published, ' + 
				'.post .entry-header .cmsms_post_info .post-categories, ' + 
				'.post_type_shortcode article .project_rollover .entry-meta .post_category a, ' + 
				'.testimonial .tl_company, ' + 
				'.testimonial .cmsms_tl_cat, ' + 
				'.testimonial .cmsms_tl_cat a, ' + 
				'.testimonial .tl_comments_wrap, ' + 
				'.testimonial .tl_comments_wrap a, ' + 
				'.testimonial .published, ' + 
				'.post.format-quote .cmsms_author, ' + 
				'#comments .comment-body .published, ' + 
				'.comment-body .comment-edit-link, ' + 
				'.cmsms_tags *, ' + 
				'.cmsms_tags, ' + 
				'.cmsms_tags li, ' + 
				'.cmsms_tags li a, ' + 
				'.cmsms_post_info span, ' +  
				'.project ul.project_details li span.fl, ' + 
				'.widget_custom_recent_testimonials_entries p, ' + 
				'.jta-tweet-text, ' + 
				'.entry .project_navi span a, ' + 
				'.cmsms_share, ' + 
				'.tab.lpr .tabs_tab abbr, ' + 
				'.headline p, ' + 
				'.wp-caption-text, ' + 
				'.pj_sort .button, ' + 
				'.pj_sort .button_small, ' + 
				'.pj_filter li a, ' + 
				'.pj_filter a.pj_cat_filter, ' + 
				'#cancel-comment-reply-link, ' + 
				'input[type="submit"] {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Small Tag Font Options Font Weight
	wp.customize('cmsms_options_increase_font_other[increase_small_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_small_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_small_font_font_weight"> ' + 
				'small, ' + 
				'small a, ' + 
				'#wp-calendar caption, ' + 
				'.jta-tweet-a, ' + 
				'abbr, ' + 
				'abbr a, ' + 
				'.tab.lpr .tabs_tab strong, ' + 
				'.cmsms_category *, ' + 
				'.post .entry-header .cmsms_post_info span, ' + 
				'.testimonial a.tl_company, ' + 
				'.post .entry-header .cmsms_post_info *, ' + 
				'.post .entry-header .cmsms_post_info .user_name, ' + 
				'.post .entry-header .cmsms_post_info .published, ' + 
				'.post .entry-header .cmsms_post_info .post-categories, ' + 
				'.post_type_shortcode article .project_rollover .entry-meta .post_category a, ' + 
				'.testimonial .tl_company, ' + 
				'.testimonial .cmsms_tl_cat, ' + 
				'.testimonial .cmsms_tl_cat a, ' + 
				'.testimonial .tl_comments_wrap, ' + 
				'.testimonial .tl_comments_wrap a, ' + 
				'.testimonial .published, ' + 
				'.post.format-quote .cmsms_author, ' + 
				'#comments .comment-body .published, ' + 
				'.comment-body .comment-edit-link, ' + 
				'.cmsms_tags *, ' + 
				'.cmsms_tags, ' + 
				'.cmsms_tags li, ' + 
				'.cmsms_tags li a, ' + 
				'.cmsms_post_info span, ' +  
				'.project ul.project_details li span.fl, ' + 
				'.widget_custom_recent_testimonials_entries p, ' + 
				'.jta-tweet-text, ' + 
				'.entry .project_navi span a, ' + 
				'.cmsms_share, ' + 
				'.tab.lpr .tabs_tab abbr, ' + 
				'.headline p, ' + 
				'.wp-caption-text, ' + 
				'.pj_sort .button, ' + 
				'.pj_sort .button_small, ' + 
				'.pj_filter li a, ' + 
				'.pj_filter a.pj_cat_filter, ' + 
				'#cancel-comment-reply-link, ' + 
				'input[type="submit"] {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Small Tag Font Options Font Style
	wp.customize('cmsms_options_increase_font_other[increase_small_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_small_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_small_font_font_style"> ' + 
				'small, ' + 
				'small a, ' + 
				'#wp-calendar caption, ' + 
				'.jta-tweet-a, ' + 
				'abbr, ' + 
				'abbr a, ' + 
				'.tab.lpr .tabs_tab strong, ' + 
				'.cmsms_category *, ' + 
				'.post .entry-header .cmsms_post_info span, ' + 
				'.testimonial a.tl_company, ' + 
				'.post .entry-header .cmsms_post_info *, ' + 
				'.post .entry-header .cmsms_post_info .user_name, ' + 
				'.post .entry-header .cmsms_post_info .published, ' + 
				'.post .entry-header .cmsms_post_info .post-categories, ' + 
				'.post_type_shortcode article .project_rollover .entry-meta .post_category a, ' + 
				'.testimonial .tl_company, ' + 
				'.testimonial .cmsms_tl_cat, ' + 
				'.testimonial .cmsms_tl_cat a, ' + 
				'.testimonial .tl_comments_wrap, ' + 
				'.testimonial .tl_comments_wrap a, ' + 
				'.testimonial .published, ' + 
				'.post.format-quote .cmsms_author, ' + 
				'#comments .comment-body .published, ' + 
				'.comment-body .comment-edit-link, ' + 
				'.cmsms_tags *, ' + 
				'.cmsms_tags, ' + 
				'.cmsms_tags li, ' + 
				'.cmsms_tags li a, ' + 
				'.cmsms_post_info span, ' +  
				'.project ul.project_details li span.fl, ' + 
				'.widget_custom_recent_testimonials_entries p, ' + 
				'.jta-tweet-text, ' + 
				'.entry .project_navi span a, ' + 
				'.cmsms_share, ' + 
				'.tab.lpr .tabs_tab abbr, ' + 
				'.headline p, ' + 
				'.wp-caption-text, ' + 
				'.pj_sort .button, ' + 
				'.pj_sort .button_small, ' + 
				'.pj_filter li a, ' + 
				'.pj_filter a.pj_cat_filter, ' + 
				'#cancel-comment-reply-link, ' + 
				'input[type="submit"] {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// Text Fields Font Options System Font
	wp.customize('cmsms_options_increase_font_other[increase_input_font_system_font]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_input_font_system_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_input_font_system_font"> ' + 
				'input, ' + 
				'input[type="submit"], ' + 
				'textarea, ' + 
				'select, ' + 
				'option, ' + 
				'label, ' + 
				'.cmsms_select span, ' + 
				'.cmsms-form-builder p, ' + 
				'.cmsms-form-builder .check_parent input[type="checkbox"]+label, ' + 
				'.cmsms-form-builder .check_parent input[type="radio"]+label {font-family:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Text Fields Font Options Google Font
	wp.customize('cmsms_options_increase_font_other[increase_input_font_google_font]', function (value) { 
		value.bind(function (newval) { 
			var newvalArray = newval.split(':'), 
				newvalResult = newvalArray[0].replace(/\+/g, ' ');
			
			
			$('html > head').append('<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=' + newval + '" type="text/css" />');
			
			
			$('html > head').find('style#increase_input_font_google_font').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_input_font_google_font"> ' + 
				'input, ' + 
				'input[type="submit"], ' + 
				'textarea, ' + 
				'select, ' + 
				'option, ' + 
				'label, ' + 
				'.cmsms_select span, ' + 
				'.cmsms-form-builder p, ' + 
				'.cmsms-form-builder .check_parent input[type="checkbox"]+label, ' + 
				'.cmsms-form-builder .check_parent input[type="radio"]+label {font-family:' + newvalResult + ';} ' + 
			'</style>');
		} );
	} );
	
	// Text Fields Font Options Font Color
	wp.customize('cmsms_options_increase_font_other[increase_input_font_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_input_font_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_input_font_font_color"> ' + 
				'input, ' + 
				'textarea, ' + 
				'select, ' + 
				'option, ' + 
				'select option {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Text Fields Font Options Font Size
	wp.customize('cmsms_options_increase_font_other[increase_input_font_font_size]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_input_font_font_size').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_input_font_font_size"> ' + 
				'input, ' + 
				'input[type="submit"], ' + 
				'textarea, ' + 
				'select, ' + 
				'option, ' + 
				'label, ' + 
				'.cmsms_select span, ' + 
				'.cmsms-form-builder p, ' + 
				'.cmsms-form-builder .check_parent input[type="checkbox"]+label, ' + 
				'.cmsms-form-builder .check_parent input[type="radio"]+label {font-size:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Text Fields Font Options Line Height
	wp.customize('cmsms_options_increase_font_other[increase_input_font_line_height]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_input_font_line_height').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_input_font_line_height"> ' + 
				'input, ' + 
				'input[type="submit"], ' + 
				'textarea, ' + 
				'select, ' + 
				'option, ' + 
				'label, ' + 
				'.cmsms_select span, ' + 
				'.cmsms-form-builder p, ' + 
				'.cmsms-form-builder .check_parent input[type="checkbox"]+label, ' + 
				'.cmsms-form-builder .check_parent input[type="radio"]+label {line-height:' + newval + 'px;} ' + 
			'</style>');
		} );
	} );
	
	// Text Fields Font Options Font Weight
	wp.customize('cmsms_options_increase_font_other[increase_input_font_font_weight]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_input_font_font_weight').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_input_font_font_weight"> ' + 
				'input, ' + 
				'input[type="submit"], ' + 
				'textarea, ' + 
				'select, ' + 
				'option, ' + 
				'label, ' + 
				'.cmsms_select span, ' + 
				'.cmsms-form-builder p, ' + 
				'.cmsms-form-builder .check_parent input[type="checkbox"]+label, ' + 
				'.cmsms-form-builder .check_parent input[type="radio"]+label {font-weight:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Text Fields Font Options Font Style
	wp.customize('cmsms_options_increase_font_other[increase_input_font_font_style]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_input_font_font_style').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_input_font_font_style"> ' + 
				'input, ' + 
				'input[type="submit"], ' + 
				'textarea, ' + 
				'select, ' + 
				'option, ' + 
				'label, ' + 
				'.cmsms_select span, ' + 
				'.cmsms-form-builder p, ' + 
				'.cmsms-form-builder .check_parent input[type="checkbox"]+label, ' + 
				'.cmsms-form-builder .check_parent input[type="radio"]+label {font-style:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	

	// Standard Post Format Icon Color
	wp.customize('cmsms_options_increase_blog_post[increase_standard_post_format_img]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_standard_post_format_img').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_standard_post_format_img"> ' + 
				'.format-standard .cmsms_post_format_img, ' + 
				'.format-standard .project_rollover {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Aside Post Format Icon Color
	wp.customize('cmsms_options_increase_blog_post[increase_aside_post_format_img]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_aside_post_format_img').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_aside_post_format_img"> ' + 
				'.format-aside .cmsms_post_format_img, ' + 
				'.format-aside .project_rollover {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Quote Post Format Icon Color
	wp.customize('cmsms_options_increase_blog_post[increase_quote_post_format_img]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_quote_post_format_img').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_quote_post_format_img"> ' + 
				'.format-quote .cmsms_post_format_img, ' + 
				'.format-quote .project_rollover {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Link Post Format Icon Color
	wp.customize('cmsms_options_increase_blog_post[increase_link_post_format_img]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_link_post_format_img').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_link_post_format_img"> ' + 
				'.format-link .cmsms_post_format_img, ' + 
				'.format-link .project_rollover {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Image Post Format Icon Color
	wp.customize('cmsms_options_increase_blog_post[increase_image_post_format_img]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_image_post_format_img').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_image_post_format_img"> ' + 
				'.format-image .cmsms_post_format_img, ' + 
				'.format-image .project_rollover {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Gallery Post Format Icon Color
	wp.customize('cmsms_options_increase_blog_post[increase_gallery_post_format_img]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_gallery_post_format_img').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_gallery_post_format_img"> ' + 
				'.format-gallery .cmsms_post_format_img, ' + 
				'.format-gallery .project_rollover {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Video Post Format Icon Color
	wp.customize('cmsms_options_increase_blog_post[increase_video_post_format_img]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_video_post_format_img').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_video_post_format_img"> ' + 
				'.blog .format-video .cmsms_post_format_img, ' + 
				'.format-video .project_rollover {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Audio Post Format Icon Color
	wp.customize('cmsms_options_increase_blog_post[increase_audio_post_format_img]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_audio_post_format_img').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_audio_post_format_img"> ' + 
				'.format-audio .cmsms_post_format_img, ' + 
				'.format-audio .project_rollover {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	
	
	// Portfolio Project Format Album
	wp.customize('cmsms_options_increase_portfolio_project[increase_project_album_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_project_album_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_project_album_color"> ' + 
				'.format-album .project_rollover {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Portfolio Project Format Slider
	wp.customize('cmsms_options_increase_portfolio_project[increase_project_slider_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_project_slider_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_project_slider_color"> ' + 
				'.format-slider .project_rollover {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Portfolio Project Format Video
	wp.customize('cmsms_options_increase_portfolio_project[increase_project_video_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_project_video_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_project_video_color"> ' + 
				'.format-video .project_rollover {background-color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
 

 
	// Footer Font Options Font Color
	wp.customize('cmsms_options_increase_font_other[increase_footer_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_footer_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_footer_font_color"> ' + 
				'#footer {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );

	// Footer Links Font Color
	wp.customize('cmsms_options_increase_font_other[increase_footer_link_font_color]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_footer_link_font_color').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_footer_link_font_color"> ' + 
				'#footer a, ' + 
				'#footer h1 a, ' + 
				'#footer h2 a, ' + 
				'#footer h3 a, ' + 
				'#footer h4 a, ' + 
				'#footer h5 a, ' + 
				'#footer h6 a, ' + 
				'#footer .footer_nav > li a {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
	
	// Footer Links Font Hover Color
	wp.customize('cmsms_options_increase_font_other[increase_footer_font_hover]', function (value) { 
		value.bind(function (newval) { 
			$('html > head').find('style#increase_footer_font_hover').remove();
			
			
			$('html > head').append('<style type="text/css" id="increase_footer_font_hover"> ' + 
				'#footer a:hover, ' + 
				'#footer h1 a:hover, ' + 
				'#footer h2 a:hover, ' + 
				'#footer h3 a:hover, ' + 
				'#footer h4 a:hover, ' + 
				'#footer h5 a:hover, ' + 
				'#footer h6 a:hover, ' + 
				'#footer .footer_nav > li.current-menu-ancestor a, ' + 
				'#footer .footer_nav > li.current_page_item a, ' + 
				'#footer .footer_nav > li a:hover {color:' + newval + ';} ' + 
			'</style>');
		} );
	} );
} ) (jQuery);

