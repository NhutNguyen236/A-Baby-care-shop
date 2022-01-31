<?php
    /**
     * Connect to database
     */
    //assign db variables
    $host = "localhost";
    $dbuser = "yuki";
    $dbpassword = "123";
    $dbname = "baby_care";

    //connect to db
    $connection = new mysqli($host, $dbuser, $dbpassword, $dbname);

    //check if the connection to the DB is not OK so end the process
    if ($connection->connect_error) {
        die('Connection lost: ' . $connection->connect_error);
    }
?>