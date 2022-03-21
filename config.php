<?php 

$server="localhost";
$username="id18650991_internshiptask";
$password="L)<a[1Q7Ux|U9e9R";
$db="id18650991_internship";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>