<?php
/**
 * Adds body-related settings to theme Customizer
 *
 * @package the-charm-of-making
 */

/** ----------------------------------------------------------------------------
 *   Function the_charm_of_making_customize_theme_add_body( $wp_customize )
 *   Function which adds panel, settings, and controls to Body
 *   customizer section.
 *   Hooks to customize_register action.
 *  ----------------------------------------------------------------------------
 *
 *   @param Array $wp_customize - passed to function by customize_register.
 */
function the_charm_of_making_customize_theme_add_body( $wp_customize ) {

	/** Body Options Panel */

	$wp_customize->add_panel(
		'body',
		array(
			'priority'       => 10,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => 'Body Options',
			'description'    => '',
		)
	);

	$wp_customize->add_section(
		'body_layout',
		array(
			'title'    => 'Body Layout',
			'priority' => 10,
			'panel'    => 'body',
		)
	);

	$wp_customize->add_setting(
		'body_container_option',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => 'container',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);

	$wp_customize->add_control(
		'body_container_option_control',
		array(
			'label'      => __( 'Body Container Type', 'the-charm-of-making' ),
			'section'    => 'body_layout',
			'settings'   => 'body_container_option',
			'type'       => 'select',
			'choices'    => array(
				'container'       => 'container',
				'container-fluid' => 'container-fluid',
				'container-sm'    => 'container-sm',
				'container-md'    => 'container-md',
				'container-lg'    => 'container-lg',
				'container-xl'    => 'container-xl',
			),
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_setting(
		'body_sidebar_sticky_toggle',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => 'off',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		'body_sidebar_sticky_toggle_control',
		array(
			'label'       => __( 'Sidebar Sticky', 'the-charm-of-making' ),
			'description' => 'Sticky sidebar floats as page scrolls',
			'section'     => 'body_layout',
			'settings'    => 'body_sidebar_sticky_toggle',
			'type'        => 'select',
			'choices'     => array(
				'on'  => 'on',
				'off' => 'off',
			),
			'capability'  => 'edit_theme_options',
		)
	);

	$wp_customize->add_setting(
		'sidebar_body_classes',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => 'col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-9',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		'sidebar_body_classes_control',
		array(
			'label'       => __( 'Body Classes (with sidebar)', 'the-charm-of-making' ),
			'description' => '(default: col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-9)',
			'section'     => 'body_layout',
			'settings'    => 'sidebar_body_classes',
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'sidebar_classes',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => 'col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-3',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);

	$wp_customize->add_control(
		'sidebar_classes_control',
		array(
			'label'       => __( 'Sidebar Classes (with sidebar)', 'the-charm-of-making' ),
			'description' => '(default: col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-3)',
			'section'     => 'body_layout',
			'settings'    => 'sidebar_classes',
			'type'        => 'text',
		)
	);

	/** Body Image Section */

	$wp_customize->add_section(
		'background_section',
		array(
			'title'    => 'Body Image',
			'priority' => 10,
			'panel'    => 'body',
		)
	);

	/** ----------------------------------------------------------------------------
	 *   background image
	 *  ------------------------------------------------------------------------ */

	$wp_customize->remove_control( 'background_image' );
	$wp_customize->remove_section( 'background_image' );

	$wp_customize->add_setting(
		'background_image_toggle',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => 'yes',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);

	$wp_customize->add_control(
		'background_image_toggle_control',
		array(
			'label'    => __( 'Use Background Image', 'the-charm-of-making' ),
			'section'  => 'background_section',
			'settings' => 'background_image_toggle',
			'type'     => 'select',
			'choices'  => array(
				'yes' => 'yes',
				'no'  => 'no',
			),
		)
	);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'background_image',
				array(
					'label'    => __( 'Background Image', 'the-charm-of-making' ),
					'section'  => 'background_section',
					'settings' => 'background_image',

				)
			)
		);

	/** ----------------------------------------------------------------------------
	 *   body image
	 *  ------------------------------------------------------------------------ */

	$wp_customize->add_setting(
		'body_image_toggle',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => 'no',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);

	$wp_customize->add_control(
		'body_image_toggle_control',
		array(
			'label'    => __( 'Use Body Background Image', 'the-charm-of-making' ),
			'section'  => 'background_section',
			'settings' => 'body_image_toggle',
			'type'     => 'select',
			'choices'  => array(
				'yes' => 'yes',
				'no'  => 'no',
			),
		)
	);

	$wp_customize->add_setting(
		'body_image_image',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => 'no',
			'sanitize_callback' => 'esc_attr',
		)
	);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'body_image_image',
				array(
					'label'    => __( 'Body Background Image', 'the-charm-of-making' ),
					'section'  => 'background_section',
					'settings' => 'body_image_image',

				)
			)
		);

	/** ----------------------------------------------------------------------------
	 *    Body Color Section
	 *  ------------------------------------------------------------------------ */

	$wp_customize->add_section(
		'body_colors',
		array(
			'title'    => 'Body Colors',
			'priority' => 10,
			'panel'    => 'body',
		)
	);

	$wp_customize->remove_control( 'background_color' );

	/* ----------background color --------------------------------- */
	$wp_customize->add_setting(
		'site_background_color',
		array(
			'default'           => '#ffffff',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'site_background_color_control',
			array(
				'label'        => __( 'Background Color', 'the-charm-of-making' ),
				'settings'     => 'site_background_color',
				'section'      => 'body_colors',
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

	/* ----------body background color --------------------------------- */
	$wp_customize->add_setting(
		'body_background_color',
		array(
			'default'           => 'rgb(255,255,255)',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'body_background_color_control',
			array(
				'label'        => __( 'Body Background Color', 'the-charm-of-making' ),
				'settings'     => 'body_background_color',
				'section'      => 'body_colors',
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

	/* ----------body text color --------------------------------- */
	$wp_customize->add_setting(
		'body_text_color',
		array(
			'default'           => 'rgb(0,0,0)',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'body_text_color_control',
			array(
				'label'        => __( 'Body Text Color', 'the-charm-of-making' ),
				'settings'     => 'body_text_color',
				'section'      => 'body_colors',
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

	/** ----------------------------------------------------------------------------
	 *    Sidebar Color Section
	 *  ------------------------------------------------------------------------ */

	$wp_customize->add_section(
		'sidebar_colors',
		array(
			'title'    => 'Sidebar Colors',
			'priority' => 10,
			'panel'    => 'body',
		)
	);

	/* ---------- sidebar background color --------------------------------- */
	$wp_customize->add_setting(
		'sidebar_background_color',
		array(
			'default'           => 'transparent',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'sidebar_background_color_control',
			array(
				'label'        => __( 'Sidebar Background Color', 'the-charm-of-making' ),
				'settings'     => 'sidebar_background_color',
				'section'      => 'sidebar_colors',
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

	/* ---------- widget background color --------------------------------- */
	$wp_customize->add_setting(
		'custom_widget_background_color',
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
			'widget_background_control',
			array(
				'label'        => __( 'Widget Background Color', 'the-charm-of-making' ),
				'settings'     => 'custom_widget_background_color',
				'section'      => 'sidebar_colors',
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

	/* ---------- sidebar text color --------------------------------- */
	$wp_customize->add_setting(
		'sidebar_text_color',
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
			'sidebar_text_color_control',
			array(
				'label'        => __( 'Sidebar Text Color', 'the-charm-of-making' ),
				'settings'     => 'sidebar_text_color',
				'section'      => 'sidebar_colors',
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

	/* ---------- sidebar link color --------------------------------- */
	$wp_customize->add_setting(
		'sidebar_link_color',
		array(
			'default'           => 'blue',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'sidebar_link_color_control',
			array(
				'label'        => __( 'Sidebar Link Color', 'the-charm-of-making' ),
				'settings'     => 'sidebar_link_color',
				'section'      => 'sidebar_colors',
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

	/* ---------- sidebar accent color --------------------------------- */
	$wp_customize->add_setting(
		'sidebar_accent_color',
		array(
			'default'           => '#0073AA',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'sidebar_accent_color_control',
			array(
				'label'        => __( 'Sidebar Accent Color', 'the-charm-of-making' ),
				'settings'     => 'sidebar_accent_color',
				'section'      => 'sidebar_colors',
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

	/* ---------- sidebar accent text color --------------------------------- */
	$wp_customize->add_setting(
		'sidebar_accent_text_color',
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
			'sidebar_accent_text_color_control',
			array(
				'label'        => __( 'Sidebar Accent Text Color', 'the-charm-of-making' ),
				'settings'     => 'sidebar_accent_text_color',
				'section'      => 'sidebar_colors',
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

add_action( 'customize_register', 'the_charm_of_making_customize_theme_add_body' );
