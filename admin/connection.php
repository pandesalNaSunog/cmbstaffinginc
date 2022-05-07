<?php
    function connect(){
        $hostname="localhost";
        $username="root";
        $password="";
        $database="cmb_db";

        $con=new mysqli($hostname,$username,$password,$database);

        if($con->connect_error){
            echo $con->connect_error;
        }

        return $con;
    }
    
?>