<?php 
session_start();
function userLogged($email) {
  return $_SESSION["user_logged"];
}

function userIsLogged (){
  return isset($_SESSION["user_logged"]);
}

function verifyUser() {
  if(!userIsLogged()) {
    header("Location: index.php?securityFail=true");
    die();
  }
}

function loginUser($email) {
  $_SESSION["user_logged"] = $email;
}

function userLoginMessages() {
  if(isset($_GET["login"]) && $_GET["login"]==1) {?>
    <p class="alert-success">Login realizado com sucesso!</p>
  <?php }
  if(isset($_GET["login"]) && $_GET["login"]==0) {?>
    <p class="alert-danger">Usuario ou senha inválida!</p>
  <?php } 
  if (isset($_GET["logout"]) && $_GET["logout"]==true) { ?>
    <p class="alert-danger">Deslogado com sucesso!</p>
  <?php }
}

function logout() {
  session_destroy();
}