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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
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
<script type="text/javascript" src="http://bs.baidu.com/ajaxlibs/jquery/1.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
	$("#controls li a").click(function(){
        /*Performed when a control is clicked */
	    shuffle();
	    var rel = $(this).attr("rel");
	    if ( $("#" + rel).hasClass("current") ){
	        return false;
	    }
        /* Bug Fix, thanks Dave -> added .stop(true,true) 
            to stop any ongoing animation */
	    $("#" + rel).stop(true,true).show();
	    $(".current").fadeOut().removeClass("current");
	    $("#" + rel).addClass("current");
	    $(".active").removeClass("active");
	    $(this).parents("li").addClass("active");
	    set_new_interval(5000);
	    return false;
	});
	/* 
	* Optional Pause on Hover Feature 
	* Comment out to use it
	* Thanks, Andrew 
	*/
	/*$('.banner').hover(function() {
			clearInterval(slide);
		}, function () {
			slide = setInterval( "banner_switch()", 7000 );
	});*/
    });
    function banner_switch(){
        /*This function is called on to switch the banners out when the time limit is reached */
        shuffle();
        var next = $('.product.current').next('.product').length ? 
            $('.product.current').next('.product') : $('#products .product:first');
        $(next).show();
        $(".current").fadeOut().removeClass("current");
        $(next).addClass("current");
        var next_link = $(".active").next("li").length ? $('.active').next('li') : $('#controls li:first');
        $(".active").removeClass("active");
        $(next_link).addClass('active');
    }
    $(function() {
        /*Initial timer setting */
        slide = setInterval("banner_switch()", 5000);
    });
    function set_new_interval(interval){
        /*Simply clears out the old timer interval and restarts it */
        clearInterval(slide);
        slide = setInterval("banner_switch()", interval);
    }
    function shuffle(){
        /*This function takes every .product and changes the z-index to 1, hides them,
            then takes the ".current" product and brings it above and shows it */
        $(".product").css("z-index", 1).hide();
        $(".current").css("z-index", 2).show();
    }
    </script>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
		   	<div id="branding" role="banner">
				<div id="site-logo">
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url');?>/images/headers/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" ></a>
				</div>
				<div id="site-banner">
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url');?>/images/headers/banner.png" ></a>
	            </div>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>
			</div><!-- #branding -->

			<div id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #access -->
		</div><!-- #masthead -->
		
		<div id="product-gallery">
			<div id="products">
			<!-- TODO: replace href with pages url -->
				<div class="product current" id="product-1">
					<a href="./" ><img src="<?php bloginfo('template_url');?>/images/products/hr001_800.jpg" width="600" height="340" ></a>
					<p><a href="./" ><?php _e( "ZH-900C型高速自动纸盒糊盒机");?></a></p>
				</div>
				<div class="product" id="product-2">
					<a href="./" ><img src="<?php bloginfo('template_url');?>/images/products/hr002_800.jpg" width="600" height="340" ></a>
					<p><a href="./" ><?php _e( "ZH-900型高速自动纸盒糊盒机");?></a></p>
				</div>
				<div class="product" id="product-3">
					<a href="./" ><img src="<?php bloginfo('template_url');?>/images/products/hr003_800.jpg" width="600" height="340" ></a>
					<p><a href="./" ><?php _e( "ZH-900B型高速自动纸盒糊盒机");?></a></p>
				</div>
				<div class="product" id="product-4">
					<a href="./" ><img src="<?php bloginfo('template_url');?>/images/products/hr004_800.jpg" width="600" height="340" ></a>
					<p><a href="./" ><?php _e( "ES-800AC型高速全自动糊折盒机");?></a></p>
				</div>
			</div>
				
			<div id="controls">				
			<ul >
				<li class="active"><a href="#" rel="product-1"></a></li>
				<li><a href="#" rel="product-2"></a></li>
				<li><a href="#" rel="product-3"></a></li>
				<li><a href="#" rel="product-4"></a></li>
			</ul>
			</div>
		</div>
	</div><!-- #header -->

	<div id="main">
