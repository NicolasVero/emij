<?php 

function formateDate($date) {
    if(count($date) != 10) return;

    $dates = explode("-", $date);

    $date_formate = "";
    for($i = count($date); $i > 0; $i--) {
        $date_formate .= $dates[$i] . "/";
    }

    return $date_formate;
}