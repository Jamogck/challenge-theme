<?php
/**
 * challenge-conference functions and definitions
 *
 * @package challenge-conference
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'challenge_conference_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function challenge_conference_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on challenge-conference, use a find and replace
	 * to change 'challenge-conference-theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'challenge-conference-theme', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'challenge-conference-theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'challenge_conference_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // challenge_conference_theme_setup
add_action( 'after_setup_theme', 'challenge_conference_theme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function challenge_conference_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'challenge-conference-theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'challenge_conference_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function challenge_conference_theme_scripts() {

	// wp_enqueue_style( 'challenge-normalize', get_template_directory_uri() . '/css/normalize.css', false);

	wp_enqueue_style( 'challenge-conference-theme-style', get_stylesheet_uri() );

	wp_enqueue_style( 'challenge-base-styles', get_template_directory_uri() . '/css/main.css', false);

	wp_enqueue_style( 'challenge-font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

	wp_enqueue_script( 'challenge-utility-js', get_template_directory_uri() . '/js/min/utility-min.js', array( 'jquery' ), true);

	wp_enqueue_script( 'challenge-home-js', get_template_directory_uri() . '/js/min/home-min.js', array( 'jquery' ), true);

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}

function challenge_home_scripts() {

	wp_enqueue_script( 'challenge-home-js', get_template_directory_uri() . '/js/min/home-min.js', array( 'jquery' ), true);

}

// function challenge_home_scripts() {

// 	wp_enqueue_script( 'challenge-details-js', get_template_directory_uri() . '/js/min/details-min.js', array( 'jquery' ), true);
// }

add_action( 'wp_enqueue_scripts', 'challenge_conference_theme_scripts' );

if(is_front_page() ) {
	add_action('wp_enqueue_scripts', 'challenge_home_scripts');
};

// if(is_page( 'Details' ) ) add_action('wp_enqueue_scripts', 'challenge_details_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Upload SVG */
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
	// add the file extension to the array
	$existing_mimes['svg'] = 'mime/type';
        // call the modified list of extensions
	return $existing_mimes;
}
