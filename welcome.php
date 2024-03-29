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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,400;0,700;1,200;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Expense Tracker</title>
</head>

<body>
    <nav class="navegation">
        <h1>Hora de ahorrar</h1>
        <a href="">Home</a>
        <a href="">Income</a>
        <a href="">Gastos</a>
        <a href="php/close_session.php">Close Session</a>
    </nav>
    <main class="main_container">
        <div class="income__form">
            <form action="">
                <input type="date">
                <input type="number">
                <select name="income__categorys" id="income__categorys">
                    <option value="invalid">-- Choose an option --</option>
                    <option value="">Santa Ana</option>
                    <option value="">Candelaria</option>
                    <option value="">Polygon</option>
                    <option value="">Paciente particular</option>
                    <option value="">Otros</option>
                </select>
                <input type="submit" value="Cargar">
            </form>
        </div>
    </main>


</body>

</html>