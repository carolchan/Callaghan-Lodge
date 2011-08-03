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
				<li><a href="http://www.clementlim.com">Clement Lim Webpage</a></li>
				<li><a href="http://www.clementlim.com">Google</a></li>
				<li><a href="http://www.clementlim.com">Yahoo</a></li>
				<li><a href="http://www.clementlim.com">Fastmail</a></li>

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
