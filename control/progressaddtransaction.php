<?php

require("../connection.php");

$item_id = $_POST['item'];
$status = $_POST['status'];
$quantity = $_POST['kuantitas'];

$query_insert = mysqli_query($connect, "INSERT INTO transaction (status,quantity,item_id)  
VALUES ('$status',$quantity, $item_id)");

if ($status == "masuk") {
    $query_update = mysqli_query($connect, "UPDATE item SET quantity = quantity + $quantity WHERE id = $item_id");
} else {
    $query_update = mysqli_query($connect, "UPDATE item SET quantity = quantity - $quantity WHERE id = $item_id");
}
header("Location: ../admin.php");
