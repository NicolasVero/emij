<?php

    get_header();
    
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    
    include 'templates-part/slider.php';
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    include 'templates-part/ateliers-loop.php';
    include 'templates-part/instruments-loop.php';
    include 'templates-part/actualites-loop.php';
    include 'templates-part/contact-form.php';
    include 'templates-part/pages-loop.php';
    // include 'templates-part/a-propos-page.php';

    get_footer();

?>
