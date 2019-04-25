<?php include("includes.php");

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];

if(array_key_exists('used', $_POST)) {
  $used = "true";
} else {
  $used = "false";
}

if(changeProduct($connect, $id, $name, $price, $description, $category_id, $used)) { ?>
  <p class="text-success">O Produto: <?=$name; ?>, foi alterado com sucesso!</p>
<?php } else {
    $errorMsg = mysqli_error($connect);
?>
  <p class="text-danger">Produto: <?= $name; ?>, não foi alterado: <?= $errorMsg?></p>
<?php
}
?>

<?php include("bottom.php")?>