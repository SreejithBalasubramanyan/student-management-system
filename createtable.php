<?php

/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "gec");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Attempt create table query execution
// Attempt create table query execution

$sql = "create table user(

    

)";
//INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";

if(mysqli_query($link, $sql)){

    echo "Table created successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
/*$result = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";

if(mysqli_query($link, $result))
{

   echo "Records inserted successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);*/

 
// Close connection



if(mysqli_query($link, $sql)){

    echo "Table created successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
/*$result = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";

if(mysqli_query($link, $result))
{

   echo "Records inserted successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);*/

 
// Close connection

mysqli_close($link);
?>
