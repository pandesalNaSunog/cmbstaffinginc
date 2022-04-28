<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(isset($_SESSION['email'])){
        echo 'panel.html';
    }else{
        include('connection.php');
        $con = connect();

        if(isset($_GET)){
            $query = "SELECT branding_image FROM branding";
            $branding_image = $con->query($query) or die($con->error);
            $data = array();
            $row = $branding_image->fetch_assoc();
            echo json_encode($row);
        }
    }
    
?>