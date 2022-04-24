<?php
    include('connection.php');
    $con = connect();

    $query = "SELECT title FROM header_title";
    $title = $con->query($query) or die($con->error);
    $titleRow = $title->fetch_assoc();
    $query = "SELECT descript FROM header_description";
    $description = $con->query($query) or die($con->error);
    $descRow = $description->fetch_assoc();

    $data = array($titleRow,$descRow);
    echo json_encode($data);
?>