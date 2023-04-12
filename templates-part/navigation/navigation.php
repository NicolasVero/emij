<!-- <span ><p class="encadre-menu">Testeuh</p></span> -->

<?php



    wp_nav_menu(array('theme_location' => 'enseignement_1')); 
    wp_nav_menu(array('theme_location' => 'enseignement_2')); 
    wp_nav_menu(array('theme_location' => 'ecole')); 

    $menu_id = 'Enseignement_1';
    $menu_object = wp_get_nav_menu_object($menu_id);
    $menu_items = wp_get_nav_menu_items($menu_object->term_id);
    
    foreach ($menu_items as $menu_item) {
      $description = $menu_item->description; 
      if (!empty($description)) {
        echo $description; 
      }
    }


    
// add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
// function my_wp_nav_menu_objects( $items, $args ) {
// 	foreach( $items as &$item ) {
// 		$icon = get_field('icone', $item);
// 		if( $icon ) {
// 			// echo '<pre>';
// 			// var_dump($item);
// 			// echo '</pre>';
// 			$item->title .='<i class="menu-icon icon-icon-'. $icon .'"></i>';
// 		}
// 	}
// 	return $items;
// }