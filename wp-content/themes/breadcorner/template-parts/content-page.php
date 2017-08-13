<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
    $enable_vc = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);
    if(!$enable_vc ) {
    ?>
    <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
    <?php } ?>

	<div class="entry-content">
		<?php if(is_front_page())
			echo do_shortcode('[smartslider3 slider=2]');
		?>
		<?php if(is_front_page()) : ?>
			<div class="online-order">
				<h2>Online Order</h2>
				<p><?php the_field( 'online_order_pitch' ); ?></p>
				<a href="/online-order" class="btn btn-primary btn-lg">Order Now</a>
			</div>
			<div class="categories">
				
			</div>
			<div class="contact-us row">
				<div class="col-md-6">
					<?php echo do_shortcode("[wpgmza id="1"]"); ?>
				</div>
				<div class="col-md-6">
					<h3>Opening Hours</h3>
					<span>Mon – Sunday  9AM - 8PM</span> 
					<h3>Address</h3>
					<span>591 Hungerford Drive, Rockville, MD, 20850</span>
					<h3>Phone</h3>
					<span>(240)328-6547</span>
					<h3>Email</h3>
					<span>breadcorner2009@gmail.com</span>
				</div>
			</div>
		<?php endif; ?>
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() && !$enable_vc ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'wp-bootstrap-starter' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
