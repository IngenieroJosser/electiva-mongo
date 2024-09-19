<link href="{{ url('../../../../css/components/home/header.css') }}" rel="stylesheet">

<header>
    <a href="{{ url('/') }}"><h4>@ChocóEncanto</h4></a>

    <!-- Botón de menú hamburguesa -->
    <div class="menu-toggle">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>

    <!-- Contenedor del menú -->
    <div class="menu-content">
        <nav>
            <a href="#">Reservas</a>
            <a href="#">Experiencias</a>
            <a href="https://wa.me/573232842193?text=Hola,%20Bienvenido%20a%20ChocóEncanto,%20en%20qué%20te%20puedo%20ayudar%3F" target="_blank" rel="noopener noreferrer">Atención al cliente</a>
        </nav>

        <div class="log-sign">
            <a href="{{ url('/login') }}" class='btn1'>Iniciar sesión</a>
            <a href="{{ url('/register') }}" class='btn2'>Únete</a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.querySelector('.menu-toggle');
        const menuContent = document.querySelector('.menu-content');

        menuToggle.addEventListener('click', function () {
            menuContent.classList.toggle('active');
            menuToggle.classList.toggle('active');
        });
    });
</script>
