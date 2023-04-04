<div class="post-container">
    <?php
    
    $query = new WP_Query( array( 'post_type' => 'professeurs') ); 


    while ($query->have_posts()) {
        $query->the_post();
    ?>   
        
    <div> 
        <h2><?php the_title(); ?></h2>			
        <?php the_excerpt(); the_post_thumbnail(); 
        the_field('instruments');
        
        if( have_rows('choix-horaire') ) {
            $donnees = [];
            while( have_rows('choix-horaire') ) { 
                
                the_row();

                $donnees[] = [
                    'presence_jours'   => get_sub_field('presence-jours'),
                    'presence_heure_d' => get_sub_field('presence-heures-debut'),
                    'presence_heure_f' => get_sub_field('presence-heures-fin')
                ];
            }
        }

        print_r($donnees);

        $semaine = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
        $cpt = 0;

        echo "taille : " . count($donnees);

        for($i = 0; $i < count($donnees); $i++) {
            for($j = 0; $j < count($semaine); $j++) {
                if(in_array($semaine[$j], $donnees[$i])) { ?>
                    <div class='present'>
                        <?= $semaine[$j]; ?>
                        <?= $donnees[$i]['presence_heure_d'][$cpt]; ?>
                        <?= $donnees[$i]['presence_heure_f'][$cpt]; $cpt++;?>
                    </div>
                    <?php } else { ?>
                        <div><?= $semaine[$j]; ?></div>
                    <?php }
            }
        }

        echo "</div>";
    }

    wp_reset_query(); ?>
</div>


