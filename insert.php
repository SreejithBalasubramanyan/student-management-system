<?php

$name=$_POST['name'];

$dob=$_POST['dob'];

$email=$_POST['email'];
$password=$_POST['password'];
$mob=$_POST['mob'];

$temp=$name.date("d_m_y");
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
		// $temp=$name.date("d.m.y"); 
	   //rename($file_name,$name);
         move_uploaded_file($file_tmp,"image/".$temp);
         echo "Success";
      }else{
         print_r($errors);
      }
   }


$link = mysqli_connect("localhost", "id7445712__root", "jithu", "id7445712__book");

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
$sql = "INSERT INTO gec(name,dob,email,password,mob,image) VALUES ('$name','$dob','$email','$password','$mob','$temp')";

if(mysqli_query($link, $sql)){

    echo "Records inserted successfully.";

} else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

mysqli_close($link);

?>

