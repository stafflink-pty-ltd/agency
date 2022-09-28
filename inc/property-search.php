<?php

add_filter( 'query_vars', 'property_filters' );
function property_filters( $qv ) {

	$qv[] = 'car_spaces';
	$qv[] = 'bedrooms';
	$qv[] = 'bathrooms';
	return $qv;
}

add_filter( 'relevanssi_modify_wp_query', 'babs_meta_query' );
function babs_meta_query( $query ) {
	$meta_query = ['relation' => 'AND'];

	if ( isset( $query->query_vars['bathrooms'] ) && ! empty( $query->query_vars['bathrooms'] ) ) {
		$meta_query[] = array(
				'key'     => 'bath_s',
				'value'	  => $query->query_vars['bathrooms'],
				'compare' => '>=',
		);
		$query->set( 'meta_query', $meta_query );
	}

	if ( isset( $query->query_vars['car_spaces'] ) && ! empty( $query->query_vars['car_spaces'] ) ) {
		$meta_query[] = array(

				'key'     => 'car_c',
				'value'	  => $query->query_vars['car_spaces'],
				'compare' => '>=',

		);
		$query->set( 'meta_query', $meta_query );
	}
	if ( isset( $query->query_vars['bedrooms'] ) && ! empty( $query->query_vars['bedrooms'] ) ) {

		$meta_query[] = array(

				'key'     => 'bed_b',
				'value'	  => $query->query_vars['bedrooms'],
				'compare' => '>=',

		);
		$query->set( 'meta_query', $meta_query );
	}

	return $query;
}
