<?php 
    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'");

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo;
        header("Location: /milo1.0/login/Menu-de-los-juegos_VER-PHP/Juego-de-cartas_VER-PHP/index.php");
        exit();
    } else {
        echo '
            <script>
                alert("Usuario inexistente, por favor verifique los datos");
                window.location = "/milo1.0/login/index.php";
            </script>
        ';
        exit();
    }
?>