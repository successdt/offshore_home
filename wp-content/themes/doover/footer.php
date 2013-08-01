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
					<p class="author">&copy; <?php echo date( 'Y' ); ?> <span><?php bloginfo( 'name' ); ?></span>. <?php _e('All Rights Reserved. Powered by','doover'); ?> <a href="http://wordpress.org">WordPress</a>.</p>
					<p><?php _e('Created by','doover'); ?> <a href="http://muffingroup.com">Muffin group</a>.</p>
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
							<li>Email: info@ecomwebpro.com</li>
							<li>SDT: 097 748 6318 - 0168 998 5978</li>
						</ul>
					</li>
					<li>
						SEO
						<ul>
							<li>Email: seo@ecomwebpro.com</li>
							<li>SDT: 016 777 58881</li>
						</ul>
					</li>
				</ul>
				<a class="back_to_top" href="#" title="<?php _e('Back to top','doover'); ?>"><?php _e('Back to top','doover'); ?></a>
			</div>
								
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
	
</body>
</html>