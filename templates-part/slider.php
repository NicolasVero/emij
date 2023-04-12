<?php
        $query = new WP_Query( array( 'post_type' => 'ateliers') ); 

            ?><ul class="sliders"><?php
        $affiche = true;
        while ($query->have_posts()) :
            $query->the_post();
        global $post;

        if(count(get_post_ancestors($post)) == 0) :
            if($affiche) :
        
        $titre = explode(" ", get_the_title());

        ?>
        <li class="slider">
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
    $affiche = false; 
    
    endif; endif; endwhile; wp_reset_query(); ?>
</ul>
