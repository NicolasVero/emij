<?php

$post_id = get_the_ID();
$query = new WP_Query( array( 'post_type' => array( 'instruments', 'ateliers' ), 'p' => $post_id ) ); 

while ($query->have_posts()) {
    $query->the_post();     

    ?>

        <h2>Jour(s) et horaires du cours</h2> 
        <div class="jours-cours">
            <?php

            if( have_rows('choix-horaire') ) {
                while( have_rows('choix-horaire') ) { 
                    
                    the_row();

                    $presence_jours[]   = get_sub_field('presence-jours', $post_id );
                    $presence_heure_d[] = get_sub_field('presence-heures-debut', $post_id);
                    $presence_heure_f[] = get_sub_field('presence-heures-fin', $post_id); 
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
            } else 
                echo "<p>Aucun cours de programmé actuellement<p>";
        
        // wp_reset_postdata();
    }

    wp_reset_query(); ?>
</div>