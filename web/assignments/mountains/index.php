<?php
session_start();

require_once './databaseConnector.php';
require_once './model.php';
require_once './functions.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
 $action = filter_input(INPUT_GET, 'action');
}

switch ($action){
    case "range":
    $rangeID = filter_input(INPUT_GET, 'id');
    $mountains = getMountainsByRangeID($rangeID);
    var_dump($mountains);
    break;

    default:
        if(!isset($_SESSION['ranges'])){
            $ranges = getRanges();
            $_SESSION['ranges'] = $ranges;
        }

        $nav = createNavigation($_SESSION['ranges']);

        echo $nav;

        include './views/home.php';
        exit;
    break;
}