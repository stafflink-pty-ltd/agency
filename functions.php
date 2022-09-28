<?php
/**
 * UnderStrap functions and definitions
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Array of files to include.
$includes = array(
	'theme-settings.php',                  // Initialize theme default settings.
	'setup.php',                           // Theme setup and custom theme supports.
	'widgets.php',                         // Register widget area.
	'enqueue.php',                         // Enqueue scripts and styles.
	'template-tags.php',                   // Custom template tags for this theme.
	'pagination.php',                      // Custom pagination for this theme.
	'hooks.php',                           // Custom hooks.
	'extras.php',                          // Custom functions that act independently of the theme templates.
	'customizer.php',                      // Customizer additions.
	'class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'editor.php',                          // Load Editor functions.
	'property-search.php',
	'disable-comments.php',
);
foreach ( $includes as $file ) {
	require_once get_theme_file_path( 'inc/' . $file );
}

add_filter('use_block_editor_for_post', '__return_false', 10);

function example_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );
