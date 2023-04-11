<div class="sliders">
    <?php
    
        $query = new WP_Query( array( 'post_type' => 'ateliers') ); 

        while ($query->have_posts()) :
            $query->the_post();
        ?>   
    <div class="slider">

            <h2><?php the_title(); ?></h2>			
            <a class="primary-button" href=<?php the_permalink(); ?>>En savoir plus</a>
            <figure><?php 

                if( have_rows('image-slider') ) {
                    while( have_rows('image-slider') ) { 
                        get_sub_field('');
                    }
                }
            ?></figure>
</div>

        <?php endwhile; wp_reset_query(); ?>
            </div>