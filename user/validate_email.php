<?php
include "../connection.php";

$userEmail = $_POST['user_email']??null;

$sqlQuery = "SELECT * FROM users_tbl WHERE user_email = '$userEmail'";

$resultOfQuery = $conn-> query($sqlQuery);

if($resultOfQuery->num_rows>0)
{
    echo json_encode(array('emailFound'=>true));
}
else
{
    echo json_encode(array('emailFound'=>false));
}
