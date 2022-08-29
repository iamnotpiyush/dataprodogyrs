<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

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
		 background-color: #097267	;
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
		  padding: 55px;
		  
		  margin-top:10px
		  text-align: center;
		  text-align:center;
		}
		* {box-sizing: border-box;}

		.container {
		  position: relative;
		  width: 100%;
		  max-width: 50%;
		}

		.container:hover .overlay {
		  opacity: 1;
		}

		table{
		background-color:black;
		color:white;
		border-radius:20px}

		body{
			margin: 0;
			padding: 0;
			background-color:;
			color:white
		}
		.center{
			position:absolute;
			top:50%;
			left:50%;
			transform:translate(-50%,-50%);
			width:400px;
			background-color:black;
			border-radius:5px;
		}
		.center h1{
			text-align:center;
			padding-bottom:20px;
			border-bottom:1px solid silver;
		}
		.form{
			padding-bottom:15px;
			margin:0 20px;
			text-align:center;
			
		}
		.textfiled{
			width:40%;
			height:40px;
			font-size:15px;
			border:2px solid #cfcfcf;
			border-radius:0px;
			box-sizing:border-box;
			padding-left:10px;
			margin:7px 0px;
			outline-color:#4FB0AE;
		}
		.textfiled2{
			width:40%;
			height:100px;
			font-size:15px;
			border:2px solid #cfcfcf;
			border-radius:0px;
			box-sizing:border-box;
			padding-left:10px;
			margin:7px 0px;
			outline-color:#4FB0AE;
		}
		.textfiled:hover{
			
			border:1px solid #4FB0AE;
		}
		.btn{
			width:10%;
			height:40px;
			background-color:#4FB0AE;
			border-radius:5px;
			font-size:20px;
			margin:7px 0px;
			color:white;
			border:0px;
		}
		.btn:hover{
			background-color:#2F8280;
		}
		.forgetpass{
			font-size:16px;
			padding :4px 0;
			margin:3px;
			
		}

		.link{
			text-decoration:none;
			
		}
		@media(max-width:470px){
			.center{
				width:88%;
			}
		}
		::placeholder {
		font-family:Source Sans Pro;
		  color: #cfcfcf;
		  opacity: 1;
		  
		}

		:-ms-input-placeholder { /* Internet Explorer 10-11 */
		 color: #cfcfcf;
		 font-family:Source Sans Pro
		}

		::-ms-input-placeholder { /* Microsoft Edge */
		 color: #cfcfcf;
		 font-family:Source Sans Pro
		}
		.txtonimg {
		  position: absolute;
		  top: 8px;
		  left: 16px;
		  float:left
		}
	</style>
</head>
<body ">
<!-- nav bar-->
	<div style="border:0px solid transperent ;width:100%;height:30px;text-align:center;background-color:#658B6F;background-image: linear-gradient(to right, #4FC994  , #7BE286);padding-top:3px;color:#F5F6F6">
	 " Data is the oil of the 21 century, and analytics is the combustion engine. "
	</div>
	<div class="topnav" id="myTopnav">
		<h2 style="float:left;padding-right:200px;padding-left:165px; font-family:Papyrus;padding-top:-8px;color:black">  dataprodog!</h2>
		  <a href="index.php"  style="font-family:Source Sans Pro ">Home</a>
		  <a href="buycourse.php"  style="font-family:Source Sans Pro " >BuyCourse</a>
		  <a href="datacourse.php" style="font-family:Source Sans Pro ">MyCourse</a>
		  <a href="instructor.php"  style="font-family:Source Sans Pro ">Instructor</a>
		  <a href="aboutus.php"  class="active" style="font-family:Source Sans Pro ">AboutUs</a>
		  <a href="contactus.php"  style="font-family:Source Sans Pro ">ContactUs</a>
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
	<div style="border:0px solid red;width:60%;height:500px;float:left;background-color:#F5F5CF">
		<div style="color:black;font-size:40px;font-family:Source Sans Pro;margin:70px;padding-left:200px;padding-top">Where ... <br>possibilities <br> begin !!<br><br>
			<span style="font-size:21px">
			<div style="color:gray">
				We’re a leading marketplace platform for learning<br> 
				and teaching online. Explore some of our most popular content and learn something new.
				Whether you want to learn or to share what you know, you’ve come to the right place. As a global destination for online learning, we connect people through knowledge.
			</div>
		</div>
	</div>
	<div style="border:0px solid red;width:40%;height:500px;float:left;background-color:#F5F5CF">
		<img src="images/aboutusbacground.png" height="400px" style="float:right">
	</div>


	<div style="border:0px solid red;float:left;width:100%;height:100px"></div>
	<div style="border:0px solid red;float:left;width:15%;height:140px"></div>
	<div style="border:0px solid red;float:left;width:38%;height:250px">
		<img src="images/learners.png"><br><br>
		<div style="font-size:30px;color:black">We are learners</div><br>
		<div style="color:grey">Enjoy a yearly learning stipend, office-wide learning events, unlimited <br>access to dataprodogy courses, plus a monthly DEAL hour — a time for the whole company to drop everything and learn. Want to try teaching? Use our in-house production studio to film courses.</div>
	</div>
	<div style="border:0px solid red;float:left;width:35%;height:250px">
		<img src="images/navigators.png"><br><br>
		<div style="font-size:30px;color:black">We are navigators</div><br>
		<div style="color:grey">
		When people feel supported, everyone benefits. We want our employees to develop skills for their careers — not just their current roles. Take advantage of regular workshops and trainings designed to help you reach your professional goals.</div>
	</div>
	<div style="border:0px solid red;float:left;width:10%;height:140px"></div>
	<div style="border:0px solid red;float:left;width:100%;height:40px"></div>

	<div style="border:0px solid red;float:left;width:15%;height:140px"></div>
	<div style="border:0px solid red;float:left;width:38%;height:250px">
		<img src="images/download.png"><br><br>
		<div style="font-size:30px;color:black">We make an impact</div><br>
		<div style="color:grey">
		We’re passionate about giving back. Through company volunteer events, our employees regularly help local food banks, middle school students, and more. We also share free courses with nonprofits and work with them directly to train their workforces and volunteers.</div>
	</div>
	<div style="border:0px solid red;float:left;width:35%;height:250px">
		<img src="images/global.png"><br><br>
		<div style="font-size:30px;color:black">We are global</div><br>
		<div style="color:grey">
		We’re based in Nagpur, but we’ve had a global mindset from the start. Since our company first began in BOMBAY in 2009, we’ve built an international community of students, instructors, and employees working in five offices around the world.</div>
	</div>
	<div style="border:px solid red;float:left;width:10%;height:140px"></div>

	<img src="images/staff2.png" style="margin-left:200px;margin-top:100px">

	<div style="border:0px solid red;width:100%;height:100px;"></div>
	<div style="border:0px solid red;width:100%;height:100px;color:black;text-align:center;font-size:35px;padding-top:20px;font-family:Sofia;background-color:#EEEE">
	   - Our Core Values -
	</div>
	<div style="border:2px solid red:width:100%;height:350px;background-color:#EEEE">
		<div style="border:0px solid red;width:15%;height:60px;float:left">
		</div>
		<div style="border:0px solid red;width:15%;height:60px;float:left">
			<img src="images/value1.png" height="200px">
		</div>
		<div style="border:0px solid red;width:15%;height:60px;float:left">
			 <img src="images/value2.png" height="200px">

		</div>
		<div style="border:0px solid red;width:15%;height:60px;float:left">
			  <img src="images/value3.png" height="200px">
		</div>
		<div style="border:0px solid red;width:15%;height:60px;float:left">
			  <img src="images/value4.png" height="200px">
		</div>
		<div style="border:0px solid red;width:15%;height:60px;float:left">
			  <img src="images/value5.png" height="200px">
		</div>
		<div style="border:0px solid red;width:10%;height:60px;float:left"></div>


	</div>
<div style="border:0px solid red;width:100%;height:450px;background-color:">
	<div style="border:0px solid red;width:100%;height:100px;color:black;text-align:center;font-size:35px;padding-top:80px;font-family:Source Sans Pro">
		- WE ARE A PART OF -
	</div>
	    <img src="images/StartupIndia.png" height="130px" style="margin-top:80px;padding-left:350px">
	    <img src="images/Digitalindia.png" height="130px" style="margin-top:-10px;padding-left:50px">
</div>

<div style="border:0px solid red;height:350px;width:100%;background-color:#1E2423">
<div style="border-bottom:1px solid #5c5b5b;height:100px;width:100%;background-color:#1E2423">
<div style="color:white;font-family:Papyrus;font-size:35px;padding-top:40px;left;padding-left:80px">dataprodog!

</div></div>

	<div style="border:0px solid red;width:10%;height:200px;float:left"></div>
	<div style="border-bottom:1px solid #5c5b5b;width:20%;height:280px;float:left">
		<a href="contactus.php" style="text-decoration:none"><div style="color:#FFFFFF;padding-top:20px;font-family:Source Sans Pro;font-size:20px"><b>Aboutus</b></div>
		<div style="color:#FFFFFF;padding-left:15px;padding-top:20px;font-family:Source Sans Pro">Data prodogy</div>
		<div style="color:#FFFFFF;padding-left:15px;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Careers </div>
		<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">prodogy Blog</div>
		<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">Placement Support</div>
		<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">For Business</div>
	</div>
	<div style="border-bottom:1px solid #5c5b5b;width:20%;height:280px;float:left">
		<a href="contactus.php" style="text-decoration:none"><div style="color:#FFFFFF;padding-top:20px;font-family:Source Sans Pro;font-size:20px"><b>One Data prodogy</b></div>
		<div style="color:#FFFFFF;padding-left:15px;padding-top:20px;font-family:Source Sans Pro">prodogy Rekrut </div>
		<div style="color:#FFFFFF;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">prodogy Jeet</div>
		<div style="color:#FFFFFF;padding-left:15px;padding-left:15px;padding-top:2px;font-family:Source Sans Pro">prodogy Campus </div>
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
		<div style="color:#FFFFFF;font-size:12px;padding-left:150px">© 2015-2021 prodog! Education Private Limited. All rights reserved</div>
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