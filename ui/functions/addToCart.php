<?php
    // get current username info
    include($_SERVER['DOCUMENT_ROOT']."/store/ui/controller/getCustomer.php");

    if (isset($_GET['action'])) {
        switch($_GET['action']){
            case "add":
                $item_id = $_GET['item_id'];
                $customer_id = $row['customer_id'];

                if (!$erors) {
                    $sql = "INSERT INTO cart(id_item,customer_id,id_cart) VALUES('$item_id','$customer_id',null)";
                    if ($connection->query($sql) === true) {
                        echo "New record created successfully";
                        header("location: ./cart.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . $connection->error;
                        $connection->close();
                    }
                }
        }
        
    }
?>