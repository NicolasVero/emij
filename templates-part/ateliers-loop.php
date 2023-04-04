<div class="post-container">
    <?php
    
        $query = new WP_Query( array( 'post_type' => 'ateliers') ); 


        while ($query->have_posts()) :
            $query->the_post();
        ?>   
           
        <div> 
            <h2><?php the_title(); ?></h2>			
            <?php the_excerpt(); the_post_thumbnail(); ?>
            <a href=<?php the_permalink(); ?>>En savoir plus</a>
        </div>

        <?php endwhile; wp_reset_query(); ?>
</div>