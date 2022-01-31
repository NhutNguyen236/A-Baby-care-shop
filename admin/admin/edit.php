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

	if (isset($_GET['id_item'])) { //điều kiện lấy mã lớp
        //lấy mã lớp
		$id_item = $_GET['id_item'];
    // hiển thị dữ liệu lớp
    $dm = mysqli_query($conn,"SELECT * FROM item where id_item='$id_item'");
	#$dm_hienthi = mysqli_fetch_assoc($dm);
    $dm_hienthi = mysqli_fetch_array($dm, MYSQLI_ASSOC);

		if (isset($_POST['btnSave'])) {
            $name_item = $_POST['name_item'];
            $cost = $_POST['cost'];
            
            // sửa dữ liệu của bảng lớp học
            $them_moi = mysqli_query($conn,"UPDATE item set name_item ='$name_item',cost ='$cost' where id_item='$id_item'");

                if($them_moi){
                    header('location: index.php'); // trả về file index nếu sửa thành công
                }else{
                    echo "Sửa thất bại";
                }
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ADMIN PAGE</title>
	
	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<div class="row">
	<div class="col-4"></div>
	<div class="col-4">
	  	<div class="container"  style="margin-top: 20px">
	        <div class="card text-dark" style="max-width: 100%;">
		        <div class="card-header">SỬA THÔNG TIN</div>
                <div class="card-body">
                    <form action="" method="POST" class="form-group">
                        
                        <div class="form-group">
                            <label>NAME ITEM</label>
                            <input class="form-control" name="name_item" value="<?php echo $dm_hienthi['name_item'] ?>">		
                        </div>
                        <div class="form-group">
                            <label>COST ITEM</label>
                            <input class="form-control" name="cost" value="<?php echo $dm_hienthi['cost'] ?>">		
                        </div>

                        <button type="submit" name="btnSave" class="btn btn-primary" style="padding-left: 30px;padding-right: 30px;">Chỉnh sửa</button>
                        <a href="index.php" class="btn btn-outline-info"  style="padding-left: 30px;padding-right: 30px;">Không sửa</a>
                    </form>
                </div>
	        </div>
        </div>
	</div>
</div>
