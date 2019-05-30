<?php include("includes.php");

verifyUser();

$id = $_POST['id'];
removeProduct($connect, $id);

header("Location: store.php?removed=true");
die(); ?>

<?php
include("bottom.php");
?>