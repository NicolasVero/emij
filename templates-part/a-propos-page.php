<?php

    $query = new WP_Query(array('page_id' => 60));

    while ($query->have_posts()) :
        $query->the_post();
    ?>   
       
    <h2><?php the_title(); ?></h2>			
    <?php the_excerpt(); ?>
    <a class="secondary-button" href=<?php the_permalink(); ?>>En savoir plus</a>
    <?php the_post_thumbnail(); ?>

    <?php endwhile; wp_reset_query(); ?>
