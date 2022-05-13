<?php
    include('connection.php');
    $con = connect();

    if(isset($_FILES['service_image'])){
        $service_id = $_POST['service_id'];
        $filename = $_FILES['service_image']['name'];
        $tmp_name = $_FILES['service_image']['tmp_name'];
        $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);

        $allowed_extensions = array('jpg','jpeg','png');

        if(in_array($file_extension, $allowed_extensions)){
            $filename = "images/".uniqid().'.'.$file_extension;
            move_uploaded_file($tmp_name, $filename);

            $query = "UPDATE services SET image = '$filename' WHERE id = '$service_id'";
            $con->query($query) or die($con->error);

            echo 'ok';
        }
    }
?>