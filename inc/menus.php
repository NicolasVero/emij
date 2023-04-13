<?php

    // Ajout d'une zone de menu
    function add_menu() {
        register_nav_menus(
            array(
                'enseignement_1' => ('Enseignement 1'),
                'enseignement_2' => ('Enseignement 2'),
                'ecole'          => ('Ecole')
            )
        );
    }
    add_action('init', 'add_menu');