<div class="post-container">
    <?php
    
        $query = new WP_Query( array( 'post_type' => 'professeurs') ); 


        while ($query->have_posts()) :
            $query->the_post();
        ?>   
           
        <div> 
            <h2><?php the_title(); ?></h2>			
            <?php the_excerpt(); the_post_thumbnail(); 
            the_field('instruments');
            the_field('presence'); ?>
        </div>

        <?php endwhile; wp_reset_query(); ?>
</div>