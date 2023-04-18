<?php

    /** activation child theme **/    
    function theme_enqueue_styles() {
        wp_enqueue_style("parent-style", get_template_directory_uri() . "/style.css");
    }
    add_action("wp_enqueue_scripts", "theme_enqueue_styles");

    require_once 'inc/custompost.php';
    require_once 'inc/formating-content.php';
    require_once 'inc/menus.php';
    require_once 'inc/thumbnails.php';
    require_once 'inc/utilitaire.php';

?>