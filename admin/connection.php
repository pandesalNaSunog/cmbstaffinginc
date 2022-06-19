<?php
    function connect(){
        $hostname="localhost";
        $username="u568496919_pande";
        $password="Viperdodge11";
        $database="u568496919_cmb";

        // $hostname="localhost";
        // $username="root";
        // $password="";
        // $database="cmb_db";

        $con=new mysqli($hostname,$username,$password,$password);

        if(mysqli_connect_error()){
            die("Database connection failed: " . mysqli_connect_error());
        }

        return $con;
    }
    
?>