<?php

include 'connectdb.php';

function getAllCustomers() {
    $conn = Connect();

    $query = 'SELECT * FROM customer';
    $result = $conn->query($query);
    $data =[];
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $conn->close();
    return $data;
}

function findCustomers($find){
    $conn = Connect();

    $query = "SELECT * FROM customer WHERE cus_fname OR cus_lname LIKE '%$find%'";
    $result = $conn->query($query); 
    $data=[]; //data set
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conn->close();
    return $data;
}

function deleteCustomers($cuscode){
    $conn = Connect();

    $query = "DELETE FROM customer WHERE cus_code='$cuscode'";
    $result = $conn->query($query); 
    $conn->close();
    if($result) return true; 
    
    return false;
}

