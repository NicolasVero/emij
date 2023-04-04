<?php

    get_header();
    
    include 'templates-part/ateliers-loop.php';
    echo "<hr>";
    include 'templates-part/instruments-loop.php';
    echo "<hr>";
    include 'templates-part/dates-loop.php';
    echo "<hr>";
    include 'templates-part/professeurs-loop.php';
    
    get_footer();

?>
