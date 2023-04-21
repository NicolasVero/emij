<?php

    // Ajout d'une zone de menu
    function add_menu() {
        register_nav_menus(
            array(
                'enseignement_1' => ('Enseignement 1'),
                'enseignement_2' => ('Enseignement 2'),
                'ecole'          => ('Ecole'),
                'rs'             => ('Réseaux sociaux'),
                'partenaires'    => ('Partenaires'),
                'pages-footer'    => ('Pages footer'),
            )
        );
    }
    add_action('init', 'add_menu');


    // Création du menu personnalisé
    function menu_navigation() {
        return "
                <div class=\"navigation-menu-links\">

                    <div class=\"navigation-enseignements_1\">
                        <span><h3 class=\"encadre-menu\"><a href=\"#\">Enseignements</a></h3></span>" .
                        construct_menu('enseignement_1') . "
                    </div>
                    
                    <div class=\"navigation-enseignements_2\">" . 
                        construct_menu('enseignement_2') . "
                    </div>

                    <div class=\"navigation-ecole\">			
                        <span><h3 class=\"encadre-menu\"><a href=\"#\">L'école</a></h3></span>" .
                        construct_menu('ecole') . "
        
                        <span><h3 class=\"encadre-menu\"><a href=\"#\">Actualités</a></h3></span>
                        <span><h3 class=\"encadre-menu\"><a href=\"#\">Actions culturelles</a></h3></span>
                        <span><h3 class=\"encadre-menu\"><a href=\"#\">Interventions scolaire</a></h3></span>
                    </div>
                </div>	
            </div>
    
            <div class=\"navigation-contact\">

                <a href=\"#\">
                    <span>
                        <h3 class=\"encadre-menu-variation\">Contactez-nous</h3>
                    </span>
                    <span class=\"navigation-contact-icon\">
                        <i class=\"fas fa-envelope\"></i>
                    </span>
                </a>

                <a href=\"#\">
                    <span>
                        <h3 class=\"encadre-menu-variation\">Nous trouver</h3>
                    </span>
                    <span class=\"navigation-contact-icon\">
                        <i class=\"fas fa-map-marker-alt\"></i>
                    </span>
                </a>

                
            </div>
            <div class=\"navigation-rs\">" .
                construct_menu_svg('rs') ."
            </div>";
            }

            function menu_footer() {
                return 
                    construct_menu('pages-footer') . 
                    construct_menu_svg('rs') . 
                    construct_menu_svg('partenaires');
            }


    function construct_menu($menu) {
	
        $datas = wp_get_nav_menu_items($menu);

        $s = "<dl class='menu-$menu'>";
        foreach($datas as $data) {
            $s .= "<dt><a href='" . $data->url . "'>$data->title</a></dt>";

            if(($data->description) != "")
                $s .= "<dd class='navigation-element-extrait'>" . $data->description . "</dd>";
        }

        return $s . "</dl>";
    }


    function construct_menu_svg($menu) {

        if($menu != 'partenaires' && $menu != 'rs') return;
    
        $datas = wp_get_nav_menu_items($menu);
        
        if($menu == "partenaires")
            $donnees = ["En partenariat avec", "elbeuf", "region_normandie", "seine_maritime", "ministere", "metropole"];
        else
            $donnees = ["Nous suivre sur", "facebook", "youtube", "instagram"];
        
        $s = "<dl class='menu-$menu'>";
        $s .= "<span><p>" . $donnees[0] . "</p></span><div class='menu-$menu-svg'>";
        $cpt = 1;

        foreach($datas as $data) {
            $s .= "<dt><a href='" . $data->url . "' target='_blank'><img src='" . get_bloginfo('template_url') . "/assets/svg/" . $donnees[$cpt] .".svg'></a>";
            $cpt++;
        }

        return $s . "</div></dl>";
    }