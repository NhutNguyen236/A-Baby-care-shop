<?php
ob_start();
session_start();
include '../config/connect.php';
if (!isset($_SESSION['admindb'])) {
  header('location: /store/ui/login_register.php');
} else {
  $ad = $_SESSION['admindb'];
}
date_default_timezone_set("Asia/Ho_Chi_Minh");
?>

<?php
//add dữ liệu
$erors = [];
if (isset($_POST['id_item'])) {
  $id_item = $_POST['id_item'];
  $name_item = $_POST['name_item'];
  $cost = $_POST['cost'];

  $sql = "INSERT INTO item (id_item, name_item, cost) VALUES ('$id_item','$name_item','$cost')";
  if (mysqli_query($conn, $sql)) {
    header('location: index.php');
  } else {
    $erors['Loi_them_moi'] = 'Thêm mới không thành công';
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

<body>
  <div class="container">
    <h1><a href="https://learncodeweb.com/php/php-crud-in-bootstrap-4-with-search-functionality/">BABY ITEM SHOP</a></h1>
    <div class="card">
      <div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>ADMIN PAGE</strong></div>

      <div class="card-body">
        <form action="" method="POST">
          <div class="row">
            <div class="col-sm-3">
              <label for="">ID ITEM</label>
              <input type="text" class="form-control" name="id_item" placeholder="id_item" required>
            </div>

            <div class="col-sm-3">
              <label for="">MÃ LỚP</label>
              <input type="text" class="form-control" name="name_item" placeholder="NAME ITEM">
            </div>

            <div class="col-sm-3">
              <label for="">COST</label>
              <input type="text" class="form-control" name="cost" placeholder="cost">
            </div>

            <div class="col-sm-3">
              <label for="">ADD PRODUCTS</label><br>
              <button type="submit" class="btn btn-primary">ADD PRODUCT</button>
            </div>
        </form>
      </div>
    </div>

    <?php
    $bangdsgv = mysqli_query($conn, "SELECT * FROM item");
    ?>

    <div class="container" style="margin-top: 20px">
      <div class="card text-dark" style="max-width: 100%;">
        <div class="card-header bg-gray" style="color: BLACK"><strong>PRODUCTS</strong> </div>
        <div class="card-body">
          <table class="table table-bordered table-inverse table-hover">
            <thead>
              <tr>
                <th>ID ITEM</th>
                <th>NAME ITEM</th>
                <th>COST ITEM</th>
                <th>ACTION</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($bangdsgv as $dsnv) : ?>
                <tr>
                  <td><?php echo $dsnv['id_item'] ?></td>
                  <td><?php echo $dsnv['name_item'] ?></td>
                  <td><?php echo $dsnv['cost'] ?></td>
                  <td ALIGN="center"><a href="edit.php?id_item=<?php echo $dsnv['id_item'] ?>" class="text-danger">EDIT</a> |
                    <a href="delete.php?id_item=<?php echo $dsnv['id_item'] ?>" class="text-danger">DELETE</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

</body>

</html>