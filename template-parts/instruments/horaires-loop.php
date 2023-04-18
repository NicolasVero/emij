<?php

$post_id = get_the_ID();

$query = new WP_Query( array( 'post_type' => 'instruments', 'p' => $post_id ) ); 
// $query = new WP_Query( array('post_type' => 'instruments')); 
    
// global $post;
// $post_slug = $post->post_name;
// affiche($post_slug);
// affiche($post_id);
// affiche($post);
// affiche($query);

while ($query->have_posts()) {
    $query->the_post(); 
    
    $instrument = $query->post;
    // affiche($query);
    // affiche($instrument);
    espace(5);
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
        wp_reset_postdata();
    }

    wp_reset_query(); ?>
</div>