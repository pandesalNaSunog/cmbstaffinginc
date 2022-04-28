<?php
    include('connection.php');
    $con = connect();

    if(isset($_POST['header_title'])){
        $title = $_POST['header_title'];
        $query = "SELECT * FROM header_title";
        $headerTitle = $con->query($query) or die($con->error);

        $data = array();

        while($row = $headerTitle->fetch_assoc()){
            $data[] = $row;
        }

        if(count($data) > 0){
            $query = "UPDATE header_title SET title = '$title'";
            $response = 'updated';
        }else{
            $query = "INSERT INTO header_title (`title`) VALUES('$title')";
            $response = 'inserted';
        }
        $con->query($query);
        echo $response;
    }
    
?>