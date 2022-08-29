<?php 
	session_start();
	//echo "welcome ".$_SESSION['user_name'];
	error_reporting(0);
?>


	
<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		body {
		  margin: 0;
		  font-family: Arial, Helvetica, sans-serif;
		  
		}

		.topnav {
		  overflow: hidden;
		  background-color:#F5F6F6;;
		}

		.topnav a {
		  float: left;
		  display: block;
		  color: #59595c;
		  text-align: center;
		  padding: 25px 16px;
		  text-decoration: none;
		  font-size: 18px;
		}

		.topnav a:hover {
		 color: green;}

		.topnav a.active {
			font-weight: 700;
		  color: green;
		  
		}

		.topnav .icon {
		  display: none;
		}

		@media screen and (max-width: 600px) {
		  .topnav a:not(:first-child) {display: none;}
		  .topnav a.icon {
			float: right;
			display: block;
		  }
		}

		@media screen and (max-width: 600px) {
		  .topnav.responsive {position: relative;}
		  .topnav.responsive .icon {
			position: absolute;
			right: 0;
			top: 0;
		  }
		  .topnav.responsive a {
			float: none;
			display: block;
			text-align: left;
		  }
		}
		#boxswdd {
		  border: px solid gray ;
		  padding: 10px;
		  
		  box-shadow: 1px 15px 18px #888888;
		}
		</style>
</head>
<body ">
<!-- nav bar-->
	<div style="border:0px solid transperent ;width:100%;height:30px;text-align:center;background-color:#658B6F;background-image: linear-gradient(to right, #4FC994  , #7BE286);padding-top:3px;color:#F5F6F6">
		" Data is the oil of the 21 century, and analytics is the combustion engine. "
	</div>
	<div class="topnav" id="myTopnav">
		<h2 style="float:left;padding-right:200px;padding-left:165px; font-family:Papyrus;padding-top:-8px">  dataprodog!</h2>
		  <a href="index.php"  style="font-family:Source Sans Pro ">Home</a>
		  <a href="buycourse.php" class="active" style="font-family:Source Sans Pro " >BuyCourse</a>
		  <a href="datacourse.php" style="font-family:Source Sans Pro ">MyCourse</a>
		  <a href="instructor.php" style="font-family:Source Sans Pro ">Instructor</a>
		  <a href="aboutus.php" style="font-family:Source Sans Pro ">AboutUs</a>
		  <a href="contactus.php" style="font-family:Source Sans Pro ">ContactUs</a>
		  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		  </a> 
		<div style="color:gray;float:right;padding-top:25px;padding-right:10px;font-family:Source Sans Pro;font-size:18px">

			<script>
			const time = new Date().getHours();
			let greeting;
			if (time < 10) {
			  greeting = "Good morning";
			} else if (time < 20) {
			  greeting = "Good day";
			} else {
			  greeting = "Good evening";
			}
			document.getElementById("demo").innerHTML = greeting;
			</script>

		</div>
</div>



	<script>
		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
			x.className += " responsive";
		  } else {
			x.className = "topnav";
		  }
		}
	</script>




	<div id="boxswdd"  style="border-right:0px solid red;width:15%;height:614px;float:left;background-color:#EDF9EC">
		<img src="images/avtar.jpg" height="100px" width="100px" style="border-radius:50%;margin-left:60px;margin-top:30px">
		<div style="color:gray;float:right;padding-top:5px;text-align:center;font-family:Source Sans Pro;font-size:18px">
			<?php 
			session_start();
			echo "".$_SESSION['user_name'];
			?>
			<a href="logout.php"><input type="submit" name="" value="logout" style="background-color: #097267;border: none;color: white;padding: 11px 80px;text-align:center;text-decoration: none;
			display: inline-block;font-size: 16px;margin: 16px 16px;cursor: pointer;float:center;font-family:Source Sans Pro;border-radius:5px;margin-left:-0px;margin-top:380px"></a>
			
		</div>
	</div>
	<div  style="border:0px dotted red;width:83.6%;height:620px;float:left;background-color:">
		<div style="border:2px solid green;width:360px;height:220px;margin:40px">
			<img src="images/datacoursebanner.jpg" width="350px" height="210px" style="padding:5px">
			<div style="color:#59595c;font-family:Source Sans Pro;font-size:20px;padding-top:10px">Data science bootcamp</div>
			<div style="color:#59595c;font-family:Source Sans Pro;font-size:14px;padding-top:0px">-SunRise Education by Rahul Gandhi,Narandra Modi,Amit Sah</div>
			<div style="color:orange;font-family:Source Sans Pro;font-size:20px;padding-top:10px">4.8 <span ><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
			<div style="color:#59595c;font-family:Source Sans Pro;font-size:14px;padding-top:0px">&#9675; 6-months &nbsp;&nbsp; &#9675; 354lectures &nbsp;&nbsp; &#9675; All Levels</div>
			<a href="paymentgetway.php"><input type="submit" name="" value="BUY NOW" style="background-color: white;border:1px solid #097267;color: #097267;padding: 11px 32px;text-align: center;text-decoration: none;
			display: inline-block;font-size: 16px;margin: 16px 2px;cursor: pointer;margin-left:0px;font-family:Source Sans Pro;border-radius:5px;"></a>

		</div>
	</div>




