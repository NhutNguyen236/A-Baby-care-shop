<?php
    include($_SERVER['DOCUMENT_ROOT']."/store/database.php");

    // get all products from openDatabase
    $sql = "SELECT * FROM item";
    $result = $connection->query($sql) or die(mysqli_error($connection));

    // display item on the page
    while ($row = $result->fetch_assoc()) {
        echo $row['classtype']."<br>";
    }

?>