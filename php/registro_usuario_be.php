<?php

    include 'conexion_be.php';

    $nombre_completo=$_POST['nombre_completo'];
    $correo=$_POST['correo'];
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];

    //encriptamiento de clave
    $contrasena= hash('sha512',$contrasena);

   $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
    VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    //verificar que el correo no se repita
    $verificar_correo=mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo)>0){
        echo '
       <script>
                alert("Este correo ya está registrado, intenta con otro diferente.");
                window.location = "../index.php";
            </script>';
              mysqli_close($conexion);
        exit(); // Detiene la ejecución para no insertar datos duplicados
    }



 //verificar que el nombre de usuario no se repita
$verificar_usuario=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_usuario)>0){
        echo '
       <script>
                alert("Este usuario ya está registrado, intenta con otro diferente.");
                window.location = "../index.php";
            </script>';
    mysqli_close($conexion);
        exit(); // Detiene la ejecución para no insertar datos duplicados
    }
 

$ejecutar = mysqli_query($conexion, $query);
//verificacion de usuario cargado
    if($ejecutar){
        echo'
            <script>
                alert("Usuario almacenado existosamente");
            window.location="../index.php"
            </script>
        ';
    }else{
        echo'
       <script>
        alert("intentenlo de nuevo, el usuario no ha sido registrado");
        window.location="../index.php"
     </script>
        ';
    }

    mysqli_close($conexion);
?>