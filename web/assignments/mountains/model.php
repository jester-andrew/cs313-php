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

    return $mountains;
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
