<div class="post-container">
    <?php
    
        $query = new WP_Query( array( 'post_type' => 'dates') ); 


        while ($query->have_posts()) :
            $query->the_post();
        ?>   
           
        <div> 
            <p>Le <?= get_the_date() ?></p>
            <h2><?php the_title(); ?></h2>			
            <?php the_excerpt(); ?>
            <a href=<?php the_permalink(); ?>>En savoir plus</a>
        </div>

        <?php endwhile; wp_reset_query(); ?>
</div>