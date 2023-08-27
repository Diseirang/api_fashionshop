<?php
include "../connection.php";

$userPhone = $_POST['user_phone']??null;
$userPassword = md5($_POST['user_password']??null);

$sqlQuery = "SELECT * FROM users_tbl WHERE user_phone = '$userPhone' AND user_password='$userPassword'";

$resultOfQuery = $conn-> query($sqlQuery);

if($resultOfQuery->num_rows>0) // allowed user to login
{
    $userRecord =array();
    while($rowFound = $resultOfQuery-> fetch_assoc())
    {
        $userRecord= $rowFound;
    }
    echo json_encode(
        array(
            'login'=>true,
            'userData'=> $userRecord,
        )
    );
}
else // do not allowed user to login
{
    echo json_encode(array('login'=>false));

}