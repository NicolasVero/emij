<?php

function affiche($data) {
    echo "<pre style='border: 2px solid green'>";
    var_dump($data);
    echo "</pre>";
}

function espace($n) {
    if($n < 0) return;
    for($i = 0; $i < $n; $i++) {
        echo "<br>";
    }
}