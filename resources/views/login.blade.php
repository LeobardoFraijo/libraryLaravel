<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/login/login.css')}}">
    <link rel="stylesheet" href="
    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Home Page</title>
</head>
<body>
    <header class="login-header">
        <div class="login-header-content">
            <ul class="login-list_content">
                <li>
                    <a href="#">Iniciar sesión</a>                
                </li>
                <li>
                    <a href="#">Crear usuario</a>
                </li>                
            </ul>
        </div>
    </header>
    <div class="content">
        <div class="login-card">
            <form action="">
                <label for="" id="user">Usuario</label>
                <input type="text" class="input">
                <br>
                <label for="" id="password">Contraseña</label>
                <input type="password" class="input">
                <br>
                <input type="submit" class="login-button"value="Ingresar">
            </form>
        </div>
    </div>
</body>
</html>