<?php


$query = new WP_Query( array( 'post_type' => 'professeurs') ); 


while ($query->have_posts()) {
    $query->the_post();
?>   
    
<div> 
    <h2><?php the_title(); ?></h2>			
    <?php the_post_thumbnail(); 
    the_field('instruments');
    
    if( have_rows('choix-horaire') ) {
        while( have_rows('choix-horaire') ) { 
            
            the_row();

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
                <?= $presence_heure_d[$cpt]; ?>
                <?= $presence_heure_f[$cpt]; $cpt++;?>
            <span>
            </div>
        <?php } else { ?>
            <div><?= $semaine[$i]; ?></div>
        <?php }
    }
    $presence_jours   = array();
    $presence_heure_d = array();
    $presence_heure_f = array();
    echo "</div>";
}

wp_reset_query(); ?>
</div>

