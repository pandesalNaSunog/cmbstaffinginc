<?php
    include('connection.php');
    $con = connect();


    $serviceId = $_GET['service_id'];
    $query = "SELECT * FROM services WHERE id = '$serviceId'";
    $services = $con->query($query) or die($con->error);
    
    $row = $services->fetch_assoc();

    echo json_encode($row);
?>