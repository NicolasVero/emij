<?php

get_header();

while (have_posts()) : 
	the_post();
	
include 'template-parts/instruments/slider.php';

?>
	<div class="post">
        <div class="instruments">
            <?php the_content(); ?> 
        </div>

        <?php
            include 'template-parts/instruments/professeurs-loop.php';
            include 'template-parts/index/contact-form-bis.php';
            include 'template-parts/instruments/nous-trouver.php';
        ?>
    </div>
                
<?php endwhile; get_footer(); ?>