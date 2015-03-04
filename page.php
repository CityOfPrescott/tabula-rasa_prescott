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
<?php 
//figure out the page depth
$count = count(get_post_ancestors($post->ID)); 
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="spotlights-wrapper">
			<div class="spotlights">
				<div class="spotlight"><h2>SPOTLIGHT</h2></div>
				<div class="spotlight"><h2>SPOTLIGHT</h2></div>
				<div class="spotlight"><h2>SPOTLIGHT</h2></div>
			</div>
		</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php 
					if ( $count == 0 ) { get_template_part( 'content', 'level1' ); }
					if ( $count == 1 ) { get_template_part( 'content', 'level2' ); }
					if ( $count >= 2 ) { get_template_part( 'content', 'level2plus' ); }
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
