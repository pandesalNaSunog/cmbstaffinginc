<?php

    include('connection.php');
    $con = connect();

    if(isset($_POST)){
        $serviceId = $_POST['service_id'];
        $serviceTitle = $_POST['service_title'];
        $serviceDescription = $_POST['service_description'];

        $query = "UPDATE services SET title = '$serviceTitle', description = '$serviceDescription' WHERE id = '$serviceId'";
        $con->query($query) or die($con->error);
        

        echo 'updated';
    }
    
?>