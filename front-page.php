<?php
/**
 * Front Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="photo-spread">
			<!--<img src="<?php echo get_template_directory_uri(); ?>/images/photo-spread-1.jpg" />-->
			

				<div class="search-box">
					<?php get_search_form(); ?>
				</div>
			
		</div>

		<div class="spotlight-wrapper">
			<div class="spotlight">
				<div class="button">Featured Item</div>
				<div class="button">Featured Item</div>
				<div class="button">Featured Item</div>
				<div class="button">Featured Item</div>
			</div>
		</div>

		<div class="modules">
			<div class="button"><h3>Other Things</h3></div>
			<div class="button"><h3>Other Things</h3></div>
			<div class="button"><h3>Other Things</h3></div>
		</div>		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>