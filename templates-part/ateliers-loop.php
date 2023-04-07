<div class="row ateliers-container">
    <!-- <div class="row"> -->
    <?php
    
        $query = new WP_Query( array( 'post_type' => 'ateliers') ); 

        while ($query->have_posts()) :
            $query->the_post();
        ?>   
           
        <div class="col-md-3 atelier"> 
            <div class="atelier-infos">
                <h2><?php the_title(); ?></h2>			
                <?php the_excerpt(); ?>
                <a class="primary-button" href=<?php the_permalink(); ?>>En savoir plus</a>
            </div>
            <div class="atelier-image-container">
                <div class="atelier-image"><?php the_post_thumbnail(); ?></div>
            </div>
        </div>

        <?php endwhile; wp_reset_query(); ?>
</div>
<!-- </div> -->