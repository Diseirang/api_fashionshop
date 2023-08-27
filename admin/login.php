<?php
include "../connection.php";

$adminPhone = $_POST['admin_phone'] ?? null;
$adminPassword = $_POST['admin_password'] ?? null;

$sqlQuery = "SELECT * FROM admin_tbl WHERE admin_phone = '$adminPhone' AND admin_password='$adminPassword'";

$resultOfQuery = $conn->query($sqlQuery);

if ($resultOfQuery->num_rows > 0) // allowed admin to login
{
    echo json_encode(array('login' => true));
} else // do not allowed admin to login
{
    echo json_encode(array('login' => false));

}