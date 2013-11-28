<?php
/**
 * Template Name: Template Viewer
 *
 */
?>

<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="LiveLong" />

	<title>Kho giao diện Ecomwebpro | Dịch vụ xây dựng website chuyên nghiệp</title>
	<?php  wp_head(); ?>
	<style type="text/css">
		html {
			margin-top: 0px !important;
		}
		#navigation li{
			float: left !important;
		}
		#navigation li > a {
			color: #FFF !important;
		}
		#navigation {
			display: inline !important;
		}
		#header nav {
			display: inline !important;
			background: #3A454B !important;
			padding: 0;
		} 
	</style>
</head>
d
<body  style="overflow-y: hidden;">
	<div id="header" style="min-height: 0; padding: 0;">
		<nav role="navigation" class="h_mt" style="position: fixed; top: 0;">
			<ul id="navigation" class="navigation">
				<li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a href="http://ecomwebpro.com/"><span>Trang chủ</span></a></li>
			</ul>
		</nav>
	</div>
	<div id="content" style="margin:0; position:absolute; top:30px; left:0; right:0; bottom:0; width: 100%;">
		<?php if(isset($_GET['template'])): 
			$url = 'http://home.dev/demo/' . $_GET['template'];
		?>
		<iframe src="<?php echo $url ?>" sandbox="allow-forms allow-same-origin allow-scripts" style="width: 100%; height: 100%; display: block; margin: 0;"></iframe>
		<?php endif;  ?>
	</div>
</body>
</html>