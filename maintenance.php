<?php /* Template Name: Maintenance */ 


get_header();

?>
    <main>
    <?php    
        $titre = explode(' ', get_the_title());
        $titre1 = $titre[0] . " <strong>" . $titre[1] . "</strong>";
        $titre2 = $titre[2] . " <strong>" . $titre[3] . " !</strong> ";
    ?>
            <h1>
                <span>C'est l'été</span>
                <span><?= $titre1 ?></span>
                <span><?= $titre2 ?></span>
            </h1>
            <?php the_content(); ?>
    </main>
<?php
// get_footer();