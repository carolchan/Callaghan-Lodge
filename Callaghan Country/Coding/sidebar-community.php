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
			 <li id="nav_menu-6" class="widget-container widget_nav_menu">
				<div class="subnav-menu">
				 <ul id="menu-community-sub-nav" class="menu">
				  <li id="community"><a href="http://www.callaghancountry.com/wordpress/community/">Community</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/community/social-media">Social Media</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/community/get-connected">Get Connected</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/community/getting-here">Getting Here</a></li>
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
