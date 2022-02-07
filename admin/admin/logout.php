<?php
    session_start();
    unset($_SESSION["admindb"]);
    header("Location: /store/ui/login_register.php");
?>