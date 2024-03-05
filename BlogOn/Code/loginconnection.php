<?php
 
 $host = "localhost";  
 $user = "root";  
 $password = '';  
 $db_name = "blogon";  
   
 $con = mysqli_connect($host, $user, $password, $db_name);  
 if(mysqli_connect_errno()) {  
     die("Failed to connect with MySQL: ". mysqli_connect_error());  
 } 

 $username = $_POST['username'];  
 $paswd = $_POST['paswd'];  
   
     //to prevent from mysqli injection  
     $username = stripcslashes($username);  
     $paswd = stripcslashes($paswd);  
     $username = mysqli_real_escape_string($con, $username);  
     $paswd = mysqli_real_escape_string($con, $paswd);  
   
     $sql = "select *from signup where username = '$username' and password = '$paswd'";  
     $result = mysqli_query($con, $sql);  
     //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
     $count = mysqli_num_rows($result);  
       
     if($count == 1){  
         echo "<h1><center> Login successful </center></h1>";  
     }  
     else{  
         echo "<h1> Login failed. Invalid username or password.</h1>";  
     } 
?>