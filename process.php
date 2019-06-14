<?php
$username=$_POST['user'];
$password=$_POST['pass'];
echo $username;
$con=mysqli_connect("localhost","root","","employee");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{

$result=mysqli_query($con,"select * from user_detail where user='".$username."' and pass='".$password."'");


$row=mysqli_fetch_array($result);
echo $row['user'];
    
if($row['user']==$username && $row['pass']==$password && $row['isgrp_head']=="1")
{
    
    header('Location:login/leave_approve.php');
      
}
    elseif($row['user']==$username && $row['pass']==$password && $row['isgrp_head']=="2" )
{
     header('Location:login/form/from.php');   
}
else{
     header('Location:login.php'); 
	echo "failed to connect";
}
}
?>