<?php
    include('connection.php');
    $con = connect();

    if(isset($_POST)){
        $serviceTitle = $_POST['title'];
        $serviceDescription = $_POST['description'];

        $query = "SELECT * FROM services WHERE title = '$serviceTitle' AND description = '$serviceDescription'";
        $service = $con->query($query) or die($con->error);
        $serviceData = array();

        while($row = $service->fetch_assoc()){
            $serviceData[] = $row;
        }

        if(count($serviceData) > 0){
            $response = "already exists";
        }else{
            $query = "INSERT INTO services(`title`, `description`) VALUES ('$serviceTitle', '$serviceDescription')";
            $con->query($query) or die($con->error);
            $response = "success";
        }

        echo $response;
    }
?>