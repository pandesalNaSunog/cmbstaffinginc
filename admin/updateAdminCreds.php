<?php
    include('connection.php');
    $con = connect();

    if(isset($_POST)){
        session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];

        $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "UPDATE admin_creds SET email = '$email', password = '$encryptedPassword'";
        $con->query($query) or die($con->error);
        if(isset($_SESSION['email'])){
            unset($_SESSION['email']);
        }
        echo 'ok';
    }
?>