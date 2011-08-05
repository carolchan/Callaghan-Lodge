<?php
/**
Template Name: Contact
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
		if (is_page( 'contact' ))
				echo '<ul id="generic-page"><li class="images-4photo"><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/WhyCallaghan1.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/WhyCallaghan2.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/WhyCallaghan3.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/WhyCallaghan4.png" /></li></ul>';
		elseif (is_page( 'sitemap' ))
				echo '<ul id="generic-page"><li class="images-4photo"><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity1.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity2.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity3.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity4.png" /></li></ul>';
		elseif (is_page( 'privacy-policy-terms-of-use' ))
				echo '<ul id="generic-page"><li class="images-4photo"><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity1.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity2.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity3.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity4.png" /></li></ul>';
		elseif (is_page( 'company-info' ))
				echo '<ul id="generic-page"><li class="images-4photo"><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity1.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity2.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity3.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity4.png" /></li></ul>';
		elseif (is_page( 'partners-sponsors' ))
				echo '<ul id="generic-page"><li class="images-4photo"><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity1.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity2.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity3.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity4.png" /></li></ul>';
		elseif (is_page( 'faqs' ))
				echo '<ul id="generic-page"><li class="images-4photo"><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity1.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity2.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity3.png" /></li>
				<li><img src="http://www.callaghancountry.com/wordpress/wp-content/uploads/2011/08/Proximity4.png" /></li></ul>';
		?>	
		<div id="container">
		<!--this is the Contact template-->
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

<?php include ('sidebar-contact.php'); ?>
<script>EmbedBookingRequest_ReturnHTML();</script>
<?php get_footer(); ?>
