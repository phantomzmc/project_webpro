<?php session_start();
  include 'connect.php';
  $username_log = $_POST['username_log'];
  $password_log = $_POST['password_log'];
  $sql ="select * from $tbname2 where admin_user='$username_log' and admin_pass='$password_log'";

  $dbquery = $conn->query($sql);


  if($dbquery->num_rows ==1){

    $_SESSION['sess_adminid'] = session_id();

      include "showproduct.php"; //ไปไปตามหน้าที่คุณต้องการ
  }
  else {
    $code_error="<BR>
    <FONT COLOR=\"red\">ข้อมูลที่คุณกรอกไม่ถูกต้อง กรุณา Login ใหม่อีกครั้ง</FONT>";
    $_SESSION['sess_adminid']= session_id();
    header("location: login.php");
}

 ?>
