<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>เเสดงสินค้า</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

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
  <body>
    <div class="container">


    <?php
include "connect.php";

$sql = "SELECT id,name,price,detail,img FROM tbcoffee";
$result = $conn->query($sql);
echo "<table class='table table-striped'>";
if ($result->num_rows > 0) {
   echo "<tr>
          <th>รหัสสินค้า</th>
          <th>ชื่อสินค้า</th>
          <th>ราคาสินค้า</th>
          <th>รายละเอียด</th>
          <th>รูปภาพ</th>
          <th>
          เเก้ไขรายการ
          </th>
          <th>
          ลบรายการข้อมูล
          </th>
        </tr>";
 // output data of each row
    while($row = $result->fetch_assoc()) {
    $jj=$row["id"];
?>
     <tr>
         <td><?=$row["id"]?></td>
         <td><?=$row["name"]?></td>
         <td><?=$row["price"]?></td>
         <td><?=$row["detail"]?></td>
		 <?php $mm=$row["img"];?>

		 <td><img src="images/<?=$mm?>"></td>
        <td><a href="editproduct.php?id=<?=$jj?>">เเก้ไขข้อมูล</a></td>
          <td><a href="deleteproduct.php?id=<?=$jj?>">ลบข้อมูล</a></td>
   </tr>
<?php  }
} else {
    echo "0 results";
}
  echo "</table>";
$conn->close();
?>
</div>
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
