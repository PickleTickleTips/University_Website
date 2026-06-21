<?php
    $databaseServer = "localhost";
    $user = "root";
    $password = "";
    $dbName = "productdb";
    $connection = "";

    try{
        $connection = mysqli_connect($databaseServer, $user, $password, $dbName);

    }
    catch(mysqli_sql_exception){
        echo"Could not connect to Database";
    }

    if($connection){
        echo"Connection to database established";
    }
?>