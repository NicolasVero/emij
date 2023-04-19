<ul class="sliders">
    <?php 
    
        global $post;
        $class = ($post->post_type == "ateliers") ? "slider-ateliers" : "slider-instruments";    
    ?> 
    <li class="slider <?= $class ?>">
        <?php    
            if($class == "slider-ateliers") {
                echo "<figure class='image-slider'>";
                the_post_thumbnail(); 
                echo "</figure>";
            }
        ?>
     
        <div class="container slider-elements-container">
                <div>
                <?php

                    $titre = explode(" ", get_the_title()); 

                    if($post->post_type == "ateliers") $style = "font-weight: 300;";
                     
                    ?>
                    <h2><?= $titre[0]; ?><span style="display: inline;"><? if(isset($titre[1])) echo " " . $titre[1]; ?></span></h2>
                    <span class="slider-subtitles"><?= the_excerpt(); ?></span>

                    <?php
                    ?>
                </div>
                <figure>
                    <?php if($class != "slider-ateliers") { the_post_thumbnail(); } ?>     
                </figure>
        </div>
    </li>
</ul>
