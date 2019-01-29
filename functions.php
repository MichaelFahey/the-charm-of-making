<?php
/**
 * The Charm of Making theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package    WordPress
 * @subpackage TheCharmOfMaking
 */

if ( ! function_exists( 'the_charm_of_making_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function the_charm_of_making_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on the-charm-of-making, use a find and replace
		 * to change 'the-charm-of-making' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'the-charm-of-making', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'custom-header' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 150, 150 );

		// This theme uses wp_nav_menu() in two locations, one desktop, one mobile.
		register_nav_menus(
			array(
				'desktop' => esc_html__( 'Desktop', 'the-charm-of-making' ),
				'mobile'  => esc_html__( 'Mobile', 'the-charm-of-making' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/*
		 * set content_width
		 */
		if ( ! isset( $content_width ) ) {
			$content_width = 900;
		}

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'the_charm_of_making_setup' );


/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_charm_of_making_widgets_init() {

	$sidebar_descriptor = array(
		'name'          => esc_html__( 'Sidebar', 'the-charm-of-making' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Content Sidebar.', 'the-charm-of-making' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	);
	register_sidebar( $sidebar_descriptor );

	$sidebar_descriptor['name']        = esc_html__( 'Pre-Header 1', 'the-charm-of-making' );
	$sidebar_descriptor['id']          = 'preheader-1';
	$sidebar_descriptor['description'] = esc_html__( 'Widgets here stack in pre-header section 1', 'the-charm-of-making' );
	register_sidebar( $sidebar_descriptor );

	$sidebar_descriptor['name']        = esc_html__( 'Pre-Header 2', 'the-charm-of-making' );
	$sidebar_descriptor['id']          = 'preheader-2';
	$sidebar_descriptor['description'] = esc_html__( 'Widgets here stack in pre-header section 2', 'the-charm-of-making' );
	register_sidebar( $sidebar_descriptor );

	$sidebar_descriptor['name']        = esc_html__( 'Header 1', 'the-charm-of-making' );
	$sidebar_descriptor['id']          = 'header-1';
	$sidebar_descriptor['description'] = esc_html__( 'Widgets here stack in header section 1', 'the-charm-of-making' );
	register_sidebar( $sidebar_descriptor );

	$sidebar_descriptor['name']        = esc_html__( 'Header 2', 'the-charm-of-making' );
	$sidebar_descriptor['id']          = 'header-2';
	$sidebar_descriptor['description'] = esc_html__( 'Widgets here stack in header section 2', 'the-charm-of-making' );
	register_sidebar( $sidebar_descriptor );

	$sidebar_descriptor['name']        = esc_html__( 'Header 3', 'the-charm-of-making' );
	$sidebar_descriptor['id']          = 'header-3';
	$sidebar_descriptor['description'] = esc_html__( 'Widgets here stack in header section 3', 'the-charm-of-making' );
	register_sidebar( $sidebar_descriptor );

	$sidebar_descriptor['name']        = esc_html__( 'Footer 1', 'the-charm-of-making' );
	$sidebar_descriptor['id']          = 'footer-1';
	$sidebar_descriptor['description'] = esc_html__( 'Widgets here stack in footer section 1', 'the-charm-of-making' );
	register_sidebar( $sidebar_descriptor );

	$sidebar_descriptor['name']        = esc_html__( 'Footer 2', 'the-charm-of-making' );
	$sidebar_descriptor['id']          = 'footer-2';
	$sidebar_descriptor['description'] = esc_html__( 'Widgets here stack in footer section 2', 'the-charm-of-making' );
	register_sidebar( $sidebar_descriptor );

	$sidebar_descriptor['name']        = esc_html__( 'Footer 3', 'the-charm-of-making' );
	$sidebar_descriptor['id']          = 'footer-3';
	$sidebar_descriptor['description'] = esc_html__( 'Widgets here stack in footer section 3', 'the-charm-of-making' );
	register_sidebar( $sidebar_descriptor );

}
add_action( 'widgets_init', 'the_charm_of_making_widgets_init' );



/**
 * Enqueue page scripts and styles.
 */
function the_charm_of_making_scripts() {

	wp_enqueue_script( 'jquery' );

	/**    Load Bootstrap CSS and JS */
	if ( ! defined( 'ASD_BOOTSTRAP_ENQUEUED' ) ) {
		wp_enqueue_style( 'asd-bootstrap-css', get_template_directory_uri() . '/components/bootstrap/css/bootstrap.min.css' );
		wp_enqueue_style( 'asd-bootstrap-xl-css', get_template_directory_uri() . '/components/bootstrap/css/bootstrap-xl.css' );
		wp_enqueue_style( 'asd-bootstrap-xxl-css', get_template_directory_uri() . '/components/bootstrap/css/bootstrap-xxl.css' );
		wp_enqueue_style( 'asd-bootstrap-other-css', get_template_directory_uri() . '/components/bootstrap/css/bootstrap-other.css' );
		wp_enqueue_script( 'asd-bootstrap-js', get_template_directory_uri() . '/components/bootstrap/js/bootstrap.min.js', array(), 'false', 'true' );
		define( 'ASD_BOOTSTRAP_ENQUEUED', 1 );
	}

	/**    Load smooth scrolling */
	wp_enqueue_script( 'the-charm-of-making-smooth-js', get_template_directory_uri() . '/js/jquery.smooth-scroll.min.js', array(), 'false', 'true' );
	wp_enqueue_script( 'the-charm-of-making-smooth-ready-js', get_template_directory_uri() . '/js/jquery.smooth-doc-ready.js', array(), 'false', 'true' );

		/**    Load Lightbox2 */
		wp_enqueue_style( 'the-charm-of-making-lightbox2-css', get_template_directory_uri() . '/components/lightbox2/lightbox.min.css' );
		wp_enqueue_script( 'the-charm-of-making-lightbox2-js', get_template_directory_uri() . '/components/lightbox2/lightbox.min.js', array(), 'false', 'true' );

		wp_enqueue_script( 'the-charm-of-making-lightbox-options-js', get_template_directory_uri() . '/js/lightbox-options.js', array(), 'false', 'true' );

		wp_enqueue_style( 'the-charm-of-making-style', get_stylesheet_uri() );

		wp_enqueue_script( 'the-charm-of-making-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), 'false', 'true' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_charm_of_making_scripts' );


/**
 * Implement the Custom Bootstrap Navwalker for Navbar
 */
if ( ! defined( 'ASD_BOOTSTRAP_NAVWALKER' ) ) {
		require_once 'components/navwalker/class-wp-bootstrap-navwalker.php';
		define( 'ASD_BOOTSTRAP_NAVWALKER', 1 );
}

require get_template_directory() . '/inc/insert-functions.php';

/**
 * Implement the Custom Header feature, and custom sticky
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/custom-sticky.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';



/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/customizer-header.php';
require get_template_directory() . '/inc/customizer-body.php';
require get_template_directory() . '/inc/customizer-footer.php';
require get_template_directory() . '/inc/customizer-font.php';
require get_template_directory() . '/inc/customizer-advanced.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 *  Display categories
 */
function asd_add_category_to_page() {
	register_taxonomy_for_object_type( 'post_tag', 'page' );
	register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'asd_add_category_to_page' );


if ( ! function_exists( 'sanitize_html_classes' ) && function_exists( 'sanitize_html_class' ) ) {
	/** ----------------------------------------------------------------------------
	 *   Function  sanitize_html_classes ( $class, $fallback )
	 *   sanitizes multiple DOM classes on a single line
	 *  ----------------------------------------------------------------------------
	 *
	 *   @param Array $class - whitespace delimited DOM classes.
	 *   @param Array $fallback - something to return if there is nothing.
	 */
	function sanitize_html_classes( $class, $fallback = null ) {
		if ( is_string( $class ) ) {
			$class = explode( ' ', $class );
		}
		if ( is_array( $class ) && count( $class ) > 0 ) {
			$class = array_map( 'sanitize_html_class', $class );
			return implode( ' ', $class );
		} else {
			return sanitize_html_class( $class, $fallback );
		}
	}
}

if ( ! function_exists( 'short_content' ) ) {
	/**
	 * Sort of an excerpt, returns a short version of text
	 * always breaks at whitespace
	 * will balance any open tags
	 *
	 * @param string $text - the input string.
	 */
	function short_content( $text ) {
		$length = 295;
		if ( strlen( $text ) < $length + 10 ) {
			return $text;
		} else {
			$break_pos = strpos( $text, ' ', $length );
			$visible   = substr( $text, 0, $break_pos );
			return balanceTags( $visible, true );
		}
	}
}

