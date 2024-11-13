<?php

header('Content-Type: application/json'); //sets content type
header('Access-Control-Allow-Origin: *'); //Allows cross origin access

include "database.php"; //adds database connection

$sql = "SELECT * FROM cars"; //store string for sql query in a variable

$rs = $db->query($sql); //run the query on the db

echo(json_encode($rs->fetchAll()));

?>