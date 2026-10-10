<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: /milo1.0/login/index.php");
    exit();
}

$nombre_juego = "SELECTOR DE JUEGOS";
$usuario_actual = $_SESSION['usuario'] ?? "MAILO"; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailo - Elige tu juego</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="style-selector.css">
</head>
<body>
    <div class="pantalla-principal">
        <div class="contenido-izquierdo">
            <header class="encabezado">
                <div class="logo-mailo">
                    <span>🐶 MAILO</span>
                </div>
                <h1 class="titulo-principal">¡Elige a qué jugar!</h1>
            </header>

            <main class="cuadrante-juegos">
                <a href="Juego-de-memoria.php" class="tarjeta-juego">
                    <span class="icono-juego">🃏</span>
                    <h3>JUEGO DE MEMORIA</h3>
                    <p>Encuentra los pares</p>
                </a>
                
                <a href="#" class="tarjeta-juego bloqueado">
                    <span class="icono-juego">🎨</span>
                    <h3>COLORES</h3>
                    <p>Próximamente</p>
                </a>
            </main>

            <footer class="pie-pagina">
                <p>DESCUBRE 'RUTA DE COLORES' HOY - DISPONIBLE EN www.mailoa.com</p>
            </footer>
        </div>

        <?php include '../../sidebar.php'; ?>
    </div>
</body>
</html>