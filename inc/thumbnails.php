<?php

    //! Regarder
    function mytheme_post_thumbnails() {
        add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );   