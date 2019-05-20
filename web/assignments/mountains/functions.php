<?php

function createNavigation($ranges){
    $nav = "<ul>";
    foreach($ranges as $range){
        $nav .= '<li><a id="'.$range['ID'].'">'.$range['RangeName'].'</a></li>';
    }
    $nav .= "</ul>";

    return $nav;
}