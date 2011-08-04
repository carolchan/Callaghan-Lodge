<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">
			 <li id="nav_menu-8" class="widget-container widget_nav_menu">
				<div class="subnav-menu">
				 <ul id="menu-contact-sub-nav" class="menu">
				  <li id="contact"><a href="http://www.callaghancountry.com/wordpress/contact/">Contact</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/contact/sitemap/">Sitemap</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/contact/privacy-policy-terms-of-use/">Privacy Policy & Terms of Use</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/contact/company-info/">Company Info</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/contact/partners-sponsors/">Partners & Friends</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/contact/faqs/">FAQs</a></li>
				 </ul>
			  </div><!-- .subnav-menu -->
			</ul>
		</div><!-- #primary .widget-area -->



<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
