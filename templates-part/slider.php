
    <?php
        $query = new WP_Query( array( 'post_type' => 'ateliers') ); 

            ?><ul class="sliders"><?php

        while ($query->have_posts()) :
            $query->the_post();
        ?>   
        
        <li class="slider">
                <div class="container">
                <h2><?php the_title(); ?></h2>		
                <a class="primary-button" href=<?php the_permalink(); ?>>En savoir plus</a>
                <figure>
                    <?php 
                    $image = get_field('image-slider');
                    
                    if( !empty( $image ) ): ?>
                        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
            
                </figure>
                </div>
            </li>
        <?php endwhile; wp_reset_query(); ?>
</ul>
