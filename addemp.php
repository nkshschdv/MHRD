<html>
<head>
<title>Employeee Details</title>
<link rel="stylesheet"type="text/css"href="css/addemp.css">
</head>
<script>
	function hello1()
	{
		var a=document.getElementById("first").value;
		var pattern=/^[a-z]{2,30}$/;
				if(!pattern.test(a))
		{
			document.getElementById("error1").innerHTML="Invalid";
		}
		else
		{
			document.getElementById("error1").innerHTML="";
		}
	}
	function hello2()
	{
		var b=document.getElementById("second").value;
		var pattern=/^[a-z]{2,10}[0-9]{1,5}[@][a-z]{1,10}[.][a-z]{1,5}$/;
				if(!pattern.test(b))
		{
			document.getElementById("error2").innerHTML="Invalid";
		}
		else
		{
			document.getElementById("error2").innerHTML="";
		}
	}
	function hello3()
	{
		var c=document.getElementById("third").value;
		var pattern=/^[a-z]{2,50}$/;
				if(!pattern.test(c))
		{
			document.getElementById("error3").innerHTML="Invalid";
		}
		else
		{
			document.getElementById("error3").innerHTML="";
		}
	}
</script>
<body>
	<div class="box">
		<div class="outer_page">
			<div class="text"><h1>ADD EMPLOYEE</h1></div><img src="images/emp.jpg"/>
			<div class="field">Mandatory fields(*)</div>

			<form method="post">
			<h1 class="one">Name </h1>
				<input type="text" name="name"placeholder="Name"required="required"class="user1"id="first"onblur="hello1()"><div class="imp1">*</div><span id="error1"></span>
			
			<h1 class="two">E-Mail</h1>
				<input type="email" name="email"placeholder="Email"required="required"class="user2"id="second"onblur="hello2()"><div class="imp2">*</div><span id="error2"></span>
			
			<h1 class="three">Address</h1>
				<input type="textarea"name="address"placeholder="Address"required="required"class="user3"id="third"onblur="hello3()"><div class="imp2">*</div><span id="error3"></span>
			
			<h1 class="four">DOB</h1>
				<input type="date"name="dob"required="required"class="user4"><div class="imp2">*</div>
			
			<h1 class="five">Designation</h1>
				<select class="user5" name="desig" id="fourth">
				<?php
				include("connection.php");
				$query=mysqli_query($m,"select * from designation");
				while($row=mysqli_fetch_array($query))
				{
				  $id=$row['d_id'];
				  $n=$row['d_name'];
				 ?>
				<option value="<?php echo $id;?>"><?php echo $n; ?></option>
				  <?php
				}
				?>
				</select>
			<div class="imp2">*</div>

			<h1 class="six">Department ID</h1>
			    <select class="user6" name="dept">
			<?php
				$query=mysqli_query($m,"select * from dept");
				while($row=mysqli_fetch_array($query))
				{
				  $idt=$row['dept_id'];
				  $nr=$row['dept_name'];
				 ?>
				 <option value="<?php echo $idt;?>"><?php echo $nr; ?></option>
				  <?php
				}
				?>
				</select>
				<div class="imp2">*</div>

			<h1 class="seven">Photograph</h1>
				<input type="file"class="user7" name="photo">
			
			<h1 class="eight">Male</h1><input type="radio"name="gender"required="required"class="user8"value="male">
			
			<h1 class="nine">Female</h1><input type="radio"name="gender"required="required"class="user9"value="female"><div class="imp3">*</div>

			<h1 class="ten">Join Date</h1>
				<input type="date"placeholder="Username"required="required" name="jdate"class="user10"><div class="imp2">*</div>

				<input type="submit" class="submit" name="semp">
			</form>
		</div>
	</div>
	<?php
	if(isset($_POST['semp']))
	{
	  echo $_POST['jdate'];
	  include("connection.php");
	  $contactno=2234;
	  mysqli_query($m,"insert into emp values(``,`deepak`,`male`,`1996-08-20`,`kitam`,`2`,`deepak@gmaildotcom`,$contactno,`3`,`2017-2-3`,`photo`,`00`)");
	 //$memp=mysqli_query($m,'insert into emp values(``,$_POST[`name`],$_POST[`gender`],$_POST[`dob`],$_POST[`address`],$_POST[`dept`],$_POST[`email`],$contactno,$_POST[`desig`],$_POST[`jdate`],$_POST[`photo`],`1`)');
	}
	?>
</body>
</html>



