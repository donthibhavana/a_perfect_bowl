<?php
include "config.php";

//SELECT `id`, `rid`, `image`, `name`, `ing1`, `ing2`, `ing3`, `ingothers`, `step1`, `step2`, `step3`, `step4`, `prep`, `cook` FROM `recipes` WHERE 1

$rid = $_POST['rid'];

//echo $rid;
$name = $_POST['name'];
$ing1 = $_POST['ing1'];
$ing2 = $_POST['ing2'];
$ing3 = $_POST['ing3'];
$ingothers = $_POST['ingothers'];
$step1 = $_POST['step1'];
$step2 = $_POST['step2'];
$step3 = $_POST['step3'];
$step4 = $_POST['step4'];
$prep = $_POST['prep'];
$cook = $_POST['cook'];

$tot=$prep+$cook;

$target_path = "images/";

$target_path = $target_path . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    $sql = "INSERT INTO  recipes (rid,name,ing1,ing2,ing3,ingothers,step1,step2,step3,step4,prep,cook,tot,image)
            values($rid,'$name','$ing1','$ing2','$ing3','$ingothers','$step1','$step2','$step3','$step4','$prep','$cook','$tot',' $target_path' )";

    if ($conn->query($sql) === TRUE) {
       
        header('Location:recipes.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} 

?>