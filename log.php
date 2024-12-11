<?php

$conn = mysqli_connect('localhost', 'root', '', 'Users');
if (!$conn) {
    die('Error: ' . mysqli_connect_error());
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $username = mysqli_real_escape_string($conn, $_POST['name']);
    $userpass = mysqli_real_escape_string($conn, $_POST['password']);
    

    $query = "SELECT * FROM `user` WHERE `name` = '$username' AND `password` = '$userpass';";
    $result = mysqli_query($conn, $query);


    if (mysqli_num_rows($result) > 0) {

        

        header("Location: home.php");
        exit(); 
    } else {
     
      echo 'Invaild username or password';

    }
} else {
    die('Error: ' . mysqli_connect_error());

}

?>
