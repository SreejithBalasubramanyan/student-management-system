<?php

$name=$_POST['name'];

$occup=$_POST['occup'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];

$email=$_POST['email'];
$mob=$_POST['mob'];
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$address=$_POST['address'];

$link = mysqli_connect("localhost", "root", "", "gec");

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
$sql = "INSERT INTO gec(name,occup,gender,dob,email,mob,branch,semester,address) VALUES ('$name','$occup','$gender','$dob','$email','$mob','$branch','$semester','$address')";

if(mysqli_query($link, $sql)){

    echo "Records inserted successfully.";

} else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

mysqli_close($link);

?>