<?php

$conn = mysqli_connect("localhost", "root", "", "blogon");

//if connection is wrong

if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

if(isset($_POST["submit"])) {
$name =  $_POST['name'];
$mobile =  $_POST['mobile'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$sql = "INSERT INTO feedback  VALUES ('$name','$mobile','$email','$msg')";

if(mysqli_query($conn, $sql)){
    //echo '<script>alert("Welcome to Geeks for Geeks")</script>';
   // echo '<script> message => alert("Check your gmail spam") </script>';
   header("Location: index.html");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        .mysqli_error($conn);
}
}
mysqli_close($conn);
 
?>