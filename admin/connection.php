<?php
    function connect(){
        $hostname="127.0.0.1:3306";
        $username="u568496919_pande";
        $password="CmbPassword11";
        $database="u568496919_cmb";

        // $hostname="localhost";
        // $username="root";
        // $password="";
        // $database="cmb_db";

        $con = new mysqli($hostname,$username,$password,$database);
        return $con;
    }
    
?>