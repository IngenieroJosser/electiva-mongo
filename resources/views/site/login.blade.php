<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar - ChocóEncanto</title>
    <link href="{{ url('../../../../css/components/log/sign-up.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.header')
    <form action="" method="post" class="form-container">
        <h2 class="form-title">Inicia sesión para disfrutar</h2>
        <p class="form-description">Bienvenido a disfrutar, ingrese dirección de correo electrónico y contraseña para seguir disfrutando.</p>

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" placeholder="email@address.com" id="email" required />
        </div>

        <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" required />
        </div>

        <button type="submit" class="form-submit-btn">Ingresa</button>
    </form>
</body>
</html>
