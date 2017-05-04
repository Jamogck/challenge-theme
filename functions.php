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

	wp_enqueue_style( 'challenge-base-styles', get_template_directory_uri() . '/main.css');

	wp_enqueue_style( 'challenge-font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

	wp_enqueue_script( 'challenge-utility-js', get_template_directory_uri() . '/js/min/utility-min.js', array( 'jquery' ), true);

	wp_enqueue_script( 'challenge-scrollTo-js', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array( 'jquery' ), true);

	wp_enqueue_script( 'challenge-nav-js', get_template_directory_uri() . '/js/jquery.nav.js', array( 'jquery' ), true);

	wp_enqueue_script( 'challenge-stickyKit-js', get_template_directory_uri() . '/js/jquery.sticky-kit.min.js', array( 'jquery' ), true);

	wp_enqueue_script( 'challenge-app-js', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), true);

	wp_enqueue_script( 'challenge-hamburger-js', get_template_directory_uri() . '/js/jquery.hamburger.js', array( 'jquery' ), true);

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

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_55103068c16a8',
	'title' => 'Details Page',
	'fields' => array (
		array (
			'key' => 'field_5510308d51fe1',
			'label' => 'Hero Image Large',
			'name' => 'hero_image_large',
			'type' => 'image',
			'instructions' => 'Upload a compressed jpg image',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => 960,
			'max_height' => 400,
			'max_size' => 1,
			'mime_types' => 'jpg',
		),
		array (
			'key' => 'field_551030b851fe2',
			'label' => 'Hero Image Small',
			'name' => 'hero_image_small',
			'type' => 'image',
			'instructions' => 'Upload a cropped, compressed version of hero image',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => 495,
			'max_height' => 206,
			'max_size' => 1,
			'mime_types' => 'jpg',
		),
		array (
			'key' => 'field_55242ec7301c2',
			'label' => 'About Title',
			'name' => 'title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55242eda301c3',
			'label' => 'About Content',
			'name' => 'about_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array (
			'key' => 'field_552422f9f0070',
			'label' => 'Theme Title',
			'name' => 'theme_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_552420ab2f308',
			'label' => 'Theme Content',
			'name' => 'theme_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array (
			'key' => 'field_552420f12f309',
			'label' => 'Theme Image',
			'name' => 'theme_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_5510313351fe3',
			'label' => 'The Speakers',
			'name' => 'speaker_node',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_5510367a777d2',
					'label' => 'Speaker Name',
					'name' => 'speaker_name',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_551031bb51fe6',
					'label' => 'Speaker Twitter',
					'name' => 'speaker_twitter',
					'type' => 'text',
					'instructions' => 'The speaker\'s twitter handle (eg. @ShaneStacey).',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '@Twitter_handle',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_5510319a51fe5',
					'label' => 'Speaker bio',
					'name' => 'speaker_bio',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
				array (
					'key' => 'field_5510315a51fe4',
					'label' => 'Headshot',
					'name' => 'headshot',
					'type' => 'image',
					'instructions' => 'Upload a compressed jpg (310x310)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => 310,
					'max_height' => 310,
					'max_size' => '',
					'mime_types' => 'jpg',
				),
			),
			'collapsed' => '',
		),
		array (
			'key' => 'field_55141a5b36df3',
			'label' => 'Outreach',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_55141a6736df4',
			'label' => 'Outreach Content',
			'name' => 'outreach_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array (
			'key' => 'field_55141a7836df5',
			'label' => 'Outreach Button',
			'name' => 'outreach_button',
			'type' => 'repeater',
			'instructions' => 'Link to outreach registration or for more information.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_55141a9336df6',
					'label' => 'Button Label',
					'name' => 'button_label',
					'type' => 'text',
					'instructions' => 'This is the text users will see on the button.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Tally Ho!',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_55141aac36df7',
					'label' => 'Button URL',
					'name' => 'button_url',
					'type' => 'url',
					'instructions' => 'The button URL',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
			'collapsed' => '',
		),
		array (
			'key' => 'field_5514308596dd8',
			'label' => 'Equipping Labs',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_5514309496dd9',
			'label' => 'Equipping Labs Content',
			'name' => 'equipping_labs_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array (
			'key' => 'field_568fe1b6864e6',
			'label' => 'Equipping Labs Button',
			'name' => 'equipping_labs_button',
			'type' => 'repeater',
			'instructions' => 'Link to registration page or for more information.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_568fe1b6864e7',
					'label' => 'Button Label',
					'name' => 'button_label',
					'type' => 'text',
					'instructions' => 'These are the words users will see on the button.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Tally ho!',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_568fe1b6864e8',
					'label' => 'Button URL',
					'name' => 'button_url',
					'type' => 'url',
					'instructions' => 'The button\'s URL',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
		),
		array (
			'key' => 'field_551418e3b1c9f',
			'label' => 'Rec Sports',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_551418fbb1ca0',
			'label' => 'Rec Sports Content',
			'name' => 'rec_sports_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array (
			'key' => 'field_5514198336df0',
			'label' => 'Rec Sports Button',
			'name' => 'rec_sports_button',
			'type' => 'repeater',
			'instructions' => 'Link to registration page or for more information.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_551419dc36df1',
					'label' => 'Button Label',
					'name' => 'button_label',
					'type' => 'text',
					'instructions' => 'These are the words users will see on the button.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Tally ho!',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_55141ad236df8',
					'label' => 'Button URL',
					'name' => 'button_url',
					'type' => 'url',
					'instructions' => 'The button\'s URL',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
			'collapsed' => '',
		),
		array (
			'key' => 'field_55141b0136df9',
			'label' => 'Love Moves',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_55141b1836dfa',
			'label' => 'Love Moves Content',
			'name' => 'love_moves_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array (
			'key' => 'field_55142e2096dd5',
			'label' => 'Love Moves Button',
			'name' => 'love_moves_button',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_55142e6496dd6',
					'label' => 'Button Label',
					'name' => 'button_label',
					'type' => 'text',
					'instructions' => 'This is the text users will see on the button.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_55142e7a96dd7',
					'label' => 'Button URL',
					'name' => 'button_url',
					'type' => 'url',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
			'collapsed' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '23',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'discussion',
		3 => 'comments',
		4 => 'revisions',
		5 => 'author',
		6 => 'format',
		7 => 'page_attributes',
		8 => 'categories',
		9 => 'tags',
		10 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55143c848be36',
	'title' => 'Experience Page',
	'fields' => array (
		array (
			'key' => 'field_55143c885e04f',
			'label' => 'Featured Media',
			'name' => 'featured_media',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
		array (
			'key' => 'field_551d74aa64533',
			'label' => 'Media Node',
			'name' => 'media_node',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_551d754497e01',
					'label' => 'Media Title',
					'name' => 'media_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_551d74bd64534',
					'label' => 'Media Content',
					'name' => 'media_content',
					'type' => 'wysiwyg',
					'instructions' => 'Could be a quote or embed code from twitter, youtube, vimeo, etc. Post embed codes while in text view.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
			),
			'collapsed' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '25',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'custom_fields',
		3 => 'discussion',
		4 => 'comments',
		5 => 'author',
		6 => 'format',
		7 => 'categories',
		8 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55d37b271af1b',
	'title' => 'FAQ',
	'fields' => array (
		array (
			'key' => 'field_55d37d01489b7',
			'label' => 'FAQ',
			'name' => 'faq',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Collapsible Block',
			'sub_fields' => array (
				array (
					'key' => 'field_55d37d16489b8',
					'label' => 'Question',
					'name' => 'question',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_55d37d20489b9',
					'label' => 'Answer',
					'name' => 'answer',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => 'answer',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_573613e4a2e80',
					'label' => 'spkr',
					'name' => 'spkr',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => 'spkr',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'text',
					'toolbar' => 'basic',
					'media_upload' => 1,
					'delay' => 0,
				),
				array (
					'key' => 'field_5736143ca2e81',
					'label' => 'date',
					'name' => 'date',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => 'date',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'text',
					'toolbar' => 'basic',
					'media_upload' => 1,
					'delay' => 0,
				),
				array (
					'key' => 'field_573621d74086a',
					'label' => 'id',
					'name' => 'id',
					'type' => 'text',
					'instructions' => 'Serves as an anchor id for this module. Must be unique.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '#',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page_faq.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'excerpt',
		1 => 'discussion',
		2 => 'comments',
		3 => 'revisions',
		4 => 'author',
		5 => 'format',
		6 => 'page_attributes',
		7 => 'featured_image',
		8 => 'categories',
		9 => 'tags',
		10 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_551027f74b2be',
	'title' => 'Home Page',
	'fields' => array (
		array (
			'key' => 'field_551027ffe9fb0',
			'label' => 'Hero Image Large',
			'name' => 'hero_image_large',
			'type' => 'image',
			'instructions' => 'Upload a compressed jpg image (960x400)',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => 960,
			'max_height' => 400,
			'max_size' => '.1',
			'mime_types' => 'jpg',
		),
		array (
			'key' => 'field_5510296fe9fb1',
			'label' => 'Hero Image Small',
			'name' => 'hero_image_small',
			'type' => 'image',
			'instructions' => 'Upload a cropped, compressed version of hero image (495x206)',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => 495,
			'max_height' => 206,
			'max_size' => '.1',
			'mime_types' => 'jpg',
		),
		array (
			'key' => 'field_551d82e7d0b52',
			'label' => 'Section Text',
			'name' => 'section_text',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_551029c8e9fb2',
			'label' => 'Video Block',
			'name' => 'video_block',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 100,
				'class' => 'vid-wrap',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
		array (
			'key' => 'field_552c277c63204',
			'label' => 'Video Placeholder',
			'name' => 'video_placeholder',
			'type' => 'image',
			'instructions' => 'Upload video placeholder image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '8',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'discussion',
		4 => 'comments',
		5 => 'slug',
		6 => 'author',
		7 => 'featured_image',
		8 => 'categories',
		9 => 'tags',
		10 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55c901bd49568',
	'title' => 'Page',
	'fields' => array (
		array (
			'key' => 'field_55c905981b138',
			'label' => 'Featured Media',
			'name' => 'featured_media',
			'type' => 'repeater',
			'instructions' => 'Include either a featured video or a featured image.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '100%',
				'class' => 'inner-hero',
				'id' => '',
			),
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_55ca463ca195e',
					'label' => 'Featured Video',
					'name' => 'featured_video',
					'type' => 'oembed',
					'instructions' => 'Paste a url from vimeo.com or youtube.com.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'width' => '',
					'height' => '',
				),
				array (
					'key' => 'field_55ca4663a195f',
					'label' => 'Featured Image',
					'name' => 'featured_image',
					'type' => 'image',
					'instructions' => 'Upload a compressed jpg (960x400).',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => 'jpg',
				),
			),
			'collapsed' => '',
		),
		array (
			'key' => 'field_55c907661b139',
			'label' => 'Detail Section',
			'name' => 'detail_section',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_55c907ac1b13a',
					'label' => 'Detail Heading',
					'name' => 'detail_heading',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_55c907c41b13b',
					'label' => 'Detail Body',
					'name' => 'detail_body',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
				array (
					'key' => 'field_55ca46c8a1960',
					'label' => 'Detail Image',
					'name' => 'detail_image',
					'type' => 'image',
					'instructions' => 'Upload a compressed jpg.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
			'collapsed' => '',
		),
		array (
			'key' => 'field_55d48b916fa99',
			'label' => 'Closing Copy',
			'name' => 'closing_copy',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'default',
			),
			array (
				'param' => 'page',
				'operator' => '!=',
				'value' => '23',
			),
			array (
				'param' => 'page',
				'operator' => '!=',
				'value' => '8',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'excerpt',
		1 => 'discussion',
		2 => 'comments',
		3 => 'revisions',
		4 => 'author',
		5 => 'featured_image',
		6 => 'categories',
		7 => 'tags',
		8 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

/*
** Custom Fields set up
*/

acf_add_local_field_group(array (
	'key' => 'group_57278e922fb91',
	'title' => 'Schedule',
	'fields' => array (
		array (
			'key' => 'field_57278e979fad6',
			'label' => 'Day 1',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_57278f539fad7',
			'label' => 'Day 1 Timeframe',
			'name' => 'day_1_timeframe',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add another time',
			'sub_fields' => array (
				array (
					'key' => 'field_572790b39fadd',
					'label' => 'Time',
					'name' => 'time',
					'type' => 'text',
					'instructions' => '(eg. 9:00 a.m. to 11:00 a.m.)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572790ce9fade',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '(eg. Breakout Sessions)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572790e29fadf',
					'label' => 'Description',
					'name' => 'description',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
			),
		),
		array (
			'key' => 'field_5727913d9fae0',
			'label' => 'Day 2',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_572791559fae6',
			'label' => 'Day 2 Timeframe',
			'name' => 'day_2_timeframe',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add another time',
			'sub_fields' => array (
				array (
					'key' => 'field_572791559fae7',
					'label' => 'Time',
					'name' => 'time',
					'type' => 'text',
					'instructions' => '(eg. 9:00 a.m. to 11:00 a.m.)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572791559fae8',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '(eg. Breakout Sessions)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572791559fae9',
					'label' => 'Description',
					'name' => 'description',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
			),
		),
		array (
			'key' => 'field_5727914f9fae5',
			'label' => 'Day 3',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_572791669faeb',
			'label' => 'Day 3 Timeframe',
			'name' => 'day_3_timeframe',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add another time',
			'sub_fields' => array (
				array (
					'key' => 'field_572791669faec',
					'label' => 'Time',
					'name' => 'time',
					'type' => 'text',
					'instructions' => '(eg. 9:00 a.m. to 11:00 a.m.)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572791669faed',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '(eg. Breakout Sessions)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572791669faee',
					'label' => 'Description',
					'name' => 'description',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
			),
		),
		array (
			'key' => 'field_572791609faea',
			'label' => 'Day 4',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_572791459fae1',
			'label' => 'Day 4 Timeframe',
			'name' => 'day_4_timeframe',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add another time',
			'sub_fields' => array (
				array (
					'key' => 'field_572791459fae2',
					'label' => 'Time',
					'name' => 'time',
					'type' => 'text',
					'instructions' => '(eg. 9:00 a.m. to 11:00 a.m.)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572791459fae3',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '(eg. Breakout Sessions)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_572791459fae4',
					'label' => 'Description',
					'name' => 'description',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
			),
		),
		array (
			'key' => 'field_572791789faf3',
			'label' => 'Day 5',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_5727916c9faef',
			'label' => 'Day 5 Timeframe',
			'name' => 'day_5_timeframe',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add another time',
			'sub_fields' => array (
				array (
					'key' => 'field_5727916c9faf0',
					'label' => 'Time',
					'name' => 'time',
					'type' => 'text',
					'instructions' => '(eg. 9:00 a.m. to 11:00 a.m.)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_5727916c9faf1',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '(eg. Breakout Sessions)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_5727916c9faf2',
					'label' => 'Description',
					'name' => 'description',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-schedule.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
