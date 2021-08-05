<?php
$dbhost = "sql300.epizy.com";
$dbuser = "epiz_29339594";
$dbpass = "KMF07U0PmAJ";
$dbname = "epiz_29339594_tienda";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    die("No se pudo conectar: ".mysqli_connect_erro());
} else{
    $producto = $_POST['Producto'];
    $descripcion = $_POST['Descrpción'];
    $precio = $_POST['Precio'];
    $cantidad = $_POST['Cantidad'];

    $sql = "INSERT INTO producto (nom, descrip, preventa, cantidad) VALUE ('".$producto."' , '".$descripcion."' , '".$precio."' , '".$cantidad."')";

    if(mysqli_query($conn,$sql)){
            header("Location:principal.php");
    } else{
        echo "ERROR AL INTRODUCIR LOS DATOS" . mysqli_error($conn);
    }
}
?>