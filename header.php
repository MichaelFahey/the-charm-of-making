<?php
/**
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-charm-of-making
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '' );
}

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php

wp_head();

/** ----------------------------------------------------------------------------
 *   load google fonts, get Hind if nothing else defined
 *  --------------------------------------------------------------------------*/
$bodyfonturl = 'https://fonts.googleapis.com/css?family=' . esc_attr( get_theme_mod( 'body_font', 'Montserrat' ) );
wp_enqueue_style( 'google-webfonts-1', $bodyfonturl, array(), 'false' );

if ( get_theme_mod( 'header_font', '' ) ) {
	$bodyfonturl = 'https://fonts.googleapis.com/css?family=' . esc_attr( get_theme_mod( 'header_font', 'Hind' ) );
	wp_enqueue_style( 'google-webfonts-2', $bodyfonturl, array(), 'false' );
}
if ( get_theme_mod( 'footer_font', '' ) ) {
	$bodyfonturl = 'https://fonts.googleapis.com/css?family=' . esc_attr( get_theme_mod( 'footer_font', 'Hind' ) );
	wp_enqueue_style( 'google-webfonts-3', $bodyfonturl, array(), 'false' );
}

?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site container-fluid">

	<div id="topofpage">
	</div>

	<div class="site-header container-fluid">
		<header id="masthead" >

			<?php

			/** ----------------------------------------------------------------------------
			 *   insert the desktop navbar, unless it's going below, hidden size xs
			 *  --------------------------------------------------------------------------*/
			if ( get_theme_mod( 'header_nav_location', 'above' ) === 'above' ) {
				?>
				<div class="col-xs-12 navbar-color">
					<div class="<?php echo esc_attr( get_theme_mod( 'navbar_container_option', 'container' ) ); ?> clearfix">
						<?php
						echo '<div class="hidden-xs">';
							msp_insert_bootstrap_desktop_nav();
						echo '</div><!-- .hidden-xs -->';
						?>
					</div><!-- container option -->
				</div><!-- container-fluid -->
				<?php
			}

			/** ----------------------------------------------------------------------------
			 *   insert the mobile navbar, hidden on all but size xs
			 *  --------------------------------------------------------------------------*/
			?>
			<div class="container-fluid navbar-color">
				<div class="clearfix">
					<?php
					echo '<div class="hidden-sm hidden-md hidden-lg hidden-xl">';
						msp_insert_bootstrap_mobile_nav();
					echo '</div><!-- .hidden -->';
					?>
				</div><!-- .clearfix -->
			</div><!-- container-fluid -->

		 <div class="header-widget-area">

				 <div class="container-fluid">
				   <div class="<?php echo esc_attr( get_theme_mod( 'body_container_option', 'container' ) ); ?> clearfix">

					   <div id="site-preheaderleft" class="<?php echo esc_attr( get_theme_mod( 'preheaderleft_classes', 'col-xs-12 col-sm-6 clearfix' ) ); ?>" >            
							<?php dynamic_sidebar( 'preheader-1' ); ?>
					   </div><!-- #site-preheaderleft -->

					   <div id="site-preheaderright" class="<?php echo esc_attr( get_theme_mod( 'preheaderright_classes', 'col-xs-12 col-sm-6 clearfix' ) ); ?>" >            
							<?php dynamic_sidebar( 'preheader-2' ); ?>
					   </div><!-- #site-preheaderright -->
				   </div><!-- container option -->
			   </div><!-- container-fluid -->

			   <div class="container-fluid">
				   <div class="<?php echo esc_attr( get_theme_mod( 'body_container_option', 'container' ) ); ?> clearfix">

					   <div id="site-headerleft" class="<?php echo esc_attr( get_theme_mod( 'headerleft_classes', 'col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 clearfix' ) ); ?>" >
							<?php dynamic_sidebar( 'header-1' ); ?>
					  </div><!-- #site-headerleft -->

					   <div id="site-headercenter" class="<?php echo esc_attr( get_theme_mod( 'headercenter_classes', 'col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 clearfix' ) ); ?>" >
							<?php dynamic_sidebar( 'header-2' ); ?>
					   </div><!-- #site-headercenter -->

					   <div id="site-headerright" class="<?php echo esc_attr( get_theme_mod( 'headerright_classes', 'col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 clearfix' ) ); ?>" >
							<?php dynamic_sidebar( 'header-3' ); ?>
					   </div><!-- #site-headerright -->

				   </div><!-- container option --> 
			  </div><!-- container-fluid -->
		 </div><!-- .header-widget-area -->

			<div class="container-fluid">
				<div class="<?php echo esc_attr( get_theme_mod( 'body_container_option', 'container' ) ); ?> clearfix">
				<?php
				/** ----------------------------------------------------------------------------
				 *  desktop navbar option for below header
				 *  --------------------------------------------------------------------------*/
				if ( get_theme_mod( 'header_nav_location', 'above' ) === 'below' ) {
					echo '<div class="hidden-xs">';
					msp_insert_bootstrap_desktop_nav();
					echo '</div>';
				}
				?>
				</div><!-- container option --> 
			</div><!-- container-fluid -->

		</header><!-- #masthead -->
	</div><!-- .site-header container-fluid -->

	<div class="container-fluid">
	   <div class="site-body">

		   <div class="<?php echo esc_attr( get_theme_mod( 'body_container_option', 'container' ) ); ?>">
			   <div id="content" class="site-content">

