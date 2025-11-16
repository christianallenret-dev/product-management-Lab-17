<?php

include 'connectdb.php';

function getAllProducts() {
    $conn = Connect();

    $query = 'SELECT * FROM product';
    $result = $conn->query($query);
    $data =[];
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $conn->close();
    return $data;
}

