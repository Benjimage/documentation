<?php
function zetheme_register_post_types() {
    // Fonction pour créer les labels
    function get_custom_post_type_labels($singular_name, $plural_name, $menu_name) {
        return array(
            'name' => $plural_name,
            'all_items' => 'Tous les ' . strtolower($plural_name),  // affiché dans le sous menu
            'singular_name' => $singular_name,
            'add_new_item' => 'Ajouter un ' . strtolower($singular_name),
            'edit_item' => 'Modifier le ' . strtolower($singular_name),
            'menu_name' => $menu_name
        );
    }

    // Fonction pour enregistrer un custom post type
    function register_custom_post_type($post_type, $singular_name, $plural_name, $menu_name, $menu_icon) {
        $labels = get_custom_post_type_labels($singular_name, $plural_name, $menu_name);

        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_position' => 5,
            'menu_icon' => $menu_icon,
        );

        register_post_type($post_type, $args);
    }

    // Enregistrement des CPT
    register_custom_post_type('portfolio', 'Projet', 'Portfolio', 'Portfolio', 'dashicons-admin-customizer');
    register_custom_post_type('tutoriel', 'video', 'videos', 'Tutoriels vidéo', 'dashicons-format-video');

    // Déclaration de la Taxonomie
    $taxonomy_labels = array(
        'name' => 'Type de projets',
        'new_item_name' => 'Nom du nouveau Projet',
        'parent_item' => 'Type de projet parent',
    );

    $taxonomy_args = array(
        'labels' => $taxonomy_labels,
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    );

    register_taxonomy('type-projet', 'portfolio', $taxonomy_args);
}
