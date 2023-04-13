<?php
    //? get_template_part('template-parts', 'ateliers-loop');

    get_header();


    include 'inc/head.php';
    


    include 'template-parts/slider.php';
    include 'template-parts/ateliers-loop.php';
    include 'template-parts/instruments-loop.php';
    include 'template-parts/actualites-loop.php';
    include 'template-parts/contact-form.php';
    include 'template-parts/pages-loop.php';
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    include 'template-parts/navigation/navigation.php';
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

    get_footer();

?>
