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
<body >
<!-- nav bar-->
	<div style="border:0px solid transperent ;width:100%;height:30px;text-align:center;background-color:#658B6F;background-image: linear-gradient(to right, #4FC994  , #7BE286);padding-top:3px;color:#F5F6F6">
	  " Data is the oil of the 21 century, and analytics is the combustion engine. "
	</div>
	<div class="topnav" id="myTopnav">
		<h2 style="float:left;padding-right:200px;padding-left:165px; font-family:Papyrus;padding-top:-8px">  dataprodog!</h2>
		  <a href="index.php"  style="font-family:Source Sans Pro ">Home</a>
		  <a href="buycourse.php"  style="font-family:Source Sans Pro " >BuyCourse</a>
		  <a href="datacourse.php" style="font-family:Source Sans Pro ">MyCourse</a>
		  <a href="instructor.php" class="active" style="font-family:Source Sans Pro ">Instructor</a>
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



	<div style="border:0px solid red;width:100%;height:650px">
		<div style="border:0px solid red;width:20%;height:650px;float:left">
			<img src="images/instructor1.jpg" height="350px" style="margin-top:100px">
		</div>
		<div style="border:0px solid red;width:60%;height:450px;float:left;text-align:center;font-size:25px;margin-top:180px">
				 You won’t have to do it alone
				 <br><span style="color:grey;text-align:center;font-size:15px">
				 Our Instructor Support Team is here to answer your questions and review your test video,<br>
				 while our Teaching Center gives you plenty of resources  to help you through the process.<br>
				 Plus, get the support of experienced instructors in our online community.<br>
				 <a  href="instructorlogin.php"><input type="submit" name="" value="login as instructor" style="background-color: #097267;border: none;color: white;padding: 11px 40px;text-align:center;text-decoration: none;
				 display: inline-block;font-size: 16px;margin: 16px 2px;cursor: pointer;float:center;font-family:Source Sans Pro;border-radius:5px;margin-left:10px;margin-top:20px"></a>
					
		</div>
		<div style="border:0px solid red;width:20%;height:650px;float:left">
			<img src="images/instructor2.jpg" height="320px" style="margin-top:130px;float:right">
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
			<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">For Business</div>
		</div>
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
			<div style="color:#FFFFFF;padding-left:15px;padding-top:20px;font-family:Source Sans Pro">Contact </div>
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
	<div style="border-bottom:2px solid #5c5b5b;width:20%;height:280px;float:left">
		<a href="contactus.php" style="text-decoration:none"><div style="color:#FFFFFF;padding-top:20px;font-family:Source Sans Pro;font-size:20px"><b>DOCTORATE</b></div>
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

