<?php

//define db connection parameters:
$servername="localhost";
$username="root";
$password="";
$dbname="barnaba";


//connect with the database:
//$conn=mysqli_connect($host,$username,$password,$dbname);
$conn = mysqli_connect($servername, $username, $password, $dbname);
 //check connection:
 if(!$conn){
     die("Connection Failed" . mysqli_connect_error());
 }

 //get user inputs:
 $Name=$_POST["Name"];
 $Email=$_POST["Email"];
 $Gender=$_POST["Gender"];
 $PhoneNumber=$_POST["PhoneNumber"];
 $Comment=$_POST["Comment"];

 //query the database:
 $sql="INSERT INTO comments(Name,Email,Gender,PhoneNumber,Comment) VALUES('$Name','$Email','$Gender','$PhoneNumber','$Comment')";

 $result=mysqli_query($conn,$sql);
 if(mysqli_query($conn,$sql)){
     echo "Message Sent successfully!";
 }else{
     echo "Error:  " .$sql  . "<br>"  . mysqli_error($conn);
 }

 //close connection:
 mysqli_close($conn);
?>