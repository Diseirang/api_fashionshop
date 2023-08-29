<?php
include "../connection.php";

$admin_name = $_POST['admin_name'] ?? null;
$admin_password = $_POST['admin_password'] ?? null;

$sqlQuery = "SELECT * FROM admin_tbl WHERE admin_name = '$admin_name' AND admin_password='$admin_password'";

$resultOfQuery = $conn->query($sqlQuery);

if ($resultOfQuery->num_rows > 0) // allowed admin to login
{
    echo json_encode(array('login' => true));
} else // do not allowed admin to login
{
    echo json_encode(array('login' => false));

}