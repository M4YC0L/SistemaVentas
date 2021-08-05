<?php
$dbhost = "sql300.epizy.com";
$dbuser = "epiz_29339594";
$dbpass = "KMF07U0PmAJ";
$dbname = "epiz_29339594_tienda";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$er = $_GET['er'];

$nom = $_POST['nomproducto'];
$descrip = $_POST['desproducto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$sql="UPDATE producto SET nom='$nom' , descrip='$descrip' , preventa='$precio' , cantidad='$cantidad' WHERE id='$er' ";

if(mysqli_query($conn,$sql)){
    header("Location:principal.php");
}else {
    echo "ERROR AL ACTUALIZAR LOS DATOS: ".mysqli_error($conn);
}

?>