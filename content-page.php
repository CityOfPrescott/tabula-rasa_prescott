<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package tabula-rasa
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-header">
		<?php the_title( sprintf( '<h2 class="article-title" title="%s">', esc_url( get_permalink() ) ), '</h2>' ); ?>
		<div class="contact-info">
			<?php echo get_post_meta(the_ID(), '_cmb_contact', true ); ?>
		</div>
	</div>
			<!--
		<section class="col-1">

		<div class="announcements">
			<h3>New Annoucements</h3>
			<ul>
				<li>City Government has collapsed</li>
				<li>Widespread looting</li>
				<li>City Government has collapsed</li>
			</ul>
		</div>	
		<div class="forms">
			<h3>Forms</h3>
			<ul>
				<li>City Government has collapsed</li>
				<li>Widespread looting</li>
				<li>City Government has collapsed</li>
			</ul>
		</div>	

		<div class="page-nav">
			<?php
			$args = array( 
				'theme_location' => 'primary', 
				'submenu' => get_the_title(),
				'container_class' => 'mmenu-toggle', 
				'menu_class' => 'nav-menu'
				); 
			wp_nav_menu( $args );			
			?>		
		</div>
</section>
			-->
	<section class="col-2">
	<div class="entry-content">
		<!--
		<h2>Page Title</h2>
		<div class="mission">
			<h2>Mission:</h2>
			<p></p>
		</div>
		<div class="structure">
			<h2>Structure:</h2>
			<p></p>	
		</div>
		<div class="responsibility">
			<h2>Responsibility:</h2>
			<p></p>	
		</div>
		-->

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'tabula-rasa' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	</section>
	
	<section class="col-3">
	<div class="events">
			<h3>Upcoming Events</h3>
			<ul>
				<li>City Government has collapsed</li>
				<li>Widespread looting</li>
				<li>City Government has collapsed</li>
			</ul>
		</div>

		<div class="code">
			<h3>Code</h3>
			<ul>
				<li>City Government has collapsed</li>
				<li>Widespread looting</li>
				<li>City Government has collapsed</li>
			</ul>
		</div>	
		
		<div class="faq">
			<h3>FAQ</h3>
			<ul>
				<li>City Government has collapsed</li>
				<li>Widespread looting</li>
				<li>City Government has collapsed</li>
			</ul>
		</div>
		</section>
		
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'tabula-rasa' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
