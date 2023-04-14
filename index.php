<?php
    //? get_template_part('template-parts', 'ateliers-loop');

    get_header();


    include 'inc/head.php';
    


    include 'template-parts/slider.php';
    include 'template-parts/index/ateliers-loop.php';
    include 'template-parts/index/instruments-loop.php';
    include 'template-parts/index/actualites-loop.php';
    include 'template-parts/index/contact-form.php';
    include 'template-parts/index/pages-loop.php';
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    include 'template-parts/navigation/navigation.php';
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

    get_footer();

?>
