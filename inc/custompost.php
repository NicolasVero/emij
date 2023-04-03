<?php

    function wp_custom_post_instruments() {

        $labels = array(
            'name'                => _x('Instruments', 'Post Type General Name'),
            'singular_name'       => _x('Instrument', 'Post Type Singular Name'),
            'menu_name'           => __('Instruments'),
            'all_items'           => __('Tous les instruments'),
            'view_item'           => __('Voir les catégories d\'instrument'),
            'add_new_item'        => __('Ajouter une nouvelle catégorie d\'instrument'),
            'add_new'             => __('Ajouter'),
            'edit_item'           => __('Editer la catégorie d\'instrument'),
            'update_item'         => __('Modifier la catégorie d\'instrument'),
            'search_items'        => __('Rechercher une catégorie d\'instrument'),
            'not_found'           => __('Non trouvée'),
            'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
        );
        
        $args = array(
            'label'               => __('Catégorie d\'instrument'),
            'description'         => __('Toutes les catégories d\'instrument'),
            'labels'              => $labels,
            'menu_icon'           => 'dashicons-format-audio',
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'show_in_rest'        => true,
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'les-instruments'),
        );
        
        register_post_type( 'instruments', $args );

    }

    function wp_custom_post_ateliers() {

        $labels = array(
            'name'                => _x('Ateliers', 'Post Type General Name'),
            'singular_name'       => _x('Atelier', 'Post Type Singular Name'),
            'menu_name'           => __('Ateliers'),
            'all_items'           => __('Tous les ateliers'),
            'view_item'           => __('Voir les ateliers'),
            'add_new_item'        => __('Ajouter un nouvel atelier'),
            'add_new'             => __('Ajouter'),
            'edit_item'           => __('Editer la catégorie d\'instrument'),
            'update_item'         => __('Modifier la catégorie d\'instrument'),
            'search_items'        => __('Rechercher une catégorie d\'instrument'),
            'not_found'           => __('Non trouvée'),
            'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
        );
        
        $args = array(
            'label'               => __('Les ateliers'),
            'description'         => __('Toutes les ateliers'),
            'labels'              => $labels,
            'menu_icon'           => 'dashicons-admin-generic',
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'show_in_rest'        => true,
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'les-ateliers'),
        );
        
        register_post_type('ateliers', $args );
    
    }

    function wp_custom_post_professeurs() {

        $labels = array(
            'name'                => _x('Professeurs', 'Post Type General Name'),
            'singular_name'       => _x('Professeur', 'Post Type Singular Name'),
            'menu_name'           => __('Professeurs'),
            'all_items'           => __('Tous les professeurs'),
            'view_item'           => __('Voir les professeurs'),
            'add_new_item'        => __('Ajouter un nouveau professeur'),
            'add_new'             => __('Ajouter'),
            'edit_item'           => __('Editer un professeur'),
            'update_item'         => __('Modifier un professeur'),
            'search_items'        => __('Rechercher un professeur'),
            'not_found'           => __('Non trouvée'),
            'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
        );
        
        $args = array(
            'label'               => __('Professeurs'),
            'description'         => __('Toutes les professeurs'),
            'labels'              => $labels,
            'menu_icon'           => 'dashicons-welcome-learn-more',
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'show_in_rest'        => true,
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'			  => array( 'slug' => 'les-instruments'),
        );
        
        register_post_type( 'professeurs', $args );

    }

add_action( 'init', 'wp_custom_post_instruments', 0 );
add_action( 'init', 'wp_custom_post_ateliers', 0 );
add_action( 'init', 'wp_custom_post_professeurs', 0 );

?>