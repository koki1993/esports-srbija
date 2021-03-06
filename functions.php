<?php
/**
 * Esports Srbija functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Esports_Srbija
 */

if ( ! function_exists( 'esports_srbija_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function esports_srbija_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Esports Srbija, use a find and replace
	 * to change 'esports-srbija' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'esports-srbija', get_template_directory() . '/languages' );

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
		'Primary Menu' => esc_html__( 'primary-menu', 'esports-srbija' ),
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
	add_theme_support( 'custom-background', apply_filters( 'esports_srbija_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add theme support for logo.
	add_theme_support( 'custom-logo' );

}
endif;
add_action( 'after_setup_theme', 'esports_srbija_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function esports_srbija_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'esports_srbija_content_width', 640 );
}
add_action( 'after_setup_theme', 'esports_srbija_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function esports_srbija_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'esports-srbija' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'esports-srbija' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'esports_srbija_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function esports_srbija_scripts() {
	// Styles
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper.min.css', array(), '3.4.2', 'all' );
	wp_enqueue_style( 'esports-srbija-style', get_stylesheet_uri() );

	// Scripts
	wp_enqueue_script( 'esports-srbija-navigation', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script( 'esports-srbija-swiper', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), '3.4.2', true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'esports_srbija_scripts' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function esports_srbija_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'esports_srbija_pingback_header' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Include footer icons
 */
require get_template_directory() . '/inc/footer-icons.php';

/**
 * Custom post types
 */
function esports_custom_post_type() {
	//Games
	$games_labels = array(
		'name'				=> 'Games',
		'singular_name'		=> 'Game',
		'add_new'			=> 'Add Game',
		'all_items'			=> 'All Games',
		'add_new_item'		=> 'Add Game',
		'edit_item'			=> 'Edit Game',
		'new_item'			=> 'New Game',
		'view_item'			=> 'View Game',
		'search_item'		=> 'Search Games',
		'not_found'			=> 'No game found',
		'not_found-in_trash'=> 'No game found in trash',
		'parent_item_colon'	=> 'Parent Item'
	);
	$games_args = array(
		'labels'			=> $games_labels,
		'public'			=> true,
		'has_archive'		=> true,
		'publicly_queryable'=> true,
		'query_var'			=> true,
		'rewrite'			=> true,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'supports'			=> array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
		'menu_position'		=> 5,
		'menu_icon'			=> 'dashicons-feedback',
		'exclude_from_search'=> false
	);
	register_post_type( 'games', $games_args );
}
add_action( 'init', 'esports_custom_post_type' );

//Games Custom Taxonomies
function esports_custom_taxonomies() {
	//Games Taxonomies
	$games_labels = array(
		'name'				=> 'Game Types',
		'singular_name'		=> 'Game Type',
		'search_items'		=> 'Search Game Types',
		'all_items'			=> 'All Game Types',
		'parent_item'		=> 'Parent Game Types',
		'parent_item_colon'	=> 'Parent Game Types:',
		'edit_item'			=> 'Edit Game Type',
		'update_item'		=> 'Update Game Type',
		'add_new_item'		=> 'Add New Game Type',
		'new_item_name'		=> 'New Type Game Type',
		'menu_name'			=> 'Game Types'
	);
	$games_args = array(
		'hierarchical'		=> true,
		'labels'			=> $games_labels,
		'show_ui'			=> true,
		'show_admin_column'	=> true,
		'query_var'			=> true,
		//'rewrite'			=> array( 'slug' => 'game_type' )
	);
	register_taxonomy( 'game_type', array('games'), $games_args );
}
add_action( 'init', 'esports_custom_taxonomies' );
