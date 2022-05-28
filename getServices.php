<?php
    include('admin/connection.php');
    $con = connect();

    $query = "SELECT * FROM services LIMIT 4";
    $services = $con->query($query) or die($con->error);
    $data = array();
    while ($row = $services->fetch_assoc()){
        $data[] = $row;
    }
    echo json_encode($data);
?>