<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: /milo1.0/login/index.php");
    exit();
}

$usuario_actual = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de <?php echo $usuario_actual; ?></title>

    <!-- Estilos generales y del sidebar -->
    <link rel="stylesheet" href="../../style.css">

    <!-- Estilos específicos del selector y logros -->
    <link rel="stylesheet" href="style-selector.css">
</head>
<body>

    <div class="pantalla-principal">
        
        <div class="contenido-izquierdo">
            <header class="encabezado">
                <div class="logo-mailo">
                    <span>🐶 MAILO</span>
                </div>
                <h1 class="titulo-principal">Perfil de <?php echo $usuario_actual; ?></h1>
            </header>

            <!-- Sección principal de logros -->
            <div class="seccion-trofeos" style="margin-top: 15px; width: 100%;">
                <h2 style="color: white; font-size: 1.2rem; margin-bottom: 15px; display: flex; align-items: center; gap: 8px;">
                    🏆 Trofeos y Logros
                </h2>

                <main class="cuadrante-juegos">
                    <!-- Tarjeta 1 -->
                    <div id="trofeo-flash" class="tarjeta-juego bloqueado" style="text-align: left; padding: 15px; cursor: default;">
                        <span class="icono-juego" style="font-size: 1.8rem;">⚡</span>
                        <div>
                            <h3 style="margin: 0; font-size: 1rem;">Rayo Flash</h3>
                            <p style="margin: 5px 0 0 0; font-size: 0.85rem; opacity: 0.9;">Completa el juego de memoria en menos de 1 minuto.</p>
                        </div>
                    </div>

                    <!-- Tarjeta 2 -->
                    <div id="trofeo-medio" class="tarjeta-juego bloqueado" style="text-align: left; padding: 15px; cursor: default;">
                        <span class="icono-juego" style="font-size: 1.8rem;">⚙️</span>
                        <div>
                            <h3 style="margin: 0; font-size: 1rem;">Constante y Seguro</h3>
                            <p style="margin: 5px 0 0 0; font-size: 0.85rem; opacity: 0.9;">Completa el juego de memoria en menos de 2:30 minutos.</p>
                        </div>
                    </div>

                    <!-- Tarjeta 3 -->
                    <div id="trofeo-lento" class="tarjeta-juego bloqueado" style="text-align: left; padding: 15px; cursor: default;">
                        <span class="icono-juego" style="font-size: 1.8rem;">🐢</span>
                        <div>
                            <h3 style="margin: 0; font-size: 1rem;">Sin Prisa pero Sin Pausa</h3>
                            <p style="margin: 5px 0 0 0; font-size: 0.85rem; opacity: 0.9;">Completa el juego de memoria en más de 2:30 minutos.</p>
                        </div>
                    </div>
                </main>
            </div>

            <footer class="pie-pagina">
                <p>DESCUBRE 'RUTA DE COLORES' HOY - DISPONIBLE EN www.mailoa.com</p>
            </footer>
        </div>

        <?php include '../../sidebar.php'; ?>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const trofeosObtenidos = JSON.parse(localStorage.getItem('trofeos_mailo')) || [];

            trofeosObtenidos.forEach(idTrofeo => {
                const el = document.getElementById(idTrofeo);
                if (el) {
                    el.classList.remove('bloqueado');
                    el.classList.add('desbloqueado');
                }
            });
        });
    </script>
</body>
</html>