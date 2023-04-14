<ul class="sliders">
    <li class="slider slider-instruments">
        <div class="container slider-elements-container">
                <div>
                    <?php $titre = explode(" ", get_the_title()); ?>

                    <h2><?= $titre[0]; ?><span style="display: inline;"><?= " " . $titre[1]; ?></span></h2>
                    <span class="slider-subtitles"><?= the_excerpt(); ?></span>
                </div>
                <figure>
                    <?php the_post_thumbnail(); ?>     
                </figure>
        </div>
    </li>
</ul>
