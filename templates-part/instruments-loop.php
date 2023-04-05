<div class="row instruments-container">
    <?php
    
        $query = new WP_Query( array( 'post_type' => 'instruments') ); 


        while ($query->have_posts()) :
            $query->the_post();
        ?>   
           
        <div class="col-md-4 instrument-container"> 
            <h2><?php the_title(); ?></h2>			
            <?php the_excerpt(); the_post_thumbnail(); ?>
            <a class="primary-button" href=<?php the_permalink(); ?>>En savoir plus</a>
        </div>

        <?php endwhile; wp_reset_query(); ?>
</div>