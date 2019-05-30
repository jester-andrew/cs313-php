<?php
/***********************************************************
 * This file contains all the data access functions
 ***********************************************************/

//user data 
function getUserByEmail($userName){
    $db = dbConnect();
    $sql = 'select * from public."Users" where "UserName" = :userName';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':userName', $userName, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch();
    $stmt->closeCursor();

    return $user;
}

//range data
function getRanges(){
    $db = dbConnect();
    $sql = 'select * from public."MountainRanges"';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $ranges = $stmt->fetchAll();
    $stmt->closeCursor();

    return $ranges;
}

//mountain data
 function getMountainsByRangeID($rangeID){
    $db = dbConnect();
    $sql = 'select * from public."Mountains" where "RangeID" = :id';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $rangeID, PDO::PARAM_STR);
    $stmt->execute();
    $mountains = $stmt->fetchAll();
    $stmt->closeCursor();

    return $mountains;
}

function getMountainById($id){
    $db = dbConnect();
    $sql = 'select * from public."Mountains" where "ID" = :id';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_STR);
    $stmt->execute();
    $mountain = $stmt->fetch();
    $stmt->closeCursor();
    return $mountain;
}

//comments
function getCommentsByMountainID($id){
    $db = dbConnect();
    $sql = 'SELECT c."Comment", u."UserName" FROM public."Comments" c INNER JOIN public."Users" u ON c."UserID" = u."ID" WHERE c."PeakID" = :id';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_STR);
    $stmt->execute();
    $comments = $stmt->fetchAll();
    $stmt->closeCursor();

    return $comments;
}

function addUser($user, $pw){
    $db = dbConnect();
    $sql = 'INSERT INTO public."Users"("UserName", "Password", "UserLevel") VALUES (:user, :pw, 1)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':user', $user, PDO::PARAM_STR);
    $stmt->bindValue(':pw', $pw, PDO::PARAM_STR);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

function getUser($user){
    $db = dbConnect();
    $sql = 'SELECT * FROM "Users" WHERE "UserName" = :user;';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':user', $user, PDO::PARAM_STR);
    $stmt->execute();
    $rUser = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    
    return $rUser;
}

function insertMountainPeak($rangeId, $peakName, $elevation, $class, $link, $imgpath, $info){
    $db = dbConnect();
    $sql = 'insert into public."Mountains" ("RangeID", "PeakName", "Elevation", "Dificulty", "Info", "Link", "imgpath") values (:id, :name, :elevation, :class, :info, :link, :path)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $rangeId, PDO::PARAM_STR);
    $stmt->bindValue(':name', $peakName, PDO::PARAM_STR);
    $stmt->bindValue(':elevation', $elevation, PDO::PARAM_STR);
    $stmt->bindValue(':class', $class, PDO::PARAM_STR);
    $stmt->bindValue(':link', $link, PDO::PARAM_STR);
    $stmt->bindValue(':path', $imgpath, PDO::PARAM_STR);
    $stmt->bindValue(':info', $info, PDO::PARAM_STR);

    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}  