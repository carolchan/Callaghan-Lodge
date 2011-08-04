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
			 <li id="nav_menu-4" class="widget-container widget_nav_menu">
				<div class="subnav-menu">
				 <ul id="menu-lodge-sub-nav" class="menu">
				  <li id="lodge"><a href="http://www.callaghancountry.com/wordpress/lodge/">Lodge</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/lodge/suites-rooms/">Suites & Rooms</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/lodge/dining-at-callaghan/">Dining at Callaghan</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/lodge/testimonials-ambience/">Testimonials & Ambience</a></li>
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