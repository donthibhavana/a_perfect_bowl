<?php
include'config.php';

$id=$_GET["id"];


$sql="DELETE FROM recipebook WHERE rid='$id';";
	 
if($conn->query($sql)===TRUE){
echo "Deleted Successfully";
header('location:categories.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;}
?>