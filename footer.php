<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nature_Blog
 */

?>
</div><!--#content-->

	<footer id="colophon" class="site-footer">
		<div class="footer-top">
			<div class="container-1">
				<div class="columns">
					<div class="column ft-sect">
						<h4 class="ft-title">Useful Links</h4>
						<ul>
							<li><a href="/about">About</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="/privacy-policy">Privacy Policy</a></li>
							<li><a href="/terms-and-conditions">Terms and Conditions</a></li>
							<li><a href="/disclaimer">Disclaimer</a></li>
							<li><a href="/disclosure">Disclosure</a></li>
						</ul>
					</div>
					<div class="column ft-sect">
						<h4 class="ft-title">Popular Tags</h4>
						<ul>
							<li><a href="/tag/web-performance">Web Performance</a></li>
							<li><a href="/tag/wordpress-themes">WordPress Themes</a></li>
							<li><a href="/tag/wordpress-plugins">WordPress Plugins</a></li>
							<li><a href="/tag/analytics">Analytics</a></li>
							<li><a href="/tag/seo">SEO</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container-1">
				<div class="credit">Copyright &copy; 2011-<?= date('Y') ?> CoralNodes.Com</div>
				<div class="by">Hosted with <a href="https://www.coralnodes.com/go/cloudways" target="_blank" rel="nofollow noopener noreferrer">Cloudways</a> on <a href="https://www.coralnodes.com/go/digitalocean" target="_blank" rel="nofollow noopener noreferrer">DigitalOcean</a></div>
			</div>
			
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
