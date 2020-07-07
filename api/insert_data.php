<?php
require '..../dbconfig.php';
$inf = file_get_contents("php://input");
$info = json_decode($inf);

if(count($info) > 0)
//if(isset($_POST['insert']))

{
$name = mysqli_real_escape_string($mysqli, $info->name);
$email = mysqli_real_escape_string($mysqli, $info->email);
$age = mysqli_real_escape_string($mysqli, $info->age);

$sql = "INSERT INTO time_ticker (name,email,age) VALUES ('$name','$email','$age')";
if (mysqli_query($mysqli,$sql)) 
{
    echo "New record created successfully";
  } 
  else
   {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
}

$mysqli -> close();
?>
