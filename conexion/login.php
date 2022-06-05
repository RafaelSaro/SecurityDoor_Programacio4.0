<?php
include 'conexion.php';
$admin= $_POST["u"];
$pass= $_POST["p"];
$loginAdm= mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario= '$admin' AND contra='$pass'");
$resultAdm= mysqli_num_rows($loginAdm);

if($resultAdm > 0){
    echo "si";
}else{
    echo "no";
}

?>