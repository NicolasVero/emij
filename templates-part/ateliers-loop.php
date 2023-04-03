<div class="post-container">

    <?php
    
        $loop = new WP_Query( array( 'post_type' => 'ateliers', 'posts_per_page' => '10' ) ); 
        
        while ($loop->have_posts()) :
            echo '<div class="post">';
            $loop->the_post();
    ?>   
                                    
        <h2><?php the_title(); ?></h2>			
        <?php the_excerpt(); ?>
        <a href=<?php the_permalink(); ?>>En savoir plus</a>
        
        </div>
        <?php endwhile; ?>
</div>