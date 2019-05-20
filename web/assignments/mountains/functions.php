<?php

function createNavigation($ranges){
    $nav = "<ul>";
    foreach($ranges as $range){
        $nav .= '<li><a href=index.php/?action=range&id='.$range['ID'].'>'.$range['RangeName'].'</a></li>';
    }
    $nav .= "</ul>";

    return $nav;
}

function createMountainList($mountains){
    $peakList = "<ul>";
    foreach($mountains as $mountain){
        $peakList .= '<li><a href=index.php/?action=peak&id='.$mountain['ID'].'>'.$mountain['PeakName'].'</a></li>';
    }
    $peakList .= "</ul>";

    return $peakList;
}