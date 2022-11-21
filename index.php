<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,400;0,700;1,200;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Seguir mis gastos</title>
</head>
<body>
    
    <main>
        <div class="container">
            <div class="behind__box">
                <div class="behind__box-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__log-in">Iniciar sesión</button>
                </div>
                <div class="behind__box-register">
                    <h3>¿Aún no tiene una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__register">Registrarse</button>
                </div>
            </div>
            <!-- Login and Register forms  -->
            <div class="container__login-register">
                <!-- Login form -->
                <form action="" class="form__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico">
                    <input type="password" placeholder="Contraseña">
                    <button type="submit">Entrar</button>
                </form>
                <!-- Register form -->
                <form action="php/register_users_be.php" method="POST" class="form__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="full_name">
                    <input type="text" placeholder="Correo electrónico" name="email">
                    <input type="text" placeholder="Nombre de usuario" name="users_name">
                    <input type="password" placeholder="Contraseña" name="users_password">
                    <button type="submit">Registrarse</button>
                </form>
            </div>

        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>