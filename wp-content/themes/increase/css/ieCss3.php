<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * CSS 3 Rules for IE < 9
 * Created by CMSMasters
 * 
 */


header('Content-type: text/css');


require('../../../../wp-load.php');

?>
 span.dropcap2, 
.cmsms_close_video, 
#slide_top {behavior:url(<?php echo get_template_directory_uri(); ?>/css/pie.htc);}

.p_options_block .button_small {behavior:none;}

input[type="submit"] {box-shadow:none;}

input[type="text"], 
textarea, 
input[type="password"], 
select {padding-top:3px;}

.cmsms-form-builder .check_parent input[type="checkbox"], 
.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="checkbox"], 
.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="radio"], 
.cmsms-form-builder .check_parent input[type="radio"] {margin-top:10px !important;}

.search_line input[type="submit"] {
	padding-right:0;
	padding-left:0;
	right:0;
}

@media only screen and (min-width: 541px) and (max-width: 768px) {
	
	.portfolio.four_columns .project {
		float:left;
		padding-right:4%;
		width:46%;
	}

}


@media only screen and (max-width: 940px) {

	.content_wrap.r_sidebar .post_type_shortcode article.post,
	.content_wrap.r_sidebar .post_type_shortcode article.project,
	.content_wrap.l_sidebar .post_type_shortcode article.post,
	.content_wrap.l_sidebar .post_type_shortcode article.project {
		width:46%;
		float:left;
		margin-bottom:20px;
	}
	
}


@media only screen and (max-width: 541px) {
	
	.portfolio.four_columns .project, 
	.portfolio.three_columns .project, 
	.format-album.cmsms_four .resize figure, 
	.content_wrap.r_sidebar .post_type_shortcode article.post,
	.content_wrap.r_sidebar .post_type_shortcode article.project,
	.content_wrap.l_sidebar .post_type_shortcode article.post,
	.content_wrap.l_sidebar .post_type_shortcode article.project {
		float:none;
		padding-right:0;
		width:100%;
	}

}
