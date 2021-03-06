<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
@import url("<?php bloginfo('template_url'); ?>/style.css");
@import url("<?php bloginfo('stylesheet_url'); ?>");
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="topBar" class="topBar">   
    	<ul id='social-media-menu' class='social-media-menu'> 	 
    		<li><a href="https://www.facebook.com/RubysOfficialpage" target="_blank"><img alt="" src="http://rubygettinger.net/wp-content/uploads/2013/08/facebook.png"/></a></li>  
            <li><a href="http://twitter.com/RubyGettinger_" target="_blank"><img alt="" src="http://rubygettinger.net/wp-content/uploads/2013/08/twitter.png" /></a></li>  
            <li><a href="http://instagram.com/rubygettinger/" target="_blank"><img alt="" src="http://rubygettinger.net/wp-content/uploads/2013/08/instagram.png" /></a></li> 		 
            <li><a href="http://www.youtube.com/writerubygettinger" target="_blank"><img alt="" src="http://rubygettinger.net/wp-content/uploads/2013/08/youtube.png" /></a></li>  
            <li><a href="http://pinterest.com/rubygettinger/" target="_blank"><img alt="" src="http://rubygettinger.net/wp-content/uploads/2013/08/pinterest.png" /></a></li> 	 
            <li><a href="http://www.whosay.com/rubygettinger" target="_blank"><img alt="" src="http://rubygettinger.net/wp-content/uploads/2013/08/whosay.png" /></a></li> 	 
            <li><a href="http://www.linkedin.com/pub/ruby-gettinger/28/4a4/468" target="_blank"><img alt="" src="http://rubygettinger.net/wp-content/uploads/2013/08/linkedin.png" /></a></li>  
        </ul> 
    </div> 

	<div id='site-image-hold' class='site-image-hold'>
		<div class='site-image-wrap' id='site-image-wrap'>
		<img class="header-image" title="Ruby Gettinger Christian Fitness Personality" src="<?php echo get_stylesheet_directory_uri() ?>cropped-ruby-gettinger-reality-star-weight-loss.png" width="300" height="250" alt="">
		</div>
	</div>

	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<hgroup>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
				<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav><!-- #site-navigation -->


		</header><!-- #masthead -->
	<?php 

		if(is_front_page()){
			if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow("homepage",""); }
		}else{
			?><div id='noslider-spacer' class='noslider-spacer'></div><?php
		}


	?>
		<div id="main" class="wrapper">
