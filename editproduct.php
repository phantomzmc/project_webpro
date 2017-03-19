<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
  </head>
  <body>
    <h2 align="center">เเก้ไขรายการสินค้า</h2>

<?php

include "connect.php";
$ii=$_GET['id'];
$sql="select * from tbcoffee where id='$ii' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    $n_name=$row["name"];
    $p_price=$row["price"];
    $d_detail=$row["detail"];
}}
?>
<div class="container">
  <form method="post" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="col-sm-2">ชื่อสินค้า :</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control" value=<?=$n_name?>>
        </div>
    </div>
    <div class="form-group">
        <label for="price" class="col-sm-2">ราคาสินค้า :</label>
        <div class="col-sm-10">
          <input type="text" name="price" class="form-control" value=<?=$p_price?>>
        </div>
      </div>
        <div class="form-group">
          <label for="pic" class="col-sm-2">รูปภาพ :</label>
          <div class="col-sm-4">
            <input name="file_pic" type="file" />
            <input name="MAX_FILE_SIZE" type="hidden" value="100000" />
          </div>
          <div class="col-sm-6">
          </div>
        </div>
        <div class="form-group">
          <label for="detail" class="col-sm-2">รายละเอียด :</label>
          <div class="col-sm-10">
            <input type="text" name="detail" class="form-control" value=<?=$d_detail?>>
          </div>
        </div>
    </div>
    <div class="col-sm-12">
      <center>
        <button type="submit" value="Ok" name="ok" class="btn btn-success">ตกลง</button>
        <button type="cancel" name="" value="cancle" class="btn btn-danger">ยกเลิก</button>
      </center>

    </div>
  </form>
<?php
if(!empty($_POST['ok'])) {
$name=(isset($_POST['name'])) ? $_POST['name'] :'';
$price=(isset($_POST['price'])) ? $_POST['price'] :'';
$detail=(isset($_POST['detail'])) ? $_POST['detail'] :'';
$sql2 = "UPDATE tbcoffee SET name='$name',price='$price' ,detail='$detail' WHERE id='$ii'";
if ($conn->query($sql2) === TRUE) {
  echo "<div class='alert alert-success'>
    <strong><h3 align='center'>Success! เพิ่มรายการสินค้าสำเร็จ</h3></strong>
  </div>";
}
else {
  echo "Error updating record: ".$conn->error;   }
}
$conn->close();

?>

</div>
<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>


<!-- custom script -->
<script src="assets/script.js"></script>
</body>
</html>
