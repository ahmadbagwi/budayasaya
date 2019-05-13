<?php
/**
 * budayasaya functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package budayasaya
 */

if ( ! function_exists( 'budayasaya_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function budayasaya_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on budayasaya, use a find and replace
		 * to change 'budayasaya' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'budayasaya', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'budayasaya' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'budayasaya_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'budayasaya_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function budayasaya_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'budayasaya_content_width', 640 );
}
add_action( 'after_setup_theme', 'budayasaya_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function budayasaya_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'budayasaya' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'budayasaya' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	//Add custom footer widget (3 item)

	register_sidebar( array(
		'name' => 'Footer Sidebar 1',
		'id' => 'footer-sidebar-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
		register_sidebar( array(
		'name' => 'Footer Sidebar 2',
		'id' => 'footer-sidebar-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
		register_sidebar( array(
		'name' => 'Footer Sidebar 3',
		'id' => 'footer-sidebar-3',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'budayasaya_widgets_init' );

register_nav_menus( array(
	'primary' => __( 'Menu Utama', 'budayasaya' ),
) );

/**
 * add admin option, created with Titan Framework
 */

// Check whether the Titan Framework plugin is activated, and notify if it isn't
	add_action( 'tf_create_options', 'budayasaya_create_options' );
	function budayasaya_create_options() {
	// Initialize Titan with my special unique namespace
		$titan = TitanFramework::getInstance( 'budayasaya' );
	// Create my admin panel
		$panel = $titan->createAdminPanel( array(
			'name' => 'Theme Options',
		) );
	// Create tab options
		$post_list_tab = $panel->createTab( array(
		'name' => 'Post List Content',
		) );
		// Create options in post_list_tab
		$post_list_tab->createOption( array(
			'name' => 'Main Slider',
			'id' => 'main_slider',
			'type' => 'text',
			'desc' => 'Fill with category id'
		) );
		$post_list_tab->createOption( array(
			'name' => 'Post List 1',
			'id' => 'post_list_1',
			'type' => 'text',
			'desc' => 'Fill with category id'
		) );
		$post_list_tab->createOption( array(
			'name' => 'Post List 2',
			'id' => 'post_list_2',
			'type' => 'text',
			'desc' => 'Fill with category id'
		) );
		$post_list_tab->createOption( array(
			'name' => 'Post Thumbnails 1',
			'id' => 'post_thumbnails_1',
			'type' => 'text',
			'desc' => 'Fill with category id'
		) );
		$post_list_tab->createOption( array(
			'name' => 'Post Thumbnails 2',
			'id' => 'post_thumbnails_2',
			'type' => 'text',
			'desc' => 'Fill with category id'
		) );
		$post_list_tab->createOption( array(
			'type' => 'save'
		) );

	// Create tab options
		$text_tab = $panel->createTab( array(
		'name' => 'Text About',
		) );
		// Create options in post_list_tab
		$text_tab->createOption( array(
			'name' => 'Text "about" bottom of slider',
			'id' => 'about',
			'type' => 'textarea',
			'desc' => 'Fill with about website'
		) );
		$text_tab->createOption( array(
			'type' => 'save'
		) );
	}
/**
 * Enqueue scripts and styles.
 */
function budayasaya_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css' );
	
	wp_enqueue_style( 'budayasaya-style', get_stylesheet_uri() );

	wp_enqueue_style( 'font-awesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css' );

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' );

	wp_enqueue_script( 'jquery3', 'https://code.jquery.com/jquery-3.4.1.js' );

	wp_enqueue_script( 'topbutton-js', get_template_directory_uri() . '/js/topbutton.js');

	wp_enqueue_script( 'respond-js', get_template_directory_uri() . '/js/respond.min.js', '1.4.2', true );

	wp_enqueue_script( 'budayasaya-bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.js' );

	wp_enqueue_script( 'budayasaya-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'budayasaya-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'budayasaya_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';