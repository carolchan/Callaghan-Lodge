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
			  <li id="nav_menu" class="widget-container widget_nav_menu">
				<div class="subnav-menu">
				 <ul id="menu-sub-nav" class="menu">
				  <li id="click-title"><a href="http://www.callaghancountry.com/wordpress/why-callaghan/">WHY CALLAGHAN?</a></li>
				   <li><a href="http://www.callaghancountry.com/wordpress/why-callaghan/proximity-convenience/">Proximity & Convenience</a></li>
				   <li><a href="http://www.callaghancountry.com/wordpress/why-callaghan/legendary-skiing/">Legendary Skiing</a></li>
				   <li><a href="http://www.callaghancountry.com/wordpress/why-callaghan/fine-dining-in-the-alpine/">Fine Dining in the Alpine</a></li>
				   <li><a href="http://www.callaghancountry.com/wordpress/why-callaghan/typical-day-at-callaghan-country/">Typical Day at Callaghan</a></li>
				   <li><a href="http://www.callaghancountry.com/wordpress/why-callaghan/employment/">Employment</a></li>
				   <li><a href="http://www.callaghancountry.com/wordpress/why-callaghan/volunteer/">Volunteer</a></li>
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
