<?php
include "config.php";

//SELECT `mid`, `name`, `image`, `mixtype`, `ing1`, `ing2`, `step1`, `step2`, `step3` FROM `remix` WHERE 1

$rid = $_POST['rid'];

//echo $rid;
$name = $_POST['name'];
$ing1 = $_POST['ing1'];
$ing2 = $_POST['ing2'];

$step1 = $_POST['step1'];
$step2 = $_POST['step2'];
$step3 = $_POST['step3'];

$mixtype = $_POST['mixtype'];


$target_path = "images/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    $sql = "INSERT INTO  remix (name,ing1,ing2,step1,step2,step3,mixtype,image)
            values('$name','$ing1','$ing2','$step1','$step2','$step3','$mixtype',' $target_path' )";

    if ($conn->query($sql) === TRUE) {
       
        header('Location:remix.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} 

?>