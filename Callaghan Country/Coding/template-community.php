<?php
/**
Template Name: Community
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
		<div class="breadcrumbs">
		<?php
		if(function_exists('bcn_display'))
		{
			bcn_display();
		}
		?>
		</div>
		
		<div id="container">
		<!--this is the Community template-->
			<div id="content" role="main">
			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
		<?php 
		if (is_page( 'Get Connected' ))
			echo '<h2 id="title-skwez">Skwez rideshare to Callaghan Country</h2>
			<iframe
			style="width:300px;height:400px;outline:0;margin:0;border:1px solid LightGrey"
			frameborder="0"
			 src="http://skwez.com/p.html?p=NSmjzy6wSsKEXU0DkWqczQ&name=Callaghan&nbsp;Valley">
			</iframe>';
		?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php include ('sidebar-community.php'); ?>
<div id="webrez"><script>EmbedBookingRequest_ReturnHTML();</script></div>
<?php get_footer(); ?>
