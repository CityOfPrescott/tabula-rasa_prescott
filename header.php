<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package tabula-rasa
 */
?>
<!DOCTYPE html>
<!-- language_attributes section replaced with Bones -->
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<!-- Not sure what this does -->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Not sure if this is needed  -->
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'tabula-rasa' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="top-menu">
			<div class="top-menu-inner">
				<?php //wp_nav_menu( array( 'theme_location' => 'top-nav') ); ?>
				<ul id="menu-top-nav" class="external menu">
					<li class="menu-item"><a href="">Airport</a></li>
					<li class="menu-item"><a href="">Golf Course</a></li>
					<li class="menu-item"><a href="">Library</a></li>
					<li class="menu-item"><a href="">Economic Development</a></li>
					<li class="menu-item"><a href="">Tourism</a></li>
				</ul>
				<ul class="internal">
					<li class="menu-item"><a href="">Departments</a></li>
					<li class="menu-item"><a href="">Documents</a></li>
				</ul>
			</div>
		</div>
		<div class="mobile-menu">
				<i class="fa fa-bars"></i>
				<a href="#menu-container" class="screen-reader-text"><?php _e( 'Menu', 'tabula-rasa' ); ?></a>
		</div>
		
		<div class="site-branding">	
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/city_logo.gif" /></a></h1>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!-- used to use tr_main_nav() from bones. switched back to _s. unneeded arguments -->
			<?php 
			// might try this with wp_list_pages rahter than wp_nav_menu
			//http://www.wpbeginner.com/wp-tutorials/how-to-display-a-list-of-child-pages-for-a-parent-page-in-wordpress/
			if ( is_page() ) {
				if ( is_front_page() ) {
					$submenu = '';
				}
				$submenu = $title;
				
			} else {
				$submenu = '';
			}
			$args = array( 
				'theme_location' => 'primary', 
				//'submenu' => $submenu,
				'container_class' => 'mmenu-toggle', 
				'menu_class' => 'nav-menu'
				); 
			wp_nav_menu( $args );			
			?>
			<!--
			<div class="search-not-mobile">
			<i class="fa fa-search"></i>
			<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'tabula-rasa' ); ?></a>
			</div>
				-->
			<?php //tr_social_menu(); ?>
			<!--
			<div class="services-module">
			<h2>SERVICES</h2>
			<ul>
				<li>Application for Council</li>
				<li>Dog Licence</li>
				<li>Request a New Trash Can</li>
			</ul>
			</div>
			-->
		</nav><!-- #site-navigation -->
		
			<h2 class="site-description"><?php 
			$title = get_the_title();
			//echo $title;
			//bloginfo( 'description' ); ?></h2>
		</div>
		<div class="search-mobile">
			<i class="fa fa-search"></i>
			<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'tabula-rasa' ); ?></a>		
		</div>
		<div class="QRprintonly">
			<?php
			$permalink = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
			// QR code url
			$qr_code_url = 'http://chart.apis.google.com/chart?chs=100x100&cht=qr&chld=|0&chl='.urlencode($permalink);
			?>
			<p>Scan to visit this page:</p>
			<img src="<?php echo $qr_code_url; ?>
			" />
		</div>	
		<!--
		<div id="search-container" class="search-box-wrapper">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
		-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
