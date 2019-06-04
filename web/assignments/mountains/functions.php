<?php

function createNavigation($ranges){
    $nav = "<ul>";
    $nav .= '<li><a href="/assignments/mountains/index.php">Home</a></li>';
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
    $page .= "<li><img src='$mountain[imgpath]' alt='$mountain[PeakName]' id='peakimg'></li>";
    $page .= "<li id='small'>(Image from 14ers.com)</li>";
    $page .= "<li><span class='bold'>Elevation:</span> <span>$mountain[Elevation] Feet</span></li>";
    $page .= "<li><span class='bold'>Difficulty:</span> <span>Class $mountain[Dificulty]</span></li>";
    $page .= "<li><p>$mountain[Info] (Info from Wikipedia)</p></li>";
    $page .= "<li><a href='$mountain[Link]'>More Info at 14ers.com</a></li>";
    $page .= "</ul>";

    return $page;
}

function createRangeSelect(){
    $select = '<select class="range-select" name="rangeid">';
    $select .= '<option value="" disabled selected>Pick a Range</option>';
    foreach($_SESSION['ranges'] as $range){
        $select .= '<option value="'.$range['ID'].'" >'.$range['RangeName'].'</option>';
    }
    $select .= '</select>';
    return $select;
}

function selectAdmin($potentialAdmins){

    $select = '<select class="admin-select" name="adminid">';
    $select .= '<option value="" disabled selected>Pick a User</option>';
    foreach($potentialAdmins as $admin){
        $select .= '<option value="'.$admin['ID'].'" >'.$admin['UserName'].'</option>';
    }
    $select .= '</select>';
    return $select;

}

function getPeakLinks($peaks){
    $links = "<ul>";
    foreach($peaks as $peak){
        $links .= "<li><a href='/assignments/mountains/?action=update-peak&id=$peak[ID]' >Edit $peak[PeakName]</a></a>";
    }
    $links .= "<ul>";

    return $links;

}

function createComments($comments){
    $commentDisp = '<div>';
    foreach($comments as $comment){
        
    }
    $commentDisp = '</div>';
}