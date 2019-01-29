<?php
/**
 * Adds footer-related settings to theme Customizer
 *
 * @package the-charm-of-making
 */

/** ----------------------------------------------------------------------------
 *   Function the_charm_of_making_customize_theme_add_footer( $wp_customize )
 *   Function which adds panel, settings, and controls to Footer
 *   customizer section.
 *   Hooks to customize_register action.
 *  ----------------------------------------------------------------------------
 *
 *   @param Array $wp_customize - passed to function by customize_register.
 */
function the_charm_of_making_customize_theme_add_footer( $wp_customize ) {

	$wp_customize->add_panel(
		'footer', array(
			'priority'       => 10,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => 'Footer Options',
			'description'    => '',
		)
	);

	/** Footer Layout Section */

	$wp_customize->add_section(
		'footer_details', array(
			'title'    => 'Footer Layout',
			'priority' => 10,
			'panel'    => 'footer',
		)
	);

	$wp_customize->add_setting(
		'footerleft_classes', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);

	$wp_customize->add_control(
		'footerleft_classes_control', array(
			'label'       => __( 'Footer Left Classes', 'the-charm-of-making' ),
			'description' => '(default: col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4)',
			'section'     => 'footer_details',
			'settings'    => 'footerleft_classes',
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'footercenter_classes', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		'footercenter_classes_control', array(
			'label'       => __( 'Footer Center Classes', 'the-charm-of-making' ),
			'description' => '(default: col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4)',
			'section'     => 'footer_details',
			'settings'    => 'footercenter_classes',
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'footerright_classes', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);

	$wp_customize->add_control(
		'footerright_classes_control', array(
			'label'       => __( 'Footer Right Classes', 'the-charm-of-making' ),
			'description' => '(default: col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4)',
			'section'     => 'footer_details',
			'settings'    => 'footerright_classes',
			'type'        => 'text',
		)
	);

	/** Footer Image Section */
	$wp_customize->add_section(
		'footer_image', array(
			'title'    => 'Footer Image',
			'priority' => 10,
			'panel'    => 'footer',
		)
	);

	$wp_customize->add_setting(
		'footer_background_image',
		array(
			'default'           => '',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'footer_background_image',
				array(
					'label'    => __( 'Footer Background Image', 'the-charm-of-making' ),
					'section'  => 'footer_image',
					'settings' => 'footer_background_image',

				)
			)
		);

	/** Footer Color Section */

	$wp_customize->add_section(
		'footer_colors', array(
			'title'    => 'Footer Colors',
			'priority' => 10,
			'panel'    => 'footer',
		)
	);

	/* ---------- footer text color --------------------------------- */
	$wp_customize->add_setting(
		'footer_text_color',
		array(
			'default'           => 'white',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'footer_text_color_control',
			array(
				'label'        => __( 'Footer Text Color', 'the-charm-of-making' ),
				'settings'     => 'footer_text_color',
				'section'      => 'footer_colors',
				'show_opacity' => true,
				'palette'      => array(
					'rgba(0, 0, 0, 1.0)',
					'rgba(255, 255, 255, 1.0)',
					'rgba(255,0,0, 1.0)',
					'rgba(0,255,0, 1.0)',
					'rgba(0,0,255, 1.0)',
				),
			)
		)
	);

	/* ---------- footer background color --------------------------------- */
	$wp_customize->add_setting(
		'footer_background_color',
		array(
			'default'           => 'black',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'footer_background_color_control',
			array(
				'label'        => __( 'Footer Background Color', 'the-charm-of-making' ),
				'settings'     => 'footer_background_color',
				'section'      => 'footer_colors',
				'show_opacity' => true,
				'palette'      => array(
					'rgba(0, 0, 0, 1.0)',
					'rgba(255, 255, 255, 1.0)',
					'rgba(255,0,0, 1.0)',
					'rgba(0,255,0, 1.0)',
					'rgba(0,0,255, 1.0)',
				),
			)
		)
	);

	/* ---------- footer menu text color --------------------------------- */
	$wp_customize->add_setting(
		'footer_menu_text_color',
		array(
			'default'           => 'white',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'footer_menu_text_color_control',
			array(
				'label'        => __( 'Footer Menu Text Color', 'the-charm-of-making' ),
				'settings'     => 'footer_menu_text_color',
				'section'      => 'footer_colors',
				'show_opacity' => true,
				'palette'      => array(
					'rgba(0, 0, 0, 1.0)',
					'rgba(255, 255, 255, 1.0)',
					'rgba(255,0,0, 1.0)',
					'rgba(0,255,0, 1.0)',
					'rgba(0,0,255, 1.0)',
				),
			)
		)
	);

	/* ---------- footer menu background color --------------------------------- */
	$wp_customize->add_setting(
		'footer_menu_background_color',
		array(
			'default'           => 'none',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'footer_menu_background_color_control',
			array(
				'label'        => __( 'Footer Menu Background Color', 'the-charm-of-making' ),
				'settings'     => 'footer_menu_background_color',
				'section'      => 'footer_colors',
				'show_opacity' => true,
				'palette'      => array(
					'rgba(0, 0, 0, 1.0)',
					'rgba(255, 255, 255, 1.0)',
					'rgba(255,0,0, 1.0)',
					'rgba(0,255,0, 1.0)',
					'rgba(0,0,255, 1.0)',
				),
			)
		)
	);

	/* ---------- footer menu active text color --------------------------------- */
	$wp_customize->add_setting(
		'footer_menu_active_text_color',
		array(
			'default'           => 'white',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'footer_menu_active_text_color_control',
			array(
				'label'        => __( 'Footer Menu Active Text Color', 'the-charm-of-making' ),
				'settings'     => 'footer_menu_active_text_color',
				'section'      => 'footer_colors',
				'show_opacity' => true,
				'palette'      => array(
					'rgba(0, 0, 0, 1.0)',
					'rgba(255, 255, 255, 1.0)',
					'rgba(255,0,0, 1.0)',
					'rgba(0,255,0, 1.0)',
					'rgba(0,0,255, 1.0)',
				),
			)
		)
	);

	/* ---------- footer menu active background color --------------------------------- */
	$wp_customize->add_setting(
		'footer_menu_active_background_color',
		array(
			'default'           => 'rgba(255,255,255,0.25)',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'footer_menu_active_background_color_control',
			array(
				'label'        => __( 'Footer Menu Active Background Color', 'the-charm-of-making' ),
				'settings'     => 'footer_menu_active_background_color',
				'section'      => 'footer_colors',
				'show_opacity' => true,
				'palette'      => array(
					'rgba(0, 0, 0, 1.0)',
					'rgba(255, 255, 255, 1.0)',
					'rgba(255,0,0, 1.0)',
					'rgba(0,255,0, 1.0)',
					'rgba(0,0,255, 1.0)',
				),
			)
		)
	);

	/* ---------- footer menu hover text color --------------------------------- */
	$wp_customize->add_setting(
		'footer_menu_hover_text_color',
		array(
			'default'           => 'white',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'footer_menu_hover_text_color_control',
			array(
				'label'        => __( 'Footer Menu Hover Text Color', 'the-charm-of-making' ),
				'settings'     => 'footer_menu_hover_text_color',
				'section'      => 'footer_colors',
				'show_opacity' => true,
				'palette'      => array(
					'rgba(0, 0, 0, 1.0)',
					'rgba(255, 255, 255, 1.0)',
					'rgba(255,0,0, 1.0)',
					'rgba(0,255,0, 1.0)',
					'rgba(0,0,255, 1.0)',
				),
			)
		)
	);

	/* ---------- footer menu hover background color --------------------------------- */
	$wp_customize->add_setting(
		'footer_menu_hover_background_color',
		array(
			'default'           => 'red',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'footer_menu_hover_background_color_control',
			array(
				'label'        => __( 'Footer Menu Hover Background Color', 'the-charm-of-making' ),
				'settings'     => 'footer_menu_hover_background_color',
				'section'      => 'footer_colors',
				'show_opacity' => true,
				'palette'      => array(
					'rgba(0, 0, 0, 1.0)',
					'rgba(255, 255, 255, 1.0)',
					'rgba(255,0,0, 1.0)',
					'rgba(0,255,0, 1.0)',
					'rgba(0,0,255, 1.0)',
				),
			)
		)
	);

}
add_action( 'customize_register', 'the_charm_of_making_customize_theme_add_footer' );
