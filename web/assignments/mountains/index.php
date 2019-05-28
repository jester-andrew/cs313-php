<?php
session_start();

require_once './databaseConnector.php';
require_once './model.php';
require_once './functions.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
 $action = filter_input(INPUT_GET, 'action');
}

if(!isset($_SESSION['ranges'])){
    $ranges = getRanges();
    $_SESSION['ranges'] = $ranges;
}

$nav = createNavigation($_SESSION['ranges']);

switch ($action){
    case "sign-in-process":
    echo "sign-up-process";
    include './views/sign-in.php';
    exit;
    break;

    case "sign-in":
    include './views/site-update.php';
    exit;
    break;

    case "sign-up-process":
    echo "sign-up-process";
    include './views/sign-in.php';
    exit;
    break;

    case "sign-up":
    include './views/sign-up.php';
    exit;
    break;

    case "peak":
    $peakId = filter_input(INPUT_GET, 'id');
    $peak = getMountainById($peakId);
    $page = buildMountainPage($peak);
    include './views/peak.php';
    break;

    case "range":
    $rangeID = filter_input(INPUT_GET, 'id');
    $mountains = getMountainsByRangeID($rangeID);
    $peakList = createMountainList($mountains);
    include './views/range.php';
    exit;
    break;

    default:
        include './views/home.php';
        exit;
    break;
}