<?php

include 'config.php';

$name = $_GET['name'];
$email = $_GET['email'];
$gender = $_GET['gender'];
$pass = $_GET['pass'];
$dob = $_GET['SelectedDate'];


$con=mysqli_connect($hostname, $username, $password,$dbname);
mysqli_query ($con,"set character_set_results='utf8'");
$query_json = "SELECT * from register where email='$email'";
            $result = mysqli_query($con,$query_json);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
    
$query_dis="INSERT INTO register (name, email, gender, pass, dob)
VALUES ('$name', '$email', '$gender', '$pass','$dob')";
//echo $query_dis; 

$retval_dis = mysqli_query($con,$query_dis);

mysqli_close($con);
 echo '<script> alert("Registerd Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'login.html';</script>";
}else{
      echo '<script> alert("User exists please try again")</script>';
      echo "<script type='text/javascript'> document.location = 'register.html';</script>";
}
?>
