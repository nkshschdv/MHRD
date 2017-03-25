<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript" src="dp/build/SalsaCalendar.min.js"></script>
  <link rel="stylesheet" type="text/css" href="dp/build/SalsaCalendar.min.css" media="all" />
  <link rel="stylesheet" href="css/leavereq.css" />
</head>

<body>
<div id="lrf">
<div id="color">Leave Request Form</h3></div>
<h5> Details Of Leave</h5>
<h6><span id="disdone" style="color:#009900;"></span><span id="disnotdone" style="color:#FF0000;"></span></h6>
<form method="post" enctype="multipart/form-data">
<div>
  <div class="date">
    <h7><strong>Leave Start</strong></h7>

   <br /> <input type="date"
           id="checkin"
           class="salsa-calendar-input"
           autocomplete="off"
           name="Aa"
           value=""
    />
  </div>

  <div class="date">
   <br /><h7><strong> Leave End</strong></h7>

    <span id="nights-no">
      (
      <span class="counter"></span>
      <span class="singular" style="display:none;">night</span>
      <span class="plural" style="display:none;">nights</span>
      )
    </span>

   <br /> <input type="date"
           id="checkout"
           class="salsa-calendar-input"
           autocomplete="off"
           name="Ab"
           value="" />
   


  </div>
 <br /><div id="type"> <h7><strong>Leave Type</strong></h7>
 <br /> 
 <?php
   include("connection.php");
   $ml=mysqli_query($m,"select * from leave_type");
   while($row=mysqli_fetch_array($ml))
   {
     $ii=$row['lt_id'];
     $nm=$row['lt_type_name'];
	 ?>
	 <input type="radio" name="Ac" value="<?php echo $ii;?>" /><?php echo $nm;?>
	 <?php
	// echo date('y-m-d');
   }
 ?>
 <div class="date">
    <br><br><h7><strong>Attachment:(if any)</strong></h7>

   <br /> <input type="file"
           id="checkin"
           class="salsa-calendar-input"
           autocomplete="off"
           name="Ad"
           value=""
    />
  </div>
 
 
  <div>
 <br /><div><h7><strong>Reason</strong></h7><br> <textarea rows="6" cols="40" name="Ae" id="reason" ></textarea>
 </div>
  </div>
  <input type="Submit" name="lsub" value="Submit" id="submit" /> 
</div> 
</div>
<script type="text/javascript">
  var calendar_from = new SalsaCalendar({
    inputId: 'checkin',
    lang: 'en',
    range: {
      min: 'today'
    },
    calendarPosition: 'right',
    fixed: false,
    connectCalendar: true
  });

  var calendar_to = new SalsaCalendar({
    inputId: 'checkout',
    lang: 'en',
    range: {
      min: 'today'
    },
    calendarPosition: 'right',
    fixed: false
  });

  new SalsaCalendar.Connector({
    from: calendar_from,
    to: calendar_to,
    maximumInterval: 21,
    minimumInterval: 1
  });

  new SalsaCalendar.NightsCalculator({
    from: calendar_from,
    to: calendar_to,
    nightsNo: 'nights-no'
  });
 
</script>

<?php
if(isset($_POST['lsub']))
{
 include("connection.php");
 $d=date('y-m-d');
 //echo $d;
  echo $ls=$_POST['Aa'];
 echo $le=$_POST['Ab'];
 //echo $_POST['Aa'];
 $sq='deepak';
 $t=3;
 $dr=mysqli_query($m,"insert into leave values('','3',$d,$d,$d,$sq,$sq,'2','0','0','0')");
 //$dr=mysqli_query($m,'INSERT INTO leave VALUES("",$t,$d,$ls,$le,$_POST["Ae"],$_POST["Ad"],$_POST["Ac"]," "," "," ")');
  // $dr=mysqli_query($m,'insert into leave values(``,`3`,$d,$_POST[`Aa`],$_POST[`Ab`],$_POST[`Ae`],$_POST[`Ad`],$_POST[`Ac`],`0`,``,`0`)');
 if($dr>=1)
 {
  ?>
  <script type="text/javascript">
    document.getElementById("disdone").innerHTML="<h2>Leave Applied successfully";
  </script>
  <?php
 }
  else
  {
    ?>
  <script type="text/javascript">
    document.getElementById("disnotdone").innerHTML="<h2>Sorry! Leave cannot be aaplied try again";
  </script>
  <?php
  }
 }
?>
</body>
</html>
