<?php
    include('admin/connection.php');
    $con = connect();

    $query = "SELECT * FROM footer";
    $footer = $con->query($query) or die($con->error);
    $row = $footer->fetch_assoc();

    echo json_encode($row);
?>