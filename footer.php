<?php
/**
 * Template part for the footer for all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-charm-of-making
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '' );
}

?>

			   </div><!-- #content .site-content -->
		   </div><!-- body_container_option -->
	   </div><!-- .site-body -->
	</div><!--.container-fluid -->

	<div class="site-footer container-fluid">

		<div class="<?php echo esc_attr( get_theme_mod( 'body_container_option', 'container' ) ); ?>">

			<footer id="colophon" class="site-footer">
			   <div class="footer-padding" >

				   <div class="<?php echo esc_attr( get_theme_mod( 'footerleft_classes', 'col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4' ) ); ?>" >
					   <div id="site-footerleft" class="clearfix">
							<?php dynamic_sidebar( 'footer-1' ); ?>
					   </div><!-- #site-footerleft -->
				   </div><!-- (container classes) -->

				   <div class="<?php echo esc_attr( get_theme_mod( 'footercenter_classes', 'col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4' ) ); ?>" >
					   <div id="site-footercenter" class="clearfix">
							<?php dynamic_sidebar( 'footer-2' ); ?>
						   <div></div>
					   </div><!-- #site-footercenter -->
				   </div><!-- (container classes) -->

				   <div class="<?php echo esc_attr( get_theme_mod( 'footerright_classes', 'col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4' ) ); ?>" >
					   <div id="site-footerright" class="clearfix">
							<?php dynamic_sidebar( 'footer-3' ); ?>
					   </div><!-- #site-footerright -->
				   </div><!-- (container classes) -->
				</div><!-- (.footer-padding) -->

			</footer><!-- #colophon -->

		</div> <!-- container option -->
	</div> <!-- .site-footer .container-fluid -->

</div><!-- #page -->

</body>
<?php wp_footer(); ?>

</html>
