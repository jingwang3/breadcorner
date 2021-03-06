<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row no-margin">
			<div class="col-md-3 text-center">
				<h3>Opening Hours</h3>
				<span>Mon – Sunday  9AM - 8:30PM</span>					
			</div>
			<div class="col-md-3 text-center">
				<h3>Contact</h3>
				<span><a href="tel:2403286547">(240) 328-6547</a> 
				<br /><a href="mailto:breadcorneronlineorders@gmail.com">breadcorneronlineorders@gmail.com</a></span>
			</div>
			<div class="col-md-3 text-center">
				<h3>Address</h3>
				<span>591 Hungerford Drive, 
				<br />Rockville, MD, 20850</span>					
			</div>
			<div class="col-md-3 text-center">
				<h3>Social Media</h3>
				<a href="https://www.facebook.com/Bread-Corner-1399505216974382/" target="_blank"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
			</div>			
		</div>	    
		<div class="container">
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="http://quadrastudio.us/" target="_blank" title="Supported by QuadraStudio" alt=""><?php echo esc_html__('Supported by QuadraStudio','wp-bootstrap-starter'); ?></a>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
