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
				<div class="row no-margin">
					<div class="col-sm-6 col-md-4 no-padding cat-item cat-bread">
						<a href="/products/bread">
							<span>Bread</span>
							<?php $bread = get_field( 'bread' ); ?>
							<?php if ( $bread ) { ?>
								<div class="img-overlay">
									<img class="img-responsive" src="<?php echo $bread['url']; ?>" alt="<?php echo $bread['alt']; ?>" />
								</div>
							<?php } ?>
						</a>
					</div>
					<div class="col-sm-6 col-md-4 no-padding cat-item cat-cake">
						<a href="/products/cake">
							<span>Cake</span>
							<?php $cake = get_field( 'cake' ); ?>
							<?php if ( $cake ) { ?>
								<div class="img-overlay">
									<img class="img-responsive" src="<?php echo $cake['url']; ?>" alt="<?php echo $cake['alt']; ?>" />
								</div>
							<?php } ?>
						</a>
					</div>
					<div class="col-sm-6 col-md-4 no-padding cat-item cat-cookie">
						<a href="/products/cookie">
							<span>Cookie</span>
							<?php $cookie = get_field( 'cookie' ); ?>
							<?php if ( $cookie ) { ?>
								<div class="img-overlay">
									<img class="img-responsive" src="<?php echo $cookie['url']; ?>" alt="<?php echo $cookie['alt']; ?>" />
								</div>
							<?php } ?>
						</a>
					</div>
					<div class="col-sm-6 col-md-4 no-padding cat-item cat-loaf">
						<a href="/products/loaf">
							<span>Loaf</span>
							<?php $loaf = get_field( 'loaf' ); ?>
							<?php if ( $loaf ) { ?>
								<div class="img-overlay">
									<img class="img-responsive" src="<?php echo $loaf['url']; ?>" alt="<?php echo $loaf['alt']; ?>" />
								</div>
							<?php } ?>
						</a>
					</div>
					<div class="col-sm-6 col-md-4 no-padding cat-item cat-pastry">
						<a href="/products/pastry">
							<span>Pastry</span>
							<?php $pastry = get_field( 'pastry' ); ?>
							<?php if ( $pastry ) { ?>
								<div class="img-overlay">
									<img class="img-responsive" src="<?php echo $pastry['url']; ?>" alt="<?php echo $pastry['alt']; ?>" />
								</div>
							<?php } ?>
						</a>
					</div>
					<div class="col-sm-6 col-md-4 no-padding cat-item cat-other">
						<a href="/products">
							<span>More</span>
							<?php $other = get_field( 'other' ); ?>
							<?php if ( $other ) { ?>
								<div class="img-overlay">
									<img class="img-responsive" src="<?php echo $other['url']; ?>" alt="<?php echo $other['alt']; ?>" />
								</div>
							<?php } ?>
						</a>
					</div>
				</div>			
			</div>
			<div class="contact-us">
				<h2>Find Us</h2>
				<?php echo do_shortcode('[gmap-embed id="94"]'); ?>
			</div>
		<?php endif; ?>
		
		<?php if ( is_page('online-order') ) : ?>
			<div class="online-order space-holder hidden-mobile"></div>
		
			<div class="online-order-page container">
				
				<h2 class="text-primary">Products</h2>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?php 
					$posts = get_posts(array(
						'posts_per_page'	=> -1,
						'post_type'			=> array('bread','cookie','loaf','pastry'),
						'meta_key'			=> 'code_number',
						'orderby'			=> 'meta_value',
						'order'				=> 'ASC'
					));
					
					if( $posts ): ?>
						
						  <div class="panel panel-default accordion-bread">
						    <div class="panel-heading" role="tab" id="headingOne">
						      <h4 class="panel-title">
						        <a class="btn btn-primary text-left btn-block" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          A<span><?php the_field( 'group_a_description' ); ?></span>
						        </a>
						      </h4>
						    </div>
						    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						      <div class="panel-body">
								<ul class="list-group">
									
								<?php foreach( $posts as $post ): 
									
									setup_postdata( $post );
									
									?>
									<?php if( get_field( 'group' ) == 'a' ): ?>
										<li class="list-group-item">
											<a target="_blank" href="<?php the_permalink(); ?>"><span class="label label-danger uppercase"><?php the_field( 'group' ); ?><?php the_field( 'code_number' ); ?></span> - <span class="item-name"><?php the_title(); ?> | <?php the_field( 'chinese_name' );?></span></a>
										</li>
									<?php endif; ?>
								<?php endforeach; ?>
								
								</ul>					        
						      </div>
						    </div>
						  </div>
									
					<?php wp_reset_postdata(); ?>		
					
					<?php endif; ?>
					
					
					<?php 
					$posts = get_posts(array(
						'posts_per_page'	=> -1,
						'post_type'			=> array('bread','cookie','loaf','pastry'),
						'meta_key'			=> 'code_number',
						'orderby'			=> 'meta_value',
						'order'				=> 'ASC'
					));
					
					if( $posts ): ?>
						
						  <div class="panel panel-default accordion-cookie">
						    <div class="panel-heading" role="tab" id="headingThree">
						      <h4 class="panel-title">
						        <a class="btn btn-primary text-left btn-block" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
						          B<span><?php the_field( 'group_b_description' ); ?></span>
						        </a>
						      </h4>
						    </div>
						    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						      <div class="panel-body">
								<ul class="list-group">
									
								<?php foreach( $posts as $post ): 
									
									setup_postdata( $post );
									
									?>
									<?php if( get_field( 'group' ) == 'b' ): ?>
										<li class="list-group-item">
											<a target="_blank" href="<?php the_permalink(); ?>"><span class="label label-danger uppercase"><?php the_field( 'group' ); ?><?php the_field( 'code_number' ); ?></span> - <span class="item-name"><?php the_title(); ?> | <?php the_field( 'chinese_name' );?></span></a>
										</li>
									<?php endif; ?>
								
								<?php endforeach; ?>
								
								</ul>					        
						      </div>
						    </div>
						  </div>
								
					<?php wp_reset_postdata(); ?>			
					
					<?php endif; ?>
					
					<?php

					$posts = get_posts(array(
						'posts_per_page'	=> -1,
						'post_type'			=> array('bread','cookie','loaf','pastry'),
						'meta_key'			=> 'code_number',
						'orderby'			=> 'meta_value',
						'order'				=> 'ASC'
					));
					
					if( $posts ): ?>
						
						  <div class="panel panel-default accordion-loaf">
						    <div class="panel-heading" role="tab" id="headingFour">
						      <h4 class="panel-title">
						        <a class="btn btn-primary text-left btn-block" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
						          C<span><?php the_field( 'group_c_description' ); ?></span>
						        </a>
						      </h4>
						    </div>
						    <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
						      <div class="panel-body">
								<ul class="list-group">
									
								<?php foreach( $posts as $post ): 
									
									setup_postdata( $post );
									
									?>
									<?php if( get_field( 'group' ) == 'c' ): ?>
										<li class="list-group-item">
											<a target="_blank" href="<?php the_permalink(); ?>"><span class="label label-danger uppercase"><?php the_field( 'group' ); ?><?php the_field( 'code_number' ); ?></span> - <span class="item-name"><?php the_title(); ?> | <?php the_field( 'chinese_name' );?></span></a>
										</li>
									<?php endif; ?>
								
								<?php endforeach; ?>
								
								</ul>					        
						      </div>
						    </div>
						  </div>

					<?php wp_reset_postdata(); ?>
					
					<?php endif; ?>
					
					<?php
					
					$posts = get_posts(array(
						'posts_per_page'	=> -1,
						'post_type'			=> array('bread','cookie','loaf','pastry'),
						'meta_key'			=> 'code_number',
						'orderby'			=> 'meta_value',
						'order'				=> 'ASC'
					));
					
					if( $posts ): ?>
						
						  <div class="panel panel-default accordion-pastry">
						    <div class="panel-heading" role="tab" id="headingFive">
						      <h4 class="panel-title">
						        <a class="btn btn-primary text-left btn-block" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
						          D<span><?php the_field( 'group_d_description' ); ?></span>
						        </a>
						      </h4>
						    </div>
						    <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive">
						      <div class="panel-body">
								<ul class="list-group">
									
								<?php foreach( $posts as $post ): 
									
									setup_postdata( $post );
									
									?>
									<?php if( get_field( 'group' ) == 'd' ): ?>
										<li class="list-group-item">
											<a target="_blank" href="<?php the_permalink(); ?>"><span class="label label-danger uppercase"><?php the_field( 'group' ); ?><?php the_field( 'code_number' ); ?></span> - <span class="item-name"><?php the_title(); ?> | <?php the_field( 'chinese_name' );?></span></a>
										</li>
									<?php endif; ?>
								
								<?php endforeach; ?>
								
								</ul>					        
						      </div>
						    </div>
						  </div>
											
						
						<?php wp_reset_postdata(); ?>
					
					<?php endif; ?>					
				</div>
			
				<h2 class="text-primary">Online Order Form</h2>
				<p class="order-instructions"><?php the_field( 'order_instructions' ); ?></p>
				<?php echo do_shortcode( '[contact-form-7 id="195" title="Online Order"]' ); ?>
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
