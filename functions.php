<?php

    /** activation child theme **/
    add_action("wp_enqueue_scripts", "theme_enqueue_styles");
    
    function theme_enqueue_styles() {
        wp_enqueue_style("parent-style", get_template_directory_uri() . "/style.css");
    }

    require_once 'inc/custompost.php';

    // Ajout d'une zone de menu
    add_action('init', 'add_menu');
    function add_menu() {
        register_nav_menu('menu', 'Zone de création d\'un menu');
    }

    //! Regarder
    function mytheme_post_thumbnails() {
        add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );   

    // Définir taille récupérée dans the_excerpt
    function my_excerpt_length($length) { 
        return 20; 
    } 
    add_filter('excerpt_length', 'my_excerpt_length');

    //! Mettre extrait à une page 
    function wpc_excerpt_pages() {
        add_meta_box('postexcerpt', __('Extrait'), 'post_excerpt_meta_box', 'page', 'normal', 'core');
    }
    add_action( 'admin_menu', 'wpc_excerpt_pages' );

?>