<?php

    include('connection.php');
    $con = connect();

    if(isset($_POST)){
        $brandingName = $_POST['branding_name'];
        
        $query = "SELECT * FROM branding";
        $branding = $con->query($query) or die($con->error);
        $data = array();

        while($row = $branding->fetch_assoc()){
            $data[] = $row;
        }

        $count = count($data);

        if($count == 0){
            $query = "INSERT INTO branding(`branding_name`,`branding_image`) VALUES('$brandingName', null)";
        }else{
            $query = "UPDATE branding SET branding_name = '$brandingName'";
        }
        $con->query($query) or die($con->error);

        echo $brandingName;
    }
?>