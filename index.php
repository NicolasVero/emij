<?php

    get_header();
    
    include 'templates-part/ateliers-loop.php';
    echo "<hr>";
    include 'templates-part/instruments-loop.php';
    echo "<hr><br><br><br><br>";
    include 'templates-part/actualites-loop.php';
    echo "<br><br><br><br>";
    include 'templates-part/contact-form.php';
    include 'templates-part/a-propos-page-loop.php';



    get_footer();

?>
