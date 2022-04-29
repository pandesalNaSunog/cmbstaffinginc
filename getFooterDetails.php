<?php
    include('admin/connection.php');
    $con = connect();

    $query = "SELECT * FROM footer";
    $footer = $con->query($query) or die($con->error);
    $query = "SELECT branding_image FROM branding";
    $brandingImage = $con->query($query) or die($con->error);
    $row = $footer->fetch_assoc();
    $brandingImageRow = $brandingImage->fetch_assoc();

    echo json_encode(array($row,$brandingImageRow));
?>