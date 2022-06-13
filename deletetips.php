<?php
include'config.php';

$id=$_GET["id"];


$sql="DELETE FROM tips WHERE tid='$id';";
	 
if($conn->query($sql)===TRUE){
echo "Deleted Successfully";
header('location:kitchentips.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;}
?>