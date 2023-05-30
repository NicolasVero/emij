<?php

if (! defined('ABSPATH')) {
    exit;
}

//BREADCRUMB
function the_breadcrumb()
{
    echo '<ul class="container-page d-flex">'; // BREADCRUMB NAVIGATION

    if (is_page() || is_single() || is_singular() || is_category() || is_archive()) {
        
        echo '<li class="return-home d-flex align-items-center"><a title="Revenir à l\'Accueil" rel="nofollow" href="/"><i class="ti-home d-flex align-items-center justify-content-center"></i></a></li>';

        // PAGE / SOUS-PAGE
        if( is_page() ) {
            
            global $post;
            $ancestors = get_post_ancestors($post);
                
            echo '<li class="breadcrumb-current-page d-flex align-items-center"><i class="ti-angle-right d-flex align-items-center justify-content-center"></i>' . get_the_title() . '</li>';
        }
        
        if( taxonomy_exists('category_artistes') && !is_post_type_archive( array ('actualites', 'agenda') ) && !is_page( array(  3, 152, 238, 242, 248, 262, 273, 1011, 1015, 1019, 839, 961 ) ) && !is_singular( array( 'artistes', 'actualites' ) ) ){
            
            global $post;
            $obj_type = $post->post_type;
            $title_type = strtolower($obj_type);           
            $queried_object = get_queried_object();
            
            echo '<li class="d-flex align-items-center"><i class="ti-angle-right d-flex align-items-center justify-content-center"></i>' . $title_type . '</li><li class="breadcrumb-current-page d-flex align-items-center"><i class="ti-angle-right d-flex align-items-center justify-content-center"></i>' . $queried_object->name . '</li>';

        }
        if( !is_post_type_archive('actualites') && !is_post_type_archive('artistes') && !taxonomy_exists('category_artistes') && !is_singular( array( 'artistes', 'actualites' ) ) ){
            
            global $post;
            
            $obj_type = $post->post_type;
            $title_type = strtolower($obj_type);
            
          //var_dump($post);
        
            echo '<li class="breadcrumb-current-page d-flex align-items-center"><i class="ti-angle-right d-flex align-items-center justify-content-center"></i>'. $title_type . '</li>';
            
        }
        if( is_post_type_archive() ){
           
            global $post;
            
            $obj_type = $post->post_type;
            $title_type = strtolower($obj_type);
                       
            echo '<li class="breadcrumb-current-page d-flex align-items-center"><i class="ti-angle-right d-flex align-items-center justify-content-center"></i>'. $title_type . '</li>';
        }
        if( is_post_type_archive('actualites') ){
                       
            echo '<li class="breadcrumb-current-page d-flex align-items-center"><i class="ti-angle-right d-flex align-items-center justify-content-center"></i>Les Actualités</li>';
        }
        if( is_singular( array( 'artistes', 'actualites' ) )  ){
            global $post;
                
                $obj_type = $post->post_type;
                $title_type = strtolower($obj_type);
                
              //var_dump($post);
            
                echo '<li class="breadcrumb d-flex align-items-center"><i class="ti-angle-right d-flex align-items-center justify-content-center"></i>'. $title_type . '</li><li class="breadcrumb-current-page d-flex align-items-center"><i class="ti-angle-right d-flex align-items-center justify-content-center"></i>'. get_the_title() . '</li>';
        }
        echo '</ul>';
    }
}
