<?php
    include($_SERVER['DOCUMENT_ROOT']."/store/database.php");

    session_start();
    
    $user_check = $_SESSION['login_user'];
    
    $ses_sql = mysqli_query($connection, "select username from customer where username = '$user_check' ");
    
    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    
    $login_session = $row['username'];
    
    if(!isset($_SESSION['login_user'])){
        header("location: ./login_register.php");
        die();
    }
?>