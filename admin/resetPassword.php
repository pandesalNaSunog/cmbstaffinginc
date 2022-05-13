<?php
    include('connection.php');
    $con = connect();


    $password = "password";
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE admin_creds SET password = '$password'";
    $con->query($query) or die($con->error);
    echo 'ok';
?>