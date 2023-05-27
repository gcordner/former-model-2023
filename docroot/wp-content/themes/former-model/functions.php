<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package former-model
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'former-model', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @return string
 */
function understrap_default_bootstrap_version() {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );

/**
 * ACF BLOCKS.
 */
add_action( 'acf/init', 'my_acf_init' );
/**
 * Initialize ACF block.
 */
function my_acf_init() {

	// check function exists.
	if ( function_exists( 'acf_register_block' ) ) {

		// register a custom image block.
		acf_register_block(
			array(
				'name'            => 'work-sample-block',
				'title'           => __( 'Work' ),
				'description'     => __( 'A custom work block.' ),
				'render_callback' => 'my_acf_block_render_callback',
				'category'        => 'formatting',
				'icon'            => 'admin-comments',
				'keywords'        => array( 'work-sample' ),
			)
		);
	}
}

function my_acf_block_render_callback( $block ) {

	// convert name ("acf/custom-image-block") into path friendly slug ("custom-image-block").
	$slug = str_replace( 'acf/', '', $block['name'] );

	// include a template part from within the "template-parts/block" folder.
	if ( file_exists( get_theme_file_path( "/template-parts/block/content-{$slug}.php" ) ) ) {
		include get_theme_file_path( "/template-parts/block/content-{$slug}.php" );
	}
}

/**
 * Restrict blocks in editor.
 *
 * @return array
 */
function allowed_block_types() {

	$allowed_blocks = array();
	$acf_blocks     = acf_get_block_types();
	foreach ( $acf_blocks as $acf_block ) :
		$allowed_blocks[] = $acf_block['name'];
	endforeach;

	// add in core blocks.
	$allowed_blocks[] = 'core/heading';
	$allowed_blocks[] = 'core/paragraph';
	$allowed_blocks[] = 'core/list';
	$allowed_blocks[] = 'core/image';
	$allowed_blocks[] = 'core/gallery';
	$allowed_blocks[] = 'core/pullquote';
	$allowed_blocks[] = 'core/spacer';
	$allowed_blocks[] = 'core/separator';
	$allowed_blocks[] = 'core/embed';
	$allowed_blocks[] = 'core/column';
	$allowed_blocks[] = 'core/columns';
	$allowed_blocks[] = 'core/cover';
	$allowed_blocks[] = 'core/shortcode';
	$allowed_blocks[] = 'core/code';
	$allowed_blocks[] = 'core/button';
	$allowed_blocks[] = 'core/buttons';
	$allowed_blocks[] = 'core/file';

	// allow code block pro too.
	$allowed_blocks[] = 'kevinbatdorf/code-block-pro';

	return $allowed_blocks;
}
add_filter( 'allowed_block_types_all', 'allowed_block_types' );

/**
 *
 * Use archive.php for home page.
 */
function gpc_use_archive_for_homepage( $template ) {
	if ( is_home() && ! is_front_page() ) {
		$template = locate_template( array( 'archive.php', 'index.php' ) );
	}
	return $template;
}

// Hook gpc_use_archive_for_homepage into template_include.
add_filter( 'template_include', 'gpc_use_archive_for_homepage', 99 );

/**
 * Include the modified template tags file from the child theme's inc folder.
 */
function gpc_include_template_tags() {
	require_once get_stylesheet_directory() . '/inc/template-tags.php';
}

/**
 * Hook the function to be executed after the theme is set up.
 */
add_action( 'after_setup_theme', 'gpc_include_template_tags', 11 );

