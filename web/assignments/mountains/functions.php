<?php

function createNavigation($ranges){
    $nav = "<ul>";
    foreach($ranges as $range){
        $nav .= '<li><a href=index.php/?action=range&id='.$range['ID'].'>'.$range['RangeName'].'</a></li>';
    }
    $nav .= "</ul>";

    return $nav;
}