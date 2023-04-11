<div class="sliders">
    <?php
    
        $query = new WP_Query( array( 'post_type' => 'ateliers') ); 

        while ($query->have_posts()) :
            $query->the_post();
        ?>   
        
        <div class="slider">
            <?php include '../assets/svg/logo.php'; ?>
            <h2><?php the_title(); ?></h2>
            <br><br><br>			
            <a class="primary-button" href=<?php the_permalink(); ?>>En savoir plus</a>
            <figure><?php 
                $image = get_field('image-slider');
                
                if( !empty( $image ) ): ?>
                    <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            
            </figure>
        </div>
    <?php endwhile; wp_reset_query(); ?>

</div>