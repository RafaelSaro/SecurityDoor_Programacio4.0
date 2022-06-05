<?php
$alert='';

if(!empty($_POST)){
    if(empty($_POST['u']) || empty($_POST['p'])){
    echo " <script> alert('No pueden exisitr campos vacios');
    location.href = '../index.php';
     </script>";
    }else{
include 'conexion.php';
$admin= $_POST["u"];
$pass= $_POST["p"];
$loginAdm= mysqli_query($conexion, "SELECT * FROM admin WHERE nombre= '$admin' AND pass='$pass'");
$resultAdm= mysqli_num_rows($loginAdm);

if($resultAdm > 0){
$dato = mysqli_fetch_array($loginAdm);
 session_start(); //iniciamos una sesion
 $_SESSION['active'] = true;
 $_SESSION['user'] = $dato['admin'];

 echo " <script> alert ('INICIO DE SESION EXITOSO'); 
 location.href = '../principal.php';
 </script>";
}else{
    echo " <script> alert('ERROR USUARIO U CONTRASEÑA INCORRECTOS');
    location.href = '../index.php';
     </script>";
}
}
}

?>