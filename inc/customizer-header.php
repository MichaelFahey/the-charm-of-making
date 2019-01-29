<?php
/**
 * Adds header-related settings to theme Customizer
 *
 * @package the-charm-of-making
 */

/** ----------------------------------------------------------------------------
 *   Function the_charm_of-making_customize_theme_add_header( $wp_customize )
 *   Function which adds panel, settings, and controls to Body
 *   customizer section.
 *   Hooks to customize_register action.
 *  ----------------------------------------------------------------------------
 *
 *   @param Array $wp_customize - passed to function by customize_register.
 */
function the_charm_of_making_customize_theme_add_header( $wp_customize ) {

	$wp_customize->remove_control( 'display_header_text' );

	$wp_customize->add_panel(
		'header', array(
			'priority'       => 10,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => 'Header Options',
			'description'    => '',
		)
	);

	/** Header Layout Section */

	$wp_customize->add_section(
		'header_details', array(
			'title'    => 'Header Layout',
			'priority' => 10,
			'panel'    => 'header',
		)
	);

   $wp_customize->add_setting(
      'navbar_container_option', array(
         'type'              => 'theme_mod',
         'capability'        => 'edit_theme_options',
         'transport'         => 'postMessage',
         'default'           => 'container',
         'sanitize_callback' => 'wp_filter_nohtml_kses', 
      )   
   );  

   $wp_customize->add_control(
      'navbar_container_option_control', array(
         'label'      => __( 'Navbar Container Type', 'the-charm-of-making' ),
         'section'    => 'header_details',
         'settings'   => 'navbar_container_option',
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
		'preheaderleft_classes', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);

	$wp_customize->add_control(
		'preheaderleft_classes_control', array(
			'label'       => __( 'Pre Header Left Classes', 'the-charm-of-making' ),
			'description' => '(default: col-xs-12 col-sm-6)',
			'section'     => 'header_details',
			'settings'    => 'preheaderleft_classes',
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'preheaderright_classes', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);

	$wp_customize->add_control(
		'preheaderright_classes_control', array(
			'label'       => __( 'Pre Header Right Classes', 'the-charm-of-making' ),
			'description' => '(default: col-xs-12 col-sm-6)',
			'section'     => 'header_details',
			'settings'    => 'preheaderright_classes',
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'headerleft_classes', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);

	$wp_customize->add_control(
		'headerleft_classes_control', array(
			'label'       => __( 'Header Left Classes', 'the-charm-of-making' ),
			'description' => '(default: col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4)',
			'section'     => 'header_details',
			'settings'    => 'headerleft_classes',
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'headercenter_classes', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);

	$wp_customize->add_control(
		'headercenter_classes_control', array(
			'label'       => __( 'Header Center Classes', 'the-charm-of-making' ),
			'description' => '(default: col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4)',
			'section'     => 'header_details',
			'settings'    => 'headercenter_classes',
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'headerright_classes', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);

	$wp_customize->add_control(
		'headerright_classes_control', array(
			'label'       => __( 'Header Right Classes', 'the-charm-of-making' ),
			'description' => '(default: col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4)',
			'section'     => 'header_details',
			'settings'    => 'headerright_classes',
			'type'        => 'text',
		)
	);

	$wp_customize->remove_control( 'header_image' );
	$wp_customize->remove_section( 'header_image' );

	$wp_customize->add_section(
		'header_image', array(
			'title'    => 'Header Image',
			'priority' => 10,
			'panel'    => 'header',
		)
	);

	$wp_customize->add_setting(
		'header_background_image_toggle', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => 'no',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);

	$wp_customize->add_control(
		'header_background_image_toggle_control', array(
			'label'    => __( 'Use Header Background Image', 'the-charm-of-making' ),
			'section'  => 'header_image',
			'settings' => 'header_background_image_toggle',
			'type'     => 'select',
			'choices'  => array(
				'yes' => 'yes',
				'no'  => 'no',
			),
		)
	);

	$wp_customize->add_setting(
		'header_background_image',
		array(
			'default'           => '',
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'esc_attr',
		)
	);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'header_background_image',
				array(
					'label'    => __( 'Header Background Image', 'the-charm-of-making' ),
					'section'  => 'header_image',
					'settings' => 'header_background_image',

				)
			)
		);

	/** Header Color Section */

	$wp_customize->add_section(
		'header_colors', array(
			'title'    => 'Header Colors',
			'priority' => 10,
			'panel'    => 'header',
		)
	);

	// ditch the built-in one it's a headache with the alpha color picker.
	$wp_customize->remove_control( 'header_textcolor' );

	$wp_customize->add_setting(
		'header_text_color',
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
			'header_text_color',
			array(
				'label'        => __( 'Header Text Color', 'the-charm-of-making' ),
				'settings'     => 'header_text_color',
				'section'      => 'header_colors',
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

	/* ------------- header background color ---------------------------- */
	$wp_customize->add_setting(
		'header_background_color',
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
			'header_background_color_control',
			array(
				'label'        => __( 'Header Background Color', 'the-charm-of-making' ),
				'settings'     => 'header_background_color',
				'section'      => 'header_colors',
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

	/* ------------- header menu text color ---------------------------- */
	$wp_customize->add_setting(
		'header_menu_text_color',
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
			'header_menu_text_color_control',
			array(
				'label'        => __( 'Header Menu Text Color', 'the-charm-of-making' ),
				'settings'     => 'header_menu_text_color',
				'section'      => 'header_colors',
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

	/* ------------- header menu background color ---------------------------- */
	$wp_customize->add_setting(
		'header_menu_background_color',
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
			'header_menu_background_color_control',
			array(
				'label'        => __( 'Header Menu Background Color', 'the-charm-of-making' ),
				'settings'     => 'header_menu_background_color',
				'section'      => 'header_colors',
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

	/* ------------- header menu active text color ---------------------------- */
	$wp_customize->add_setting(
		'header_menu_active_text_color',
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
			'header_menu_active_text_color_control',
			array(
				'label'        => __( 'Header Menu Active Text Color', 'the-charm-of-making' ),
				'settings'     => 'header_menu_active_text_color',
				'section'      => 'header_colors',
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

	/* ------------- header menu active background color ---------------------------- */
	$wp_customize->add_setting(
		'header_menu_active_background_color',
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
			'header_menu_active_background_color_control',
			array(
				'label'        => __( 'Header Menu Active Background Color', 'the-charm-of-making' ),
				'settings'     => 'header_menu_active_background_color',
				'section'      => 'header_colors',
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

	/* ------------- header menu hover text color ---------------------------- */
	$wp_customize->add_setting(
		'header_menu_hover_text_color',
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
			'header_menu_hover_text_color_control',
			array(
				'label'        => __( 'Header Menu Hover Text Color', 'the-charm-of-making' ),
				'settings'     => 'header_menu_hover_text_color',
				'section'      => 'header_colors',
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

	/* ------------- header menu hover background color ---------------------------- */
	$wp_customize->add_setting(
		'header_menu_hover_background_color',
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
			'header_menu_hover_background_color_control',
			array(
				'label'        => __( 'Header Menu Hover Background Color', 'the-charm-of-making' ),
				'settings'     => 'header_menu_hover_background_color',
				'section'      => 'header_colors',
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

	/** Header Nav Section */

	$wp_customize->add_section(
		'header_nav', array(
			'title'    => 'Menu',
			'priority' => 10,
			'panel'    => 'header',
		)
	);

	$wp_customize->add_setting(
		'header_nav_location', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'postMessage',
			'default'           => 'above',
			'sanitize_callback' => 'wp_filter_nohtml_kses',
		)
	);

	$wp_customize->add_control(
		'header_nav_location_control', array(
			'label'    => __( 'Menu Position', 'the-charm-of-making' ),
			'section'  => 'header_nav',
			'settings' => 'header_nav_location',
			'type'     => 'select',
			'choices'  => array(
				'none'  => 'none',
				'above' => 'above',
				'below' => 'below',
			),
		)
	);

}
add_action( 'customize_register', 'the_charm_of_making_customize_theme_add_header' );
