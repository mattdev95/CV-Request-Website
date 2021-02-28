<?php

error_reporting( error_reporting() & ~E_NOTICE );

    //db.php
    $db_database = "docker_php";
   
    $db_connection = new mysqli('db', 'root', 'password', "$db_database");
    // Check connection
    if ($db_connection->connect_error) {
        die("Connection failed: " . $db_connection->connect_error);
    }
    $db = mysqli_select_db($db_connection, $db_database)
        or die ("Error - Could not open database");
?>
