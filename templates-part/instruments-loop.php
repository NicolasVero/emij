<div class="row instruments-container">
    <?php
    
        $query = new WP_Query( array( 'post_type' => 'instruments') ); 


        while ($query->have_posts()) :
            $query->the_post();
        ?>   
           
        <div class="col-md-3 offset-md-1 instrument-container"> 
            <div class="row">
                <div class="col-md-3">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="col-md-9">
                    <h2><?php the_title(); ?></h2>			
                    <?php the_excerpt(); ?>
                    <a class="primary-button" href=<?php the_permalink(); ?>>En savoir plus</a>
                </div>
            </div>
        </div>

        <?php endwhile; wp_reset_query(); ?>
</div>