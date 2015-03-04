<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package tabula-rasa
 */
?>
		<div class="page-info-wrapper">
			<div class="page-info">
			<?php 
				echo get_the_title();
				?>
			</div>
		</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div>
			<!-- used to use tr_main_nav() from bones. switched back to _s. unneeded arguments -->
			<?php 
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

		</div><!-- #site-navigation -->
		<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'tabula-rasa' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
