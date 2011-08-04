<?php
/**
Template Name: Winter
*/
?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
	<?php 
		if (is_page( 'winter' ))
				echo '<ul id="generic-page"><li class="images-4photo"><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/WhyCallaghan1.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/WhyCallaghan2.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/WhyCallaghan3.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/WhyCallaghan4.png" /></li></ul>';
		elseif (is_page( 'cross-country-skiing' ))
				echo '<ul id="generic-page"><li class="images-4photo"><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity1.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity2.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity3.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity4.png" /></li></ul>';
		elseif (is_page( 'backcountry-skiing' ))
				echo '<ul id="generic-page"><li class="images-4photo"><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity1.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity2.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity3.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity4.png" /></li></ul>';
		elseif (is_page( 'snowshoeing' ))
				echo '<ul id="generic-page"><li class="images-4photo"><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity1.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity2.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity3.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity4.png" /></li></ul>';
		elseif (is_page( 'something-for-everyone' ))
				echo '<ul id="generic-page"><li class="images-4photo"><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity1.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity2.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity3.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity4.png" /></li></ul>';
		elseif (is_page( 'winter-packing-list' ))
				echo '<ul id="generic-page"><li class="images-4photo"><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity1.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity2.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity3.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity4.png" /></li></ul>';
		elseif (is_page( 'rest-relaxation-with-friends' ))
				echo '<ul id="generic-page"><li class="images-4photo"><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity1.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity2.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity3.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity4.png" /></li></ul>';
		?>	

		<div id="container">
		<!--this is the Winter template-->
			<div id="content" role="main">
			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php include ('sidebar-winter.php'); ?>
<script>EmbedBookingRequest_ReturnHTML();</script>
<?php get_footer(); ?>
