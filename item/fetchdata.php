<?php
include "../connection.php";

$sqlQuery = "SELECT * FROM items_tbl ORDER BY item_id DESC";

$resultOfQuery = $conn-> query($sqlQuery);

if($resultOfQuery->num_rows>0) // allowed user to login
{
    $allItemRecord =array();
    while($rowFound = $resultOfQuery-> fetch_assoc())
    {
        $allItemRecord[]= $rowFound;
    }
    echo json_encode(
        array(
            'success'=>true,
            'allItemData'=> $allItemRecord,
        )
    );
}
else // do not allowed user to login
{
    echo json_encode(array('success'=>false));

}