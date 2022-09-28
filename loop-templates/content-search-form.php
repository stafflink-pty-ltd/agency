<?php

defined( 'ABSPATH' ) || exit;

$category = ( isset( $_GET['property_type'] ) ) ? $_GET['property_type'] : '';
$bedrooms = ( isset( $_GET['bedrooms'] ) ) ? $_GET['bedrooms'] : '';
$bathrooms = ( isset( $_GET['bathrooms'] ) ) ? $_GET['bathrooms'] : '';
$car_spaces = ( isset( $_GET['car_spaces'] ) ) ? $_GET['car_spaces'] : '';
?>

<h6 class="modal-title mb-2">Refine your property search</h6>
<div class="row">
	<div class="col-md-3">
		<div class="form-floating mb-3">
			<select id="property_category" name="property_type" class="form-select" data-style="btn-outline-seconary">
				<option disabled <?php if ( $category === '' ) echo 'selected'; ?> value>Any</option>
				<option value="House" <?php if ( $category === 'House' ) echo 'selected'; ?>>House</option>
				<option value="Unit" <?php if ( $category === 'Unit' ) echo 'selected'; ?>>Unit</option>
				<option value="Land" <?php if ( $category === 'Land' ) echo 'selected'; ?>>Land</option>
				<option value="Townhouse" <?php if ( $category === 'Townhouse' ) echo 'selected'; ?>>Townhouse</option>
				<option value="Apartment" <?php if ( $category === 'Apartment' ) echo 'selected'; ?>>Apartment</option>
				<option value="flats" <?php if ( $category === 'flats' ) echo 'selected'; ?>>Flats</option>
				<option value="business" <?php if ( $category === 'business' ) echo 'selected'; ?>>Business</option>
				<option value="commercial" <?php if ( $category === 'commercial' ) echo 'selected'; ?>>Commercial</option>
			</select>
			<label for="property_category">Property Types</label>
		</div>
	</div>

	<div class="col-md-3">
		<div class="form-floating mb-3">
			<select name="bedrooms" class="form-select">
				<option disabled <?php if ( $bedrooms === '' ) echo 'selected'; ?> value>Any</option>
				<option value="1" <?php if ( $bedrooms === '1' ) echo 'selected'; ?>>1+</option>
				<option value="2" <?php if ( $bedrooms === '2' ) echo 'selected'; ?>>2+</option>
				<option value="3" <?php if ( $bedrooms === '3' ) echo 'selected'; ?>>3+</option>
				<option value="4" <?php if ( $bedrooms === '4' ) echo 'selected'; ?>>4+</option>
				<option value="5" <?php if ( $bedrooms === '5' ) echo 'selected'; ?>>5+</option>
			</select>
			<label for="bedrooms">Bedrooms</label>
		</div>
	</div>

	<div class="col-md-3">
		<div class="form-floating mb-3">
			<select name="bathrooms" class="form-select">
				<option disabled <?php if ( $bathrooms === '' ) echo 'selected'; ?> value>Any</option>
				<option value="1" <?php if ( $bathrooms === '1' ) echo 'selected'; ?>>1+</option>
				<option value="2" <?php if ( $bathrooms === '2' ) echo 'selected'; ?>>2+</option>
				<option value="3" <?php if ( $bathrooms === '3' ) echo 'selected'; ?>>3+</option>
				<option value="4" <?php if ( $bathrooms === '4' ) echo 'selected'; ?>>4+</option>
				<option value="5" <?php if ( $bathrooms === '5' ) echo 'selected'; ?>>5+</option>
			</select>
			<label for="bathrooms">Bathrooms</label>
		</div>
	</div>

	<div class="col-md-3">
		<div class="form-floating mb-3">
			<select name="car_spaces" class="form-select">
				<option disabled <?php if ( $car_spaces === '' ) echo 'selected'; ?> value>Any</option>
				<option value="1" <?php if ( $car_spaces === '1' ) echo 'selected'; ?>>1+</option>
				<option value="2" <?php if ( $car_spaces === '2' ) echo 'selected'; ?>>2+</option>
				<option value="3" <?php if ( $car_spaces === '3' ) echo 'selected'; ?>>3+</option>
				<option value="4" <?php if ( $car_spaces === '4' ) echo 'selected'; ?>>4+</option>
				<option value="5" <?php if ( $car_spaces === '5' ) echo 'selected'; ?>>5+</option>
			</select>
			<label for="car_spaces">Parking Spaces</label>
		</div>
	</div>

</div>
<a href="/property-search" type="button" class="btn btn-outline-primary float-right">Clear Filters</a>

