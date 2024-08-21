<?php 
$host = "localhost";
$username = "root";
$password  = "";
$Dbname = "college";

$conn =mysqli_connect($host,$username,$password,$Dbname); 

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    //echo "Connected successfully!";  
}



?>