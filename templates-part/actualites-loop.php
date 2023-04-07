<div class="actualites-container">
    <?php

        $query = new WP_Query( array( 'post_type' => 'actualites') ); 
        $i = 0;

        while ($query->have_posts()) :
            $query->the_post();
            $i++;
        ?>   
        
        <article class="<?= "actualite actualite_$i"; ?>"> 
            <div class= <?= "actualite-infos actualite-infos_$i"; ?>>
                <aside><p class="actualite-date">Le <?= get_the_date(); ?></p></aside>
                <h2><?php the_title(); ?></h2>			
                <?php the_excerpt(); ?>
                <!-- <a href=<?php //the_permalink(); ?>>En savoir plus</a> -->
            </div>
            <figure class="<?= "actualite-img actualite-img_$i" ?>">
                <?php the_post_thumbnail(); ?>
            </figure>
        </article>

        <?php endwhile; wp_reset_query(); ?>
        
        <h2>Les dates <span>à ne pas manquer<span></h2>
</div>