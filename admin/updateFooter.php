<?php
    include('connection.php');
    $con = connect();

    if(isset($_POST)){
        $email = $_POST['emailInfo'];
        $contact = $_POST['contactInfo'];
        $office = $_POST['officeInfo'];

        $query = "SELECT * FROM footer";
        $footer = $con->query($query) or die($con->error());
        $data = array();

        while($row = $footer->fetch_assoc()){
            $data[] = $row;
        }

        if(count($data) > 0){
            $query = "UPDATE footer SET phone = '$contact', email = '$email', office = '$office'";
            $response = 'updated';
        }else{
            $query = "INSERT INTO footer(`phone`, `email`, `office`) VALUES('$contact', '$email', '$office')";
            $response = 'inserted';
        }
        $con->query($query) or die($con->error);

        echo $response;

    }
?>