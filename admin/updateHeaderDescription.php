<?php
    include('connection.php');
    $con = connect();

    if(isset($_POST['header_description'])){
        $title = $_POST['header_description'];
        $query = "SELECT * FROM header_description";
        $headerTitle = $con->query($query) or die($con->error);

        $data = array();

        while($row = $headerTitle->fetch_assoc()){
            $data[] = $row;
        }

        if(count($data) > 0){
            $query = "UPDATE header_description SET descript = '$title'";
            $response = 'updated';
        }else{
            $query = "INSERT INTO header_description (`descript`) VALUES('$title')";
            $response = 'inserted';
        }
        $con->query($query);
        echo $response;
    }
    
?>