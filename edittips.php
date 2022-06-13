<?php

include 'config.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];





$sql = " UPDATE tips SET title='$title', description='$description' WHERE tid='$id' ";

if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
//    echo "Error: " . $sql . "<br>" . $conn->error;
     header('Location:kitchentips.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
