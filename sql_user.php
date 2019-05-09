<?php
function lookForUser($connect, $email, $password) {
  $md5Password = md5($password);
  $query = "select * from users where email='{$email}' and password='{$md5Password}'";
  $result = mysqli_query($connect, $query);
  $user = mysqli_fetch_assoc($result);
  return $user;
}