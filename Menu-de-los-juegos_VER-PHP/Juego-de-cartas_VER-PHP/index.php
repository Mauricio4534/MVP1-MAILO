<?php
session_start();

// Validar inicio de sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: /milo1.0/login/index.php");
    exit();
}

$nombre_juego = "EL DESAFÍO DE LOS COLORES";
$usuario_actual = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailo - <?php echo $nombre_juego; ?></title>

    <!-- Estilos generales y del sidebar -->
    <link rel="stylesheet" href="../../style.css">

    <!-- Estilos locales de la pantalla del menú -->
    <link rel="stylesheet" href="style-selector.css">
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
                <div class="tarjeta-paso paso-1">
                    <span class="numero">1</span>
                    <h3>EL DESAFÍO DE LOS COLORES</h3>
                    <p>Reconoce colores</p>
                </div>
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

        <?php include '../../sidebar.php'; ?>

    </div>

</body>
</html>