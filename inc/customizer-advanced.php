<?php
/**
 * Adds advanced settings to theme Customizer
 *
 * @package    WordPress
 * @subpackage the-charm-of-making
 */

/** ----------------------------------------------------------------------------
 *   Function the_charm_of_making_customize_theme_add_advanced( $wp_customize )
 *   Hooks to customize_register action.
 *  ----------------------------------------------------------------------------
 *
 *   @param Array $wp_customize - passed to function by customize_register.
 */
function the_charm_of_making_customize_theme_add_advanced( $wp_customize ) {

	$wp_customize->add_panel(
		'advanced_panel', array(
			'priority'       => 10,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => 'Advanced',
			'description'    => '',
		)
	);

	/** Advanced Details Section */

	$wp_customize->add_section(
		'advanced_section', array(
			'title'    => 'Advanced',
			'priority' => 10,
			'panel'    => 'advanced_panel',
		)
	);


}
add_action( 'customize_register', 'the_charm_of_making_customize_theme_add_advanced' );
