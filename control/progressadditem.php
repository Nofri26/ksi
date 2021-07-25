<?php

require("../connection.php");

$itemname = $_POST['itemname'];
$price = $_POST['price'];
$unit = $_POST['unit'];

$query_insert = mysqli_query($connect, "INSERT INTO item (itemname,price,unit, quantity)  
VALUES ('$itemname','$price', '$unit', 0)");
header("Location: ../admin.php");
