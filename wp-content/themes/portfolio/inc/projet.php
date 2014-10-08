<?php

add_action('init', register_projet);

function register_projet(){
	$labels = array(
		'name' => 'Projets',
		'singular_name' => 'Projet',
		'menu_name' => 'Projets',
		'name_admin_bar' => 'Projets',
		'add_new' => 'Ajouter nouveau',
		'add_new_item' => __( 'Ajouter nouveau projet'),
		'new_item' => __('Nouveau Projet'),
		'edit_item' => __( 'Editer Projet'),
		'view_item' => __( 'Voir Projet'),
		'all_items' => __( 'Tous les projets'),
		'search_items' => __( 'Rechercher un projet'),
		'parent_item_colon'  => __( 'Projet parent'),
		'not_found' => __( 'Aucun projet trouvé'),
		'not_found_in_trash' => __( 'Aucun projet trouvé dans la corbeille')
		);

	$fields = array('title', 'editor', 'thumbnail', 'author');

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'projet' ),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => $fields
		);

	// on enregistre le nouveau type de contenu
	register_post_type('projet', $args);

	// on enregistre la nouvelle taxonomie
	register_taxonomy('cours', array('projet'), array(
		'hierarchical' => true,
		'label' => 'Cours',
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'cours')));

}


?>