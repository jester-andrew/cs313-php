<?php
/********************************************************
 * This function allows us to connect to a database
 ********************************************************/

function dbConnect(){
    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);
  
    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"],'/');
    
    // Create the actual connection object and assign it to a variable
    try {
        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        return $db;
        //echo 'sucess';
    } catch(PDOException $e) {
        //echo 'failed: '. $e->getMessage();
       echo'An error occured while connecting to the database ';
    exit;
    }
    
    }
