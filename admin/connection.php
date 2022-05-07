<?php
    function connect(){
        // $hostname="localhost";
        // $username="u568496919_pande";
        // $password="Viperdodge11";
        // $database="u568496919_cmb";

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