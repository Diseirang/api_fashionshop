<?php
include "../connection.php";

$userPhone = $_POST['user_phone']??null;

$sqlQuery = "SELECT * FROM users_tbl WHERE user_phone = '$userPhone'";

$resultOfQuery = $conn-> query($sqlQuery);

if($resultOfQuery->num_rows>0)
{
    echo json_encode(array('phoneFound'=>true));
}
else
{
    echo json_encode(array('phoneFound'=>false));
}
