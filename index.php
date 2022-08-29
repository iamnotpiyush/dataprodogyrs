<?php 
  session_start();
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

			.card {
			  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			  max-width: 300px;
			  margin: auto;
			  text-align: center;
			  font-family: arial;
			}

			.price {
			  color: grey;
			  font-size: 22px;
			}

			.card button {
			  border: none;
			  outline: 0;
			  padding: 12px;
			  color: white;
			  background-color: #000;
			  text-align: center;
			  cursor: pointer;
			  width: 100%;
			  font-size: 18px;
			}

			.card button:hover {
			  opacity: 0.7;
			}
			body {
			  margin: 0;
			  font-family: Arial, Helvetica, sans-serif;
			}

			.topnav {
			  overflow: hidden;
			  background-color:#F5F6F6;
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

			.container {
			  position: relative;
			  text-align: center;
			  color: #59595c;
			}

			.txtonimg {
			  position: absolute;
			  top: 8px;
			  left: 16px;
			}
			#boxswd {
			  border: 1px solid;
			  padding: 10px;
			  box-shadow: 5px 10px 18px #888888;
			}
			#boxswdd {
			  border: 0px solid gray ;
			  padding: 10px;
			  
			  box-shadow: 5px 10px 18px #888888;
			}

	</style>
</head>
<body style="background-color:#F5F6F6;">
	<!-- nav bar-->
	<div style="border:0px solid transperent ;width:100%;height:30px;text-align:center;background-color:#658B6F;background-image: linear-gradient(to right, #4FC994  , #7BE286);padding-top:3px;color:#F5F6F6">
	    " Data is the oil of the 21 century, and analytics is the combustion engine. "
	 </div>
	<div class="topnav" id="myTopnav">
		<h2 style="float:left;padding-right:200px;padding-left:165px; font-family:Papyrus;padding-top:-8px">  dataprodog! </h2>
		  <a href="index.php" class="active" style="font-family:Source Sans Pro; ">Home</a>
		  <a href="buycourse.php" style="font-family:Source Sans Pro " >BuyCourse</a>
		  <a href="datacourse.php" style="font-family:Source Sans Pro ">MyCourse</a>
		  <a href="instructor.php" style="font-family:Source Sans Pro ">Instructor</a>
		  <a href="aboutus.php" style="font-family:Source Sans Pro ">AboutUs</a>
		  <a href="contactus.php" style="font-family:Source Sans Pro ">ContactUs</a>
		  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		  </a>
		  <html>
		<a href="signup.php" style=" background-color: #097267;border: none;color: white;padding: 11px 30px;text-align: center;text-decoration: none;
		display: inline-block;font-size: 16px;margin: 16px 2px;cursor: pointer;float:right;font-family:Source Sans Pro;border-radius:5px;padding-left:-165px;">SignUp </a>
		<a href="login.php" style=" background-color: #F5F6F6;border:1px solid #097267;color: #097267;padding: 11px 32px;text-align: center;text-decoration: none;
		display: inline-block;font-size: 16px;margin: 16px 2px;cursor: pointer;float:right;margin-left:0px;font-family:Source Sans Pro;border-radius:5px;	">Login</a>

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

    <div class="container" style="border:0px solid red;width:100%;height:500px;float:left;background-color:#1E2423;color:#1E2423">
		<img src="images/main2.png"  width=100% height=100%>  
		<div class="txtonimg" style="font-size:35px;margin-left:90px;padding-top:110px;font-family:Source Sans Pro">Advanced Certificate Programme in Data Science</div>
		<p class="txtonimg" style="font-size:20px;text-align:left;margin-left:90px;padding-top:150px;font-family:Source Sans Pro" ;>
			Kick-start your journey in Data Science & Machine Learningwith India's<br>
			best selling advanced certification Programme from data prodogy <br> through Hands on
			Industry Projects, Cutting Edge Curriculum, Industry <br> Mentorship & 
			Peer to peer networking today at just ₹ 1/- .
              <br>
			<a href="buycourse.php" style=" background-color: #097267;border: none;color: white;padding: 11px 40px;text-align:center;text-decoration: none;
			display: inline-block;font-size: 16px;margin: 16px 2px;cursor: pointer;float:center;font-family:Source Sans Pro;border-radius:5px;padding-left:-165px;">Resigter now </a>
		</p>
		<!--
		<iframe class="txtonimg" height="280" width="450"  style="margin-top:50px;margin-left:900px" 
		src="https://www.youtube.com/embed/jtn-hRJjl68">
		</iframe>
		-->
	</div>
	<div style="border:0px solid transperent;width:90%;height:500px"></div>
	<div style="border:0px solid transperent;width:100%;height:500px;">
			<div style="font-size:40px;margin:80px;padding-left:80px;color:#59595c;font-family:Source Sans Pro">Programme Overview</div>
			<div style="font-size:30px;margin-top:-70px;padding-left:160px;color:#59595c;font-family:Source Sans Pro">Key Highlights :</div>
			<div style="border:0px solid red;width:13%;height:200px;float:left"></div>
			<div style="border:0px solid red;width:30%;height:200px;float:left;margin-top:40px">
				<img src="images/industrysession.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro">Personalised Industry Session</div><br><br>
				<img src="images/designed.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro">Designed for Working Professionals</div><br><br>
				<img src="images/casestudies.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro">7+ Case Studies and Projects</div><br><br>
				<img src="images/certification.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro">advanced Certification </div><br><br>
				<img src="images/jobopp.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro;">Exclusive Job opportunities Portal</div><br><br>
				<img src="images/aipowered.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro">AI Powered Profile Builder</div><br><br>
				<img src="images/comlimentry.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro">Complimentary Python Programming Bootcamp</div><br><br>

			</div>
			
			<div style="border:0px solid transperent;width:8%;height:200px;float:left"></div>

			<div style="border:0px solid transperent;width:30%;height:200px;float:left;margin-top:40px">
				<img src="images/carrerprogram.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro">Career Essential Soft Skills Programme</div><br><br>
				<img src="images/hoursoflearn.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro">300+ Hours of Learning</div><br><br>
				<img src="images/doubtclasses.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro">Daily Doubt Resolution Support</div><br><br>
				<img src="images/nocostemi.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro">No Cost EMI Option</div><br><br>
				<img src="images/careermentorship.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro">Career mentorship Sessions(1:1)</div><br><br>
				<img src="images/highperformancecoaching.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro">High Performance Coaching(1:1)</div><br><br>
				<img src="images/timeinterviews.png"><div style="margin-top:-28px;padding-left:45px;color:#1E2423;font-family:Source Sans Pro">Just-in-Time Interviews</div><br>
			</div>

			<div style="border:0px solid transperent;width:100%;height:520px"></div>
			<div style="border:0px solid transperent;width:100%;height:520px;background-color:#88D880">
						<div style="padding-top:100px;padding-left:170px;font-size:38px;color:#59595c;font-family:Source Sans Pro">Why Join This Program</div>
						<div style="border:0px solid transperent;width:11%;height:60px;margin-top:50px;float:left;background-color:transperent;color:grey;"></div>

				<div id="boxswd"style="border:2px solid white;width:19%;height:190px;margin-top:50px;float:left;background-color:white;color:grey;border-radius:5px">
						<div style="font-size:21px;margin:16px"></i> Guaranteed Job</div>
						<div style="padding-left:25px">Secure exciting data jobs in top<br> companies. Get a 100% refund if<br> you’re not able to land a job within<br> 180 days of graduation</div>
				</div>
				<div style="border:2px solid transperent;width:1%;height:60px;margin-top:50px;float:left;background-color:transperent;color:grey"></div>
				<div id="boxswd" style="border:2px solid white;width:19%;height:190px;margin-top:50px;float:left;background-color:white;color:grey;border-radius:5px">
						<div style="font-size:21px;margin:16px"> 4 Million+ Data Jobs</div>
						<div style="padding-left:25px">Data Science professionals earn an<br> average salary of ₹21 lakh with<br> higher salaries of more than ₹1 <br>crore</div>	
				</div>
				<div style="border:2px solid transperent;width:1%;height:60px;margin-top:50px;float:left;background-color:transperent;color:grey;"></div>
				<div id="boxswd"style="border:2px solid white;width:19%;height:190px;margin-top:50px;float:left;background-color:white;color:grey;border-radius:5px">
						<div style="font-size:21px;margin:16px">1-on-1 Career Mentorship</div>
						<div style="padding-left:25px">Enhance your resume, prepare for <br>technical interviews, and learn<br> career growth hacks with valuable<br> insights from industry experts.</div>
				</div>
				<div style="border:2px solid transperent;width:1%;height:60px;margin-top:50px;float:left;background-color:transperent;color:grey"></div>

				<div id="boxswd"style="border:2px solid white;width:19%;height:190px;margin-top:50px;float:left;background-color:white;color:grey;border-radius:5px">
						<div style="font-size:21px;margin:16px">Easy Financing Options</div>
						<div style="padding-left:25px">Get easy financing options at 0%<br> interest with no hidden costs.</div>
				</div>
		 </div>


	</div>




	<div style="border:0px solid transperent;width:100%;height:650px"></div>
	<div style="border:0px solid transperent;width:100%;height:480px;background-color:#F5F6F6;">
			<div style="padding:80px;padding-left:160px;font-size:38px;color:#59595c;font-family:Source Sans Pro">Tools Covered</div><br><br>
			<img src="images/excel2.png" height="60px" width="120px" style="padding-left:200px;margin-top:-150px">
			<img src="images/python.png" height="60px" width="120px" style="padding-left:60px;margin-top:-150px">
			<img src="images/numpy.png" height="60px" width="120px" style="padding-left:60px;margin-top:-150px">
			<img src="images/Rlogo.png" height="50px" width="110px" style="padding-left:60px;margin-top:-150px">
			<img src="images/scipy.png" height="60px" width="120px" style="padding-left:60px;margin-top:-150px">
			<img src="images/matplotlib.png" height="60px" width="160px" style="padding-left:50px;margin-top:-150px"><br><br><br><br><br>
			<img src="images/pandas.png" height="60px" width="140px" style="padding-left:200px;margin-top:-150px">
			<img src="images/tensorflow-logo.png" height="50px" width="250px" style="padding-left:70px;margin-top:-150px">
			<img src="images/Tableau.png" height="50px" width="200px" style="padding-left:70px;margin-top:-150px">
			<img src="images/mysql.png" height="60px" width="120px" style="padding-left:60px;margin-top:-150px">
	</div>

	<div style="border:0 solid green;width:100%;height:700px;background-color:#F5F6F6;">
		<div style="border:0px solid green;width:13%;height:600px;float:left"></div>
		<div id="boxswd" style="border:0px solid green;width:37%;height:600px;float:left;background-color:white;">
			<div style="padding:80px;padding-left:30px;font-size:30px;color:#59595c;font-family:Source Sans Pro">Empowering learners of tomorrow</div>
			<div style=";margin-top:-40px;padding-left:30px;font-size:19px;color:#59595c;font-family:Source Sans Pro">Over 2,300 students have completed this course and started <br>working at their dream job, whats stopping you?
				<br><br><br>
				<a href="buycourse.php" style=" background-color: #097267;border: none;color: white;padding: 15px 40px;text-align:center;text-decoration: none;
				display: inline-block;font-size: 16px;margin: 16px 2px;cursor: pointer;float:center;font-family:Source Sans Pro;border-radius:5px;padding-left:-165px;">CONTINUE APPLICATION </a>
				<br>
				<img src="images/inspirelearning.jpg" style="margin:50px;padding-left:120px">
			</div>
		</div>
		<div id="boxswdd" style="border:0px solid transperent;width:37%;height:600px;float:left;background-color:#EDF9EC">
			<div style="padding:80px;padding-left:30px;font-size:30px;color:#59595c;font-family:Source Sans Pro">What's Included in the Price</div>
			<div style=";margin-top:-40px;padding-left:30px;font-size:19px;color:#59595c;font-family:Source Sans Pro">
				Features/Benefits<br><br>
				✓ &nbsp; &nbsp;Advanced Certificate Programme in Data Science from IIT <span style="padding-left:30px">Wanadongri without quitting your job
				<br><br>
				✓ &nbsp; &nbsp;Cutting-Edge Curriculum in Data Science & 
				 Machine Learning <span style="padding-left:30px"> Designed by Industry Experts
				 with Live Sessions and Small </span> <span style="padding-left:30px"> Group Coaching 
				 session
				 <br><br>
				 
				✓ &nbsp; &nbsp; Hands-on experience on Industry Projects and Personalized <span style="padding-left:30px"> Feedback for Improved 360 degree Learning
				<br><br>
				✓ &nbsp; &nbsp; StepUp to Advanced Certificate Programme in Data Science <span style="padding-left:30px"> Feedback for Improved 360 degree Learning
			</div>
		</div>
	</div>
	<div style="border-bottom:1px solid white;width:100%;height:120px;background-color:#2F8481;color:white">
	     <div style="padding:10px;padding-left:160px;font-size:40px;padding-top:60px;color:#59595c;font-family:Source Sans Pro;color:white">Certification</div>
    </div>
	<div style="border-bottom:0px solid white;width:60%;height:470px;background-color:#2F8481;color:white;float:left">
		<div style="padding:10px;padding-left:160px;padding-top:60px;font-size:30px;color:#59595c;font-family:Source Sans Pro;color:white">
		Advanced Certificate Programme in Data <br> Science from IIT Wanadongri	
		</div><br><br>
		<div style="margin-top:0px;padding-left:160px;font-size:19px;color:#59595c;font-family:Source Sans Pro;color:white">
			Complete all the courses in the programme successfully to receive Advanced <br>
			Certificate Programme in Data Science from IIT Wanadongri. It is India's #1 Technical<br>
			 University  as per the survey of India Today, 2021.
		</div><br><br>
		<div style="margin-top:0px;padding-left:160px;font-size:19px;color:#59595c;font-family:Source Sans Pro;color:white">
		 &#9658; Connect with a global network of accomplished IIT Wanadongri Alumni<br>
		</div><br>
		<div style="margin-top:0px;padding-left:160px;font-size:19px;color:#59595c;font-family:Source Sans Pro;color:white">
		 &#9658; Stepup to a widely recognised and valued Advanced Certificate Programme in Data Science</div><br>
		<div style="margin-top:0px;padding-left:160px;font-size:19px;color:#59595c;font-family:Source Sans Pro;color:white">
		 &#9658; Network with Data Science professionals across all industry sectors
		</div>

	</div>
	<div style="border-bottom:0px solid white;width:40%;height:470px;background-color:#2F8481;color:white;float:left">
	     <img src="images/certification.jpg" width="400px" height="270px" style="margin:80px">
	</div>
	<div style="border:0px solid transperent;width:100%;height:470px"></div>

    <div style="border:0px solid transperent;width:100%;height:600px">
		<div style="border:0px solid transperent;width:100%;height:520px;">
			<div style="padding-top:100px;padding-left:170px;font-size:38px;color:#59595c;font-family:Source Sans Pro">Instructors</div>
			<div style="border:0px solid transperent;width:11%;height:60px;margin-top:50px;float:left;background-color:transperent;color:grey;"></div>

			<div id="boxswd"style="border:2px solid white;width:16%;height:330px;margin-top:50px;float:left;background-color:white;color:grey;border-radius:5px">
				<div style="font-size:21px;margin:5px;padding-left:70px"></i> <img src="images/faculty2.jpeg" style="  border-radius: 50%;"></div>
				<div style="padding-left:0px;text-align:center;color:black">C. Anand</div>
				<div style="padding-top:10px;text-align:center">CEO</div>
				<div style="padding-top:10px;text-align:center"><img src="images/actifyimg.png"></div>
				<div style="padding-top:30px;text-align:center;font-size:15px">An alumnus of IIT and IIM with over 13 yeras of experience in data science such as TATA industries</div>

			</div>
			<div style="border:2px solid transperent;width:1%;height:60px;margin-top:50px;float:left;background-color:transperent;color:grey"></div>
			<div id="boxswd"style="border:2px solid white;width:16%;height:330px;margin-top:50px;float:left;background-color:white;color:grey;border-radius:5px">
				<div style="font-size:21px;margin:5px;padding-left:70px"></i> <img src="images/faculty3.jpeg" style="  border-radius: 50%;"></div>
				<div style="padding-left:0px;text-align:center;color:black">Pankaj Sharma</div>
				<div style="padding-top:10px;text-align:center">Dean - Academics</div>
				<div style="padding-top:10px;text-align:center"><img src="images/gramener.png"></div>
				<div style="padding-top:30px;text-align:center;font-size:15px">Prof.Pankaj has a PHD from Mississippi sate University and experience of over 10 years in serval multinational org.</div>

			</div>
			<div style="border:2px solid transperent;width:1%;height:60px;margin-top:50px;float:left;background-color:transperent;color:grey;"></div>
				
			<div id="boxswd"style="border:2px solid white;width:16%;height:330px;margin-top:50px;float:left;background-color:white;color:grey;border-radius:5px">
				<div style="font-size:21px;margin:5px;padding-left:70px"></i> <img src="images/faculty4.jpeg" style="  border-radius: 50%;"></div>
				<div style="padding-left:0px;text-align:center;color:black">Hindol Basu</div>
				<div style="padding-top:10px;text-align:center">Data Scientist</div>
				<div style="padding-top:10px;text-align:center"><img src="images/iitb.png"></div>
				<div style="padding-top:30px;text-align:center;font-size:15px">An alumnus of IIt madras,IIM Bangalore and LBS london ,anand is among the top 10 data scientist in india with 20 yrs of experience</div>

			</div>
			<div style="border:2px solid transperent;width:1%;height:60px;margin-top:50px;float:left;background-color:transperent;color:grey"></div>

			<div id="boxswd"style="border:2px solid white;width:16%;height:330px;margin-top:50px;float:left;background-color:white;color:grey;border-radius:5px">
				<div style="font-size:21px;margin:5px;padding-left:70px"></i> <img src="images/faculty5.png" style="  border-radius: 50%;"></div>
				<div style="padding-left:0px;text-align:center;color:black">Krutika Patel</div>
				<div style="padding-top:10px;text-align:center">Ex- Associate,IITW</div>
				<div style="padding-top:10px;text-align:center"><img src="images/walmart.png"></div>
				<div style="padding-top:30px;text-align:center;font-size:15px">Prof.krutika has a PHD from georgia Institute of tech as well as an integrated Mtech (EE) from IIT Wanadongry</div>

			</div>
		</div>
	</div>
	<div style="border:0px solid red;width:100%;height:10px;margin-top:50px;background-color:white"></div>
	<div style="border:0px solid red;width:100%;height:400px;margin-top:50px">
		<div style="border:0px solid red;width:30%;height:400px;float:left;">
		  <img src="images/reffer.png" style="margin-left:200px;padding-top:50px">
		</div>
		<div style="border:0px solid red;width:40%;height:400px;float:left">
			<div style="padding-top:100px;font-size:23px">
			  Get an option  to Executive PG Programme in Data Science<br><span style="line-height: 1.6;">  and choose from 5 specialisations</div>
			<div style="padding-top:40px;font-size:15px;color:grey">
			  * data prodgy is a platform to facilitate program delivery by educational institutions<br> and is not a college or a university itself.
			</div>
		</div>
		<div style="border:0px solid red;width:20%;height:90px;float:left;padding-top:130px;padding-left:16px">
			<a href="buycourse.php" style=" background-color: #097267;border: none;color: white;padding: 15px 40px;text-align:center;text-decoration: none;
			display: inline-block;font-size: 16px;margin: 16px 2px;cursor: pointer;float:center;font-family:Source Sans Pro;border-radius:5px;padding-left:-165px;">CONTINUE APPLICATION </a>
		</div>
	</div>



	<div style="border:0px solid red;height:350px;width:100%;background-color:#1E2423">
		<div style="border-bottom:1px solid #5c5b5b;height:100px;width:100%;background-color:#1E2423">
			<div style="color:white;font-family:Papyrus;font-size:35px;padding-top:40px;left;padding-left:80px">dataprodog!
			</div>
		</div>
		<div style="border:0px solid red;width:10%;height:200px;float:left"></div>
		<div style="border-bottom:1px solid #5c5b5b;width:20%;height:280px;float:left">
			<a href="contactus.php" style="text-decoration:none"><div style="color:#FFFFFF;padding-top:20px;font-family:Source Sans Pro;font-size:20px"><b>Aboutus</b></div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:20px;font-family:Source Sans Pro">Data prodogy</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Careers </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">dataprodogy Blog</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Placement Support</div>
			<a href="contactus.php" style="text-decoration:none"><div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">For Business</div></a>
		</div>
		<a href="contactus.php" style="text-decoration:none">
		<div style="border-bottom:1px solid #5c5b5b;width:20%;height:280px;float:left">
			<a href="contactus.php" style="text-decoration:none"><div style="color:#FFFFFF;padding-top:20px;font-family:Source Sans Pro;font-size:20px"><b>One Data prodogy</b></div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:20px;font-family:Source Sans Pro">dataprodogy Rekrut </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">dataprodogy Jeet</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">dataprodogy Campus </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Study Abroad</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Knowledgehut</div>
		</div>
		<div style="border-bottom:1px solid #5c5b5b;width:20%;height:280px;float:left">
			<a href="contactus.php" style="text-decoration:none"><div style="color:#FFFFFF;padding-top:20px;font-family:Source Sans Pro;font-size:20px"><b>SUPPORT</b></div>
			<a href="contactus.php" style="text-decoration:none"><div style="color:#FFFFFF;padding-left:15px;padding-top:20px;font-family:Source Sans Pro">Contact </div></a>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Grievance Redressal</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Terms & Conditions </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Privacy Policy</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Knowledgehut</div>
		</div>
		<div style="border-bottom:1px solid #5c5b5b;width:23%;height:280px;float:left">
			<a href="contactus.php" style="text-decoration:none"><div style="color:#FFFFFF;padding-top:20px;font-family:Source Sans Pro;font-size:20px"><b>DATA SCIENCE</b></div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:20px;font-family:Source Sans Pro">Data Science | Master of Science </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Data Science | Executive PG Programme</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Data Science and Machine Learning | Executive P </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Data Science | Master's Degree</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Data Analytics | Certificate Program</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Python Programming Bootcamp | Certification </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Data Science Bootcamp | Advanced Certificate Pro</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Data Analytics 360 Cornell | Certificate Program </div>
		</div>
	</div>

	<div style="border:0px solid red;height:400px;width:100%;background-color:#1E2423">
		<div style="border:0px solid red;height:100px;width:100%;background-color:#1E2423"></div>
		<div style="border:0px solid red;width:10%;height:200px;float:left"></div>
		<div style="border-bottom:2px solid #5c5b5b;width:20%;height:280px;float:left">
			<a href="contactus.php" style="text-decoration:none"><div style="color:#FFFFFF;padding-top:20px;font-family:Source Sans Pro;font-size:20px"><b>MBA</b></div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:20px;font-family:Source Sans Pro">Liverpool Business School | MBA  </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Deakin Business School | MBA  </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">MBA (Executive) | Specialisation	</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Golden Gate University | MBA</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Executive Program</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro"> Advanced General Program</div>
		</div>
		<a href="contactus.php" style="text-decoration:none">
		<div style="border-bottom:2px solid #5c5b5b;width:20%;height:280px;float:left">
			<div style="color:#FFFFFF;padding-top:20px;font-family:Source Sans Pro;font-size:20px"><b>DOCTORATE</b></div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:20px;font-family:Source Sans Pro">Data Science | Master of Science </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Data Science | Executive PG Programme</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Data Science | Master's Degree </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Python Programming Bootcamp</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Performance Marketing Bootcamp </div>
		</div>
		<div style="border-bottom:2px solid #5c5b5b;width:20%;height:280px;float:left">
			<a href="contactus.php" style="text-decoration:none"><div style="color:#FFFFFF;padding-top:20px;font-family:Source Sans Pro;font-size:20px"><b>SOFTWARE & TECH</b></div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:20px;font-family:Source Sans Pro">Computer Science | Master's Degree </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Cybersecurity | Certificate Program </div>
		</div>
		<div style="border-bottom:2px solid #5c5b5b;width:23%;height:280px;float:left">
			<a href="contactus.php" style="text-decoration:none"><div style="color:#FFFFFF;padding-top:20px;font-family:Source Sans Pro;font-size:20px"><b>LAW</b></div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:20px;font-family:Source Sans Pro">Corporate & Financial Law | LL.M.</div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">International Business and Finance Law | Master </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Intellectual Property & Technology Law | LL.M. </div>
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Dispute Resolution | LL.M.</div>

		</div>
	</div>
	<div style="border:0px solid red;height:100px;width:100%;background-color:#1E2423;">
		<a href="https://www.instagram.com/iamnotpiyush/"><i  class="fa fa-instagram" style="color:#FFFFFF;float:right;padding-right:100px;font-size:40px;"></i></a>
		<a href="https://www.facebook.com/"><i class="fa fa-facebook" style="color:#FFFFFF;float:right;padding-right:15px;font-size:40px;"></i></a>
		<a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp" style="color:#FFFFFF;float:right;padding-right:15px;font-size:40px;"></i></a>
		<a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin" style="color:#FFFFFF;float:right;padding-right:15px;font-size:40px;"></i></a>
		<a href="https://www.youtube.com/watch?v=jtn-hRJjl68&t=3s"><i class="fa fa-youtube" style="color:#FFFFFF;float:right;padding-right:15px;font-size:40px;"></i></a>
		<div style="color:#FFFFFF;font-size:12px;padding-left:150px">© 2015-2021 dataprodog! Education Private Limited. All rights reserved</div>
	</div>

			<!--
			product card
			<h2 style="text-align:center">Product Card</h2>

			<div class="card">
			  <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
			  <h1>Tailored Jeans</h1>
			  <p class="price">$19.99</p>
			  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
			  <p><a href="course1.php"><button>Add to Cart</button></a></p>
			</div>
			<a href="datacourse.php">mycource</a> -->
</body>
</html>

