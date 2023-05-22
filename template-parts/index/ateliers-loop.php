<div class="ateliers-container">
    <div class="container">
        <div class="row">
    <?php
    
    $query = new WP_Query( array( 'post_type' => 'ateliers', 'post_per_page' => -1, 'post_parent' => 0) ); 

        while ($query->have_posts()) :
            $query->the_post();

            global $post;
            if(count(get_post_ancestors($post)) == 0) :
        ?>   
           
        <div class="col-md-3 atelier"> 
            <div class="atelier-infos">
                <h1><?php the_title(); //100px ?></h1>			
                <h2><?php the_excerpt(); //35px ?></h2>
                <a class="primary-button" href=<?php the_permalink(); ?>>En savoir plus</a>
            </div>
            <figure class="atelier-image"><?php the_post_thumbnail(); ?></figure>
        </div>

        <?php endif; endwhile; wp_reset_query(); ?>
    </div>
</div>
</div>