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
    <a href="conectado.php"><b>¿Quien entro?</b></a>
    <a href="conexion/cerrar_sesion.php"><b>Cerrar Sesion</b></a>
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