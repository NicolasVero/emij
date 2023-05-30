<?php

function the_breadcrumb()
{
    echo '<ul class="breadcrumb container-page d-flex">';

    if (is_page() || is_single() || is_singular() || is_category() || is_archive()) {
        
        global $post;
        
        echo '<li class="return-home d-flex align-items-center"><a title="Revenir à l\'Accueil" rel="nofollow" href="/"><i class="ti-home d-flex align-items-center justify-content-center"></i></a></li>';            
        echo '<li class="breadcrumb-current-page d-flex align-items-center"><i class="ti-angle-right d-flex align-items-center justify-content-center"></i>'. $post->post_type . '</li>';
        echo '<li class="breadcrumb-current-page d-flex align-items-center"><i class="ti-angle-right d-flex align-items-center justify-content-center"></i>'. $post->post_title . '</li>';
    }

    echo '</ul>';
}