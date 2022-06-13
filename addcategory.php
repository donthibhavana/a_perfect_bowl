<?php
include "config.php";


$name = $_POST['name'];


$target_path = "images/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    $sql = "INSERT INTO  recipebook (name, image)
            values('$name',' $target_path' )";

    if ($conn->query($sql) === TRUE) {
       
        header('Location:categories.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} 

?>