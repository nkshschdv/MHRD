<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/login.css">
</head>
<body>
<div id="al">
<div id="first">
<img src="images/grn.png " />
<h2>Member Login</h2>
<span id="display" style="color:#FF0000; text-align:center; margin-left:100px;"></span>
<table align="center">
<form name="d" method="post" enctype="multipart/form-data">
<tr>
<td><input type="text" name="l1" id="form" required placeholder="Username"/></td></tr>
<tr><td><input type="password" name="l2" id="form" required placeholder="Password"/></td></tr>
<tr><td><input type="submit" value="LOGIN" name="l3" id="login"/></td></tr>
</form>
</table>
</div>
</div>

<?php
if(isset($_POST['l3']))
{
 include("connection.php");
 $count=0;
 $mysqlj=mysqli_query($m,"Select * from admin where username='$_POST[l1]' and password='$_POST[l2]'");
 $count=mysqli_num_rows($mysqlj);
 if($count>=1)
 {
  ?>
  <script type="text/javascript">
  window.location="home.php";
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  document.getElementById("display").innerHTML="Wrong username or password";
  </script>
  <?php
 }
 
}
?>

</body>
</html>
