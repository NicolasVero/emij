<?php
        
        // $query = new WP_Query( array( 'post_type' => 'ateliers', 'posts_per_page' => -1, 'post_parent' => 0) ); 
        $query = new WP_Query( array( 'post_type' => 'ateliers', 'posts_per_page' => 3, 'post_parent' => 0) ); 
        // $query = new WP_Query( array( 'post_type' => 'ateliers', 'posts_per_page' => 1, 'post_parent' => 0) ); 

            ?>
            <div class="sliders-background-default"></div>
            <div class="sliders-background degrade-1"></div>
            <ul class="sliders"><?php

        $i = 0;
        
        // $affiche = true;
        while ($query->have_posts()) :
            $query->the_post();
            $i++;

            // if($affiche) :
        
        $titre = explode(" ", get_the_title());

        ?>
        <li class="slider slider_<?= $i ?>">
            <div class="container slider-elements-container">
                    <div>
                        <h2><?= $titre[0] ?><span><?= isset($titre[1]) ? $titre[1] : ""?></span></h2>		
                        <a class="primary-button" href=<?php the_permalink(); ?>>En savoir plus</a>
                    </div>
                    <figure>
                        <?php 
                        $image = get_field('image-slider');
                    
                        if( !empty( $image ) ): ?>
                            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
            
                    </figure>
            </div>
        </li>
    <?php 
    // $affiche = false; 

    // endif; 
    endwhile; wp_reset_query(); ?>
</ul>

<div class="slider-buttons">
    <button class="slider-button prev-button">&#8249;</button>
    <button class="slider-button next-button">&#8250;</button>
</div>