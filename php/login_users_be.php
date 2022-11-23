<?php

include 'connection_be.php';

$email = $_POST['email'];
$users_password = $_POST['users_password'];

$validate_login = mysqli_query($connection, "SELECT * FROM users WHERE email='$email' and users_password='$users_password'");

?>