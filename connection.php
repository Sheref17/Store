<?php

$conn = mysqli_connect('localhost', 'root', '', 'Users');
if (!$conn) {
    die('Error: ' . mysqli_connect_error());
} 




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['name']);
    $useremail = mysqli_real_escape_string($conn, $_POST['email']);
    $userpass = mysqli_real_escape_string($conn, $_POST['password']);
    

    if (empty($username) || empty($useremail) || empty($userpass)) {
        echo "Please fill in all fields";
        exit();
    }
    

    $query = "INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES (NULL, '$username', '$useremail', '$userpass');";
    if (mysqli_query($conn, $query)) {
        echo 'Inserted'; 
        header("Location: signin.php"); 
        exit();
    } else {
        echo 'Error: ' . mysqli_error($conn); 
    }
}
?>
