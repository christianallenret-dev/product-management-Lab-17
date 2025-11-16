<?php

include 'connectdb.php';

function getAllOrders() {
    $conn = Connect();

    $query = 'SELECT v.cus_code, 
                     v.inv_date,
                     v.inv_subtotal,
                     v.inv_tax,
                     v.inv_total,
                     c.cus_fname,
                     c.cus_lname  
                     FROM invoice AS v
                     INNER JOIN customer as c
                        ON c.cus_code = v.cus_code';
    $result = $conn->query($query);
    $data =[];
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $conn->close();
    return $data;
}

