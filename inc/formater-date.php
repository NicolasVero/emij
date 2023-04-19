<?php 

function formateDate($date) {

    if(strlen($date) != 19) return;

    $date = substr($date, 0, 10);
    $dates = explode("-", $date);
    $date_formate = "Posté le ";
    
    for($i = count($dates) - 1; $i >= 0; $i--) {
        $date_formate .= $dates[$i] . "/";
    }

    return substr($date_formate,0, strlen($date_formate) - 1);
}