<?php

//ini_set('display_errors', 'On');
session_start();
include 'connection.php';

if($_SERVER['REQUEST_METHOD'] != "POST"){
	header('Location: members_only.php');
}

//if(isset($_POST['username']) && isset($_POST['password']))
//{
  $username = $_POST['username'];
  $password = $_POST['password'];
//}
$action = $_POST['action'];

//if($action == "login"){

$result = $mysqli->query("SELECT * FROM finaluser WHERE username = '$username' AND password = '$password'");
if($result->num_rows)
{
  $_SESSION['valid_user'] = $username;
  echo 'true';
  //echo $_SESSION['valid_user'];
//  header("location: members_only.php");
}
else
{
  echo "incorrect username or password";
}
//}


?>
