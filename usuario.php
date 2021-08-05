<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Tienda";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    die("No se pudo conectar: ".mysqli_connect_erro());
} else{
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if($pass1 == $pass2){
        $sql = "INSERT INTO usuario (nom, correo, pass) VALUE ('".$nombre."' , '".$correo."' , '".$pass1."')";

        if(mysqli_query($conn,$sql)){
            header("Location:login.html");
        } else{
            echo "ERROR AL INTRODUCIR LOS DATOS" . mysqli_error($conn);
        }
    } else{
        echo "Las Contraseñas No Coinciden";
    }
}
?>