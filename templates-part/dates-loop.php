<div class="post-container dates-container">
    <?php
    
        $query = new WP_Query( array( 'post_type' => 'dates') ); 


        while ($query->have_posts()) :
            $query->the_post();
        ?>   
           
        <div> 
            <div>
                <p>Le <?= get_the_date() ?></p>
                <h2><?php the_title(); ?></h2>			
                <?php the_excerpt(); ?>
                <!-- <a href=<?php //the_permalink(); ?>>En savoir plus</a> -->
            </div>
            <div>
                <?php the_post_thumbnail(); ?>
        </div>
        </div>

        <?php endwhile; wp_reset_query(); ?>
        
        <div>
            <h2>Les dates <span>à ne pas manquer<span></h2>
        </div>
</div>