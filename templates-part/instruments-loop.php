<div class="container instruments-container">
    <div class="row">
    <?php
    
        $query = new WP_Query( array( 'post_type' => 'instruments') ); 
        $cpt = 0;

        while ($query->have_posts()) :
            $query->the_post();
            $cpt++;
        ?>   
           
        <div class="col-4 instrument <?= "instrument_$cpt" ?>"> 
            <div class="row">
                <div class="col-6">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="intrument-infos col-6">

                    <?php
                        $titre   = get_the_title();
                        $prefixe = ($titre == "chant") ? "Le" : "Les";
                    ?>

                    <h2><?= "$prefixe <span>$titre</span>" ?></h2>
                		
                    <?php the_excerpt(); ?>
                    <a class="primary-button" href=<?php the_permalink(); ?>>En savoir plus</a>
                </div>
            </div>
        </div>

        <?php endwhile; wp_reset_query(); ?>
    </div>
</div>