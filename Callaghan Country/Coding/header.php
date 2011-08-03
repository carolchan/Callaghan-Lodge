<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<script type="text/javascript" src="http://www.webrezpro.com/Javascript/embed_bookingrequest.js?hotel_id=973&format=portrait&max_adults=24&currency=CDN,USD,EUR&num_adults=2"></script>
	
	
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<!--<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />-->

<?php global $post; ?>
<?php if( is_home() || is_front_page() ) :?>
<link rel="stylesheet" type="text/css" media="all" href="<?php $str1= bloginfo( 'stylesheet_directory' ); $str1 .= '/style.css'; echo $str1; ?>" />
<?php elseif ( is_page('Why Callaghan?') || '2' == $post->post_parent) :?>
<link rel="stylesheet" type="text/css" media="all" href="<?php $str1= bloginfo( 'stylesheet_directory' ); $str1 .= '/style2.css'; echo $str1; ?>" />
<?php elseif ( is_page('Winter') || '12' == $post->post_parent ) :?>
<link rel="stylesheet" type="text/css" media="all" href="<?php $str1= bloginfo( 'stylesheet_directory' ); $str1 .= '/style2.css'; echo $str1; ?>" />
<?php elseif ( is_page('Community') || '39' == $post->post_parent) :?>
<link rel="stylesheet" type="text/css" media="all" href="<?php $str1= bloginfo( 'stylesheet_directory' ); $str1 .= '/style3.css'; echo $str1; ?>" />
<?php else:?>
<link rel="stylesheet" type="text/css" media="all" href="<?php $str1= bloginfo( 'stylesheet_directory' ); $str1 .= '/style2.css'; echo $str1; ?>" /><?php endif;?>



<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?> onLoad="EmbedBookingRequest_OnLoad()">

<div id="wrapper" class="hfeed">
 <div id="header">
	<ul id="weather">
		<li id="current-conditions"><a href="http://www.callaghancountry.com/wordpress/community/current-conditions/">Current Conditions</a>
		</li>
		<li id="getting-here"><a href="http://www.callaghancountry.com/wordpress/getting-here/">Getting Here</a>
		</li>
		<li id="phone"><p>Phone#: 1.877.938.0616</p></li>
	</ul>
 </div>
		<div id="masthead">
			<div id="branding" role="banner">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'div' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</span>
				
				<?php
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() && current_theme_supports( 'post-thumbnails' ) &&
							has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
							$image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID );
					elseif ( get_header_image() ) : ?>
						<!--<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />-->
					<?php endif; ?>
			</div><!-- #branding -->
			<br />
			<div id="social-media">
				<a href="http://eepurl.com/eB5GU" target="_blank" id="newsletter"></a>
				<a href="https://www.facebook.com/pages/Callaghan-Country-Lodge/139144126169934?v=wall" target="_blank" id="fb"></a>
				<a href="http://twitter.com/#!/CallaghanLodge" target="_blank" id="twitter"></a>
				<a href="http://www.tripadvisor.com/Hotel_Review-g154948-d294385-Reviews-Callaghan_Country_Lodge-Whistler_British_Columbia.html" target="_blank" id="trip"></a>
				<a href="http://www.flickr.com/photos/callaghancountry/" target="_blank" id="flickr"></a>
				<a href="http://www.yelp.ca/biz/callaghan-country-wilderness-adventures-whistler" target="_blank" id="yelp"></a>
			</div>
			<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				
			</div><!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">