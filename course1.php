<?php 
   session_start();
?>
	


<!DOCTYPE html>
<html>
<head>
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
	</style>
</head>
<body method="POST">

	<h2 style="text-align:center">Product Card</h2>
	<div class="card" 	>
	  <img src="/w3images/jeans3.jpg" alt="Denim Jeans" style="width:100%">
	  <h1>Tailored Jeans</h1>
	   <p class="price">$19.99</p>
	   <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
	   <p><a href="paymentgetway.php" 	><button method="POST">buy now</button></a></p>
	</div>

</body>
</html>
<?php
	include("connection.php");
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$pwd=$_POST['password'];
		
		$query ="SELECT * FROM student WHERE email ='$username' && password='$pwd'";
		$data=mysqli_query($conn,$query);
		
		
		$total=mysqli_num_rows($data);
		
		//echo $total;
		
		if($total==1){
			$_SESSION['user_name']=$username;
			header('location:displaylogin.php');	
		}
		else{
			echo "login falied";
		}
	}



?>

