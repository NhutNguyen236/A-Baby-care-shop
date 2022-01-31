<?php 
  ob_start();
  session_start();
  include '../config/connect.php';
  if (!isset($_SESSION['admindb'])) {
    header('location: login.php');
  }else{
    $ad = $_SESSION['admindb'];
  }
  date_default_timezone_set("Asia/Ho_Chi_Minh");
?>


<?php 
	$id_item = $_GET['id_item'];
	mysqli_query($conn,"DELETE FROM item where id_item ='$id_item'");
	header('location: index.php');
?>