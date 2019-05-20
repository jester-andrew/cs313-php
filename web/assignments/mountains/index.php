<?php
session_start();

require_once './databaseConnector.php';
require_once './model.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
 $action = filter_input(INPUT_GET, 'action');
}

switch ($action){
    case "home":
    break;

    default:
        $ranges = getRanges();
        var_dump( $ranges );
        include './view/home.php';
        exit;
    break;
}