<?php
include "../connection.php";

$userName = $_POST['user_name']??null;
$userPhone = $_POST['user_phone'] ??null;
$userPassword = md5($_POST['user_password']??null) ;

$sqlQuery = "INSERT INTO users_tbl (user_name, user_phone, user_password) VALUE ('$userName','$userPhone','$userPassword')";

$resultOfQuery = $conn-> query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array('success'=>true));
}
else
{
    echo json_encode(array('success'=>false));

}