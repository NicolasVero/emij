<?php 

$directory = get_stylesheet_directory();
include "$directory/template-parts/index/slider.php"; ?>

<div class="formulaire-contact">
    <h2>Formulaire de contact</h2>
    <p>lorem ipsum dolor eres</p>
    
    <?= do_shortcode('[contact-form-7 id="268" title="Formulaire de contact"]'); ?>
</div>