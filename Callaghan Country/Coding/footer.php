<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
			<div id="site-info">
			<ul>
				<li id="sitemap_footer"><a href="http://www.callaghancountry.com/wordpress/contact/sitemap/">Sitemap</a></li>
				<li id="company_footer"><a href="http://www.callaghancountry.com/wordpress/contact/company-info/">Company Info</a></li>
				<li id="employment_footer"><a href="http://www.callaghancountry.com/wordpress/why-callaghan/employment/">Employment</a></li>
				<li id="partners_footer"><a href="http://www.callaghancountry.com/wordpress/contact/partners-sponsors/">Partners & Friends</a></li>
				<li id="faqs_footer"><a href="http://www.callaghancountry.com/wordpress/contact/faqs/">FAQs</a></li>
				<li id="privacy_footer"><a href="http://www.callaghancountry.com/wordpress/contact/privacy-policy-terms-of-use/">Privacy</a></li>
				<li id="contact_footer"><a href="http://www.callaghancountry.com/wordpress/contact/">Contact Us</a></li>
			</ul>
			</div><!-- #site-info -->
			
			<div id="site-generator">
			<p>Copyright &copy; 2011 Callaghan Country Designed and built by Carol Chan</p>

			</div><!-- #site-generator -->
			
		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
