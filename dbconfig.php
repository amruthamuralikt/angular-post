<?php
//header('locattion:login.php');
define ('sname',"localhost");
define ('uname',"root");
define ('password',"");
define ('db',"ang_post");

$mysqli= new mysqli(sname,uname,password,db);
if(!$mysqli)
{

  die("Connection failed: " . mysqli_connect_error());
}

?>