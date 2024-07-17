<?php      
    $host = "localhost";  
    $user = "root"; 
    $email = '';	
    $password = '';  
    $db_name = "vp";  
      
    $con = mysqli_connect($host, $user, $email, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  