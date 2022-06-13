<?php

include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];



$sql = " UPDATE recipebook SET name='$name' WHERE rid='$id' ";

if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
//    echo "Error: " . $sql . "<br>" . $conn->error;
     header('Location:categories.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
