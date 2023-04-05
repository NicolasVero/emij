<div class="row">
    <?php
    
        $query = new WP_Query( array( 'post_type' => 'ateliers') ); 

        while ($query->have_posts()) :
            $query->the_post();
        ?>   
           
        <div class="col-md-3"> 
            <div class="row">
                <h2><?php the_title(); ?></h2>			
                <?php the_excerpt(); ?>
                <a href=<?php the_permalink(); ?>>En savoir plus</a>
                <?php the_post_thumbnail(); ?>
        </div>
        </div>

        <?php endwhile; wp_reset_query(); ?>
</div>