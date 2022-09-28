<?php
/**
 * The template for displaying search results pages
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();


$category = ( isset( $_GET['property_type'] ) ) ? $_GET['property_type'] : '';
$bedrooms = ( isset( $_GET['bedrooms'] ) ) ? $_GET['bedrooms'] : '';
$bathrooms = ( isset( $_GET['bathrooms'] ) ) ? $_GET['bathrooms'] : '';
$car_spaces = ( isset( $_GET['car_spaces'] ) ) ? $_GET['car_spaces'] : '';

$badges = [];
if( $category ) $badges[] = '<span class="badge bg-primary">Property Type: ' . $category . '</span>';
if( $bedrooms ) $badges[] = '<span class="badge bg-primary">Bedrooms: ' . $bedrooms . '</span>';
if( $bathrooms ) $badges[] = '<span class="badge bg-primary">Bathrooms: ' . $bathrooms . '</span>';
if( $car_spaces ) $badges[] = '<span class="badge bg-primary">Parking Spaces: ' . $car_spaces . '</span>';

global $wp_query;

?>

<div class="wrapper" id="search-wrapper">
	<div class="container" id="content" tabindex="-1">
		<div class="row">
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
			<main class="site-main" id="main">
				<?php if ( have_posts() ) : ?>
					<header class="page-header mb-5">
							<h1 class="page-title mt-3">Off Market Properties in <?php echo get_search_query(); ?>.</h1>
							<p><?php echo $wp_query->found_posts.' potential properties found.'; ?></p>
							<?php foreach ( $badges as $badge ) echo $badge . ' '; ?>
					</header><!-- .page-header -->
					<?php get_search_form(); ?>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Property Details</th>
								<th scope="col">Suburb</th>
								<th scope="col">Property Type</th>
								<th scope="col">Property Status</th>
							</tr>
						</thead>
						<tbody>
						<?php while ( have_posts() ) : the_post();
							get_template_part( 'loop-templates/content', 'search' );
						endwhile; ?>
						</tbody>
					</table>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #search-wrapper -->

<?php
get_footer();
