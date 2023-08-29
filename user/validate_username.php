<?php
include "../connection.php";

$userName = $_POST['user_name']??null;

$sqlQuery = "SELECT * FROM users_tbl WHERE user_name = '$userName'";

$resultOfQuery = $conn-> query($sqlQuery);

if($resultOfQuery->num_rows>0)
{
    echo json_encode(array('usernameFound'=>true));
}
else
{
    echo json_encode(array('usernameFound'=>false));
}
