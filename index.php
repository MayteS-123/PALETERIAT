<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo.PNG" type="image/x-icon">
    <link rel="icon" href="imagenes/favicon-32x32.png" sizes="32x32" type="imagenes/png">
    <link rel="icon" href="imagenes/favicon-16x16.png" sizes="16x16" type="imagenes/png">
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="css/bootstrap-4.4.1.css">
	
    <title>Bienvenido a nuestra Paletería</title>
    <style>
     
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #d408a5;
            color: #ffffff;
            text-align: center;
            padding: 1rem;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .cta-button {
            display: inline-block;
            background-color: #437b96;
            color: #ffffff;
            font-size: 1.1rem;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .cta-button:hover {
            background-color: #c2bff8;
            
           
        }
        .instagram-button {
                display: inline-block;
                background-color: #833ab4;
                color: #fff;
                font-family: Arial, sans-serif;
                text-decoration: none;
                padding: 10px 20px;
                border-radius: 5px;
            }
            .instagram-button:hover {
                background-color: #6f2cac;
            }
            .facebook-button {
    display: inline-block;
    background-color: #3b5998;
    color: #fff;
    font-family: Arial, sans-serif;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
}
.facebook-button:hover {
    background-color: #2d4373;
}
.tiktok-button {
    display: inline-block;
    background-color: #000;
    color: #fff;
    font-family: Arial, sans-serif;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
}
.tiktok-button:hover {
    background-color: #333;
}
    </style>
</head>
<body>
    <nav>
        <ul class="menu">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="PARTE2.html">Servicios</a></li>
            <li><a href="#about">Acerca de</a></li>
            <li><a href="#contact">Contacto</a></li>
			<?php
			session_start();
				if(isset($_SESSION['idus'])){
			?>
			<li><a href="#"><?php echo $_SESSION['nombre'] ?></a></li>
			<li><a href="cerrar.php">Cerrar sesion</a></li>
			<?php
					
				}else{
			?>
			<li><a href="login.html">Iniciar sesion</a></li>
			<?php
				}
			?>
        </ul>
    </nav>
<header>
        <link rel="icon" href="imagenes/logo2-removebg-preview.png" type="image/x-icon">
        <link rel="icon" href="imagenes/favicon-32x32.png" sizes="32x32" type="imagenes/png">
        <link rel="icon" href="imagenes/favicon-16x16.png" sizes="16x16" type="imagenes/png">



        <h1>Bievenido a nuestra Paletería</h1>
        <p>Descubre nuestra variedad de paletas artesanales y saborea lo mejor del helado mexicano.</p>
        <a href="PARTE2.html" class="cta-button">Ver nuestro menú</a>
       
    </header>
    <center>
        <img src="imagenes/logo2-removebg-preview.png"
        alt="" 
       title="" 
       width="500"
        height="450" />
       </center>
    
    <div class="container">
        <section id="about">

            <center>
                <h1>Acerca de Nosotros</h1>
                <p>Somos una paletería comprometida con la calidad y el sabor auténtico. Utilizamos ingredientes frescos y recetas tradicionales para ofrecerte una experiencia única.</p>
            </center>
		</section>
    <section id="contact">
            <center>
            <h2>Contáctanos</h2>
            <p>Estamos ubicados en:</p>
            <address>
                Av. Principal #6789<br>
                Colonia Centro<br>
                Ciudad, País<br>
            </address>
            <p>Puedes llamarnos al: <a href="tel:+">(+123) 456-789</a></p>
        </center>
        <center>
            <a class="instagram-button" href="https://www.instagram.com/paleteria_dulce/" target="_blank">Sígueme en Instagram</a>
            
            <a class="facebook-button" href="https://www.facebook.com/Mayte Hilario/" target="_blank">Sígueme en Facebook</a>
            <a class="tiktok-button" href="https://www.tiktok.com/@tu_nombre_de_usuario" target="_blank">Sígueme en TikTok</a>
        </center>
        </section>
    </div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>