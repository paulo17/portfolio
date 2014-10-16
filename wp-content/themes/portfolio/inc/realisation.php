<?php

// Register Custom Post Type
function register_realisation() {

	$labels = array(
		'name'                => 'Réalisations',
		'singular_name'       => 'Réalisation',
		'menu_name'           => 'Réalisations',
		'parent_item_colon'   => 'Parent Item',
		'all_items'           => 'Toutes les réalisations',
		'view_item'           => 'View Item',
		'add_new_item'        => 'Ajouter nouvelle réalisation',
		'add_new'             => 'Ajouter nouvelle',
		'edit_item'           => 'Editer réalisation',
		'update_item'         => 'Mettre à jour réalisation',
		'search_items'        => 'Rechercher réalisation',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
		);
	$args = array(
		'label'               => 'realisation',
		'description'         => 'Réalisation des etudiants',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'tag'),
		'hierarchical'        => false,
		// 'taxonomies' => array('category'),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		);
	register_post_type( 'realisation', $args );

}

// Register Custom Taxonomy
function register_technology() {
	$labels = array(
		'name'                       => _x( 'Technologies', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Technologie', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Technologies', 'text_domain' ),
		'all_items'                  => __( 'Toutes les Technologies', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'Ajouter Technologie', 'text_domain' ),
		'add_new_item'               => __( 'Ajouter une nouvelle Technologie', 'text_domain' ),
		'edit_item'                  => __( 'Editer une Technologie', 'text_domain' ),
		'update_item'                => __( 'Mettre à jour une Technologie', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		);

	$rewrite = array(
		'slug'                       => 'cours',
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

	register_taxonomy( 'technologie', array( 'realisation' ), $args );
	wp_insert_term('Wordpress', 'technologie');
	wp_insert_term('PHP', 'technologie');
	wp_insert_term('Javascript', 'technologie');
	wp_insert_term('Drupal', 'technologie');
	wp_insert_term('CMS', 'technologie');
	wp_insert_term('Symfony', 'technologie');
	wp_insert_term('Angular', 'technologie');
	wp_insert_term('NodeJS', 'technologie');
	wp_insert_term('Backbone', 'technologie');
	wp_insert_term('HTML', 'technologie');
	wp_insert_term('CSS', 'technologie');
	wp_insert_term('WebGL', 'technologie');
	wp_insert_term('J2EE', 'technologie');
}

// Register Custom Taxonomy
function register_promotion() {

	$labels = array(
		'name'                       => _x( 'Promotions', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Promotion', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Promotions', 'text_domain' ),
		'all_items'                  => __( 'Toutes les promotions', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'Ajouter nouvelle promotion', 'text_domain' ),
		'add_new_item'               => __( 'Ajouter promotion', 'text_domain' ),
		'edit_item'                  => __( 'Editer promotion', 'text_domain' ),
		'update_item'                => __( 'Mettre à jour promotion', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'search_items'               => __( 'Rechercher promotion', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
		'not_found'                  => __( 'Aucune promotion trouvé', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'promotion', array( 'realisation' ), $args );
	wp_insert_term('2010', 'promotion');
	wp_insert_term('2011', 'promotion');
	wp_insert_term('2012', 'promotion');
	wp_insert_term('2013', 'promotion');
	wp_insert_term('2014', 'promotion');
	wp_insert_term('2015', 'promotion');
	wp_insert_term('2016', 'promotion');
	wp_insert_term('2017', 'promotion');
	wp_insert_term('2018', 'promotion');
	wp_insert_term(date('Y', strtotime('+5 year')), 'category');

}

// Hook into the 'init' action
add_action( 'init', 'register_promotion', 0 );

// Register Custom Taxonomy
function register_annee() {

	$labels = array(
		'name'                       => _x( 'Années', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Année', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Années', 'text_domain' ),
		'all_items'                  => __( 'Toutes les années', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'Ajouter nouvelle Année', 'text_domain' ),
		'add_new_item'               => __( 'Ajouter Année', 'text_domain' ),
		'edit_item'                  => __( 'Editer Année', 'text_domain' ),
		'update_item'                => __( 'Mettre à jour Année', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'search_items'               => __( 'Rechercher année', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
		'not_found'                  => __( 'Aucune année trouvée', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'annee', array( 'realisation' ), $args );
	wp_insert_term('H1', 'annee');
	wp_insert_term('H2', 'annee');
	wp_insert_term('H3', 'annee');
	wp_insert_term('H4', 'annee');
	wp_insert_term('H5', 'annee');

}

// Hook into the 'init' action
add_action( 'init', 'register_annee', 0 );


/*function insert_category_term(){

	wp_insert_term('Année', 'category');
	wp_insert_term('Promotion', 'category');

	$find = false;
	foreach (get_terms('category', array('hide_empty' => 0)) as $key => $category) {
		if($category->name == 'Année'){
			$annee = $category;
		}
		if($category->name == 'Promotion'){
			$promotion = $category;
		}
	}

	wp_insert_term('Promotion 2010', 'category');
	wp_insert_term('Promotion 2011', 'category');
	wp_insert_term('Promotion 2012', 'category');
	wp_insert_term('Promotion 2013', 'category');
	wp_insert_term('Promotion 2014', 'category');
	wp_insert_term('Promotion 2015', 'category');
	wp_insert_term('Promotion 2016', 'category');
	wp_insert_term('Promotion 2017', 'category');
	wp_insert_term('Promotion 2018', 'category');
	wp_insert_term(date('Y', strtotime('+5 year')), 'category');

	wp_insert_term('H1', 'category', array('parent' => $annee->term_id));
	wp_insert_term('H2', 'category', array('parent' => $annee->term_id));
	wp_insert_term('H3', 'category', array('parent' => $annee->term_id));
	wp_insert_term('H4', 'category', array('parent' => $annee->term_id));
	wp_insert_term('H5', 'category', array('parent' => $annee->term_id));
}*/




// Hook into the 'init' action
add_action( 'init', 'register_realisation', 0 );
// Hook into the 'init' action
add_action( 'init', 'register_technology', 0 );


add_image_size('thumb_realisation_home', 294, 195, false);

?>