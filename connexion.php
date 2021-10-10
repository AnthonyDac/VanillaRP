<?php      
    $host = "vps82340.serveur-vps.net:3306";  
    $user = "serveuragain";  
    $password = 'motdepasse';  
    $db_name = "VanillaRP";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 