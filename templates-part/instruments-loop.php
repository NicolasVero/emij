<div class="post-container">

    <?php
    
        $loop = new WP_Query( array( 'post_type' => 'instruments', 'posts_per_page' => '10' ) ); 
        
        while ($loop->have_posts()) :
            echo '<div class="post">';
            $loop->the_post();
    ?>   
                                    
        <h2><?php the_title(); ?></h2>			
        <?php the_excerpt(); ?>
                                
        </div>
        <?php endwhile; ?>
</div>