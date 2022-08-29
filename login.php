<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport " content ="width=device-width.=,initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>

 <title>
    login
 </title>
 <style>
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
		.center
		{
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
	  <div style="border:0px solid red;width:42%;height:740px;float:left;background-color:#EBF8F3">
		<div style="color:black;font-family:Papyrus;font-size:45px;margin-top:240px;left;padding-left:130px">dataprodog!
		</div>
		  <form action ="#" method="POST" autocomplete="off" style="color:#cfcfcf">
		    <div class="form" style="padding-top:0px">      
			  <input type="text" name="username" class="textfiled" placeholder="e-mail">
			    <br>
			    <input type="text" name="password" class="textfiled" placeholder="password" >
			    <input type="submit" name="login" value="login "class="btn">
		            <div class="forgetpass">
				     <a href="#" class="link" onclick="message()" style="color:#4FB0AE">Forgot password ?</a>
				    </div>
				<div class="forgetpassword"><span style="color:grey;">
				         Don't have an account?<a href="signup.php" class="link" style="color:#4FB0AE"> Register</a>
				</div>
            </div>
	  </div>
	  <div style="border-left:1px solid #cfcfcf	;width:49%;height:740px;float:left">
		    <img src="images/login2.png" height="200px" width="400px" style="margin:200px">
            <div style="color:black;margin-top:-200px;font-family:Source Sans Pro;font-size:25px;color:grey;padding-left:80px;text-align:center">
				Kick-start your journey in Data Science & Machine Learning
			</div>
			<div style="color:black;margin-top:10px;font-family:Source Sans Pro;font-size:15px;color:grey;padding-left:80px;text-align:center">
				India's best selling advanced certification Programme from data prodogy !!
			</div>
	  </div>

    </div>
    <script>
		function message(){
			alert("password yaad rakte ja!!!");
		}
    </script>
</body>
</html>

<?php
include("connection.php");
if(isset($_POST['login'])){
	$username=$_POST['username'];
	$pwd=$_POST['password'];
	
	
	$query ="SELECT * FROM student WHERE emailaddress ='$username' && password='$pwd'";
	$data=mysqli_query($conn,$query);
	
	
	$total=mysqli_num_rows($data);
	
	//echo $total;
	
	if($total==1){
		$_SESSION['user_name']=$username;
		header('location:buycourse.php');	
	}
	else{
		echo "login falied";
	}
}



?>