<div class="instruments-container">
<div class="container">    

<h2>Les instruments à l'EMIJ</h2>
<p>Lorem ipsum</p>
<div class="row">
    <?php
    
        $query = new WP_Query( array( 'post_type' => 'instruments') ); 
        $i = 0;

        while ($query->have_posts()) :
            $query->the_post();
            $i++;
        ?>   
           
        <div class="col-md-4 instrument <?= "instrument_$i" ?>"> 
            <div class="row">
                <figure class="col-6">
                    <?php the_post_thumbnail(); ?>
                </figure>
                <div class="intrument-infos col-6">

                    <?php $titre = explode(" ", get_the_title()); ?>
                    <h2><?= $titre[0] ?><span><?= isset($titre[1]) ? $titre[1] : "" ?></span></h2>	
                		
                    <?php the_excerpt(); ?>
                    <a class="primary-button" href=<?php the_permalink(); ?>>En savoir plus</a>
                </div>
            </div>
        </div>

        <?php endwhile; wp_reset_query(); ?>
    </div>
</div>
        </div>