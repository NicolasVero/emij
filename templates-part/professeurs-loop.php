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
            while( have_rows('choix-horaire') ) { 
                
                the_row();

                $presence_jour    = get_sub_field('presence-jours');
                $presence_heure_d = get_sub_field('presence-heures-debut');
                $presence_heure_f = get_sub_field('presence-heures-fin'); ?>

            <p>Présent le <?= $presence_jour ?> de <?= $presence_heure_d ?>h à <?= $presence_heure_f ?>h</p>


            <?php
            }
        }
        echo "</div>";
    }

    wp_reset_query(); ?>
</div>