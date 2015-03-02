<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package tabula-rasa
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="page-info-wrapper">
			<div class="page-info">

				<div class="spotlights">
					<div class="spotlight"><h2><a href="<?php echo get_post_meta(the_ID(),  '_cmb_url', true ); ?>"><?php echo get_post_meta(the_ID(), '_cmb_text', true ); ?><a/></h2></div>
					<div class="spotlight"><h2>SPOTLIGHT</h2></div>
					<div class="spotlight"><h2>SPOTLIGHT</h2></div>
				</div>
			</div>
			</div>

		<div class="page-info-wrapper">
			<div class="page-info">
			<?php 
				$args = array( 
					'theme_location' => 'primary', 
					'submenu' => get_the_title(),
					'container_class' => 'mmenu-toggle', 
					'menu_class' => 'nav-menu'
					); 
				//wp_nav_menu( $args );			
				
				$parent_title = get_the_title($post->post_parent);
				?>
				
				<header class="entry-header">
					<h1 class="entry-title" title=""><?php  echo $parent_title; ?>
					</h1>
					
					<div class="page-menu">
						<p>MENU</p>
						<?php wp_nav_menu( $args ); ?>
					</div>

					<div class="search-not-mobile">
					<i class="fa fa-search"></i>
					<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'tabula-rasa' ); ?></a>
					</div>				
				</header><!-- .entry-header -->
			</div>
			</div>
				<div id="search-container" class="search-box-wrapper">
					<div class="search-box">
						<?php get_search_form(); ?>
					</div>
				</div>				
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
