<div class="actualites-container">
    <div class="container"><div class="row">
        <div class="actualites-grid">

    <?php

        $query = new WP_Query( array( 'post_type' => 'actualites', 'posts_per_page' => 4) ); 
        $i = 0;

        while ($query->have_posts()) :
            $query->the_post();
            $i++;
        ?>   
        
        <article class="<?= "actualite actualite_$i"; ?>"> 
            <!-- <a style="display: block;"> -->
            <div class= <?= "actualite-infos actualite-infos_$i"; ?>>
                <aside><p class="actualite-date">Le <?= date_i18n('d.m.Y', strtotime(get_the_date('j/m/Y'))); ?></p></aside>
                <h2><?php the_title(); ?></h2>			
                <?php the_excerpt(); ?>
                <a href=<?php the_permalink(); ?>>En savoir plus</a>
            </div>
            <figure class="<?= "actualite-img actualite-img_$i" ?>">
                <?php the_post_thumbnail(); ?>
            </figure>
        <!-- </a> -->
        </article>

        <?php endwhile; wp_reset_query(); ?>
        <div>
        <h2>Les dates <span>à ne pas manquer<span></h2>
        <p><i class="fas fa-arrow-right"></i> Voir plus de dates</p>
        </div>
    </div>
</div></div>
</div>