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
			 <li id="nav_menu-2" class="widget-container widget_nav_menu">
				<div class="subnav-menu">
				 <ul id="menu-winter-sub-nav" class="menu">
				  <li id="winter"><a href="http://www.callaghancountry.com/wordpress/winter/">Winter</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/winter/cross-country-skiing/">Cross Country Skiing</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/winter/backcountry-skiing/">Backcountry Skiing</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/winter/snowshoeing/">Snowshoeing</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/winter/something-for-everyone/">Something for Everyone</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/winter/winter-packing-list/">Winter Packing List</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/winter/rest-relaxation-with-friends/">Rest & Relaxation with Friends</a></li>
				   <li><a href="http://www.callaghancountry.com/wordpress/summer/">Summer</a></li>
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
