<?php

function dd_program_type_link_change( $post_link, $id = 0 ){
    $post = get_post($id);  
    if ( is_object( $post ) ){
        $terms = wp_get_object_terms( $post->ID, 'program_type' );
        if( $terms ){
            return str_replace( '%program_type%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;  
}
add_filter( 'post_type_link', 'dd_program_type_link_change', 1, 3 );

function dd_create_custom_post_type() {
    // Define labels
    $labels = array(
        'name'                  => _x('Programs At A Glance', 'Post Type General Name', 'highflyers'),
        'singular_name'         => _x('Programs At A Glance', 'Post Type Singular Name', 'highflyers'),
        'menu_name'             => __('Programs At A Glance', 'highflyers'),
        'name_admin_bar'        => __('Programs At A Glance', 'highflyers'),
        'archives'              => __('Programs At A Glance Archives', 'highflyers'),
        'attributes'            => __('Programs At A Glance Attributes', 'highflyers'),
        'parent_item_colon'     => __('Parent Programs At A Glance:', 'highflyers'),
        'all_items'             => __('All Programs At A Glance', 'highflyers'),
        'add_new_item'          => __('Add New Programs At A Glance', 'highflyers'),
        'add_new'               => __('Add New', 'highflyers'),
        'new_item'              => __('New Program', 'highflyers'),
        'edit_item'             => __('Edit Programs At A Glance', 'highflyers'),
        'update_item'           => __('Update Programs At A Glance', 'highflyers'),
        'view_item'             => __('View Programs At A Glance', 'highflyers'),
        'view_items'            => __('View Programs At A Glance', 'highflyers'),
        'search_items'          => __('Search Programs At A Glance', 'highflyers'),
        'not_found'             => __('Not found', 'highflyers'),
        'not_found_in_trash'    => __('Not found in Trash', 'highflyers'),
        'featured_image'        => __('Featured Image', 'highflyers'),
        'set_featured_image'    => __('Set featured image', 'highflyers'),
        'remove_featured_image' => __('Remove featured image', 'highflyers'),
        'use_featured_image'    => __('Use as featured image', 'highflyers'),
        'insert_into_item'      => __('Insert into Programs At A Glance', 'highflyers'),
        'uploaded_to_this_item' => __('Uploaded to this Programs At A Glance', 'highflyers'),
        'items_list'            => __('Programs At A Glance list', 'highflyers'),
        'items_list_navigation' => __('Programs At A Glance list navigation', 'highflyers'),
        'filter_items_list'     => __('Filter Programs At A Glance list', 'highflyers'),
    );

    // Define arguments
    $args = array(
        'label'                 => __('Programs At A Glance', 'highflyers'),
        'description'           => __('Custom post type for Programs At A Glance', 'highflyers'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'rewrite'               => array('slug' => 'programs/%program_type%'),
    );

    // Register the post type
    register_post_type('recreational_pro', $args);

    // Program Type

    $labels = array(
		'name'              => _x( 'All Program Type', 'highflyers' ),
		'singular_name'     => _x( 'Program Type', 'highflyers' ),
		'search_items'      => __( 'Search Program Type', 'highflyers' ),
		'all_items'         => __( 'All Program Type', 'highflyers' ),
		'view_item'         => __( 'View Program Type', 'highflyers' ),
		'parent_item'       => __( 'Parent Program Type', 'highflyers' ),
		'parent_item_colon' => __( 'Parent Program Type:', 'highflyers' ),
		'edit_item'         => __( 'Edit Program Type', 'highflyers' ),
		'update_item'       => __( 'Update Program Type', 'highflyers' ),
		'add_new_item'      => __( 'Add New Program Type', 'highflyers' ),
		'new_item_name'     => __( 'New Program Type Name', 'highflyers' ),
		'not_found'         => __( 'No Program Type Found', 'highflyers' ),
		'back_to_items'     => __( 'Back to Agess', 'highflyers' ),
		'menu_name'         => __( 'Program Type', 'highflyers' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'program_type' ),
		'show_in_rest'      => true,
	);


	register_taxonomy( 'program_type', 'recreational_pro', $args );
    
    $labels = array(
		'name'              => _x( 'All Ages', 'highflyers' ),
		'singular_name'     => _x( 'Ages', 'highflyers' ),
		'search_items'      => __( 'Search Ages', 'highflyers' ),
		'all_items'         => __( 'All Ages', 'highflyers' ),
		'view_item'         => __( 'View Ages', 'highflyers' ),
		'parent_item'       => __( 'Parent Ages', 'highflyers' ),
		'parent_item_colon' => __( 'Parent Ages:', 'highflyers' ),
		'edit_item'         => __( 'Edit Ages', 'highflyers' ),
		'update_item'       => __( 'Update Ages', 'highflyers' ),
		'add_new_item'      => __( 'Add New Ages', 'highflyers' ),
		'new_item_name'     => __( 'New Ages Name', 'highflyers' ),
		'not_found'         => __( 'No Ages Found', 'highflyers' ),
		'back_to_items'     => __( 'Back to Agess', 'highflyers' ),
		'menu_name'         => __( 'Ages', 'highflyers' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'ages' ),
		'show_in_rest'      => true,
	);


	register_taxonomy( 'ages', 'recreational_pro', $args );

    $labels = array(
		'name'              => _x( 'Classes Type', 'highflyers' ),
		'singular_name'     => _x( 'Classes Type', 'highflyers' ),
		'search_items'      => __( 'Search Classes Type', 'highflyers' ),
		'all_items'         => __( 'All Classes Type', 'highflyers' ),
		'view_item'         => __( 'View Classes Type', 'highflyers' ),
		'parent_item'       => __( 'Parent Classes Type', 'highflyers' ),
		'parent_item_colon' => __( 'Parent Classes Type:', 'highflyers' ),
		'edit_item'         => __( 'Edit Classes Type', 'highflyers' ),
		'update_item'       => __( 'Update Classes Type', 'highflyers' ),
		'add_new_item'      => __( 'Add New Classes Type', 'highflyers' ),
		'new_item_name'     => __( 'New Classes Type Name', 'highflyers' ),
		'not_found'         => __( 'No Classes Type Found', 'highflyers' ),
		'back_to_items'     => __( 'Back to Classes Types', 'highflyers' ),
		'menu_name'         => __( 'Classes Type', 'highflyers' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'Classes_type' ),
		'show_in_rest'      => true,
	);


	register_taxonomy( 'Classes_type', 'recreational_pro', $args );

        // Define labels
        $labels = array(
            'name'                  => _x('Teams', 'Post Type General Name', 'highflyers'),
            'singular_name'         => _x('Team', 'Post Type Singular Name', 'highflyers'),
            'menu_name'             => __('Teams', 'highflyers'),
            'name_admin_bar'        => __('Team', 'highflyers'),
            'archives'              => __('Team Archives', 'highflyers'),
            'attributes'            => __('Team Attributes', 'highflyers'),
            'parent_item_colon'     => __('Parent Team:', 'highflyers'),
            'all_items'             => __('All Teams', 'highflyers'),
            'add_new_item'          => __('Add New Team', 'highflyers'),
            'add_new'               => __('Add New', 'highflyers'),
            'new_item'              => __('New Team', 'highflyers'),
            'edit_item'             => __('Edit Team', 'highflyers'),
            'update_item'           => __('Update Team', 'highflyers'),
            'view_item'             => __('View Team', 'highflyers'),
            'view_items'            => __('View Teams', 'highflyers'),
            'search_items'          => __('Search Team', 'highflyers'),
            'not_found'             => __('Not found', 'highflyers'),
            'not_found_in_trash'    => __('Not found in Trash', 'highflyers'),
            'featured_image'        => __('Featured Image', 'highflyers'),
            'set_featured_image'    => __('Set featured image', 'highflyers'),
            'remove_featured_image' => __('Remove featured image', 'highflyers'),
            'use_featured_image'    => __('Use as featured image', 'highflyers'),
            'insert_into_item'      => __('Insert into team', 'highflyers'),
            'uploaded_to_this_item' => __('Uploaded to this team', 'highflyers'),
            'items_list'            => __('Teams list', 'highflyers'),
            'items_list_navigation' => __('Teams list navigation', 'highflyers'),
            'filter_items_list'     => __('Filter teams list', 'highflyers'),
        );
    
        // Define arguments
        $args = array(
            'label'                 => __('Team', 'highflyers'),
            'description'           => __('Custom post type for Teams', 'highflyers'),
            'labels'                => $labels,
            'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
            'rewrite'               => array('slug' => 'teams'),
        );
    
        // Register the post type
        register_post_type('team', $args);

        // Define labels
    $labels = array(
        'name'                  => _x('FAQs', 'Post Type General Name', 'highflyers'),
        'singular_name'         => _x('FAQ', 'Post Type Singular Name', 'highflyers'),
        'menu_name'             => __('FAQs', 'highflyers'),
        'name_admin_bar'        => __('FAQ', 'highflyers'),
        'archives'              => __('FAQ Archives', 'highflyers'),
        'attributes'            => __('FAQ Attributes', 'highflyers'),
        'parent_item_colon'     => __('Parent FAQ:', 'highflyers'),
        'all_items'             => __('All FAQs', 'highflyers'),
        'add_new_item'          => __('Add New FAQ', 'highflyers'),
        'add_new'               => __('Add New', 'highflyers'),
        'new_item'              => __('New FAQ', 'highflyers'),
        'edit_item'             => __('Edit FAQ', 'highflyers'),
        'update_item'           => __('Update FAQ', 'highflyers'),
        'view_item'             => __('View FAQ', 'highflyers'),
        'view_items'            => __('View FAQs', 'highflyers'),
        'search_items'          => __('Search FAQ', 'highflyers'),
        'not_found'             => __('Not found', 'highflyers'),
        'not_found_in_trash'    => __('Not found in Trash', 'highflyers'),
        'featured_image'        => __('Featured Image', 'highflyers'),
        'set_featured_image'    => __('Set featured image', 'highflyers'),
        'remove_featured_image' => __('Remove featured image', 'highflyers'),
        'use_featured_image'    => __('Use as featured image', 'highflyers'),
        'insert_into_item'      => __('Insert into FAQ', 'highflyers'),
        'uploaded_to_this_item' => __('Uploaded to this FAQ', 'highflyers'),
        'items_list'            => __('FAQs list', 'highflyers'),
        'items_list_navigation' => __('FAQs list navigation', 'highflyers'),
        'filter_items_list'     => __('Filter FAQs list', 'highflyers'),
    );

    // Define arguments
    $args = array(
        'label'                 => __('FAQ', 'highflyers'),
        'description'           => __('Custom post type for FAQs', 'highflyers'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'custom-fields'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,  // No archive
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'rewrite'               => false,  // No custom URL
    );

    // Register the post type
    register_post_type('faqs', $args);
}

// Hook into the 'init' action
add_action('init', 'dd_create_custom_post_type', 0);