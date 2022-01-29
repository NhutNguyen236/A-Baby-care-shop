<?php
    require('database.php');

    //assgin variables by using POST method
    $username = $_POST['username'];    
    $fullname = $_POST['fullname'];        
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Message to inform what error should be
    $message = "";

    // check if user is here or not so we can add new user with no overlapping situation
    $user_check_query = "SELECT * FROM customer WHERE `username`='$username' OR `email`='$email' LIMIT 1";
    $result = mysqli_query($connection, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['username'] === $username) {
            $message = "Username already exists" ;
            echo $message;
        }

        else if ($user['email'] === $email) {
            $message = "Email already exists";
            echo $message;
        }
    }

    else{
        $sql = "INSERT INTO `customer` (`customer_id`, `username`, `password`, `full_name`, `email`) 
        VALUES (NULL, '$username', '$password', '$fullname', '$email');";
                
        if($connection->query($sql) === true){
            echo "New record created successfully";
        }
        else{
            echo "Error: " . $sql . "<br>" . $connection->error;
            $connection->close();
        }
    }

?>