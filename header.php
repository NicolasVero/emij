<?php $directory = get_stylesheet_directory(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/styles/app.css" type="text/css">
    <script src="<?= bloginfo('template_url'); ?>/assets/scripts/app.js" async></script>
    <script src="<?= bloginfo('template_url'); ?>/assets/scripts/navigation.js" async></script>
    <script src="<?= bloginfo('template_url'); ?>/assets/scripts/header-background.js" async></script>
    <title>Document</title>
</head>
<body>     
    <header>
        <div class="header-elements">
            <div class="logo">
                <p>école de musique</p>
                <p>Depuis 1991</p>
                <? require "$directory/assets/svg/logo.svg"; ?>
            </div>
            <div class="header-contact">
                <p><i class="fas fa-phone-alt"></i> 00 00 00 00 00</p>
                <p><i class="fas fa-envelope"></i> contact@emij.fr</p>
            </div>
        </div>
        <div class="open-navigation"><span class="open-navigation-text">Menu </span><i class="fas fa-bars"></i></div>
        <div class="header-fixed-elements-background"></div>

    </header>

    <? include 'template-parts/navigation/navigation.php'; ?>
    <main>
