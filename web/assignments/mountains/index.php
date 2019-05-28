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

    case "add-content":
    include './views/new-content.php';
    exit;
    break;

    case "sign-in-process":
    $user = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    if(empty($user) || empty($password)){
        $message = "Please make sure to fill out all fields.";
        include './views/sign-in.php';
        exit;
    }

    $user = getUser($user);
    $same = password_verify($password, $user['Password']);
    unset($user['Password']);

    if($same){
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $user;
        include './views/site-update.php';
        exit;
    }
    
    $message = "Wrong username or Password.";
    include './views/sign-in.php';
    exit;
    break;

    case "sign-in":
    include './views/sign-in.php';
    exit;
    break;

    case "sign-up-process":
    $user = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    if(empty($user) || empty($password)){
        $message = "Please make sure to fill out all fields.";
        include './views/sign-up.php';
        exit;
    }

    $hashdpw = password_hash($password, PASSWORD_DEFAULT);
    try{
        $success = addUser($user, $hashdpw);
    }catch(Exception $ex){
        $message = "That Username has been taken please select another.";
        include './views/sign-up.php';
        exit;
    }

    if($success){
        $message = "Your account has been set up!";
        include './views/sign-in.php';
        exit;
    }else{
        $message = "Something went wrong setting up your account. Please try again.";
        include './views/sign-up.php';
        exit;
    }
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