<?php
include "../connection.php";

$currentOnlineUserID = $_POST['currentOnlineUserID'] ?? null;
$sqlQuery = "SELECT * FROM cart_tbl CROSS JOIN items_tbl WHERE cart_tbl.user_id = $currentOnlineUserID AND cart_tbl.item_id = items_tbl.item_id";

$resultOfQuery = $conn->query($sqlQuery);

if ($resultOfQuery->num_rows > 0) {
    $cartRecord = array();
    while ($rowFound = $resultOfQuery->fetch_assoc()) 
    {
        $cartRecord[] = $rowFound;
    }
    echo json_encode(
        array(
            'success' => true,
            'currentUserCartData' => $cartRecord,
        )
    );
} else {
    echo json_encode(array('success' => false));

}