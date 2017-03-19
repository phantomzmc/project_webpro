<?php session_start();

  unset($_SESSION['sess_adminid']);
  session_destroy();
  header('Location:login.php')
?>
