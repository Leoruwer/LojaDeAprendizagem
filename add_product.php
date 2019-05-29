<?php include("includes.php");

verifyUser();

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];

if(array_key_exists('used', $_POST)) {
  $used = "true";
} else {
  $used = "false";
}

if(insertProduct($connect, $name, $price, $description, $category_id, $used)) {	?>
	<p class="text-success"><?=$name; ?> no preço: <?= $price; ?>, foi adicionado com sucesso!</p>
<?php } else {
	$errorMsg = mysqli_error($connect);
?>
	<p class="text-danger">Produto: <?= $name; ?>, não foi adicionado: <?= $errorMsg?></p>
<?php
}
?>

<?php include("bottom.php")?>