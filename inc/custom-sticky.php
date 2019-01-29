<?php
/**
 * Adds "sticky" related css and js
 *
 * @package the-charm-of-making
 *
 * @uses the_charm_of_making_header_style()
 */

/** ----------------------------------------------------------------------------
 *   Function the_charm_of_making_custom_sticky()
 *   Hooks to wp_print_footer_scripts action
 *  --------------------------------------------------------------------------*/
function the_charm_of_making_custom_sticky() {

	if ( get_theme_mod( 'body_sidebar_sticky_toggle', 'off' ) === 'on' ) {
		?>

		<style type="text/css">
			@media (max-width: 767px) {
			}
			@media (min-width: 768px) {
				.sidebar-sticky {
					position:fixed;
				}
			}
			@media (min-width: 992px) {
			}
			@media (min-width: 1200px) {
			}
			@media (min-width:1600px ) {
			}
			@media (min-width:1900px ) {
			}
		</style>

		<script type="text/javascript">

			var debug=0;
			var windowWidth = jQuery(window).width();

			// suppress on phones
			if ( windowWidth >= 756 ) {

				jQuery(window).scroll(
					function() {
						var headerOffset     = jQuery('.site-header').height() + jQuery('.page-headline').height();
						var sidebarHeight    = jQuery('.widget-area').height();
				  var footerHeight     = jQuery('.site-footer').height();
						var footerDepth      = jQuery('.site-body').height() - sidebarHeight; 
						var currentScroll    = jQuery(window).scrollTop();
		
						var sidebarMarginTop=currentScroll * -1;
						if (currentScroll > headerOffset ) {
							if ( ( currentScroll ) > footerDepth ) {
								sidebarMarginTop = headerOffset * -1 - ( ( currentScroll ) - footerDepth );
							} else {
								sidebarMarginTop = headerOffset * -1;
							}
						} 
						jQuery(".sidebar-sticky").css( "margin-top", sidebarMarginTop );
						if ( debug ) {
							jQuery(".sidebar-debug").css( "display", "block" );
							jQuery("#headerOffset").html( headerOffset );
							jQuery("#footerDepth").html( footerDepth );
							jQuery("#sidebarHeight").html( sidebarHeight );
							jQuery("#currentScroll").html( currentScroll );
							jQuery("#sidebarMarginTop").html( sidebarMarginTop );
						}
					}
				);
			}
		</script>

		<?php
	}
}
add_action( 'wp_print_footer_scripts', 'the_charm_of_making_custom_sticky' );

