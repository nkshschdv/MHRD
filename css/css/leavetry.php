<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/leavereq.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h2> Leave Request form</h2>
<form name="leave" method="post">
<input type="radio" name="lf" value="1" onclick="return fn()"/> One day leave <input type="radio" name="lf" value="2" onclick="fn1()"/>Multiple days
</form>

<span id="odl">
</span>
<script type="text/javascript">
function fn()
{
   document.getElementById("odl").innerHTML="<form>date from::<input type='text'><br><br>TO <input type='text'>"
}

function fn1()
{
   document.getElementById("odl").innerHTML="uuii y7ybg ybgy  ygy "
}

</script>
</body>
</html>
