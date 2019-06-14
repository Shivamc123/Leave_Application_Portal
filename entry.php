<?php
$name=$_POST['name'];
$user_id=$_POST['user_id'];
$username=$_POST['user'];
$password=$_POST['pass'];
$con=mysqli_connect("localhost","root","","employee");

// Check connection
if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

elseif($username=="NULL" && $password=="NULL" && $user=="NULL" && $name="NULL")
{
header('Location:signin.php');
}
else
{
 $result = mysqli_query($con, "INSERT INTO user_detail

        (name,user_id,user,pass,isgrp_head)

        VALUES
         ('".$name."', 
          
        '".$user_id."',

        '".$username."',

        '".$password."',2)");

header('Location:leaveportal.php'); 
}

?>