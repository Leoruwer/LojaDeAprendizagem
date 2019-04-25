<?php
function categoryList($connect) {
  $categories = array();
  $query = "select * from category";
  $result = mysqli_query($connect, $query);
  while($category = mysqli_fetch_assoc($result)) {
    array_push($categories, $category);
  }
  return $categories;
}