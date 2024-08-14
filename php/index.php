<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shein</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <<div class="header">
    <div class="menu">
        <div class="logo">
            LOGO
        </div>
        <div class="navbar">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Servicio</a></li>
                <li><a href="#">Contactos</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="header-content">
    <div class="header-txt">
                <h1>Compra ropa en Shein</h1>
                <p>
                    El diseño de Shein es pulcro y atractivo. Cuenta con un menú superior en el que se puede 
                    definir la búsqueda en diferentes categorías: novedades, exclusivo, promociones, ropa, 
                    tallas grandes, traje de baño, accesorios, tarjetas de regalo, rebajas y explora, donde
                     podrás conocer varias sugerencias de moda.
                </p>
                <a href="#" class="btn-1">Información</a>
            </div>
            <div class="header-img">
                <img src="Images/mmm.png" alt="">
            </div>
        </div>
    </header>

    <section class="about container">
        <div class="about-img">
            <img src="Images/file (2).png" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                También podrás encontrar una descripción más profunda del artículo.
                 Con la compra de cada uno de ellos se te ofrecen
                 “puntos Shein” para futuros descuentos. Podrás ver la prenda en varias 
                 fotografías que muestran cada detalle, pero muy importante, también la valoración 
                 y fotografías de otros clientes que lo han adquirido.
            </p>
            <br>
            <p>
                Shein ha implementado estratégicamente tiendas efímeras, conocidas como Pop Ups,
                 para ofrecer a sus fieles seguidores una experiencia única. Este concepto, que
                  se originó en Londres hace aproximadamente dos décadas, ha sido adoptado por 
                  la marca china en varias partes del mundo, incluyendo España.
            </p>
        </div>
    </section>

    <main class="servicio">
        <h2>Servicio</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Uso</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>Ropa</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>Lo mejor</h3>
            </div>
        </div>
    </main>

    <section class="formulario container">
    <form method="post" autocomplete="off">
        <h2>Agenda consulta</h2>
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre y Apellido" />
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="tel" name="phone" placeholder="Telefono Celular" />
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="input-container">
                <input type="email" name="email" placeholder="Correo" />
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-container">
                <textarea name="message" placeholder="Detalles de la consulta"></textarea>
            </div>
            <input type="submit" name="send" class="btn" onClick="myFunction()" />
        </div>
    </form>
</section>


<footer class="footer">
    <div class="footer-content container">
        <div class="link">
            <a href="#" class="logo">logo</a>
        </div>
        <div class="link">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
    </div>
</footer>

<?php
    include("send.php");
?>

<script>
    function myFunction() {
        window.location.href="http://localhost/pagina";
    }
</script>



