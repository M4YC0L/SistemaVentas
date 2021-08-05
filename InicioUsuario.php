<?php
$dbhost = "sql300.epizy.com";
$dbuser = "epiz_29339594";
$dbpass = "KMF07U0PmAJ";
$dbname = "epiz_29339594_tienda";
session_start();
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    die("No se pudo conectar: ".mysqli_connect_erro());
} else{

$correo = $_POST['correo'];
$pass = $_POST['pass'];

$sql = "SELECT COUNT(*) as contar FROM usuario WHERE correo ='$correo' AND pass ='$pass'";

$resultado = mysqli_query($conn,$sql);
$cadena = mysqli_fetch_array($resultado);

if($cadena['contar'] > 0){
    $_SESSION['correo'] = $correo;
    header("Location: principal.php");
} else{
//Datos Incorrectos
header("Location: login.html");
}
}
?>