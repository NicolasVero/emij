<?php

    $query = new WP_Query(array('page_id' => 60));

    while ($query->have_posts()) :
        $query->the_post();
    ?>   
       
    <div> 
        <h2><?php the_title(); ?></h2>			
        <?php the_excerpt(); ?>
        <a href=<?php the_permalink(); ?>>En savoir plus</a>
    </div>

    <?php endwhile; wp_reset_query(); ?>
