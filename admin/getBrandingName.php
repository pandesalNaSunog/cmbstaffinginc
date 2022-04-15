<?php
    include('connection.php');
    $con = connect();

    if(isset($_GET)){
        $query = "SELECT branding_name FROM branding";
        $branding_name = $con->query($query) or die($con->error);
        $data = array();

        $row = $branding_name->fetch_assoc();
            

        echo json_encode($row);
    }
?>