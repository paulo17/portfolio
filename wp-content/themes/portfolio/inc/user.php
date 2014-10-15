<?php

// Register Custom Taxonomy
function register_role() {

	$labels = array(
		'name'                       => _x( 'Rôles', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Rôle', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Rôle', 'text_domain' ),
		'all_items'                  => __( 'Tous les rôles', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'Nouveau rôle', 'text_domain' ),
		'add_new_item'               => __( 'Ajouter un nouveau rôle', 'text_domain' ),
		'edit_item'                  => __( 'Editer un rôle', 'text_domain' ),
		'update_item'                => __( 'Mettre à jour un rôle', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'search_items'               => __( 'Rechercher un rôle', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'role',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy('role', array('user'), $args);

	wp_insert_term('Developpeur', 'role');

}

// Hook into the 'init' action
add_action( 'init', 'register_role', 0 );

 ?>