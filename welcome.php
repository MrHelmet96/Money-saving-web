<?php

session_start();

if (!isset($_SESSION['users_name'])) {
    echo '
        <script>
            alert("Por favor, debes iniciar sesión");
            window.location = "index.php";
        </script>
    ';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
</head>

<body>
    <nav class="navegation">
        <a href="">Home</a>
        <a href="">Income</a>
        <a href="">Gastos</a>
        <a href=""></a>
    </nav>
    <main class="main_container"></main>
    <h1>Hora de ahorrar</h1>
    <a href="php/close_session.php">Close Session</a>
</body>

</html>