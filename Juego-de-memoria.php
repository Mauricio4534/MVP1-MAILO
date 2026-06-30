<?php
$nombre_juego = "Mailo Memory Game";
$usuario_actual = "MILO"; // Se pasa automáticamente al sidebar
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombre_juego; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-memoria.css">

    <style>
        /* Regla de oro: Para que un hijo tenga height: 100%, sus padres deben tenerlo */
        html, body {
            height:100%;
            margin: 0;
            padding: 0;
            overflow: hidden; /* Evita scrolls innecesarios si el layout es fijo */
        }

        /* Forzamos a la pantalla contenedora a ocupar todo el alto de la ventana */
        .pantalla-principal {
            height: 100%;
            display: flex; /* Asumiendo que usás flexbox para el contenido y el sidebar */
            box-sizing: border-box;
        }

        /* Hacemos que la zona del juego se estire para ocupar todo el alto disponible */
        .contenido-izquierdo-juego {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Distribuye el header, juego y footer de forma limpia */
            box-sizing: border-box;
            flex: 1; /* Ocupa el espacio restante al lado del sidebar */
        }
        #board {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 4 columnas */
    grid-template-rows: repeat(3, 1fr);    /* 3 filas */
    gap: 15px;                             /* Separación entre las cartas */
}
    </style>
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
            </main>

            <footer class="pie-pagina">
                <p>DESCUBRE 'RUTA DE COLORES' HOY - DISPONIBLE EN www.mailoa.com</p>
            </footer>
        </div>

        <?php include 'sidebar.php'; ?>

    </div>

    <script src="script-memoria.js"></script>
</body>
</html>