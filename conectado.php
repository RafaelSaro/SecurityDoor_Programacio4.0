<!DOCTYPE html>
<html lang="es-mx">
<head>
  <title>SecurityDoor | Conectados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/tab.css">
    <link rel="icon" href="IMG/log_logout_door_1563.png">
</head>
<body>
	<header>
	<a href="principal.php"><b>Registro</b></a>
	</header>
	<div class = "contenedor-table">
    <?php
// Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
$link = new PDO('mysql:host=localhost;dbname=proyecto', 'root', ''); // el campo vaciío es para la password. 

?>
<table ALIGN="center">
		<thead>
		<tr>
			<th>Id</th>
			<th>Usuario</th>
			<th>Fecha</th>
			
		</tr>
		</thead>
<?php foreach ($link->query('SELECT * from registro') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
	<td><?php echo $row['id'] ?></td>
    <td><?php echo $row['usuario'] ?></td>
    <td><?php echo $row['fecha'] ?></td>
 </tr>
<?php
	}
?>
</table>
</div>
</body>
</html>