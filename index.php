<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
<?php 

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="icon" href="IMG/log_logout_door_1563.png">
    <title>SecurityDoor</title>
</head>
<body>
    <div class="login">
        <h1>Bienvenido</h1>
        <form class="login-form" method="POST" action="conexion/login_admin.php">
            <div class="alert"> <?php echo isset($alert)? $alert: '';?> </div>
            <input type="text" name="u" placeholder="Username" required="required" />
            <input type="password" name="p" placeholder="Password" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Ingresar.</button>
        </form>
    </div>
</body>
</html>