<?php 
	session_start();
	//echo "welcome ".$_SESSION['user_name'];
?>


<?php 
	$userprofile=$_SESSION['user_name'];
	if($userprofile == true){
		header("Pragma: no-cache");
		header("Cache-Control: no-cache");
		header("Expires: 0");
		$userprofile=$_SESSION['user_name'];
	}
	else{
		header('location:login.php');
	}


?>
<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
	<style>

		.textfiled{
			width:60%;
			height:20px;
			background-color:transparent;
			font-size:15px;
			border:0px solid #cfcfcf;
			border-radius:0px;
			box-sizing:border-box;
			padding-left:10px;
			margin:7px 0px;
			outline-color:#4FB0AE;
		}
		.textfiled1{
			width:60%;
			height:15px;
			background-color:transparent;
			font-size:15px;
			border:0px solid #cfcfcf;
			border-radius:0px;
			box-sizing:border-box;
			padding-left:10px;
			margin:7px 0px;
			outline-color:#4FB0AE;
		}

		.btn{
			width:90%;
			height:40px;
			background-color:#4FB0AE;
			border-radius:5px;
			font-size:20px;
			margin:7px 0px;
			color:white;
			border:0px;
			margin-left:10px
		}
		.btn:hover{
			background-color:#2F8280;
		}
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 50%;
		  
		  text-align:center;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
			height:10px;

		}

		tr:nth-child(even) {
		  background-color: ;
		}
	</style>
<body>
	<div style="border:2px solid transparent;width:50%;height:100px;float:left;padding-left:100px">
		<div style="color:black;font-family:Papyrus;font-size:45px;margin-top:40px;left;padding-left:0px">dataprodog!
		</div>
	</div>
	<div style="border:0px solid red;width:1%;height:100px;float:left;"></div>
	<div style="border:2px solid #dddddd;border-bottom:0px;width:19%;height:100px;float:left;margin-top:00px">
		<input class="btn" value="CheckOut" type="submit"	onclick="">
		<div style="color:black;margin-top:0px;font-family:Source Sans Pro;font-size:15px;color:grey;padding-top:10px;text-align:center" >
		   You'll be securely redirected to to enter your password and complete your purchase.
		</div >
	</div>
	<div style="border:2px solid transparent;width:50%;height:250px;float:left;padding-left:100px;">
		<div style="border:0px solid green;width:48%;float:left">
		   <img src="images/datacoursebanner.jpg" width="350px" height="210px" style="padding:5px">
		</div>
		<div style="border:0px solid green;width:50%;float:left;padding-top:100px">

			<div style="color:#59595c;font-family:Source Sans Pro;font-size:20px;padding-top:10px">Data science bootcamp</div>
			<div style="color:#59595c;font-family:Source Sans Pro;font-size:14px;padding-top:0px">-SunRise Education by Rahul Gandhi,Narandra Modi,Amit Sah</div>
			<div style="color:orange;font-family:Source Sans Pro;font-size:20px;padding-top:10px">4.8 <span ><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
			<div style="color:#59595c;font-family:Source Sans Pro;font-size:14px;padding-top:0px">&#9675; 6-months &nbsp;&nbsp; &#9675; 354lectures &nbsp;&nbsp; &#9675; All Levels</div>

		</div>
	</div>
	       <div style="border:0px solid red;width:1%;height:250px;float:left"></div>
	<div style="border:2px solid #dddddd;border-top:0px;width:19%;height:250px;float:left">
	
				<div style="color:black;margin-top:0px;font-family:Source Sans Pro;font-size:15px;;padding-top:30px;text-align:left" >
					<b>Order Summary</b>	
					<div style="color:grey;margin-top:0px;font-family:Source Sans Pro;font-size:15px;padding-left:10px;padding-top:30px;text-align:left" >
						Items:<span style="float:right;padding-right:10px">1</span><br>
						Total:<span style="float:right;padding-right:10px">₹ 1</span><br>
						Promotion Applied:<span style="float:right;padding-right:10px">₹ 0</span><br>

						</div >
					<div style="border-top:2px solid #dddddd;width:90%;height;margin:10px">

						<div style="color:black;margin-top:0px;font-family:Source Sans Pro;font-size:15px;padding-top:10px;text-align:left;color:#4FB0AE" >
						<b>Grand Total: <span style="float:right;padding-right:10px;color:#4FB0AE">₹ 1</span></b></div>
					</div>
					<div class="forgetpassword"><span style="color:grey;"><a href="index.php" class="link" style="color:#4FB0AE;padding-left:70px;"> Cancle Transaction</a></div>

				</div>
	</div>
	</div>
	
	</div>
	<br>
	<br>
	<br>
	<pre>
	</pre>
	<form method="post"  	action="./PaytmKit/pgRedirect.php" style="padding-left:100px">
		<table  >
			<tbody>
				<tr>
					<th >S.No</th>
					<th>Label</th>
					<th>Details</th>
				</tr>
				<tr>
					<td >1</td>
					<td><label>order id::*</label></td>
					<td ><input class="textfiled" id="ORDER_ID"  tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td >2</td>
					<td ><label>CUSTID ::*</label></td>
					<td ><input  class="textfiled1" id="CUST_ID"  tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php 	echo "".$_SESSION['user_name'];
?>" readonly></td>
				</tr>
				<tr>
					<td >3</td>
					<td ><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input   class="textfiled"id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td >4</td>
					<td ><label>Channel ::*</label></td>
					<td><input   class="textfiled1"id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td >5</td>
					<td ><label>txnAmount*</label></td>
					<td><input   class="textfiled" title="TXN_AMOUNT"  tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="1">
					</td>
				</tr>
				<tr>
					
					<td></td>
					<td></td>
					<td><input class="btn" value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
	</form>

</body>
</html>
