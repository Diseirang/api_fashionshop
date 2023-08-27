<?php
include '../connection.php';

$itemName = $_POST['name'] ?? null;
$itemRating = $_POST['rating'] ?? null;
$itemTags = $_POST['tags'] ?? null;
$itemPrice = $_POST['price'] ?? null;
$itemSizes = $_POST['sizes'] ?? null;
$itemColors = $_POST['colors'] ?? null;
$itemDescription = $_POST['description'] ?? null;
$itemImage = $_POST['image'] ?? null;

$sqlQuery = "INSERT INTO items_tbl SET name='$itemName', rating='$itemRating', tags='$itemTags', price='$itemPrice', sizes='$itemSizes', colors='$itemColors', description='$itemDescription', image='$itemImage'";

$resultOfQuery = $conn->query($sqlQuery);

if ($resultOfQuery) {
    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false));
}