<?php
<<<<<<< HEAD
    session_start();

    if(isset($_SESSION['usuario'])){
        header("Location: /milo1.0/login/Menu-de-los-juegos_VER-PHP/Juego-de-cartas_VER-PHP/index.php");
        exit();
    }
=======
$nombre_juego = "Juegos disponibles:";
$usuario_actual = "MILO"; // Esta variable la va a leer el sidebar automáticamente
>>>>>>> 2a7c20547916e3347d2d94d6a253478eaf8ca90f
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>login y registro-militos</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera__login">
                    <h3>¿Ya tienes cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-secion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo electrónico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo electrónico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
=======
    <title>Mailo - <?php echo $nombre_juego; ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
        
        .enlace-paso {
            text-decoration: none;
            color: inherit;
            display: block;
        }
    </style>
</head>
<body>

    <div class="pantalla-principal">
        
        <div class="contenido-izquierdo">
            <header class="encabezado">
                <div class="logo-mailo">
                    <span>🐶 MAILO</span>
                </div>
                <h1 class="titulo-principal"><?php echo $nombre_juego; ?></h1>
            </header>

            <main class="cuadrante-pasos">
                
                <a href="juego-de-memoria.php" class="enlace-paso">
                    <div class="tarjeta-paso paso-1">
                        <span class="numero">1</span>
                        <h3>BUSCAR LOS IGUALES</h3>
                        <p>Encuentra las parejas</p>
                    </div>
                </a>

                <div class="tarjeta-paso paso-2">
                    <span class="numero">2</span>
                    <h3>JUEGO LIMPIO Y LINEAL</h3>
                    <p>Arrastra y soltar</p>
                </div>
                <div class="tarjeta-paso paso-3">
                    <span class="numero">3</span>
                    <h3>REGLAS: ARRASTRE Y SOLTAR SIN MIEDO</h3>
                    <p>Reglas claras sin miedo a equivocarse</p>
                </div>
                <div class="tarjeta-paso paso-4">
                    <span class="numero">4</span>
                    <h3>RESULTADO - CONFIANZA Y SONRISAS</h3>
                    <p>Resultado confianza y sonrisas</p>
                </div>
            </main>

            <footer class="pie-pagina">
                <p>DESCUBRE 'RUTA DE COLORES' HOY - DISPONIBLE EN www.mailoa.com</p>
            </footer>
        </div>

        <?php include 'sidebar.php'; ?>

    </div>

>>>>>>> 2a7c20547916e3347d2d94d6a253478eaf8ca90f
</body>
</html>