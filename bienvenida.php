<?php
    session_start();

    // Validar si existe la sesión activa
    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Por favor, debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die(); 
        
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailo - <?php echo isset($nombre_juego) ? $nombre_juego : 'Panel'; ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="pantalla-principal">
        
        <div class="contenido-izquierdo">
            <header class="encabezado">
                <div class="logo-mailo">
                    <span>🐶 MAILO</span>
                </div>
                <h1 class="titulo-principal"><?php echo isset($nombre_juego) ? $nombre_juego : 'Ruta de Colores'; ?></h1>
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

      <?php include 'sidebar.php'; ?>

    </div> <!-- Fin de pantalla-principal -->

    <!-- Script para forzar la apertura del menú al cargar -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sidebar = document.querySelector(".sidebar"); // Ajusta la clase o ID de tu menú lateral si es diferente
            if (sidebar) {
                sidebar.classList.add("activo"); // O la clase que use tu CSS para mostrarlo (ej: 'open', 'show', 'abierto')
            }
        });
    </script>
</body>
</html>