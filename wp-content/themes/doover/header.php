<?php
/**
 * The Header for our theme.
 *
 * @package Doover
 * @author Muffin group
 * @link http://muffingroup.com
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!-- Head -->
<head>

<!-- Meta -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php 
	$display =  doover_get_option( 'display' ); 
	if( $display['responsive'] ) echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">';
?>

<title><?php
global $page, $paged;
wp_title( '|', true, 'right' );
bloginfo( 'name' );
if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'doover' ), max( $paged, $page ) );
?>
</title>
	
<link rel="profile" href="http://gmpg.org/xfn/11" />	
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
<!-- Stylesheet -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php do_action('wp_styles'); ?>

<!-- WP Head -->
<?php wp_head();?>
<link rel="shortcut icon" href="<?php echo doover_get_option( 'favicon', THEME_URI .'/images/favicon.ico', true ); ?>" type="image/x-icon" />	

<?php if( is_single() ): ?>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-6568e777-919c-a5dd-ac31-98a6fa2e6b2d"}); </script>
<?php endif; ?>
<?php do_action('wp_seo'); ?>
</head>

<!-- Body -->
<body <?php body_class(); ?>>

	<header id="Header">
		<div class="header_overlay">
			<div class="Wrapper">
				
				<!-- Top -->
				<div class="top">
				
					<?php if( is_page_template( 'template-home.php' )) echo '<h1>'; ?>
						<a id="logo" href="<?php echo site_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
							<?php if( doover_get_option( 'logo_text_show' ) ):?>
								<?php echo doover_get_option( 'logo_text' ); ?>
							<?php else: ?>
								<img src="<?php echo doover_get_option( 'logo', THEME_URI .'/images/logo.png', true ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
							<?php endif; ?>
						</a>
					<?php if( is_page_template( 'template-home.php' )) echo '</h1>'; ?>
							
					<div class="top_options">
					
						<!-- Top links -->
						<ul class="top_links">
							
							<?php if ( doover_get_option( 'facebook_url' ) ):?>
								<li class="tl1"><a href="<?php echo doover_get_option( 'facebook_url' ); ?>" title="Facebook">Facebook</a></li>
							<?php endif;?>
							
							<?php if ( doover_get_option( 'google_url' ) ):?>
								<li class="tl7"><a href="<?php echo doover_get_option( 'google_url' ); ?>" title="Google +">Google +</a></li>
							<?php endif;?>
							
							<?php if ( doover_get_option( 'twitter_url' ) ):?>
								<li class="tl2"><a href="<?php echo doover_get_option( 'twitter_url' );?>" title="Twitter">Twitter</a></li>
							<?php endif;?>

							<?php if ( doover_get_option( 'youtube_url' ) ):?>
								<li class="tl6"><a href="<?php echo doover_get_option( 'youtube_url' ); ?>" title="YouTube">YouTube</a></li>
							<?php endif;?>
							
							<?php if ( doover_get_option( 'vimeo_url' ) ):?>
								<li class="tl5"><a href="<?php echo doover_get_option( 'vimeo_url' ); ?>" title="Vimeo">Vimeo</a></li>
							<?php endif;?>

							<?php if ( doover_get_option( 'rss' ) ):?>
								<li class="tl3"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('RSS','doover'); ?>" target="_blank"><?php _e('RSS','doover'); ?></a></li>
							<?php endif; ?>
														
							<?php if( doover_get_option( 'sitemap' ) ): ?>
								<li class="tl4"><a href="<?php echo get_permalink( doover_get_option( 'sitemap' ) );?>" title="<?php _e('Sitemap','doover'); ?>"><?php _e('Sitemap','doover'); ?></a></li>
							<?php endif; ?>
						
						</ul>					
						
						<!-- Call us -->
						<?php $call_us =  doover_get_option( 'call_us' )?>
						<?php if ( $call_us['text'] ):?>
							<div class="call_us">
								<span><?php echo $call_us['prefix']; ?> </span><?php echo $call_us['text']; ?>
							</div>
						<?php endif;?>	
		
					</div>	
				
					<!-- Navigation -->
					<?php
						// megamenu
						if( $display['megamenu'] ){
							doover_megamenu();
						} else {
							doover_wp_nav_menu();
						}
						
						// responsive
						if( $display['responsive'] && $display['megamenu'] ){
							doover_megamenu_dropdown();
						} else if( $display['responsive'] && ( ! $display['megamenu'] ) ) {
							dropdown_menu( array('dropdown_title' => '- - Main menu - -', 'indent_string' => '- - ', 'indent_after' => '','container' => 'nav', 'container_id' => 'responsive_navigation', 'theme_location'=>'primary') );	
						}
					?>
					
				</div>
				<?php 
				if( is_page_template( 'template-home.php' ) || is_page_template( 'template-homepage-left.php' ) || is_page_template( 'template-homepage-right.php' ) ) : 
					
					// if using the homepage template
					switch( doover_get_option( 'homepage_style' ) ) {
					    
						case 'slider_offer':
					        get_template_part( 'includes/header', 'slider-offer' );
					        break;
					    
					   	case 'slider_photos':
					        get_template_part( 'includes/header', 'slider-photos' );
					        break;
					        
					   	case 'image':
					        get_template_part( 'includes/header', 'image' );
					        break;
					        
					   	case 'simple':
					        get_template_part( 'includes/header', 'simple' );
					        break;
					    
						default:
					    	echo '<br style="clear:both;">';
					}
   	
                elseif( is_404() ): 
                	// else if 404 page - 404
                	get_template_part( 'includes/header', '404' );
                	
                else: 
                	// else if not home template - subpage title
                	get_template_part( 'includes/header', 'title' );
				endif;
				?>
				
			</div>
		</div>
	</header>