<?php

    get_header();
    
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    include 'templates-part/ateliers-loop.php';
    // echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    include 'templates-part/instruments-loop.php';
    include 'templates-part/actualites-loop.php';
    include 'templates-part/contact-form.php';
    include 'templates-part/a-propos-page-loop.php';

    get_footer();

?>
