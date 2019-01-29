<?php
/**
 *  Functions that insert customizer data and theme functionality into headers footers etc
 *
 * @package the-charm-of-making
 */


if ( ! function_exists( 'msp_insert_bootstrap_desktop_nav' ) ) {
	/** ----------------------------------------------------------------------------
	 *   Function  msp_insert_bootstrap_desktop_nav()
	 *   Inserts a navbar using the "desktop" theme menu location
	 *  --------------------------------------------------------------------------*/
	function msp_insert_bootstrap_desktop_nav() {  ?>

		   <nav class="navbar navbar-default header-nav" role="navigation">
			   <div class="col-xs-12">

				<?php

				$msp_nav_class = 'nav navbar-nav ';

				wp_nav_menu(
					array(
						'theme_location' => 'desktop',
						'depth'          => 1,
						'container'      => false,
						'menu_class'     => $msp_nav_class,
						'walker'         => new wp_bootstrap_navwalker(),
					)
				);

				?>
			</div>

		   </nav>

		<?php
	}
}

if ( ! function_exists( 'msp_insert_bootstrap_mobile_nav' ) ) {
	/** ----------------------------------------------------------------------------
	 *   Function  msp_insert_bootstrap_mobile_nav()
	 *   Inserts a navbar using the "mobile" theme menu location
	 *  --------------------------------------------------------------------------*/
	function msp_insert_bootstrap_mobile_nav() {
		?>
 
	   <nav class="navbar navbar-default header-nav" role="navigation">
		   <div class="container">

			   <div class="navbar-header">

				   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom_mod_navbar">
					   <span class="sr-only">Toggle navigation</span>
					   <span class="icon-bar"></span>
					   <span class="icon-bar"></span>
					   <span class="icon-bar"></span>
				   </button>

			   </div>

			   <div class="collapse navbar-collapse" id="custom_mod_navbar">

			   <?php

				$msp_nav_class = 'nav navbar-nav ';

				wp_nav_menu(
					array(
						'theme_location' => 'mobile',
						'depth'          => 1,
						'container'      => false,
						'menu_class'     => $msp_nav_class,
						'walker'         => new wp_bootstrap_navwalker(),
					)
				);

				?>

			</div>
		</div>
	</nav>

		<?php
	}
}

