<?php 
	session_start();
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
		.sidenav a:hover {
		 background-color: #097267;
		 color:white;
		 }
		 .overlay {
		  position: absolute; 
		  bottom: 0; 
		  background: rgb(0, 0, 0);
		  background: rgba(0, 0, 0, 0.5); /* Black see-through */
		  color: #f1f1f1; 
		  width: 100%;
		  transition: .5s ease;
		  opacity:0;
		  color: white;
		  font-size: 20px;
		  padding: 70px;
		  margin-top:10px
		  text-align: center;
		  text-align:center;
		}
		* {box-sizing: border-box;}

		.container {
		  position: relative;
		  width: 100%;
		  max-width: 400px;
		}

		.container:hover .overlay {
		  opacity: 1;
		}
	</style>
</head>
<body>
<!-- nav bar-->
	<div style="border:0px solid transperent ;width:100%;height:30px;text-align:center;background-color:#658B6F;background-image: linear-gradient(to right, #4FC994  , #7BE286);padding-top:3px;color:#F5F6F6">
	  " Data is the oil of the 21 century, and analytics is the combustion engine. "
	</div>
	<div class="topnav" id="myTopnav">
		<h2 style="float:left;padding-right:200px;padding-left:165px; font-family:Papyrus;padding-top:-8px">  dataprodog!</h2>
		  <a href="index.php"  style="font-family:Source Sans Pro ">Home</a>
		  <a href="buycourse.php"  style="font-family:Source Sans Pro " >BuyCourse</a>
		  <a href="datacourse.php"class="active" style="font-family:Source Sans Pro ">MyCourse</a>
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




	<div id="boxswdd"  style="border-right:0px solid red;width:15%;height:686px;float:left;background-color:#EDF9EC">
		<img src="images/avtar.jpg" height="100px" width="100px" style="border-radius:50%;margin-left:40px;margin-top:30px">
		<div  style="color:gray;float:right;padding-top:5px;text-align:center;font-family:Source Sans Pro;margin-right:40px;font-size:18px">

			<?php 
			session_start();
			echo "".$_SESSION['user_name'];
			?>
		</div>
		<br><br>
		<!--
		<div style="padding-right:110px;padding-top:50px;font-size:22px;color:black;font-family:Source Sans Pro;tetx-align:right">
		&nbsp;&nbsp; Tools</i><br >
		<span style=" line-height: 2.0;">&nbsp;&nbsp;Q&A</i><br>
		&nbsp;&nbsp;Notes</i><br>
		&nbsp;&nbsp;Overview </i><br>
		&nbsp;&nbsp;Reviews </i><br>
		&nbsp;&nbsp;Announcements </i><br>
		</div>
		-->
		<br><br>

		<div class="sidenav">
			<a class="sidenav" href="datacourse.php" style="width:228px; background-color:;border: none;padding: 15px 22px;text-align:left;text-decoration: none;
			display: inline-block;font-size: 16px;margin: 16px 0px;cursor: pointer;float:left;font-family:Source Sans Pro;border-radius:0px;margin-left:-10px;margin-top:-15px">Classes  </a>
			<a class="sidenav" href="qna.php" style="width:228px; background-color:;border: none;color:;padding: 15px 22px;text-align:left;text-decoration: none;
			display: inline-block;font-size: 16px;margin: 16px 0px;cursor: pointer;float:left;font-family:Source Sans Pro;border-radius:0px;margin-left:-10px;margin-top:-15px">Q&A  </a>
			<a class="sidenav" href="notes.php" style="width:228px; background-color:;border: none;color:;padding: 15px 22px;text-align:left;text-decoration: none;
			display: inline-block;font-size: 16px;margin: 16px 0px;cursor: pointer;float:left;font-family:Source Sans Pro;border-radius:0px;margin-left:-10px;margin-top:-14px">Notes  </a>
			<a class="sidenav" href="quiz.php" style="width:228px; background-color:;border: none;color:;padding: 15px 22px;text-align:left;text-decoration: none;
			display: inline-block;font-size: 16px;margin: 16px 0px;cursor: pointer;float:left;font-family:Source Sans Pro;border-radius:0px;margin-left:-10px;margin-top:-14px">Quiz  </a>
			<a class="sidenav" href="overview.php" style="width:228px; background-color:;border: none;color:;padding: 15px 22px;text-align:left;text-decoration: none;
			display: inline-block;font-size: 16px;margin: 16px 0px;cursor: pointer;float:left;font-family:Source Sans Pro;border-radius:0px;margin-left:-10px;margin-top:-14px">Overview  </a>
			<a class="sidenav" href="tools.php" style="width:228px; background-color:;border: none;color:;padding: 15px 22px;text-align:left;text-decoration: none;
			display: inline-block;font-size: 16px;margin: 16px 0px;cursor: pointer;float:left;font-family:Source Sans Pro;border-radius:0px;margin-left:-10px;margin-top:-14px">Tools   </a>
			<a class="sidenav" href="announcements.php" style="width:228px; background-color:;border: none;color:;padding: 15px 22px;text-align:left;text-decoration: none;
			display: inline-block;font-size: 16px;margin: 16px 0px;cursor: pointer;float:left;font-family:Source Sans Pro;border-radius:0px;margin-left:-10px;margin-top:-14px">Announcements  </a>
		</div>

		<a  href="logout.php"><input type="submit" name="" value="logout" style="background-color: #097267;border: none;color: white;padding: 11px 65px;text-align:center;text-decoration: none;
		display: inline-block;font-size: 16px;margin: 16px 2px;cursor: pointer;float:center;font-family:Source Sans Pro;border-radius:5px;margin-left:10px;margin-top:70px"></a>
			

	</div>

	<div  style="border:0px solid red;width:83.6%;height:614px;float:left;background-color:">
		<div style="border:0px solid red;width:350px;height:300px;margin-left:400px;margin-top:100px">
			<img src="images/demo.jpg" height="280px" width="300px">
			<div style="text-align:center;font-family:Source Sans Pro;">No courses enrolled!<a href="buycourse.php" style="text-decoration:none;font-family:Source Sans Pro;color:green"> Buy cousre  </a> </div>
		</div>
	</div>
</body>
</html>














		












