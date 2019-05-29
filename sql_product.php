<?php
function product_list($connect) {
  $products = array();
  $result = mysqli_query($connect, "select p.*, c.name as category_name from products as p join category as c on p.category_id=c.id");
  while($product = mysqli_fetch_assoc($result)) {
    array_push($products, $product);
  }
  return $products;
}

function insertProduct($connect, $name, $price, $description, $category_id, $used) {
  $query = "insert into products (name, price, description, category_id, used) values ('{$name}', {$price}, '{$description}', {$category_id}, {$used})";
  $insertResult = mysqli_query($connect, $query);
  return $insertResult;
}

function lookForProduct($connect, $id) {
  $query = "select * from products where id = {$id}";
  $result = mysqli_query($connect, $query);
  return mysqli_fetch_assoc($result);
}

function changeProduct($connect, $id, $name, $price, $description, $category_id, $used) {
  $query = "update products set name = '{$name}', price = {$price}, description = '{$description}', category_id = {$category_id}, used = {$used} where id = '{$id}'";
  return mysqli_query($connect, $query);
}

function removeProduct($connect, $id) {
  $query = "delete from products where id = {$id}";
  return mysqli_query($connect, $query);
} 

function usedYesOrNo($used) {
  return $used == 1 ? 'Usado' : 'Não usado';
}