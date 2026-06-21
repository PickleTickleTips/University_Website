<?php
    $databaseServer = "localhost";
    $user = "root";
    $password = "";
    $dbName = "userdb";
    $userconnection = "";

    try{
        $userconnection = mysqli_connect($databaseServer, $user, $password, $dbName);

    }
    catch(mysqli_sql_exception){
        echo"Could not connect to Database";
    }

    if($userconnection){
        echo"Connection to user database established";
    }
?>