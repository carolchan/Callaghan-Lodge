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
			<li id="nav_menu-7" class="widget-container widget_nav_menu">
			 <div class="subnav-menu">
				<ul id="menu-book-sub-nav" class="menu">
				<li id="booknow"><a href="http://www.callaghancountry.com/wordpress/book-now/">Book Now</a></li>
				<li><a href="http://reservation.worldweb.com/hotel/973">Overnight Reservations</a></li>
				<li><a href="http://reservation.worldweb.com/transaction-calendar.html?hotel_id=973">Check Availability</a></li>
				<li><a href="http://www.callaghancountry.com/wordpress/book-now/lunch-reservation/">Lunch Reservations</a></li>
				<li><a href="http://www.callaghancountry.com/wordpress/book-now/booking-policy/">Booking Policy</a></li>
				<li><a href="http://www.callaghancountry.com/wordpress/book-now/cancellation-policy/">Cancellation Policy</a></li>
				</ul>
			</div>
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