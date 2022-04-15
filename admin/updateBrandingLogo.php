<?php
    include('connection.php');
    $con = connect();

    if(isset($_FILES['branding_image'])){
        $image_name = $_FILES['branding_image']['name'];
        $tmp_name = $_FILES['branding_image']['tmp_name'];
        $file_extension = pathinfo($image_name, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);


        $allowed_extensions = array('jpg','jpeg','png');

        if(in_array($file_extension, $allowed_extensions)){
            $filepath = "images/".uniqid().'.'.$file_extension;
            move_uploaded_file($tmp_name, $filepath);
            // check if branding image table is empty

            $query = "SELECT * FROM branding";
            $branding = $con->query($query) or die($con->error);
            $count = $branding->num_rows;
            $data = array();
            while($row = $branding->fetch_assoc()){
                $data[] = $row;
            }
            //if so, then insert new data
            if(count($data) == 0){
                $query = "INSERT INTO branding(`branding_image`, `branding_name`) VALUES('$filepath', null)";
            }
            //otherwise, update data
            else{
                $query = "UPDATE branding SET branding_image = '$filepath'";
            }
            $con->query($query) or die($con->error);

            echo $filepath;
        }else{
            echo 'not an image';
        }
    }
?>