<?php

    include 'connection_be.php';

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $users_name = $_POST['users_name'];
    $users_password = $_POST['users_password'];

    $query = "INSERT INTO users(full_name, email, users_name, users_password)
              VALUES('$full_name', '$email', '$users_name', '$users_password')";
    
//Not duplicate emails
    $check_email = mysqli_query($connection, "SELECT * FROM users WHERE email='$email' " );

    if(mysqli_num_rows($check_email) > 0){
        echo '
            <script>
                alert("Este correo ya fue registrado");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

//Not duplicate user names
$check_usersName = mysqli_query($connection, "SELECT * FROM users WHERE users_name='$users_name' " );

if(mysqli_num_rows($check_usersName) > 0){
    echo '
        <script>
            alert("Este nombre de usuario no está disponible");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

//Did registration complete?
    $ejecutar = mysqli_query($connection, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente")
                window.location = "../index.php"
            </script>
        ';
    }else{
        echo '
        <script>
                alert("Intentelo nuevamente, el usuario no ha sido almacenado")
                window.location = "../index.php"
            </script>
        ';
    }

    mysqli_close($connection);
?>
