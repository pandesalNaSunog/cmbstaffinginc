<?php
    include('connection.php');
    $con = connect();

    if(isset($_POST) && isset($_FILES['serviceImage'])){
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

            $filename = $_FILES['serviceImage']['name'];
            $tmp_name = $_FILES['serviceImage']['tmp_name'];

            $file_extenstion = pathinfo($filename, PATHINFO_EXTENSION);
            $file_extenstion = strtolower($file_extenstion);
            $allowed_extensions = array('jpg','jpeg','png');

            if(in_array($file_extenstion,$allowed_extensions)){
                $filepath = "images/" . uniqid() . '.' . $file_extenstion;
                move_uploaded_file($tmp_name,$filepath);
                $query = "INSERT INTO services(`title`, `description`,`image`) VALUES ('$serviceTitle', '$serviceDescription', '$filepath')";
                $con->query($query) or die($con->error);
                $query = "SELECT * FROM services WHERE title = '$serviceTitle' AND description = '$serviceDescription'";
                $service = $con->query($query) or die($con->error);
                $row = $service->fetch_assoc();
                $response = json_encode($row);
            }else{
                $response = 'invalid image';
            }

            
        }

        echo $response;
    }
?>