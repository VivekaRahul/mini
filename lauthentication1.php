<?php      
    include('lconnection1.php');  
    $username = $_POST['user'];  
    $email = $_post['email'];
    $password = $_POST['pass'];  
      
      
        $username = stripcslashes($username);  
		$email    = stripcslashes($email);  
		$password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
		$email= mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from signup1 where username = '$username' AND email = '$email' AND password = '$password'";  
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> signup successful </center></h1>";  
			  mysqli_close($con);
        header('Location: dropdown.html');
        exit();
        }  s
        else{  
            echo "<h1> signup failed. Invalid username or password.</h1>";  
        }     
?>  