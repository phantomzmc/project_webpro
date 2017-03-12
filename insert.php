<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>เพิ่มข้อมูลสำเร็จ</title>
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
  <body>

<?php
include "connect.php";

$id = (isset($_POST['id']))?$_POST['id']:'';
$name = (isset($_POST['name'])) ? $_POST['name'] : '';
$price = (isset($_POST['price'])) ? $_POST['price'] : '';
$detail = (isset($_POST['detail'])) ? $_POST['detail'] : '';
$file_pic=$_FILES['file_pic']['tmp_name'];
$file_pic_name=$_FILES['file_pic']['name'];
$file_pic_size=$_FILES['file_pic']['size'];
$file_pic_type=$_FILES['file_pic']['type'];
/*if($name=="") {
		echo "<h3>error : กรุณาป้อนชื่อ</h3>";
		exit();
}*/
echo "gdgdfgdf $file_pic";
$sql = "INSERT INTO tbcoffee(id,name,price,detail)
VALUES (NULL, '$name', '$price','$detail')";

$result=$conn->query($sql);
if($file_pic) {
		$array_last=explode(".",$file_pic_name);
		$c=count($array_last) -1;
		$lastname=strtolower($array_last[$c]);

		if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg") {
			$sql2="select max(id) from tbcoffee";

			$result2=mysqli_query($conn,$sql2);
			$row=mysqli_fetch_array($result2,MYSQLI_NUM);
			$photoname=$row[0].".".$lastname;
			copy($file_pic,"images/".$photoname);
      echo "12345678 $photoname";
			$sql3="update tbcoffee set img='$photoname'  where  id='$row[0]' ";
			$result3=$conn->query($sql3);

		}
		unlink($file_pic);
}

echo "<h3><center>เพิ่มรายการเรียบร้อยแล้ว</center></h3>";
$conn->close();
?>
  <button type="button" class="btn btn-link btn-lg btn-block"><a href="showproduct.php">เเสดงรายการสินค้า</a></button>
  </body>
</html>
