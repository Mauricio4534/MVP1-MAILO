<?php
$nombre_juego = "Juego de memoria de Mailo";
$usuario_actual = "MILO"; // Se pasa automáticamente al sidebar
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailo - Juego de Memoria</title>

    <!-- Estilos generales y del sidebar (ubicados dos niveles arriba en login/) -->
    <link rel="stylesheet" href="../../style.css">

    <!-- Estilos específicos del juego de memoria (ubicados en la misma carpeta) -->
    <link rel="stylesheet" href="style-memoria.css">
</head>
<body>

    <div class="pantalla-principal">
        
        <div class="contenido-izquierdo-juego">
            
            <header class="encabezado">
                <div class="logo-mailo">
                    <span>🐶 MAILO</span>
                </div>
                <h1 class="titulo-principal">¡Encuentra los pares de Mailo!</h1>
            </header>

            <main class="zona-juego">
                <section class="game-board" id="board"></section>

            <!-- Pantalla de Finalización -->
                <div id="modal-victoria" class="modal-victoria oculto">
                    <div class="contenido-modal">
                        <h2>¡FIN DEL JUEGO! 🎉</h2>
                        <p class="texto-tiempo">Tiempo total: <strong id="tiempo-final">00:00</strong></p>
                        <div class="contenedor-titulo">
                            <span>Tu rango obtenido:</span>
                            <h3 id="rango-titulo">-</h3>
                        </div>
                        <button onclick="location.reload()" class="btn btn-reiniciar">Jugar de nuevo 🔄</button>
                    </div>
                </div>
            </main>

            <footer class="pie-pagina">
                <p>DESCUBRE 'RUTA DE COLORES' HOY - DISPONIBLE EN www.mailoa.com</p>
            </footer>
        </div>

        <?php include '../../sidebar.php'; ?>

    </div>

    <!-- Contenedor para notificaciones estilo Steam -->
    <div id="toast-container" class="toast-container"></div>

    <script src="script-memoria.js"></script>
</body>
</html>