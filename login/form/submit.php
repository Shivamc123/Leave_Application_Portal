<?php
$type=$from_date=$to_date=$total_days=$reason="";  
$today = date("Y-m-d");

   if (isset($_POST['submit'])) {
      $type = $_POST['type'];
      $from_date = $_POST['from_date']; //this is line 32 and so on...
      $to_date = $_POST['to_date'];
      $total_days = $_POST['total_days'];
      $reason = $_POST['reason'];
      $name = $_POST['name'];
      $id = $_POST['id'];

   }

//echo $type;

$con=mysqli_connect("localhost","root","","employee");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{

    $result = mysqli_query($con, "INSERT INTO leave_apply

        (user_name,user_id,leave_type, from_date,to_date,total_days,reason,status,applied_date,approv_id)

        VALUES
         ('".$name."', 
          
        '".$id."',

        '".$type."',

        '".$from_date."',

        '".$to_date."',

        '".$total_days."',

        '".$reason."','submitted','".$today."',2)");

if($result){

    echo("<br>Input data is succeed");
    header('Location:../leave_history.php');

} 
    else{

    echo("<br>Input data is fail");
        echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";

}
}
?>