<?php
/**
 * Description.
 *
 * @package ${namespace}
 * @Since 1.0.0
 * @author Timothy Hill
 * @link https://executivesuiteit.com
 * @license
 */


namespace ExecutiveSuiteIt\Picksters\Classes;


class Picksters_Model_Manager {
	public function __construct() {
	}

	public function create_post_type( $params ) {
		extract( $params );
		$capabilities = isset( $capabilities ) ? $capabilities : array();

		$labels = array(
			'name'              => sprintf( __( '%s', 'picksters' ), $plural_post_name ),
			'singular_name'     => sprintf( __( '%s', 'picksters' ), $singular_post_name ),
			'add_new'           => __( 'Add New', 'picksters' ),
			'add_new_item'      => sprintf( __( 'Add New %s ', 'picksters' ), $singular_post_name ),
			'edit_item'         => sprintf( __( 'Edit %s', 'picksters' ), $singular_post_name ),
			'new_item'          => sprintf( __( 'New %s ', 'picksters' ), $singular_post_name ),
			'all_items'         => sprintf( __( 'All %s ', 'picksters' ), $plural_post_name ),
			'view_item'         => sprintf( __( 'View %s', 'picksters' ), $plural_post_name ),
			'search_items'      => sprintf( __( 'Search %s ', 'picksters' ), $plural_post_name ),
			'not_found'         => sprintf( __( 'No %s found in the Trash', 'picksters' ), $plural_post_name ),
			'parent_item_colon' => '',
			'menu_name'         => sprintf( __( '%s', 'picksters' ), $plural_post_name ),
		);

		$args = array(
			'labels' => $labels,
			'hierarchical' => true,
			'description' => $description,
			'supports' => $supported_fields,
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'publicly_qyeryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export'> true,
			'rewrite' => true,
		);

		if( count($capabilities) != 0 ) {
			$args['capability_type'] = $post_type;
			$args['capabilities'] = $capabilities;
			$args['map_meta_cap'] = true;
		} else {
			$args['capability_type'] = 'post';
		}

		register_post_type( $post_type, $args );
	}
}