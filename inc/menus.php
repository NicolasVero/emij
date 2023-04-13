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


    // Création du menu personnalisé

    function menu() {
        $menu  = "
                <div class=\"navigation-menu-links\">

		            <div class=\"navigation-enseignements_1\">
			            <span><h3 class=\"encadre-menu\">Enseignements</h3></span>
			            ";

        $menu .=            construct_menu(wp_get_nav_menu_items('enseignement_1'), 'enseignement_1');
        $menu .= "</div><div class=\"navigation-enseignements_2\">";
        $menu .=            construct_menu(wp_get_nav_menu_items('enseignement_2'), 'enseignement_2');

        $menu .= "      
                    </div>

                    <div class=\"navigation-ecole\">			
                        <span><h3 class=\"encadre-menu\">L'école</h3></span>"; 
                    
        $menu .=         construct_menu(wp_get_nav_menu_items('ecole'), 'ecole');
        $menu .= "  
                <span><h3 class=\"encadre-menu\">Actualités</h3></span>
                <span><h3 class=\"encadre-menu\">Actions culturelles</h3></span>
                <span><h3 class=\"encadre-menu\">Interventions scolaire</h3></span>
        </div>
                  
                </div>";	
        
        
        return $menu;
    }

    function construct_menu($datas, $menu) {
	
        $s = "<dl class='menu-$menu'>";
        foreach($datas as $data) {
            $s .= "<dt><a href='" . $data->url . "'>$data->title</a></dt>";

            if(($data->description) != "")
                $s .= "<dd class='navigation-element-extrait'>" . $data->description . "</dd>";
            
        }

        return $s . "</dl>";
    }

