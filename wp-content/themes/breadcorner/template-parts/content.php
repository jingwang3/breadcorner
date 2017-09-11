<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>
	<header class="entry-header">
		<?php
		if (is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_bootstrap_starter_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php if ( 'bread' === get_post_type() || 'cake' === get_post_type() || 'cookie' === get_post_type() || 'loaf' === get_post_type() || 'pastry' === get_post_type() ) : ?>
			<?php $product_image = get_field( 'product_image' ); ?>
			<?php if ( $product_image ) { ?>
				<div class="banner">
					<img class="img-responsive" src="<?php echo $product_image['url']; ?>" alt="<?php echo $product_image['alt']; ?>" />
				</div>
			<?php } ?>
				<div class="container">
					<h2 class="text-center product-title"><span class="inline-block"><?php echo the_title(); ?></span><span class="chinese-name"><?php the_field( 'chinese_name' ); ?></span></h2>
					<p class="product-desc text-center"><?php the_field( 'description' ); ?></p>
					<p class="product-price text-right"><strong>Price:</strong> <?php the_field( 'price' ); ?></p>
					<p class="text-center"><a href="/online-order" class="btn btn-primary">Order Now</a></p>
					<h3>Other Products</h3>
					<ul>
						<?php wp_list_pages( array(
						    'post_type' => get_post_type(),
						    'title_li' => ''
						)); ?>
					</ul>
				</div>
		<?php endif; ?>
		
		<?php
        if ( is_single() ) :
			the_content();
        else :
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
        endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
