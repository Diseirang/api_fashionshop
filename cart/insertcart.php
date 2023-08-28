<?php
include '../connection.php';

$user_id = $_POST['user_id'] ?? null;
$item_id = $_POST['item_id'] ?? null;
$quantity = $_POST['quantity'] ?? null;
$color = $_POST['color'] ?? null;
$size = $_POST['size'] ?? null; 

$sqlQuery = "INSERT INTO cart_tbl SET user_id='$user_id', item_id='$item_id', quantity='$quantity', color='$color', size='$size'";

$resultOfQuery = $conn->query($sqlQuery);

if ($resultOfQuery) {
    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false));
}