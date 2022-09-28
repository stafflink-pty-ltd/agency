<?php
/**
 * Search results partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>

<tr <?php post_class('result-item'); ?> id="post-<?php the_ID(); ?>">

	<td scope="row" class="entry-header property-details">
		<?php if ( get_field('bed_b') ) { ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/bed-light.svg">
			<?php the_field('bed_b'); ?>
		<?php } ?>
		<?php if ( get_field('bath_s') ) { ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/bathtub-light.svg">
			<?php the_field('bath_s'); ?>
		<?php } ?>
		<?php if ( get_field('car_c') ) { ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/car-light.svg">
			<?php the_field('car_c'); ?>
		<?php } ?>
		<?php if ( get_field('land_size_display') ) { ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/square-light.svg">
			<?php the_field('land_size_display'); ?>
		<?php } ?>

	</td><!-- .entry-header -->

	<td class="entry-summary suburb">
		<span class="badge bg-secondary rounded-pill">
			<?php $suburb = get_the_terms( $post->ID, 'suburb' ); echo $suburb[0]->name; ?>
		</span>
	</td><!-- .entry-summary -->

	<td class="property-type">
		<span class="badge bg-light text-dark">
			<?php $type = get_the_terms( $post->ID, 'property_type' ); if ($type) { echo $type[0]->name; } else { echo '<i>hidden</i>'; } ?>
		</span>
	</td>

	<td class="entry-footer status">
		<?php

		$status = get_the_terms( $post->ID, 'property_status' );
		if ( $status ) {
			$return_value = match ( $status[0]->slug ) {
				'appraisal' => '<span class="mb-3 px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Recently Assessed</span>',
				'off-market' => 'Ready for Sale',
				'rental' => '<span class="mb-3 px-2 py-1 fw-semibold text-info bg-info bg-opacity-10 border border-info border-opacity-10 rounded-2">Currently managed</span>',
				default => 'hidden',
			};
			echo $return_value;
		}

		?>
	</td><!-- .entry-footer -->

</tr><!-- #post-## -->
