<?php

    include('connection.php');
    $con = connect();

    if(isset($_POST)){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM admin_creds WHERE email = '$email'";
        $user = $con->query($query) or die($con->error);
        $data = array();

        while($row = $user->fetch_assoc()){
            $data[] = $row;
        }
        
        if(count($data) != 0){
            if(password_verify($password, $data[0]['password'])){
                $response = 'ok';
            }
        }else{
            $response = 'invalid';
        }
        echo $response;
    }
?>