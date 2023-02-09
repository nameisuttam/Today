<?php
    // $server = "localhost";
    // $username = "root";
    // $password = "OceaN";
    // $db = "vimal";
    $conn = mysqli_connect("localhost","root","OceaN","vimal") or die("error");

    function pre($data){
        echo "<pre>"; 
        
            print_r($data);
        echo "</pre>";
    }
?>