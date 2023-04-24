<?php
    //? get_template_part('template-parts', 'ateliers-loop');

    include 'inc/head.php';
    get_header();

    include 'template-parts/navigation/navigation.php';
    include 'template-parts/index/slider.php';
    include 'template-parts/index/ateliers-loop.php';
    include 'template-parts/index/instruments-loop.php';
    include 'template-parts/index/actualites-loop.php';
    include 'template-parts/index/facebook.php';
    include 'template-parts/index/contact-form.php';
    include 'template-parts/index/pages-loop.php';

    get_footer();

?>
