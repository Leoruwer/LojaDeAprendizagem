<?php 
session_start();
function userIsLogged (){
  return isset($_COOKIE["user_logged"]);
}

function verifyUser() {
  if(!userIsLogged()) {
    header("Location: index.php?securityFail=true");
    die();
  }
}

function userLogged() {
  return isset($_SESSION["user_logged"]);
}

function loginUser($email) {
  return $_SESSION["user_logged"];
}

function logout() {
  session_destroy();
}