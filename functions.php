<?php

if ( ! function_exists( 'iium2021_setup' ) ) :
function iium2021_setup() {

		load_theme_textdomain( 'iium2021', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary', 'iium2021' ),
				'footer' => __( 'Footer Menu', 'iium2021' ),
				'social' => __( 'Social Links Menu', 'iium2021' ),
                'footer-student-parent' => __( 'Students & Parents' ),
                'footer-researchers-lecturers-alumni' => __( 'Researchers, Lecturers & Alumni' ),
                'footer-business-government' => __( 'Business, Government & Related Links' ),
                'footer-others' => __( 'Others' ),
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
				'script',
				'style',
				'navigation-widgets',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'iium2021' ),
					'shortName' => __( 'S', 'iium2021' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'iium2021' ),
					'shortName' => __( 'M', 'iium2021' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'iium2021' ),
					'shortName' => __( 'L', 'iium2021' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'iium2021' ),
					'shortName' => __( 'XL', 'iium2021' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

    }
endif;
add_action( 'after_setup_theme', 'iium2021_setup' );

function themeslug_enqueue_style() {
    wp_enqueue_style( 'iium2021',  get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}

// function themeslug_enqueue_script() {
//     wp_enqueue_script( 'iium2021', get_theme_file_uri('/js/master.js') );
// }
function load_scripts(){
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'load_scripts');

function load_custom_scripts(){
    wp_enqueue_script( 'js-file', get_template_directory_uri() . '/js/master.js');
}
add_action('wp_enqueue_scripts', 'load_custom_scripts');

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
// add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

function my_theme_logo_register_rest_routes() {
    // Sample request URL: http://example.com/wp-json/iium-wp-theme/v1/logo/
    register_rest_route( 'iium-wp-theme/v1', '/logo/', [
        'methods'  => 'GET',
        'callback' => function ( $request ) {
            $logo = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $logo , 'full' );
						$image_url = $image[0];
						$json =  array('logo' => $image_url);
						return wp_send_json($json);
        }
    ] );
}
add_action( 'rest_api_init', 'my_theme_logo_register_rest_routes' );

function my_theme_multisite_getdetails_register_rest_routes() {
    // Sample request URL: http://example.com/wp-json/iium-wp-theme/v1/sites/
    register_rest_route( 'iium-wp-theme/v1', '/sites/', [
        'methods'  => 'GET',
        'callback' => function ( $request ) {
					$json =  array('status' => 'Not a multisite site');
					if(function_exists('get_sites')){
						$output = [];
						$blog_list = get_sites();
						foreach ($blog_list as $blog) {
							$sites = get_blog_details($blog->blog_id);
							$output[] = array('name'=>$sites->blogname, 'url' =>$sites->siteurl, 'last_updated' => $blog->last_updated,
							'public' => $blog->public,  'description' => get_blog_option( $blog->blog_id, 'blogdescription' ) );
						}
						$json =  $output;
					}
						return wp_send_json($json);
        }
    ] );
}
add_action( 'rest_api_init', 'my_theme_multisite_getdetails_register_rest_routes' );
