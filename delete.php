<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Tienda";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$er = $_GET['er'];


$sql="DELETE FROM producto WHERE id='$er' ";

if(mysqli_query($conn,$sql)){
    header("Location:principal.php");
}else {
    echo "ERROR AL BORRAR EL DATO: ".mysqli_error($conn);
}

?>