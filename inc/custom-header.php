<?php
/**
 * Implementation of WordPress custom header pattern
 *
 * @package the-charm-of-making
 *
 * @uses the_charm_of_making_header_style()
 */

/** ----------------------------------------------------------------------------
 *   Function the_charm_of_making_custom_header_setup()
 *   Sets callback function to the_charm_of_making_header_style()
 *   Hooks to after_setup_theme action
 *  --------------------------------------------------------------------------*/
function the_charm_of_making_custom_header_setup() {
	add_theme_support(
		'custom-header', apply_filters(
			'the_charm_of_making_custom_header_args', array(
				'default-text-color' => '000000',
				'flex-height'        => true,
				'wp-head-callback'   => 'the_charm_of_making_header_style',
			)
		)
	);
}
add_action( 'after_setup_theme', 'the_charm_of_making_custom_header_setup' );

if ( ! function_exists( 'the_charm_of_making_header_style' ) ) :
	/** ----------------------------------------------------------------------------
	 *   Function the_charm_of_making_header_style
	 *   reads customizer settings and embeds them in inline CSS
	 *  --------------------------------------------------------------------------*/
	function the_charm_of_making_header_style() {
		?>

		<style type="text/css">
		.navbar-default {
			background-color: transparent;
		}
		.navbar-color {
			background-color: <?php echo esc_attr( get_theme_mod( 'header_menu_background_color', 'transparent' ) ); ?>;
		}

		.navbar-default .navbar-nav > li > a { 
			color: <?php echo esc_attr( get_theme_mod( 'header_menu_text_color', 'black' ) ); ?>;
		}

		.navbar-default .navbar-nav > li > a:hover { 
			color: <?php echo esc_attr( get_theme_mod( 'header_menu_hover_text_color', 'white' ) ); ?>;
			background-color: <?php echo esc_attr( get_theme_mod( 'header_menu_hover_background_color', 'red' ) ); ?>;
		}

		.navbar-default  .navbar-nav .active a:hover ,
		.navbar-default  .navbar-nav .active a {
			color: <?php echo esc_attr( get_theme_mod( 'header_menu_active_text_color', 'black' ) ); ?>;
			background-color: <?php echo esc_attr( get_theme_mod( 'header_menu_active_background_color', 'white' ) ); ?>;
		}

		.site-header {
			background-color: <?php echo esc_attr( get_theme_mod( 'header_background_color', 'transparent' ) ); ?>; 
			color: <?php echo esc_attr( get_theme_mod( 'header_text_color', 'black' ) ); ?>; 

			<?php if ( get_theme_mod( 'header_background_image_toggle', 'yes' ) === 'yes' ) { ?>
				background-image: url( <?php echo esc_attr( get_theme_mod( 'header_background_image', '' ) ); ?>); 
			<?php } ?>
			font-family: <?php echo esc_attr( get_theme_mod( 'header_font', 'Montserrat' ) ); ?>;
		}

		.site-header .site-title a,
		.site-header .site-description {
			color: #<?php echo esc_attr( get_header_textcolor() ); ?>;
		}

			.site-content {
				background-image: url( <?php echo esc_attr( get_theme_mod( 'body_image_image', '' ) ); ?>); 
			}
			.entry-content {
				color: <?php echo esc_attr( get_theme_mod( 'body_text_color', 'black' ) ); ?>;
				background-color: <?php echo esc_attr( get_theme_mod( 'body_background_color', 'transparent' ) ); ?>;
			}
		<?php if ( get_theme_mod( 'body_image_toggle', 'no' ) == 'yes' ) { ?>
		<?php } ?>

		.site-footer {
			background-color: <?php echo esc_attr( get_theme_mod( 'footer_background_color', '#333333' ) ); ?>; 
			background-image: url( <?php echo esc_attr( get_theme_mod( 'footer_background_image', '' ) ); ?>); 
			color: <?php echo esc_attr( get_theme_mod( 'footer_text_color', 'black' ) ); ?>; 
			font-family: <?php echo esc_attr( get_theme_mod( 'footer_font', 'Hind' ) ); ?>;
		}

		.site-footer .site-title a,
		.site-footer .site-description {
			color: <?php echo esc_attr( get_theme_mod( 'footer_text_color', '#333333' ) ); ?>;
		}


		.site-footer .widget_nav_menu > li > a , 
		.site-footer .nav-pills > li > a { 
			color: <?php echo esc_attr( get_theme_mod( 'footer_menu_text_color', '#000000' ) ); ?>;
			background: <?php echo esc_attr( get_theme_mod( 'footer_menu_background_color', '#cccccc' ) ); ?>;
		}

		.site-footer .widget_nav_menu > li > a:hover , 
		.site-footer .nav-pills > li > a:hover { 
			color: <?php echo esc_attr( get_theme_mod( 'footer_menu_hover_text_color', '#000000' ) ); ?>;
			background: <?php echo esc_attr( get_theme_mod( 'footer_menu_hover_background_color', '#ffffff' ) ); ?>;
		}

		.site-footer .widget_nav_menu a:link ,
		.site-footer .widget_nav_menu a:focus ,
		.site-footer .widget_nav_menu .active a ,
		.site-footer .nav-pills .active a {
			color: <?php echo esc_attr( get_theme_mod( 'footer_menu_active_text_color', '#000000' ) ); ?>;
			background: <?php echo esc_attr( get_theme_mod( 'footer_menu_active_background_color', '#eeeeee' ) ); ?>;
		}

		.site {
			font-family: <?php echo esc_attr( get_theme_mod( 'body_font', 'Hind' ) ); ?>;
			background-color: <?php echo esc_attr( get_theme_mod( 'site_background_color', '#ffffff' ) ); ?>;
		}
		nav {
			font-family: <?php echo esc_attr( get_theme_mod( 'header_font', 'Montserrat' ) ); ?>;
		}

      .widget-area .widget .nav-pills > li >a , 
      .widget-area .widget .nav-pills > li >a:focus ,
      .widget-area .widget .nav-pills > li.active >a , 
      .widget-area .widget h2 , 
      .widget-area .widget h2 a , 
      .widget-area .widget .nav-pills > li.active >a:focus {
         background: <?php echo esc_attr( get_theme_mod( 'sidebar_accent_color', '#0073AA' ) ); ?>;
			color: <?php echo esc_attr( get_theme_mod( 'sidebar_accent_text_color', 'white' ) ); ?>;
      }

      .widget-area {
         background: <?php echo esc_attr( get_theme_mod( 'sidebar_background_color', 'rgba(0,0,0,0)' ) ); ?>;
			color: <?php echo esc_attr( get_theme_mod( 'sidebar_text_color', 'black' ) ); ?>;
		}

      .widget-area .widget {
         background: <?php echo esc_attr( get_theme_mod( 'custom_widget_background_color', 'white' ) ); ?>;
      }

      .widget-area .widget a { 
			color: <?php echo esc_attr( get_theme_mod( 'sidebar_link_color', 'blue' ) ); ?>;
      }

		@media (max-width: 767px) {

		}

		</style>
		<?php
	}
endif;
