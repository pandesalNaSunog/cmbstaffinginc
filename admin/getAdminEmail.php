<?php
    include('connection.php');
    $con = connect();

    $query = "SELECT email FROM admin_creds";
    $email = $con->query($query) or die($con->error);
    $data = $email->fetch_assoc();
    echo $data;
?>