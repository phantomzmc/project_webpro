<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style media="screen">
    .formlogin{
      color: white;
    }
  </style>
  </head>
  <body background="images/back.jpg">

    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
      <div class="navbar-brand">
        <a href="index.php">CoffeeShop</a>
      </div>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">หน้าเเรก</a> </li>
      <li class="active"><a href="showproduct.php">เเสดงรายการสินค้า</a></li>
      <li><a href="insert_product.php" target="_self">เพิ่มรายการสินค้า</a></li>
    </ul>
    </div>
    </nav>
  <body>
    <div class="container">
      <div class="formlogin">
      <div class="col-sm-12">
      <h2 align="center">Login Admin</h2>
      <form class="" action="check.php" method="post">
        <div class="form-group">
          <label for="user">Username:</label>
            <input type="text" class="form-control" id="usr" name="username_log">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password_log">
          </div>
          <button type="submit" class="btn btn-success btn-block">Login</button>
          </div>
        </div>
  <!-- Modal -->


    </div>
  </div>
      </form>
    </div>

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
