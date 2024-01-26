<?php      
    $con = mysqli_connect("localhost", "root", "", "sorongcity");  
    
    if(mysqli_connect_errno()) {  
        echo("Failed to connect with MySQL: ". mysqli_connect_error());
        exit(); 
    }  
?>