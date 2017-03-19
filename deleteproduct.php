<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ลบรายการเสร็จสิ้น</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style media="screen">
      .container{
        color: white;
      }
    </style>
  </head>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="index.php">CoffeeShop</a>
  </div>
  <ul class="nav navbar-nav">
    <li class="active"><a href="showproduct.php">เเสดงรายการสินค้า</a></li>
    <li><a href="insert_product.php" target="_self">เพิ่มรายการสินค้า</a></li>
    <li><a href="login.php" target="_parent">Logout</a></li>
  </ul>
  </div>
  </nav>
  <body>
    <div class="container">
      <?php
      include "connect.php";
      $ii=$_GET['id'];
      // sql to delete a record
      $sql = "DELETE FROM tbcoffee WHERE id='$ii'";

      if ($conn->query($sql) === TRUE) {
          echo "<center>
          <h3>ลบรายการเสร็จสิ้น</h3>
          </center>";
      } else {
          echo "Error deleting record: " . $conn->error;
      }

      $conn->close();
      ?>
      <a href="showproduct.php" class="btn btn-info btn-block" role="button">เเสดงสินค้าทั้งหมด</a>

    </div>
  </body>
</html>
