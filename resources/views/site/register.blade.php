<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - ChocóEncanto</title>
    <link href="{{ url('../../../../css/components/log/sign-up.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.header')
    <form action="../../backend/saveDataForm.php" method="post" class="form-container">
        <h2 class="form-title">Únete a disfrutar</h2>
        <p class="form-description">Únete a disfrutar ingresando tu nombre, dirección de correo electrónico y contraseña para disfrutar.</p>
        
        <div class="form-group">
            <label for="Usuario">Usuario</label>
            <input type="text" name="Usuario" id="Usuario" required />
        </div>

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" placeholder="email@address.com" id="email" required />
        </div>

        <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" required />
        </div>

        <button type="submit" class="form-submit-btn">Únete a explorar</button>
    </form>
</body>
</html>
