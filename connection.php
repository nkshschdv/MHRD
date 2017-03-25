<?php
 $m=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($m,"hack");
 mysqli_query($m,"insert into try values('','2017-3-4')");
?>