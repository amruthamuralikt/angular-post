<?php
$conn = mysqli_connect("localhost","root","","ang_post");
$info = (array)json_decode(file_get_contents("php://input"));
if(count($info) > 0)
{   $name = mysqli_real_escape_string($conn, $info['name']);
    $age = mysqli_real_escape_string($conn,  $info['email']);
    $email = mysqli_real_escape_string($conn,  $info['age']);
    $time = mysqli_real_escape_string($conn,  $info['time']);
    $query = "INSERT INTO time_ticker (name, email, age, time) VALUES ('$name', '$email', '$age','$time')";
    if(mysqli_query($conn,$query)) {
        echo "Data inserted succesfully";
       
    }
    else{
        echo "Data not insterted";
    }

    $re="SELECT * FROM time_ticker WHERE name='$name'";
$result=mysqli_query($conn,$re);
while($res=mysqli_fetch_assoc($result))
{
  echo "<br><br> <b>Name</b>: " . $res['name']."<br><br>";   
         
  echo "<b>Contact Number</b>: " . $res['email']."<br><br>";
 
  echo "<b>Email</b>: " . $res['age']."<br><br>";

  echo "<b>Email</b>: " . $res['time']."<br><br>";
 
}
}
?>
