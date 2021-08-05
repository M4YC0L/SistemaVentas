<?php
$dbhost = "sql300.epizy.com";
$dbuser = "epiz_29339594";
$dbpass = "KMF07U0PmAJ";
$dbname = "epiz_29339594_tienda";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$er = $_GET['er'];


$sql="DELETE FROM producto WHERE id='$er' ";

if(mysqli_query($conn,$sql)){
    header("Location:principal.php");
}else {
    echo "ERROR AL BORRAR EL DATO: ".mysqli_error($conn);
}

?>