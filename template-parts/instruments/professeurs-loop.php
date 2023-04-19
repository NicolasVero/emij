
<div class="professeurs">
    <?php

    $query = new WP_Query( array( 'post_type' => 'professeurs') ); 

    global $post;
    $titre_article = $post->post_name;

    while ($query->have_posts()) :
        $query->the_post();
        
        if(have_rows('cours')) :
            while( have_rows('cours') ) :
                $nom_categorie = the_row();
                if($nom_categorie == $titre_article) :
                    ?>   
                    <div class="professeur"> 
                        <?php the_post_thumbnail(); ?>
                        <p><?php the_title(); ?></p>			
                        <p><?php the_field('instruments'); ?></p>
                    </div>
                <?php endif; endwhile;endif; endwhile; 

echo "</div>";
wp_reset_query();


