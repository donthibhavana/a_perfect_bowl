<?php
include'config.php';

$id=$_GET["id"];


$sql="DELETE FROM recipes WHERE id='$id';";
	 
if($conn->query($sql)===TRUE){
echo "Deleted Successfully";
header('location:recipes.php');
} else{
echo "Error:" .$sql."<br>".$conn->error;}
?>