<?php include("includes.php");

$user = lookForUser($connect, $_POST["email"], $_POST["password"]);
if($user == null){
  header("Location:index.php?login=0");
} else {
  header("Location:index.php?login=1");
}
die();