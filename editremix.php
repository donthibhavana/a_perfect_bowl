<?php

include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$ing1 = $_POST['ing1'];
$ing2 = $_POST['ing2'];
$step1= $_POST['step1'];
$step2 = $_POST['step2'];
$step3 = $_POST['step3'];


//SELECT `mid`, `name`, `image`, `mixtype`, `ing1`, `ing2`, `step1`, `step2`, `step3` FROM `remix` WHERE


$sql = " UPDATE remix SET name='$name', ing1='$ing1',ing2='$ing2',step1='$step1',step2='$step2',step3='$step3' WHERE mid='$id' ";

if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
//    echo "Error: " . $sql . "<br>" . $conn->error;
     header('Location:remix.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
