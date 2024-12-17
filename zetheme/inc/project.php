<?php
function zetheme_register_post_types() {
	
    // CPT Portfolio
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
	);
    
    //CPT Tutos-vidéo
    $labels = array(
        'name' => 'Tutos-video',
        'all_items' => 'Tous les tutoriels',  // affiché dans le sous menu
        'singular_name' => 'tutoriel',
        'add_new_item' => 'Ajouter un tutoriel',
        'edit_item' => 'Modifier le tutoriel',
        'menu_name' => 'Tutoriels vidéo'
    );
    $params = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-format-video',
    );
	register_post_type( 'portfolio', $args );
	register_post_type( 'tutos-video', $params );
    
    // Déclaration de la Taxonomie
    $labels = array(
        'name' => 'Type de projets',
        'new_item_name' => 'Nom du nouveau Projet',
    	'parent_item' => 'Type de projet parent',
    );
    
    $args = array( 
        'labels' => $labels,
        'public' => true, 
        'show_in_rest' => true,
        'hierarchical' => true, 
    );

    register_taxonomy( 'type-projet', 'portfolio', $args );
}
