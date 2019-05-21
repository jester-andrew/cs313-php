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
        $peakList .= '<li><a href="?action=peak&id='.$mountain['ID'].'">'.$mountain['PeakName'].'</a></li>';
    }
    $peakList .= "</ul>";

    return $peakList;
}

function buildMountainPage($mountain){
    $page = "<ul>";
    $page .= "<li><img src='' alt='$mountain[PeakName]' ></li>";
    $page .= "<li><span class='bold'>Elevation:</span><span>$mountain[Elevation]</span></li>";
    $page .= "<li><span class='bold'>Difficulty:</span><span>$mountain[Dificulty]</span></li>";
    $page .= "<li><p>$mountain[Info]</p></li>";
    $page .= "<li><a href='$mountain[Link]'>More Info at 14ers.com</a></li>";
    $page .= "</ul>";

    return $page;
}