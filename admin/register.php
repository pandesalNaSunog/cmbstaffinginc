<?php

    include('connection.php');
    $con = connect();

    if(isset($_POST)){
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO admin_creds(`email`, `password`) VALUES('$email','$password')";
        $con->query($query) or die($con->error);

        echo 'ok';
    }
?>