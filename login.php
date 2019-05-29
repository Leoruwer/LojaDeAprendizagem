<?php include("includes.php");

$user = lookForUser($connect, $_POST["email"], $_POST["password"]);
loginUser($user);

if($user == null){
  header("Location:index.php?login=0");
} else {
  loginUser($user["email"]);
  header("Location:index.php?login=1");
}

die();