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
    <li><a href="index.php" target="_parent">Logout</a></li>
  </ul>
  </div>
  </nav>
  </head>
  <body>




<?php

include "connect.php";
$ii=$_GET['id'];
$sql="select * from tbcoffee where id='$ii' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    $name=$row["name"];
    $price=$row["price"];
}}
?>
<div class="container">
  <form method="post" >
    <div class="form-group">
        <label for="name">ชื่อสินค้า :</label>
        <input type="text" name="name" value=<?=$name?>>
    </div>
    <div class="form-group">
        <label for="price">ราคาสินค้า :</label>
        <input type="text" name="price" value=<?=$price?>>
        <br>
        <label for="pic">รูปภาพ :</label>
        <input name="file_pic" type="file" />
        <input name="MAX_FILE_SIZE" type="hidden" value="100000" />
    </div>

    <button type="submit" value="" name="ok" class="btn btn-success">ตกลง</button>
    <button type="cancel" name="" value="cancle" class="btn btn-danger">ยกเลิก</button>
  </form>
<?php
if($_POST['ok']!=null) {

$name=(isset($_POST['name'])) ? $_POST['name'] :'';
$price=(isset($_POST['price'])) ? $_POST['price'] :'';
$sql2 = "UPDATE tbcoffee SET name='$name',price='$price' WHERE id='$ii'";
if ($conn->query($sql2) === TRUE) {
    echo "เเก้ไขข้อมูลเสร็จสิ้น";
	echo "<a href='showproduct.php'>แสดงข้อมูล</a>";
} else {       echo "Error updating record: ".$conn->error;   }
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
