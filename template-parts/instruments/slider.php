<ul class="sliders">
    <?php 
    
        global $post;
        $id = ($post->post_type != "instruments") ? "slider-image" : "slider-instruments";    
        $date = $post->post_modified;
    ?> 
    <li class="slider" id="<?= $id; ?>">
        <?php    
            if($id == "slider-image") {
                echo "<figure class='image-slider'>";
                the_post_thumbnail(); 
                echo "</figure>";
            }
        ?>
     
        <div class="container slider-elements-container">
                <div>
                <?php

                    $titre = explode(" ", get_the_title()); 

                    if($post->post_type != "instruments") $style = "font-weight: 300;";
                    
                    ?>
                    <h1><?= $titre[0]; ?><span style="display: inline;"><? if(isset($titre[1])) echo " " . $titre[1]; ?></span></h1>
                    <?php if($post->post_type == "actualites") { ?>
                        <h2 class="slider-subtitles"><?= formateDate($date); ?></h2>
                    <?php } else { ?> 
                        <h2 class="slider-subtitles"><?= get_the_excerpt(); ?></span>
                    <?php } ?>

                </div>
                <figure>
                    <?php if($id != "slider-image") { the_post_thumbnail(); } ?>     
                </figure>
        </div>
    </li>
</ul>
