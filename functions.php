<?php

    /** activation child theme **/
    add_action("wp_enqueue_scripts", "theme_enqueue_styles");
    
    function theme_enqueue_styles() {
        wp_enqueue_style("parent-style", get_template_directory_uri() . "/style.css");
    }

    require_once 'inc/custompost.php';
    require_once 'inc/metaboxes.php';

    add_action('contact_widget', 'contact_form');
    
    function contact_fom() {

        // if ( function_exists('register_sidebar') )
        register_sidebar( array(
            'name'       => __( 'Footer Top', 'virtue' ),
            'id'     => 'footer_top',
            'description'    => __( 'Add widgets here to appear above your footer.', 'virtue' ),
            'before_widget' => '<aside id="%1$s" class="newsL %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
            )
        );
    }
    




?>