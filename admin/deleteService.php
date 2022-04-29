<?php

    include('connection.php');
    $con = connect();
    if(isset($_POST)){
        $serviceId = $_POST['service_id'];

        $query = "DELETE FROM services WHERE id = '$serviceId'";
        $con->query($query) or die($con->error);

        echo 'deleted';
    }
?>