<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="icon" href="IMG/log_logout_door_1563.png">
    <title>SecurityDoor | Principal</title>
</head>
<body>
    <header>
        <style> 
     .myButton {
	box-shadow: 3px 4px 0px 0px #1564ad;
	background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	background-color:#79bbff;
	border-radius:11px;
	border:2px solid #337bc4;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	font-weight:bold;
	padding:12px 44px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.myButton:hover {
	background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	background-color:#378de5;
}
.myButton:active {
	position:relative;
	top:1px;
}

    </style>
    <a href="conectado.php" class="myButton">¿Quien entro?</a>
    <a href="conexion/cerrar_sesion.php" class="myButton" style= "float:right;">Cerrar Sesion</a>
    
    </header>
    <h3>Estas lejos de casa...</h3>
<p >¿Quieres dar accceso y no estas en casa?</p>
<p>Registra Usuarios (Solo palabra) y generales una contraseña (Solo numeros, max 5) </p>

<form method="POST" action="conexion/insertar.php" id="reservacion">
           
            <div class="contenedor">
                <h2 class="titulo">Registro</h2>
                <div class="formulario__grupo" id="grupo__usuario">
					<label for="usuario" class="formulario__label">Usuario</label>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="usuario" placeholder="Usuario" required>
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error">El usuario solo de contener letras</p>
				</div>
                <!--Grupo: contraseña-->
                <div class="formulario__grupo" id="grupo__contra">
					<label for="contra" class="formulario__label">Contraseña</label>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="contra" placeholder="Contraseña" required>
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
                    <p class="formulario__input-error">La contraseña solo de contener numeros</p>
				</div>
                <br>
                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button type="submit" class="formulario__btn">Registrar</button>
                </div>
</form>
</body>
<footer>
  <p>Author: SecurityDoor</p>
  <p><a href="info@rafa23.com">info@rafa23.com</a></p>
</footer>
</html>