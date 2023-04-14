<?php
/**
 * Understrap post-2-post 
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {

    // Объявим функцию объединения наших кастомных типов записей
    function my_connection_types() {
        p2p_register_connection_type( array(
            'name' => 'property_to_cities',
            'from' => 'property_type',
            'to' => 'cities'
        ) );
    }
    add_action( 'p2p_init', 'my_connection_types' );
}