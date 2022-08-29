<?php 
session_start();
echo "welcome ".$_SESSION['user_name'];
echo "welcome ".$_SESSION['pass_word'];
?>


<?php 
$userprofile=$_SESSION['user_name'];
if($userprofile == true){
	
}
else{
	header('location:login.php');
}


?>
<html>
accha hua log in kr lia
<a href="logout.php"><input type="submit" name="" value="logout" style="background:green;color:white;height:35px;width:100px;margin-top:2px;font-size:18px;border:0;border-radius:5px;cursor:pointer"></a>
</html>