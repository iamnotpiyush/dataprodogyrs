<?php 

	include("connection.php");
	error_reporting(0);

?>


<html>
<head>
    <title>singup form</title>
	<style>
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
				width:60%;
				height:40px;
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
				width:60%;
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
			  opacity: 1; /* Firefox */
			}

			:-ms-input-placeholder { /* Internet Explorer 10-11 */
			 color: #cfcfcf;
			 font-family:Source Sans Pro
			}

			::-ms-input-placeholder { /* Microsoft Edge */
			 color: #cfcfcf;
			 font-family:Source Sans Pro
			}
	</style>
	</head>
<body>
<div style="border:0px solid red;width:100%;height:725px">
		<div style="border-left:0px solid #cfcfcf	;width:58%;height:740px;float:left">
			    <img src="images/login2.png" height="200px" width="400px" style="margin:200px">
			<div style="color:black;margin-top:-200px;font-family:Source Sans Pro;font-size:25px;color:grey;padding-left:80px;text-align:center">
			    Kick-start your journey in Data Science & Machine Learning</div>
			<div style="color:black;margin-top:10px;font-family:Source Sans Pro;font-size:15px;color:grey;padding-left:80px;text-align:center">
			    India's best selling advanced certification Programme from data prodogy !!
			</div>
		</div>
		<div style="border:0px solid red;width:42%;height:740px	;float:left;background-color:#EBF8F3">
			<div style="color:black;font-family:Papyrus;font-size:45px;margin-top:90px;left;padding-left:130px">dataprodog!</div>

			 <form autocomplete="off">
				<div class="form" style="padding-top:0px">      
					 <input type="text" class="textfiled" placeholder="first name" name="firstname" required>
					   <br>
					  <input type="text" class="textfiled"  placeholder="last name" name="lastname" required >
					   <br>
					  <input type="text" class="textfiled" placeholder="mobile number"name="mobilenumber" required>
					   <br>
					  <input type="text" class="textfiled" placeholder="email address"name="emailaddress" required>
					   <br>
					  <input type="password" class="textfiled"  placeholder="password" name="password" required>
					   <br>
					  <input type="password" class="textfiled" placeholder="conform password" name="conformpassword" required>
					   <br>
					   <a href="index.php">
				<input   type="submit" class="btn" name="submit"></a>
							   
				<div class="forgetpassword"><span style="color:grey;">Already an account?<a href="login.php" class="link" style="color:#4FB0AE"> login</a></div>

			</form>

			</div>
	</div>
</div>
<!--
<form>
<table align="center" border="0" cellspacing="15">
<br><br><br><br>
<br>
<br>
<br>
<tr>
<input type="text" placeholder="first name" name="firstname" required></td></tr>
<tr>
<td>Last name<td><input type="text"  placeholder="last name" name="lastname" required ></td></tr>
<tr>
<td>Mobile number<td><input type="text"  placeholder="mobile number"name="mobilenumber" required></td></tr>
<tr>
<td>Email address <td><input type="text"  placeholder="email address"name="emailaddress" required></td></tr>
<tr>
<td>Password<td><input type="text"  placeholder="password" name="password" required></td></tr>
<tr>
<td>Conform password<td><input type="text"  placeholder="conform password" name="conformpassword" required></td><tr>
<tr><td align="center" colspan="2">
<a href="login.html">
<input style="border-radius:35px;width:100px;height:35px " type="submit" id="button" name="submit"></a></td></tr>
</form>
</table>
-->
</body>
</html>


<?php
	 $fn=$_GET['firstname'];
	 $ln=$_GET['lastname'];
	 $mn=$_GET['mobilenumber'];
	  $ea=$_GET['emailaddress'];
	 $pw=$_GET['password'];
	 $cpw=$_GET['conformpassword'];

	$query="INSERT INTO STUDENT VALUES('$fn','$ln','$mn','$ea','$pw','$cpw')";
	$data=mysqli_query($conn,$query);
	if($data){
		echo "";
	}
	else{
		echo "";
	}
?>