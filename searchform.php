<?php
/**
 * The template for displaying search forms
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$uid               = wp_unique_id( 's-' ); // The search form specific unique ID for the input.

$aria_label = '';
if ( isset( $args['aria_label'] ) && ! empty( $args['aria_label'] ) ) {
	$aria_label = 'aria-label="' . esc_attr( $args['aria_label'] ) . '"';
}
?>

<form role="search" class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" <?php echo $aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?>>
	<label class="screen-reader-text" for="<?php echo $uid; ?>"><?php echo esc_html_x( 'Search for:', 'label', 'understrap' ); ?></label>
	<div class="form-floating mb-3">
		<input type="search" class="field search-field form-control" id="<?php echo $uid; ?>" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'understrap' ); ?>">
		<label for="property_filter">Search By Suburb</label>
		<?php if ( 'bootstrap5' === $bootstrap_version ) : ?>
			<button id="search-filters" type="button" class="btn btn-outline-secondary" data-bs-toggle="collapse" data-bs-target="#flushCollapse"> <i class="fa fa-sliders" aria-hidden="true"></i> Filters </button>
			<input id="search-submit" type="submit" class="submit search-submit btn btn-primary" name="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'understrap' ); ?>">

			<?php else : ?>
			<span class="input-group-append">
				<input type="submit" class="submit search-submit btn btn-primary" name="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'understrap' ); ?>">
			</span>
		<?php endif; ?>
	</div>
	<div id="flushCollapse" class="accordion-collapse collapse hide" aria-labelledby="flush-headingThree" data-bs-parent="#search-filters">
		<div class="accordion-body">
			<?php get_template_part('loop-templates/content-search-form'); ?>
		</div>
    </div>
</form>
<?php
