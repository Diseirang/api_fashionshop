<?php
include "../connection.php";

$minRating = 4;
$limitItems = 5;

// $sqlQuery = "SELECT * FROM items_tbl";
$sqlQuery = "SELECT * FROM items_tbl WHERE rating >= '$minRating' ORDER BY rating DESC LIMIT $limitItems";

$resultOfQuery = $conn->query($sqlQuery);

if ($resultOfQuery->num_rows > 0) // allowed to fetch trending items
{
    $itemRecord = array();
    while ($rowFound = $resultOfQuery->fetch_assoc()) {
        $itemRecord[] = $rowFound;
    }
    echo json_encode(
        array(
            'fetched' => true,
            'itemData' => $itemRecord,
        )
    );
} else // can not fetch trending items
{
    echo json_encode(array('fetched' => false));
}
 