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
    case "add-comment":
    $comment = filter_input(INPUT_POST, 'comment');
    $userId = filter_input(INPUT_POST, 'user-id');
    $peakId = filter_input(INPUT_POST, 'peak-id');

    if(empty($comment)){
        $message = "Please write a message before submitting.";
        $peak = getMountainById($peakId);
        $page = buildMountainPage($peak);
        header("Location: /assignments/mountains/?action=peak&id=".$peakId);
        exit;
    }

    $success = insertComment($userId, $peakId, $comment);

    if($success){
        header("Location: /assignments/mountains/?action=peak&id=".$peakId);
        exit;
    }

    $message = "Having trouble inserting your comment. Please try again later.";
    $peak = getMountainById($peakId);
    $page = buildMountainPage($peak);
    header("Location: /assignments/mountains/?action=peak&id=".$peakId);
    exit;



    break;

    case "edit-peak-process":
    $peakId = filter_input(INPUT_POST, 'peakId');
    $rangeId = filter_input(INPUT_POST, 'rangeid');
    $peakName = filter_input(INPUT_POST, 'peak-name');
    $elevation = filter_input(INPUT_POST, 'elevation');
    $class = filter_input(INPUT_POST, 'class');
    $link = filter_input(INPUT_POST, 'link');
    $imgpath = filter_input(INPUT_POST, 'img-path');
    $info = filter_input(INPUT_POST, 'info');
    if(empty($rangeId) || empty($peakName) || empty($elevation) || empty($class) || empty($link) || empty($imgpath) || empty($info)){
        $message = "Make sure all feilds are filled in.";
        include './views/edit-peak.php';
        exit;
    }

    $success = updateMountainPeak($rangeId, $peakName, $elevation, $class, $link, $imgpath, $info, $peakId);

    if(!$success){
        $message = "An error occured and $peakName could not be updated.";
        include './views/edit-peak';
        exit; 
    }

    $message = "$peakName was updated successfully!";

    $peaks = getAllMountains();
    $peakLinks = getPeakLinks($peaks);

    $selectRange = createRangeSelect();
    include './views/site-update.php';
    exit;
    
    break;

    case "update-peak":
    $id = filter_input(INPUT_GET, 'id');
    $peak = getMountainById($id);

    $ranges = getRanges();
    
    $select = '<select class="range-select" name="rangeid">';
    $select .= '<option value="" disabled selected>Pick a Range</option>';
    foreach($ranges as $range){
        if($range['ID'] == $peak['RangeID']){
            $select .= '<option value="'.$range['ID'].'" selected >'.$range['RangeName'].'</option>';
        }else{
            $select .= '<option value="'.$range['ID'].'" >'.$range['RangeName'].'</option>';
        }
    }
        $select .= '</select>';

    include './views/edit-peak.php';
    exit;
    
    break;

    case "add-admin-process":

    $potentialAdmins = getUsers();
    $selectBox = selectAdmin($potentialAdmins);
    
    $userId = filter_input(INPUT_POST, 'adminid');
    if(empty($userId)){
        $message = 'No user selected.';
        include './views/add-admin.php';
        exit;
    }

    $success = updateUserLevel($userId);

    if($success){
        $message = 'You have added admin privleges for that user! Have them sign in to use admin priveleges.';
        include './views/add-admin.php';
        exit;
    }else{
        $message = 'An error occured please try again.';
        include './views/add-admin.php';
        exit; 
    }
    break;

    case "add-admin":
    $potentialAdmins = getUsers();
    $selectBox = selectAdmin($potentialAdmins);
    include './views/add-admin.php';
    exit;
    break;

    case "sign-out":
    session_destroy();
    header("Location: /assignments/mountains/");
    exit;
    break;

    case "account":
    $peaks = getAllMountains();
    $peakLinks = getPeakLinks($peaks);
    include './views/site-update.php';
    exit;
    break;

    case "add-peak":
    $rangeId = filter_input(INPUT_POST, 'rangeid');
    $peakName = filter_input(INPUT_POST, 'peak-name');
    $elevation = filter_input(INPUT_POST, 'elevation');
    $class = filter_input(INPUT_POST, 'class');
    $link = filter_input(INPUT_POST, 'link');
    $imgpath = filter_input(INPUT_POST, 'img-path');
    $info = filter_input(INPUT_POST, 'info');
    if(empty($rangeId) || empty($peakName) || empty($elevation) || empty($class) || empty($link) || empty($imgpath) || empty($info)){
        $message = "Make sure all feilds are filled in.";
        include './views/new-content.php';
        exit;
    }

    $success = insertMountainPeak($rangeId, $peakName, $elevation, $class, $link, $imgpath, $info);

    if(!$success){
        $message = "An error occured and the peak could not be inserted into the database.";
        include './views/new-content.php';
        exit; 
    }

    $message = "The new mountain peak was inserted successfully!";
    $selectRange = createRangeSelect();
    include './views/new-content.php';
    exit;
    break;

    case "add-content":
    $selectRange = createRangeSelect();
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

        //get peaklinks
        $peaks = getAllMountains();

        $peakLinks = getPeakLinks($peaks);

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

    $comments = getCommentsByMountainID($peakId);
    $commentDsiplay = createComments($comments);

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