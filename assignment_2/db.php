<?php

error_reporting( error_reporting() & ~E_NOTICE );

    //db.php
    $db_location = "localhost";
    $db_username = "";
    $db_password = "";
    $db_database = "";
    $db_connection = new mysqli("$db_location","$db_username","$db_password");
    // Check connection
    if ($db_connection->connect_error) {
        die("Connection failed: " . $db_connection->connect_error);
    }
    $db = mysqli_select_db($db_connection, $db_database)
        or die ("Error - Could not open database");
?>
