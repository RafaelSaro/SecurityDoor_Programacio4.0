<?php
include 'conexion.php';

$usuario=$_POST['usuario'];
$contra=$_POST['contra'];

$fecha=date("Y-m-d H:i:s");
$resIns=mysqli_query($conexion, ("INSERT INTO usuarios(usuario, contra) VALUES ('$usuario','$contra')"));
$resIns=mysqli_query($conexion, ("INSERT INTO registro (usuario, fecha) VALUES ('$usuario','$fecha')"));

if($resIns){
  echo " <script> alert ('Datos enviados exitosamente, apartir de este momento usted cuenta con 5 minutos para ingresar'); 
  location.href = '../principal.php';
    </script>";
  }else{
      echo " <script> alert('Error al enviar los datos');
      location.href = '../principal.php';
       </script>";
  }

?>