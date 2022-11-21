<?php

    include 'connection_be.php';

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(full_name, email, user_name, password)
              VALUES('$full_name', '$email', '$user_name', '$password')";

    $run = mysqli_query($connection, $query);

    if($run){
        echo '
            <script>
                alert{"Usuario almacenado exitosamente"}
                window.location = "../index.php"
            </script>
        ';
    }else{
        echo '
        <script>
                alert{"Intentelo nuevamente, el usuario no ha sido almacenado"}
                window.location = "../index.php"
            </script>
        ';
    }

    mysqli_close($connection);
?>
