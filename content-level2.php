<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package tabula-rasa
 */
?>
		<div class="page-info-wrapper">
			<div class="page-info">
				<header class="entry-header page-menu">
					<h1 class="entry-title" title="">
					<?php  echo get_the_title(); ?>
					</h1>
					<?php 
						$args = array( 
							'theme_location' => 'primary', 
							'submenu' => get_the_title(),
							'container_class' => 'mmenu-toggle', 
							'menu_class' => 'nav-menu'
							); 
						wp_nav_menu( $args );			
					?>					
					<div class="breadcrumbs">
						<?php the_breadcrumb(); ?>					
					</div>
				</header><!-- .entry-header -->
			</div>
		</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-header">
		<div class="contact-info">
			<?php 
			$contact = get_post_meta( $post->ID, '_cmb_contact', true );
			if ( $contact == '' ) {
				echo '123 South Cortez Street, Prescott, AZ  86301';
			} else {
				echo $contact;
			}
			?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/email.png" style="padding-left: 5px;" />
		</div>
	</div>
	
	<section class="col-1">
		<div class="events widgets">
			<h3>Recent News</h3>
			<h4>Topping sweet roll tiramisu tart</h4>
			<img src="<?php echo get_template_directory_uri(); ?>/images/fire-truck.jpg" />
			<p>Marshmallow toffee gummi bears jelly. Cupcake chocolate fruitcake wafer dessert. Wafer muffin halvah jelly-o. Gummi bears bear claw chocolate. Marzipan souffle pudding gummies gummies halvah marzipan.</p>
			<p>More News:</p>
			<ul>
				<li><a href="http://www.google.com">City Government has collapsed</a></li>
				<li><a href="http://www.google.com">Widespread looting</a></li>
				<li><a href="http://www.google.com">City Government has collapsed</a></li>
			</ul>
		</div>	
	</section>
	
	<section class="col-2">
		<div class="faq widgets">
			<h3>FAQ</h3>
			<ul>
				<li><a href="http://www.google.com">City Government has collapsed</a></li>
				<li><a href="http://www.google.com">Widespread looting</a></li>
				<li><a href="http://www.google.com">City Government has collapsed</a></li>
			</ul>
		</div>
	</section>
	
	<section class="col-3">
		<div class="code widgets">
			<h3>Code</h3>
			<ul>
				<li><a href="http://www.google.com">City Government has collapsed</a></li>
				<li><a href="http://www.google.com">Widespread looting</a></li>
				<li><a href="http://www.google.com">City Government has collapsed</a></li>
			</ul>
		</div>	
	</section>
		
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'tabula-rasa' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
