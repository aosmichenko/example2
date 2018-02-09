<?php
///**
// * Created by OsmiLab.
// *
// * @dev: Alex Osmichenko
// * @date: 8/15/15
// * @package starter
// */
//add_action( 'acf/init', 'prefix_acf_init' );
///**
// * Prepare for any crazy stuff we are about to do
// */
//function prefix_acf_init() {
//	global $prefix_acf_delete_values;
//
//	$prefix_acf_delete_values = [ ];
//}
//
//add_action( 'acf/save_post', 'prefix_after_save_post', 100001 );
///**
// * Cleanup after everything is done
// */
//function prefix_after_save_post() {
//	global $prefix_acf_delete_values;
//
//	if ( ! empty( $prefix_acf_delete_values ) ) {
//		foreach ( $prefix_acf_delete_values as $delete ) {
//			acf_delete_value( $delete['post_id'], $delete['field'] );
//		}
//	}
//}
//
//add_filter( 'acf/update_value', 'prefix_update_term_meta', 10, 3 );
///**
// * Update term meta based on ACF term meta fields
// *
// * @param $value
// * @param $post_id
// * @param $field
// *
// * @return
// */
//function prefix_update_term_meta( $value, $post_id, $field ) {
//	global $prefix_acf_delete_values;
//
//	$field_group = acf_get_field_group( $field['parent'] );
//
//	if ( $field_group['location'][0][0]['param'] == 'taxonomy' ) {
//		$term_id = intval( filter_var( $post_id, FILTER_SANITIZE_NUMBER_INT ) );
//
//		if ( $term_id > 0 ) {
//			$update_term_meta = update_term_meta( $term_id, $field['name'], $value );
//
//			if ( ! is_wp_error( $update_term_meta ) )
//				$prefix_acf_delete_values[ $field['key'] ] = [ 'post_id' => $post_id, 'field' => $field ];
//		}
//	}
//
//	return $value;
//}
//
//add_filter( 'acf/load_value', 'prefix_load_term_meta', 10, 3 );
///**
// * Load term meta in for ACF meta fields
// *
// * @param $value
// * @param $post_id
// * @param $field
// *
// * @return mixed
// */
//function prefix_load_term_meta( $value, $post_id, $field ) {
//	$field_group = acf_get_field_group( $field['parent'] );
//
//	if (
//		$field_group['location'][0][0]['param'] == 'taxonomy' ||
//		(
//			! in_array( $post_id, [ 'option', 'options' ] ) &&
//			! $field_group &&
//			strpos( $post_id, '_' ) !== false
//		)
//	) {
//		$term_id = intval( filter_var( $post_id, FILTER_SANITIZE_NUMBER_INT ) );
//
//		if ( $term_id > 0 ) {
//			$value = get_term_meta( $term_id, $field['name'], true );
//		}
//	}
//
//	return $value;
//}
//if( !defined('ACF_LITE')) {
////	define( 'ACF_LITE', true );
//}