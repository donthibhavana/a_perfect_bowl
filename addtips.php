<?php
include "config.php";


$title = $_POST['title'];
$des = $_POST['des'];

$target_path = "images/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    $sql = "INSERT INTO  tips (title,description, image)
            values('$title','$des',' $target_path' )";

    if ($conn->query($sql) === TRUE) {
       
        header('Location:kitchentips.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} 

?>