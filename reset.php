<?php
$dbhost = "sql300.epizy.com";
$dbuser = "epiz_29339594";
$dbpass = "KMF07U0PmAJ";
$dbname = "epiz_29339594_tienda";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    die("No se pudo conectar: ".mysqli_connect_erro());
} else{

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

$sql = "SELECT * FROM usuario WHERE  nom ='$nombre' AND correo ='$correo'";

$resultado = mysqli_query($conn,$sql);
$cadena = mysqli_fetch_array($resultado);

    if(!isset($cadena['id'])){
        header("Location: forgot-password.html");
    }else{
    $id = $cadena['id'];
    $nueva = randoma();
    $sql2 = "UPDATE usuario SET pass='$nueva' WHERE id='$id' ";
    if(mysqli_query($conn,$sql2)){
        echo "Tu Nueva Contraseña es: ". $nueva;
        header("Refresh: 5; URL=login.html");
    } else{
        echo "ERROR AL INTRODUCIR LOS DATOS" . mysqli_error($conn);
    }
    }
}

    function randoma(){
        $caracteres = 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz0123456789';
        $longpalabra = 12;
        for($pass = '', $n = strlen($caracteres)-1; strlen($pass) < $longpalabra ;){
            $x = rand(0, $n);
            $pass.= $caracteres[$x];
        }
        return ($pass);
    }
?>