<?php

    //Connect to database

    //Store connection related strings in variables
    $dsn = "mysql:host=localhost;dbname=ozarktechwebdev_cars";
    $username = "ozarktechwebdev_eric";
    $password = "1qaz2wsx!QAZ@WSX";

    //Try-catch connect to db, error message on fail
    try{
        $db = new PDO($dsn, $username, $password);
        //echo("connection to database worked");
    } catch (PDOException $e)
    {
        $error_message = $e->getMessage();
        echo("<p>Error: $error_message");
    }

?>
