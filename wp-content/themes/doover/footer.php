<?php
/**
 * The template for displaying the footer.
 *
 * @package Doover
 * @author Muffin group
 * @link http://muffingroup.com
 */
?>
	
<!-- Footer -->
<footer id="Footer">
	<div class="Wrapper">
	
		<?php get_sidebar( 'footer' ); ?>
		
		<div class="row clearfix">
			<div class="one_third col">
				<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fecomwebpro&amp;width=300&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false&amp;appId=401582569900520" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:258px;" allowTransparency="true">
				</iframe>
			</div>
			
			<div class="one_third col">
				<div class="copyrights">
					<p class="author">&copy; <?php echo date( 'Y' ); ?> <span><?php bloginfo( 'name' ); ?></span>. <?php _e('All Rights Reserved. Powered by','doover'); ?> <a href="http://ecomwebpro.com">EWP</a>.</p>
				</div>
			</div>
			
			<div class="one_third col last">
				<strong>Địa chỉ:</strong><br />
				<strong>Ecom Web Pro</strong><br />
				Tòa Nhà Việt Á - Duy Tân - Dịch Vọng Hậu - Cầu Giấy - Hà Nội<br />
				<strong>Điện thoại:</strong><br />
				0977486318<br />
				<ul>
					<li>
						Kinh doanh
						<ul>
							<li class="email">Email: info@ecomwebpro.com</li>
							<li class="phone">SDT: 097 748 6318 - 0168 998 5978</li>
						</ul>
					</li>
					<li>
						SEO
						<ul>
							<li class="email">Email: seo@ecomwebpro.com</li>
							<li class="phone">SDT: 016 777 58881</li>
						</ul>
					</li>
				</ul>
				<a class="back_to_top" href="#" title="<?php _e('Back to top','doover'); ?>"><?php _e('Back to top','doover'); ?></a>
			</div>
								
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
<script type="text/javascript">var subiz_account_id = "1953";(function() { var sbz = document.createElement("script"); sbz.type = "text/javascript"; sbz.async = true; sbz.src = ("https:" == document.location.protocol ? "https://" : "http://") + "widget.subiz.com/static/js/loader.js?v="+ (new Date()).getFullYear() + ("0" + ((new Date()).getMonth() + 1)).slice(-2) + ("0" + (new Date()).getDate()).slice(-2); var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(sbz, s);})();</script>	
</body>
</html>