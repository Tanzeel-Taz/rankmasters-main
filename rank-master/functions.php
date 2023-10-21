<?php

/**
 * Rank Master functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rank_Master
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rank_master_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Rank Master, use a find and replace
		* to change 'rank-master' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('rank-master', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'rank-master'),
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
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'rank_master_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'rank_master_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rank_master_content_width()
{
	$GLOBALS['content_width'] = apply_filters('rank_master_content_width', 640);
}
add_action('after_setup_theme', 'rank_master_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rank_master_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'rank-master'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'rank-master'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'rank_master_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function rank_master_scripts()
{
	wp_enqueue_style('rank-master-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/custom.css', array(), _S_VERSION);
	wp_enqueue_style('HF-style', get_template_directory_uri() . '/hf-style.css', array(), _S_VERSION);
	// AOS css file
	wp_enqueue_style('aos', get_template_directory_uri() . '/aos/aos.css');
	// Slick Slider
	wp_enqueue_style('slick-css', get_template_directory_uri()  . '/slick/slick.css');
	wp_enqueue_style('slick-theme-css', get_template_directory_uri()  . '/slick/slick-theme.css');
	wp_style_add_data('rank-master-style', 'rtl', 'replace');


	// AOS JS
	wp_enqueue_script('aos-js', get_template_directory_uri() . '/aos/aos.js', array('jquery'), '1.1', true);

	// Slick JS
	wp_enqueue_script('slick-js', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), '1.1', true);
	wp_enqueue_script('rank-master-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/custom.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'rank_master_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Allow SVG files to be uploaded in WordPress
function allow_svg_upload($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// if( function_exists('acf_add_options_page') ) {

//     acf_add_options_page();

// }


if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title'    => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));

	acf_add_options_sub_page(array(
		'page_title'    => 'Theme Header Settings',
		'menu_title'    => 'Header',
		'parent_slug'   => 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title'    => 'Theme Footer Settings',
		'menu_title'    => 'Footer',
		'parent_slug'   => 'theme-general-settings',
	));
}

function custom_archive_title($title)
{
	if (is_category()) {
		$title = single_cat_title('', false);
	}
	return $title;
}
add_filter('get_the_archive_title', 'custom_archive_title');


// function add_custom_template_meta_box()
// {
// 	add_meta_box(
// 		'custom_template_meta_box',
// 		'Select Custom Template',
// 		'custom_template_meta_box_callback',
// 		'post',
// 		'side', // Change this to 'normal' if you want the box below the editor
// 		'default'
// 	);
// }
// add_action('add_meta_boxes', 'add_custom_template_meta_box');

// function custom_template_meta_box_callback($post)
// {
// 	$template = get_post_meta($post->ID, '_custom_template', true);

// }

// function save_custom_template_meta($post_id)
// {
// 	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
// 	if ($parent_id = wp_is_post_revision($post_id)) $post_id = $parent_id;
// 	if (!isset($_POST['custom_template'])) return;
// 	update_post_meta($post_id, '_custom_template', sanitize_text_field($_POST['custom_template']));
// }
// add_action('save_post', 'save_custom_template_meta');