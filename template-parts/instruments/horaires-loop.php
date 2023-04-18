<?php
// $query = new WP_Query( array( 'post_type' => 'instruments') ); 
$query = new WP_Query( array( 'post_type' => 'instruments', 'posts_per_page' => 1) ); 
    




while ($query->have_posts()) {
    $query->the_post(); 
    
    global $post;

    affiche($post);
    espace(5);
    ?>
        <h2>Jour(s) et horaires du cours</h2> 
        <div class="jours-cours">
            <?php

            if( have_rows('choix-horaire') ) {
                while( have_rows('choix-horaire') ) { 

                    affiche(the_row());

                    $presence_jours[]   = get_sub_field('presence-jours');
                    $presence_heure_d[] = get_sub_field('presence-heures-debut');
                    $presence_heure_f[] = get_sub_field('presence-heures-fin'); 
                }
            }

            $semaine = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
            $cpt = 0;

            for($i = 0; $i < count($semaine); $i++) {
                if(in_array($semaine[$i], $presence_jours)) { ?>
                    <div class='present'>
                        <?= $semaine[$i]; ?>
                        <span class="horaires"><?= $presence_heure_d[$cpt] . "h à " . $presence_heure_f[$cpt] . "h"; $cpt++; ?></span>
                    </div>
                <?php } else { ?>
                    <div><?= $semaine[$i]; ?></div>
                <?php }
            }
            // $presence_jours   = array();
            // $presence_heure_d = array();
            // $presence_heure_f = array();
        // echo "</div>";
    }

    wp_reset_query(); ?>
</div>