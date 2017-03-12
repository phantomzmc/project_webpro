<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
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
  <div class="container">
    <center>
      <h2>เพิ่มรายการสินค้า</h2>
      <form action="insert.php" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label for="id">รหัสสินค้า :</label>
                                  <input type="text" name="id" value="">
                              </div>
                              <div class="form-group">
                                  <label for="name">ชื่อสินค้า :</label>
                                  <input type="text" name="name" value="">
                              </div>
                              <div class="form-group">
                                  <label for="price">ราคาสินค้า :</label>
                                  <input type="text" name="price" value="">
                                  <br>
                                  <label for="pic">รูปภาพ :</label>
                                  <input name="file_pic" type="file" />
                                  <input name="MAX_FILE_SIZE" type="hidden" value="100000" />
                              </div>
                              <div class="form-group">
                                  <label for="detail">รายละเอียดสินค้า :</label>
                                  <input type="text" name="detail" value="">
                              </div>
                              <input type="submit" name="" class="btn btn-success" value="ตกลง">
    </center>
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
