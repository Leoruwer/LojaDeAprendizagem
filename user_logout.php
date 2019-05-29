<?php include("includes.php"); 
logout();
header("Location: index.php?logout=true");
die();