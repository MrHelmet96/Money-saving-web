<?php

include 'connection_be.php';

$email = $_POST['email'];
$users_password = $_POST['users_password'];

$validate_login = mysqli_query($connection, "SELECT * FROM users WHERE email='$email' and users_password='$users_password'");

if(mysqli_num_rows($validate_login) > 0){
    header("location: ../welcome.php");
    exit;
}else{
    echo '
        <script>
            alert("Este usuario no existe, verifique los datos introducidos");
            window.location = "../index.php";
        <script>
    ';
    exit;
}

?>