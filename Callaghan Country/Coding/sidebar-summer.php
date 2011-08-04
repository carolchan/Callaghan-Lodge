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
			 <li id="nav_menu-3" class="widget-container widget_nav_menu">
				<div class="subnav-menu">
				 <ul id="menu-summer-sub-nav" class="menu">
				  <li id="summer"><a href="http://www.callaghancountry.com/wordpress/summer/">Summer</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/summer/hiking/">Hiking</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/summer/natures-splendour/">Nature's Splendour</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/summer/horseback-riding/">Horseback Riding</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/summer/mountaineering/">Mountaineering</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/summer/watersports/">Watersports</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/summer/specialty-outdoor-workshops/">Specialty Outdoor Workshops</a></li>
				  <li><a href="http://www.callaghancountry.com/wordpress/summer/summer-packing-list/">Summer Packing List</a></li>
				   <li><a href="http://www.callaghancountry.com/wordpress/winter/">Winter</a></li>
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
