<?php
include'config.php';

$id=$_GET["id"];


$sql="DELETE FROM remix WHERE mid='$id';";
	 
if($conn->query($sql)===TRUE){
echo "Deleted Successfully";
header('location:remix.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;}
?>