<ul class="sliders">
    <li class="slider slider-instruments">
        <div class="container slider-elements-container">
                <div>
                <?php
                global $post;
                     $titre = explode(" ", get_the_title()); 

                     $style = "";
                     if($post->post_type == "ateliers") $style = "font-weight: 300;";
                     
                    ?>
                    <h2><?= $titre[0]; ?><span style="display: inline; <?= $style ?>"><? if(isset($titre[1])) echo " " . $titre[1]; ?></span></h2>
                    <span class="slider-subtitles"><?= the_excerpt(); ?></span>
                </div>
                <figure>
                    <?php the_post_thumbnail(); ?>     
                </figure>
        </div>
    </li>
</ul>
