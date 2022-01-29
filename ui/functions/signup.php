<?php
    // connect to openDatabase
    require "database.php";

    //assgin variables by using POST method
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (!empty($firstname) && !empty($lastname) && !empty($username) && !empty($password)) {
        $sql = "insert into user(firstname,lastname,username,pass) 
            values('$firstname','$lastname','$username','$password')";

        if ($connection->query($sql) === true) {
            echo "User added";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
            $connection->close();
        }
    } else {
        echo "Something is not right or you have not fill all of the fields";
        die();
    }
?>
