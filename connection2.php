<?php

$servername="localhost";
$username="root";
$password="";
$dbname="project";


$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn){
	echo"connection okay";
}
else{
	echo "failed".mysqli_connect_error();
}

?>