<?php

    /** activation child theme **/    
    function theme_enqueue_styles() {
        wp_enqueue_style("parent-style", get_template_directory_uri() . "/style.css");
    }
    add_action("wp_enqueue_scripts", "theme_enqueue_styles");

    // Gestion des svg par wp
    function wpc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg xml';
        return $mimes;
    }
    add_filter('upload_mimes', 'wpc_mime_types');

    require_once 'inc/custompost.php';
    require_once 'inc/formating-content.php';
    require_once 'inc/menus.php';
    require_once 'inc/thumbnails.php';
    require_once 'inc/utilitaire.php';

?>